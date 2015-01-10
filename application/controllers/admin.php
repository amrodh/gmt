<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		$data['error'] = 0;
		if($this->session->flashdata('login')){
			$login = $this->session->flashdata('login');
			$login = $login['login'];
			if($login == 0)
				$data['error'] = 1;
		}
		if(isset($this->session->userdata['id'])){
				
			if($this->session->userdata['id'] != 1){
				$data['error'] = 0;
			}else{
				redirect('admin/dashboard');
			}
		}

		$this->load->view('admin/home',$data);
	}

	public function authenticate()
	{
		if(!isset($_POST['username']))
			redirect('admin');

		$this->load->model('user');
		$username = $_POST['username'];
		$password = $_POST['password'];
		$user = $this->user->getRootByUsername($username);

		if($user){

			$login = $this->user->logIn($username,$password);
			if($login){
				$this->startSession($user);
				redirect('admin/dashboard');
				exit();
			}

		}

		$data['login'] = 0;
		$this->session->set_flashdata('login',$data);
		redirect('admin');

	}


	public function deletesociallink()
	{
		$this->load->model('social');
		$id = $_GET['id'];
		//printme($id); exit();
		$this->social->delete($id);
		redirect('admin/social');
	}



	public function dashboard()
	{	
		$data = $this->init();

		$data['stat'] = $this->category->getStat();


		$this->load->view('admin/dashboard',$data);
	}

	public function users()
	{
		$data = $this->init();
		$this->load->model('user');
		$data['users'] = $this->user->getAllUsers();
		$this->load->view('admin/users',$data);
	}

	public function categories()
	{
		$data = $this->init();
		$this->load->model('category');
		$data['categories'] = $this->category->get();
		$this->load->view('admin/categories',$data);
	}

	public function packages()
	{
		$data = $this->init();
		$this->load->model('package');
		$data['packages'] = $this->package->get();

		$this->load->view('admin/packages',$data);
	}


	public function banners()
	{
		$data = $this->init();
		$this->load->model('banner');
		$data['banners'] = $this->banner->get();
		$this->load->view('admin/banners',$data);
	}

	public function newBanner()
	{
		$data = $this->init();
		$this->load->model('banner');

		if(isset($_POST['submit'])){
			$target_dir = $this->config->config['upload_path'].'/banner/';
			$image = basename($_FILES['image']['tmp_name']).'_'.time();
			move_uploaded_file($_FILES['image']['tmp_name'], $target_dir.$image);
			unset($_POST['submit']);
			$_POST['image'] = $image;
			$this->banner->insert($_POST);
			redirect('admin/banners');
		}

		$this->load->view('admin/newBanner',$data);

	}

	public  function deletebanner()
	{
		$data = $this->init();
		$this->load->model('banner');

		$id = $this->uri->uri_string;
		$id = explode('deletebanner/', $id);
		$id = $id[1];

		$data['banner'] = $this->banner->getByID($id);

		if(isset($_POST['confirm'])){
			$this->banner->delete($id);
			redirect('admin/banners');
		}

		if(isset($_POST['cancel'])){
			redirect('admin/banners');
		}

		$this->load->view('admin/deletebanner',$data);
	}


	public  function editbanner()
	{
		$data = $this->init();
		$this->load->model('banner');

		$id = $this->uri->uri_string;
		$id = explode('editbanner/', $id);
		$id = $id[1];

		$data['banner'] = $this->banner->getByID($id);

		if(isset($_POST['submit'])){

			if($_FILES['image']['name'] != ''){
				$target_dir = $this->config->config['upload_path'].'/banner/';
				$image = basename($_FILES['image']['tmp_name']).'_'.time();
				move_uploaded_file($_FILES['image']['tmp_name'], $target_dir.$image);
				$_POST['image'] = $image;
			}

			unset($_POST['submit']);
			$this->banner->update($id,$_POST);
			redirect('admin/banners');
		}

		if(isset($_POST['cancel'])){
			redirect('admin/banners');
		}

		$this->load->view('admin/editbanner',$data);
	}

	public function category()
	{
		$data = $this->init();
		$this->load->model('category');

		$id = $this->uri->uri_string;
		$id = explode('categories/', $id);
		$id = $id[1];

		$data['categoryID'] = $id;
		$data['category'] = $this->category->getById($id);
		$data['sub_categories'] = $this->category->getSubCategories($id);



		if($id != 3){
			$data['sub_destinations'] = array();
			$data['sub_interests'] = array();
			if(is_array($data['sub_categories'])){
				foreach ($data['sub_categories'] as $sub) {
					if($sub->type == 1)
						$data['sub_destinations'][] = $sub;
					else
						$data['sub_interests'][] = $sub;
				}
			}
		}else{
			$data['packages_special'] = $this->package->get_3();
		}
		$this->load->view('admin/categoryprofile',$data);
	}


	public function sub()
	{
		$data = $this->init();
		$this->load->model('category');

		$id = $this->uri->uri_string;
		$id = explode('sub/', $id);
		$id = $id[1];


		$data['subID'] = $id;
		$data['sub_category'] = $this->category->getSub($id);

		// printme($data['sub_category']);
		// exit();
		$data['category'] = $this->category->getById($data['sub_category']->category_id);
		$data['packages'] = $this->category->getSubPackages($id);

		$data['sub_categories'] = $this->category->getSubCategories($id);
		$this->load->view('admin/subprofile',$data);
	}

	public function newpackage()
	{
		$data = $this->init();
		$id = $this->uri->uri_string;
		$id = explode('newpackage/', $id);
		$id = $id[1];

		$data['sub_category'] = $this->category->getSub($id);
		$data['category'] = $this->category->getById($data['sub_category']->category_id);

		
		if(isset($_POST['submit'])){
			unset($_POST['submit']);
			$_POST['sub_category'] = $data['sub_category']->id;
			$insert = $this->category->insertPackage($_POST);
			redirect('admin/package/'.$this->db->insert_id());
		}

		$this->load->view('admin/newPackage',$data);
	}

	

	public function projects()
	{
		$data = $this->init();
		$data['projects'] = $this->project->getAll();
		//printme($data);exit();
		$this->load->view('admin/projects',$data);
	}


	public function contacts()
	{
		$data = $this->init();
		$this->load->model('contact');
		$data['contacts'] = $this->contact->get();

		if(is_array($data['contacts'])){
			foreach ($data['contacts'] as $contact) {
				$user = $this->user->getUserByID($contact->user_id);
				$contact->user = $user;
			}
		}

		$this->load->view('admin/contacts',$data);
	}


	public function addContact()
	{
		$data = $this->init();
		$this->load->model('contact');
		$data['users'] = $this->user->getAllUsers();

		if(isset($_POST['cancel'])){
			redirect('admin/contacts');
		}

		if(isset($_POST['submit'])){
			unset($_POST['submit']);
			$this->contact->insert($_POST);
			redirect('admin/contacts');
		}
		// printme($data['users']);
		// exit();
		$this->load->view('admin/newcontact',$data);
	}

	public function deletecontact()
	{
		$data = $this->init();
		$this->load->model('contact');
		$data['users'] = $this->user->getAllUsers();

		$id = $this->uri->uri_string;
		$id = explode('deletecontact/', $id);
		$id = $id[1];

		$data['contact'] = $this->contact->getById($id);
		$data['contact']->user = $this->user->getUserByID($data['contact']->user_id);
		
		if(isset($_POST['cancel'])){
			redirect('admin/contacts');
		}

		if(isset($_POST['confirm'])){
			$this->contact->delete($id);
			redirect('admin/contacts');
		}

		$this->load->view('admin/deletecontact',$data);

	}


	public  function editcontact()
	{
		$data = $this->init();
		$this->load->model('contact');

		$id = $this->uri->uri_string;
		$id = explode('editcontact/', $id);
		$id = $id[1];

		$data['users'] = $this->user->getAllUsers();
		$data['contact'] = $this->contact->getByID($id);
		$data['contact']->user = $this->user->getUserByID($data['contact']->user_id);

		

		if(isset($_POST['submit'])){
			unset($_POST['submit']);
			$this->contact->update($id,$_POST);
			redirect('admin/contacts');
		}

		if(isset($_POST['cancel'])){
			redirect('admin/contacts');
		}

		$this->load->view('admin/editcontact',$data);
	}


	public function bookings()
	{
		$data = $this->init();
		$this->load->model('booking');


		$data['bookings'] = $this->booking->get();
		if(is_array($data['bookings'])){
			foreach ($data['bookings'] as $booking) {
			    $booking->user = $this->user->getUserByID($booking->user_id);
			    $booking->package = $this->package->getById($booking->package_id);
			}
		}

		$this->load->view('admin/bookings',$data);
	}

	public function booking()
	{
		$data = $this->init();
		$this->load->model('booking');

		$id = $this->uri->uri_string;
		$id = explode('booking/', $id);
		$id = $id[1];

		$data['booking'] = $this->booking->getById($id);
		$data['booking']->package = $this->package->getById($data['booking']->package_id);
		$data['booking']->user = $this->user->getUserByID($data['booking']->user_id);


		$this->load->view('admin/booking',$data);
	}


	public function addBooking()
	{
		$data = $this->init();
		$this->load->model('booking');

		$data['users'] = $this->user->getAllUsers();
		$data['packages'] = $this->package->get();

		if(isset($_POST['submit'])){
			unset($_POST['submit']);
			$this->booking->insert($_POST);
			redirect('admin/bookings/'.$this->db->insert_id());
		}

		$this->load->view('admin/newBooking',$data);
	}


	public function package()
	{
		$data = $this->init();
		$id = $this->uri->uri_string;
		$id = explode('package/', $id);
		$id = $id[1];

		$data['package'] = $this->category->getPackageByID($id);
		$data['package_images'] = $this->category->getPackageImages($id);
		
		if($data['package']->sub_category == -1){
		  $data['sub_category']='';
		  $data['category'] = $this->category->getById(3);
		}else{
		$data['sub_category'] = $this->category->getSub($data['package']->sub_category);
		  $data['category'] = $this->category->getById($data['sub_category']->category_id);
		}
		


		$this->load->view('admin/package',$data);
	}

	public function packageimages()
	{
		$data = $this->init();
		$id = $this->uri->uri_string;
		$id = explode('packageimages/', $id);
		$id = $id[1];

		$data['package'] = $this->category->getPackageByID($id);
		$data['package_images'] = $this->category->getPackageImages($id);
		$data['sub_category'] = $this->category->getSub($data['package']->sub_category);
		$data['category'] = $this->category->getById($data['sub_category']->category_id);




		if(isset($_POST['submit'])){
			
			$target_dir = $this->config->config['upload_path'].'/package/';
			$maxCount = $this->category->getMaxPackageImages()->id;
			foreach ($_FILES['userfile']['tmp_name'] as $image) {
				$params = array();
				$params['package_id'] = $id;
				$maxCount++;
				$params['image'] = basename($image).'_'.$maxCount;

				$this->category->insertPackageImage($params);
				$target_file = $target_dir . $params['image'];
				move_uploaded_file($image, $target_file);
			}
			redirect('admin/packageimages/'.$data['package']->id);
		}

		$this->load->view('admin/packageimage',$data);
	}

	public function userProfile()
	{
		$data = $this->init();

		$username = $this->uri->uri_string;
		$username = explode('users/', $username);
		$username = $username[1];
		$data['user'] = $this->user->getUserByUsername($username);


		if(isset($_POST['id'])){
			
			if(isset($_POST['confirmdelete'])){
				$this->user->deleteUser($username);
				redirect('admin/users');
			}

			if(isset($_POST['confirmedit'])){
				$userId = $data['user']->id;
				unset($_POST['id']);
				unset($_POST['confirmedit']);


				$update = $this->user->updateUser($userId,$_POST);
				$updatedUser = $this->user->getUserByID($userId);
				// $this->startSession($updateUser);
				redirect('admin/users/'.$updatedUser->username);

				
			}
			
		}


		if(isset($_POST['username'])){
			if(isset($_POST['delete'])){
				$this->load->view('admin/userdelete', $data);
				return;
			}
			if(isset($_POST['edit'])){
				$data['params'] = $this->user->getUserArray($username);
				$this->load->view('admin/useredit', $data);
				return;
			}
		}
		
		$this->load->view('admin/userprofile', $data);

	}





	public function propertyalert()
	{
		$data = $this->init();

		$alerts = $this->property->getPropertiesAlert();
		if(is_array($alerts)){
			foreach ($alerts as $alert) {
				if(!$this->checkmail($alert->user_identifier)){
					$alert->user_identifier = $this->user->getUserByID($alert->user_identifier);
				}

				$data_tmp = explode(',',$alert->property_data );
				$data_output = array();
				foreach ($data_tmp as $i) {
					$i = explode('=', $i);
					$data_output[$i[0]] = str_replace("'", "", $i[1]);
				}
				$alert->property_data = $data_output;
			}

		}
		$data['alerts'] = $alerts;
		$this->load->view('admin/propertyalert',$data);
	}


	public function newsletter()
	{	
		$data = $this->init();
		$users = $this->user->getSubscribedUsers();
		
		if(is_array($users)){
			foreach ($users as $user) {
				if(!$this->checkmail($user->user_identifier))
					$user->user_identifier = $this->user->getUserByID($user->user_identifier);
			}
		}
		
		$data['users'] = $users;
		$this->load->view('admin/newsletter', $data);
	}


	public function newsletterSend()
	{
		$data = $this->init();
		$users = $this->user->getSubscribedUsers();
		if(is_array($users)){
			foreach ($users as $user) {
				$identifier = $user->user_identifier;
				if(!$this->checkmail($identifier)){
					$tmp = $this->user->getUserByID($identifier);
					$user->user_identifier = $tmp->email;
				}
			}
		}


		$min = 0;
		$max = count($users);
		$mails = "";
		foreach ($users as $user ) {
			if($min == 0)
				$mails .= $user->user_identifier;
			else
				$mails .= ','.$user->user_identifier;

			$min++;
		}
		//$this->smtpmailer($subject,$body,$mails);
		
	}

	public function  createNewsletter()
	{
		$data = $this->init();

		$users = $this->user->getSubscribedUsers();
		
		if(is_array($users)){
			foreach ($users as $user) {
				if(!$this->checkmail($user->user_identifier))
					$user->user_identifier = $this->user->getUserByID($user->user_identifier)->email;
			}
		}

		$data['users'] = $users;

		if(isset($_POST['confirmsingle'])){
			$recievers = "";
			if(isset($_POST['checkAll'])){

				foreach ($users as $user) {
					if(!$this->checkmail($user->user_identifier)){
						$recievers.= $this->user->getUserByID($user->user_identifier)->email.',';
					}else{
						$recievers.= $user->user_identifier.',';
					}
				}
			}else{
					foreach ($_POST['singlecheck'] as $user) {
					$recievers .= $user.',';
					}
					
			}
			$this->sendSingle($_POST,$recievers);
		}elseif (isset($_POST['confirmBanner'])) {
			// printme($_POST);exit();
			$recievers = "";
			if(isset($_POST['checkAll'])){

				foreach ($users as $user) {
					if(!$this->checkmail($user->user_identifier)){
						$recievers.= $this->user->getUserByID($user->user_identifier)->email.',';
					}else{
						$recievers.= $user->user_identifier.',';
					}
				}
			}else{
					foreach ($_POST['singlecheck'] as $user) {
					$recievers .= $user.',';
					}
					
			}
			$this->sendBanner($_POST,$recievers);
		}elseif(isset($_POST['confirmProperties'])){
			// printme($_POST);exit();

			$recievers = "";
			if(isset($_POST['checkAll'])){

				foreach ($users as $user) {
					if(!$this->checkmail($user->user_identifier)){
						$recievers.= $this->user->getUserByID($user->user_identifier)->email.',';
					}else{
						$recievers.= $user->user_identifier.',';
					}
				}
			}else{
					foreach ($_POST['singlecheck'] as $user) {
					$recievers .= $user.',';
					}
					
			}
			$this->sendProperties($_POST,$recievers);
		}

		if(isset($_POST['singlepreview'])){
			// printme($_POST);exit();
			$path = $this->config->config['upload_path'];
			$this->config->set_item('upload_path',$path.'/temp');
			$fileExtension = explode('.',$_FILES['userfile']['name']);
			$_FILES['userfile']['name'] = $fileExtension[0].'_'.time().'.'.$fileExtension[1];
			$upload = uploadme($this);

			if(isset($upload['error'])){
				$data['params'] = $_POST;
				$data['error'] = $upload['error'];
				printme($upload['error']);exit();
			}else{
				$_POST['image'] = $upload['upload_data']['file_name'];
				$data['params'] = $_POST;
				$this->load->view('admin/newsletter_single', $data);
				return;
			}
		}

		if (isset($_POST['bannerspreview'])){
			$path = $this->config->config['upload_path'];
			$this->config->set_item('upload_path',$path.'/temp');

			if(isset($_FILES) && $_FILES['img']['name']['0'] != "" ){
				$images = array();
				$params = array();
				$imageNames = array();
				$params['property_id'] = $this->db->insert_id();
				$i = 0;
				foreach ($_FILES['img']['name'] as $name) {
				 	$images['image_'.$i]['name'] = $name;
				 	$images['image_'.$i]['type'] = $_FILES['img']['type'][$i];
				 	$images['image_'.$i]['size'] = $_FILES['img']['size'][$i];
				 	$images['image_'.$i]['tmp_name'] = $_FILES['img']['tmp_name'][$i];
				 	$i++;
				}
				$x = 0;
				foreach ($images as $image) {
					$fileExtension = explode('.',$image['name']);
					$_FILES['userfile']['name'] = $fileExtension[0].'_'.time().'.'.$fileExtension[1];
					$_FILES['userfile']['tmp_name'] = $image['tmp_name'];
					$_FILES['userfile']['size'] = $image['size'];
					$params['image_url'] = $_FILES['userfile']['name'];

					$upload = uploadme($this);
					if(isset($upload['error'])){
						$data['params'] = $_POST;
						// 
						$data['error'] = $upload['error'];
					}else{
						$imageNames['image_'.$x] = $_FILES['userfile']['name'] = $fileExtension[0].'_'.time().'.'.$fileExtension[1];
						$data['params'] = $_POST;
					}
					$x++;
				}
				$data['imgCount'] = $i;
				$data['images'] = $imageNames;
				$_POST['images'] = $data['images'];
				$this->load->view('admin/newsletter_banner', $data);
				return;
			}
		}

		if (isset($_POST['propertiespreview']))
		{
			$this->load->model('service');
			$path = $this->config->config['upload_path'];
			$this->config->set_item('upload_path',$path.'/temp');
			$properties = array();
			foreach ($_POST['properties'] as $key => $property) {
				$data['properties'][$key]=$this->service->getPropertyByID($property);
				$data['images'][$property] = $this->service->getPropertyImages($property, $data['properties'][$key]->UnitId);
			}
			// printme($data['images']);exit();
			$data['params'] = $_POST;
			
			$this->load->view('admin/newsletter_properties', $data);
			return;
		}

		$this->load->view('admin/createnewsletter', $data);
	}



	public function sendSingle($params,$list)
	{
		$data['params'] = $params;
		$body = $this->load->view('admin/single_template', $data, true);
		$this->smtpmailer('NewsLetter',$body,'s.nahal@enlightworld.com');
	}

	public function sendBanner($params,$list)
	{
		$data['params'] = $params;
		$body = $this->load->view('admin/banner_template', $data, true);
		$this->smtpmailer('NewsLetter',$body,'s.nahal@enlightworld.com');
	}

	public function sendProperties($params, $list)
	{
		$this->load->model('service');
		$data['params'] = $params;
		// printme($params);exit();
		foreach ($params['properties'] as $key => $property) {
			// printme($);
			$data['properties'][$key]=$this->service->getPropertyByID($property);
			$data['images'][$property] = $this->service->getPropertyImages($property, $data['properties'][$key]->UnitId);
		}
		// printme($data);exit();
		$body = $this->load->view('admin/properties_template', $data, true);
		$this->smtpmailer('New Properties',$body,'s.nahal@enlightworld.com');
	}


	public function checkpasswordchange()
	{
		$data = $this->init();
		
		$userID = $_POST['id'];
		$changePassword = $this->user->changePassword($userID,$_POST['current'],$_POST['new_1']);
		//printme($user);
	}


	public function vacancies()
	{
		$data = $this->init();
		
		$data['vacancies'] = $this->vacancy->getAllVacancies();
		$this->load->view('admin/vacancies', $data);
	}


	public function units()
	{
		$data = $this->init();
		
		$data['units'] = $this->unit->getAll();
		$this->load->view('admin/units', $data);
	}

	

	public function showVacancy()
	{
		$data = $this->init();

		$id = $this->uri->uri_string;
		$id = explode('vacancies/', $id);
		$id = $id[1];

		$data['vacancy'] = $this->vacancy->getVacancyById($id);
		$data['users'] = $this->vacancy->getUsersEnrolled($id);
		if(is_array($data['users'])){
			foreach ($data['users'] as $user) {
				if(!$this->checkmail($user->user_identifier)){
					$user->user_identifier = $this->user->getUserByID($user->user_identifier);
				}
			}
		}

		if(isset($_POST['delete'])){
			$this->load->view('admin/vacancydelete', $data);
			return;
		}

		if(isset($_POST['edit'])){
			$data['params'] = $this->vacancy->getArray($id);
			$this->load->view('admin/vacancyedit', $data);
			return;
		}

		if(isset($_POST['confirmdelete'])){
			$this->vacancy->delete($id);
			redirect('admin/vacancies');
		}

		if(isset($_POST['confirmedit'])){
			unset($_POST['confirmedit']);
			$this->vacancy->update($id,$_POST);
			redirect('admin/vacancies/'.$data['vacancy']->id);
		}

		$this->load->view('admin/vacancyprofile', $data);
	}

	public function downloadcv()
	{
		$data = $this->init();

		$name = $this->uri->uri_string;
		$name = explode('download/', $name);
		$name = $name[1];
		$path = base_url().'application/static/upload/careers/'.$name;
		header("Content-disposition: attachment; filename=".$name);
		header("Content-type: application/pdf");
		readfile($path);

	}

	public function auction()
	{	
		
		$data = $this->init();

		$data['auctions'] = $this->property->getAuctions();
		$this->load->view('admin/auction', $data);

	}


	public function courses()
	{	
		$data = $this->init();
		
		$data['courses'] = $this->course->getCourses();
		// printme($data['courses']);exit();
		$this->load->view('admin/courses', $data);

	}


	public function offices()
	{	
		$data = $this->init();
		
		$data['offices'] = $this->office->getOffices();
		$this->load->view('admin/offices', $data);

	}


	public function showProject()
	{
		$data = $this->init();

		$id = $this->uri->uri_string;
		$id = explode('projects/', $id);
		$id = $id[1];
		$id = urldecode($id);

		$data['project'] = $this->project->getByID($id);

		$data['project']->images = $this->project->get_images($data['project']->id);
		// printme($data['project']); exit();


		if(isset($_POST['delete'])){
			$this->load->view('admin/projectdelete', $data);
			return;
		}

		if(isset($_POST['edit'])){
			$data['params'] = $this->project->getByID($id);
			$this->load->view('admin/projectedit', $data);
			return;
		}

		if(isset($_POST['confirmedit_hidden']) && !isset($_POST['cancel'])){

			unset($_POST['confirmedit_hidden']);

			if(isset($_POST['is_featured']))
				$_POST['is_featured'] = 1;
			else
				$_POST['is_featured'] = 0;

			$this->project->update($data['project']->id,$_POST);
			$data['project'] = $this->project->getByID($data['project']->id);
			redirect('admin/projects/'.$data['project']->id);
		}

		if(isset($_POST['confirmdelete'])){
			$this->project->delete($data['project']->id);
			redirect('admin/projects');
		}

		// printme($data);
		// exit();
		$this->load->view('admin/projectprofile', $data);
	}

	public function showAuction()
	{
		$data = $this->init();

		$id = $this->uri->uri_string;
		$id = explode('auctions/', $id);
		$id = $id[1];

		$data['auction'] = $this->property->getAuctionById($id);


		if(isset($_POST['delete'])){
			$this->load->view('admin/auctiondelete', $data);
			return;
		}

		if(isset($_POST['edit'])){
			$data['params'] = $this->property->getAuctionByIdArray($id);
			$this->load->view('admin/auctionedit', $data);
			return;
		}

		if(isset($_POST['confirmdelete'])){
			$this->property->deleteAuction($id);
			redirect('admin/auctions');
		}

		if(isset($_POST['confirmedit'])){

			unset($_POST['confirmedit']);
			if($_FILES['userfile']['error'] != 0){
				$this->property->updateAuction($id,$_POST);
				redirect('admin/auctions/'.$data['auction']->id);
			}else{
				$path = $this->config->config['upload_path'];
				$this->config->set_item('upload_path',$path.'/auctions');

				$fileExtension = explode('.',$_FILES['userfile']['name']);
				$_FILES['userfile']['name'] = $fileExtension[0].'_'.time().'.'.$fileExtension[1];

				$upload = uploadme($this);

				if(isset($upload['error'])){

					$data['params'] = $this->property->getAuctionByIdArray($id);
					$data['error'] = $upload['error'];
					$this->load->view('admin/auctionedit', $data);
					return;
				}

				$_POST['image'] = $_FILES['userfile']['name'];
				$this->property->updateAuction($id,$_POST);
				redirect('admin/auctions/'.$data['auction']->id);
				// printme($_FILES);
				// exit();
			}
			
			
		}


		$this->load->view('admin/auctionprofile', $data);
	}


	



	







	





	function createUser()
	{	
		$data = $this->init();

		if(isset($_POST['submit'])){
			$this->load->model('user');
			$user = $this->user->getUserByUsername($_POST['username']);
			if($user){
				$data['error'] = 'Username not available';
				$data['params'] = $_POST;
			}else{
				$user = $this->user->getUserByEmail($_POST['email']);
				if($user){
					$data['error'] = 'Email not available';
					$data['params'] = $_POST;
				}else{
					if($_POST['password'] != $_POST['confirm']){
						$data['error'] = 'Password not confirmed correctly';
						$data['params'] = $_POST;
					}else{
						unset($_POST['confirm']);
						unset($_POST['submit']);
						$insert = $this->user->insertUser($_POST);
						if($insert){
							redirect('admin/users/'.$_POST['username']);
						}else{
							$data['error'] = 'Process Failed, Try again';
							$data['params'] = $_POST;
						}

					}
				}	
			}
			
			
		}

		$this->load->view('admin/newuser',$data);
	}


	function addSocialLink()
	{
		$data = $this->init();
		$this->load->model('social');

		if(isset($_POST['submit'])){
			unset($_POST['submit']);

			$insert = $this->social->insert($_POST);

			if($insert){
				$id = $this->db->insert_id();
				$logo = $_FILES['image'];
				$logoName = $logo['name'];
				//printme($logoName);

				$path = $this->config->config['upload_path'];
				$defaultPath = $path;
				$this->config->set_item('upload_path',$path.'/social_links/');
				$target_dir = $this->config->config['upload_path'];
				$target_file = $target_dir.$logoName;
				move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
				$this->social->update($id,array('image'=>$logoName));

				redirect('admin/social');
			}

			$data['params'] = $_POST;

		}

		$this->load->view('admin/newsociallink',$data);
	}


	function createProject()
	{	
		$data = $this->init();

		if(isset($_POST['submit'])){

			$proj = $this->project->getAll();
			$count = 0;
			$flag = 1;
			foreach ($proj as $project) {
				$proj_name = $this->project->getAll()[$count]->name;

				if(strcasecmp($_POST['name'],$proj_name) == 0) {
					// echo "<script>alert('Duplicate name! Please choose another.');window.location.href='';</script>";
					echo "<script>alert(JSON.stringify('Duplicate name! Please choose another.'));</script>";
					$flag = 0;
				}
				$count++; 
			}

			if(isset($_POST['is_featured']))
				$_POST['is_featured'] = 1;
			else 
				$_POST['is_featured'] = 0;

			unset($_POST['submit']);

			if($flag == 1) {
				$insert = $this->project->insert($_POST);

				if($insert){

					$project_id = $this->db->insert_id();
					$files = $_FILES['userfile'];

					$logo = $_FILES['logo'];
					$fileExtension = explode('.',$logo['name']);
					$logoName = $fileExtension[0].'_'.time().'.'.$fileExtension[1];
					

					$path = $this->config->config['upload_path'];
					// printme($path);exit();
					$defaultPath = $path;
					$this->config->set_item('upload_path',$path.'/logos/');
					$target_dir = $this->config->config['upload_path'];
					$target_file = $target_dir.$project_id.'_'.$logoName;
					move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file);
					$logoName = $project_id.'_'.$logoName;
					$this->project->update($project_id,array('logo'=>$logoName));
					//$upload = uploadme($this);

					$index=0;
					$tmpFiles=array();
					$path = $defaultPath;
					$this->config->set_item('upload_path',$path.'/projects');
					// $upload = uploadme($this);
					$inputs['project_id'] = $project_id;
					foreach ($files['name'] as $name) {
						
						$_FILES['userfile']['name'] = $name;
						$_FILES['userfile']['type'] = $files['type'][$index];
						$_FILES['userfile']['tmp_name'] = $files['tmp_name'][$index];
						$_FILES['userfile']['error'] = $files['error'][$index];
						$_FILES['userfile']['size'] = $files['size'][$index];

						$fileExtension = explode('.',$_FILES['userfile']['name']);
						$_FILES['userfile']['name'] = $fileExtension[0].'_'.$inputs['project_id'].'.'.$fileExtension[1];
						$inputs['image'] = $_FILES['userfile']['name'];
						// printme($inputs); exit();
						$this->project->insert_image($inputs);
						$upload = uploadme($this);
						$index++;
					}
					redirect('admin/projects');
				}
		}
			
			$data['params'] = $_POST;
		}

		$this->load->view('admin/newproject',$data);
	}

	function changelogo()
	{
		$data = $this->init();

		if(isset($_POST['submit'])){

			// printme($_FILES);
			// exit();
			unset($_POST['submit']);

			$logo = $_FILES['logo'];
			//printme($logo); exit();
			$fileExtension = explode('.',$logo['name'][0]);
			$logoName = $fileExtension[0].'_'.time().'.'.$fileExtension[1];
			// printme($logoName); exit();


			$current_url = $_SERVER["REQUEST_URI"];
			$project_id = explode('/',$current_url);
			$project_id = $project_id[4];
			
			$path = $this->config->config['upload_path'];
			$defaultPath = $path;
			$this->config->set_item('upload_path',$path.'/logos/');
			$target_dir = $this->config->config['upload_path'];
			$target_file = $target_dir.$project_id.'_'.$logoName;
			move_uploaded_file($_FILES["logo"]["tmp_name"][0], $target_file);  
			$logoName = $project_id.'_'.$logoName;
			$this->project->update($project_id,array('logo'=>$logoName));
			//$upload = uploadme($this);

			redirect('admin/projects/'.$project_id);
			
			$data['params'] = $_POST;
		}

		$this->load->view('admin/changelogo',$data);
	}

	function content()
	{	
		$data = $this->init();
		
		$data['slides'] = $this->content->getSliderContent();
		$this->load->view('admin/content',$data);
	}

	function social()
	{
		$data = $this->init();
		$this->load->model('social');
		$data['social_links'] = $this->social->getAll();
		if(isset($_POST['save'])){
			printme("string");
			printme($_POST); exit();
			$id = $_POST['name_id'];
			$this->social->update($data['id'],$_POST);
			redirect('admin/social');
		}

		$this->load->view('admin/social',$data);	
	}

	public function deleteContent()
	{
		$data = $this->init();

		$id = $this->uri->uri_string;
		$id = explode('deletecontent/', $id);
		$data['id'] = $id[1];

		if(isset($_POST['id'])){
			if(isset($_POST['cancel'])){
				redirect('admin/content');
			}
			
			$this->content->deleteSlide($_POST['id']);
			redirect('admin/content');

		}

		$this->load->view('admin/deletecontent',$data);
	}


	public function editContent()
	{
		$data = $this->init();

		$id = $this->uri->uri_string;
		$id = explode('editcontent/', $id);
		$data['id'] = $id[1];

		if(isset($_POST['id'])){

			if(isset($_POST['cancel'])){
				redirect('admin/content');
			}

			$tmp = $_FILES;
			$images = array("'image'","'logo'","'alt_logo'");

			foreach ($images as $image) {

				if( ($tmp['userfile']['error'][$image]) == 0){

					$path = $this->config->config['upload_path'];
					$this->config->set_item('upload_path',$path.'/slider');

					$_FILES['userfile']['name']     = $tmp['userfile']['name'][$image];
					$_FILES['userfile']['type']     = $tmp['userfile']['type'][$image];
					$_FILES['userfile']['tmp_name'] = $tmp['userfile']['tmp_name'][$image];
					$_FILES['userfile']['error']    = $tmp['userfile']['error'][$image];
					$_FILES['userfile']['size']     = $tmp['userfile']['size'][$image];
					$fileExtension = explode('.',$_FILES['userfile']['name']);

					if($image == "'image'")
					$_POST['image'] = $fileExtension[0].'_'.time().'.'.$fileExtension[1];
					if($image == "'logo'")
					$_POST['logo'] = $fileExtension[0].'_'.time().'.'.$fileExtension[1];
					if($image == "'alt_logo'")
					$_POST['alt_logo'] = $fileExtension[0].'_'.time().'.'.$fileExtension[1];

					if($image == "'image'")
					$_FILES['userfile']['name'] = $_POST['image'];
					if($image == "'logo'")
					$_FILES['userfile']['name'] = $_POST['logo'];
					if($image == "'alt_logo'")
					$_FILES['userfile']['name'] = $_POST['alt_logo'];
					
					$upload = uploadme($this);
					if(isset($upload['error'])){
						$data['error'] = 'Upload Failed, Please try again';
						$data['params'] = $_POST;
						$data['old_params'] = $this->content->getSliderByIDArray($data['id']);
						$this->load->view('admin/editcontent',$data);
						return;
					}
				}
			}

			unset($_POST['submit']);
			$this->content->updateSlide($data['id'],$_POST);
			redirect('admin/content');
		}

		$data['params'] = $this->content->getSliderByIDArray($data['id']);
		$this->load->view('admin/editcontent',$data);
	}

	public function addContent()
	{
		$data = $this->init();

		if(isset($_POST['submit'])){

			$data['params'] = $_POST;
			$activeSlides = $this->content->getActiveSliders();
			if(!$activeSlides){
				$_POST['order'] = 1;
			}else{
				$count = count($activeSlides);
				$_POST['order']  = $count+1;
			}

			if(isset($_FILES)){
				$path = $this->config->config['upload_path'];
				// printme($path);exit();
				$this->config->set_item('upload_path',$path.'/slider');
				
				$tmp = $_FILES;
				$_FILES['userfile']['name']     = $tmp['userfile']['name']["'image'"];
				$_FILES['userfile']['type']     = $tmp['userfile']['type']["'image'"];
				$_FILES['userfile']['tmp_name'] = $tmp['userfile']['tmp_name']["'image'"];
				$_FILES['userfile']['error']    = $tmp['userfile']['error']["'image'"];
				$_FILES['userfile']['size']     = $tmp['userfile']['size']["'image'"];
				$fileExtension = explode('.',$_FILES['userfile']['name']);
				$_POST['image'] = $fileExtension[0].'_'.time().'.'.$fileExtension[1];
				$_FILES['userfile']['name'] = $_POST['image'];
				
				$upload = uploadme($this);
				if(isset($upload['error'])){
					echo 'yes';
					$data['error'] = 'Upload Failed, Please try again';
					$this->load->view('admin/newcontent',$data);
					return;
				}

				// $_FILES['userfile']['name']     = $tmp['userfile']['name']["'logo'"];
				// $_FILES['userfile']['type']     = $tmp['userfile']['type']["'logo'"];
				// $_FILES['userfile']['tmp_name'] = $tmp['userfile']['tmp_name']["'logo'"];
				// $_FILES['userfile']['error']    = $tmp['userfile']['error']["'logo'"];
				// $_FILES['userfile']['size']     = $tmp['userfile']['size']["'logo'"];
				// $fileExtension = explode('.',$_FILES['userfile']['name']);
				// $_POST['logo'] = $fileExtension[0].'_'.time().'.'.$fileExtension[1];
				// $_FILES['userfile']['name'] = $_POST['logo'];

				

				// $upload = uploadme($this);
				// if(isset($upload['error'])){
				// 	echo 'yes';
				// 	$data['error'] = 'Upload Failed, Please try again';
				// 	$this->load->view('admin/newcontent',$data);
				// 	return;
				// }

				// $_FILES['userfile']['name']     = $tmp['userfile']['name']["'alt_logo'"];
				// $_FILES['userfile']['type']     = $tmp['userfile']['type']["'alt_logo'"];
				// $_FILES['userfile']['tmp_name'] = $tmp['userfile']['tmp_name']["'alt_logo'"];
				// $_FILES['userfile']['error']    = $tmp['userfile']['error']["'alt_logo'"];
				// $_FILES['userfile']['size']     = $tmp['userfile']['size']["'alt_logo'"];
				// $fileExtension = explode('.',$_FILES['userfile']['name']);
				// $_POST['alt_logo'] = $fileExtension[0].'_'.time().'.'.$fileExtension[1];
				// $_FILES['userfile']['name'] = $_POST['alt_logo'];

				

				// $upload = uploadme($this);
				// if(isset($upload['error'])){
				// 	echo 'yes';
				// 	$data['error'] = 'Upload Failed, Please try again';
				// 	$this->load->view('admin/newcontent',$data);
				// 	return;
				// }

				unset($_POST['submit']);
				$_POST['is_active'] = 1;
				//printme($_POST);exit();
				$this->content->insertSlide($_POST);
				echo "<script type='text/javascript'>alert('Slide inserted');</script>";
			}

			
		}
		$this->load->view('admin/newcontent',$data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->unset_userdata();
		redirect(base_url());
	}

	public function startSession($user)
	{
		$this->session->set_userdata($user);
	}

	

		function checkmail($email)
	{
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) 
	       return true;
	   else
	   	return false;
	    
	}






	public function init()
	{	
		$data = array();

		if(isset($this->session->userdata['id'])){
			$this->load->model('user');
			$data['loggedIn'] = true;
			$data['loggedUser'] = $this->user->getUserByUsername($this->session->userdata['username']);
			if($data['loggedUser']->id != 1)
				redirect('admin');
		}else{
			redirect('admin');
		}

		$request = $this->uri->uri_string;
		$request = explode('admin/', $request);
		$data['request'] = explode('/', $request[1]);
		$data['request'] = $data['request'][0];


		return $data;
		
	}


	
	

	

	public function addprojectimage()
	{
		$data = $this->init();

		$id = $this->uri->uri_string;
		$id = explode('addprojectimage/', $id);
		$id = $id[1];
		$id = urldecode($id);
		$project_name = $this->project->getByID($id)->name;

		if(isset($_POST['submit'])){

			unset($_POST['submit']);

				$files = $_FILES['userfile'];
				$index=0;
				$tmpFiles=array();
				$path = $this->config->config['upload_path'];
				$this->config->set_item('upload_path',$path.'/projects');

				foreach ($files['name'] as $name) {

					$_FILES['userfile']['name'] = $name;
					$_FILES['userfile']['type'] = $files['type'][$index];
					$_FILES['userfile']['tmp_name'] = $files['tmp_name'][$index];
					$_FILES['userfile']['error'] = $files['error'][$index];
					$_FILES['userfile']['size'] = $files['size'][$index];
					// printme($_FILES['userfile']); exit();

					$fileExtension = explode('.',$_FILES['userfile']['name']);
					$_FILES['userfile']['name'] = $fileExtension[0].'_'.time().'.'.$fileExtension[1];
					$inputs['image'] = $_FILES['userfile']['name'];
					$inputs['project_id'] = $id;
					$this->project->add_project_image($inputs);
					$upload = uploadme($this);
					$index++;
				}
				redirect('admin/projects/'.$id);
		 // }
			
			// $data['params'] = $_POST;
		 }

		$this->load->view('admin/addprojectimage', $data);
	}

	public function addunitimage()
	{
		$data = $this->init();

		$id = $this->uri->uri_string;
		$id = explode('addunitimage/', $id);
		$id = $id[1];
		$id = urldecode($id);
		// printme($id); exit();

		if(isset($_POST['submit'])){

			unset($_POST['submit']);

				$files = $_FILES['userfile'];
				$index=0;
				$tmpFiles=array();
				$path = $this->config->config['upload_path'];
				$this->config->set_item('upload_path',$path.'/units');

				foreach ($files['name'] as $name) {
// printme($files); exit();
					$_FILES['userfile']['name'] = $name;
					$_FILES['userfile']['type'] = $files['type'][$index];
					$_FILES['userfile']['tmp_name'] = $files['tmp_name'][$index];
					$_FILES['userfile']['error'] = $files['error'][$index];
					$_FILES['userfile']['size'] = $files['size'][$index];

					$fileExtension = explode('.',$_FILES['userfile']['name']);
					$_FILES['userfile']['name'] = $fileExtension[0].'_'.time().'.'.$fileExtension[1];
					$inputs['image'] = $_FILES['userfile']['name'];
					$inputs['unit_id'] = $id;
					// printme($inputs); exit();
					$this->unit->add_unit_image($inputs);
					$upload = uploadme($this);
					$index++;
				}
				redirect('admin/units/'.$id);
			
			// $data['params'] = $_POST;
		 }

		$this->load->view('admin/addunitimage', $data);
	}


	public function unitNameValidation()
	{
		
		$check = $this->unit->checkUnitName($_GET['value']);
		if(!$check)
			echo 'false';
		else
			echo 'true';
	}

	public function projectNameValidation()
	{
		
		$check = $this->project->checkProjectName($_GET['value']);
		if(!$check)
			echo 'false';
		else
			echo 'true';
	}

	public function deleteunitimage()
	{
		$id = $_GET['id'];
		$image = $this->unit->get_image_ByID($id);
		//printme($image); exit();
		$this->unit->delete_image($id);

		$unit_images = $this->unit->get_images($image->unit_id);

		

		$sliderHTML = '<ul class="bxslider" style="height: 200px!important;">';
		if (is_array($unit_images)) {
			foreach ($unit_images as $image) {
				$sliderHTML .= '<li><img class="slider_imgs" src="'.base_url().'application/static/upload/units/'.$image->image.'"></li>';
			}
			$sliderHTML .= '</ul>';
		}else{
			echo '<div class="alert alert-warning" role="alert">None Available</div>';
			exit();
		}

		echo $sliderHTML;
		exit();
	}
	

	public function checkPropertyAlert()
	{
		$alerts = $this->property->getPropertiesAlert();
		foreach ($alerts as $alert ) {
			$propertyData = explode(',', $alert->property_data);
			$max = count($propertyData);
			$min = 0;
			$where='';
			foreach ($propertyData as $x) {
				if($min == 0)
					$where .= $x;
				else
					$where .= ' && '.$x;

				$min++;
			}
			$checkNewProperty = $this->property->checkNewProperty($where,$alert->date_joined);
			//printme($checkNewProperty);
			// wait for the response from the service, then check the result set and send the email
		}
	}


	function smtpmailer($subject,$body,$to) { 

		 date_default_timezone_set('America/Los_Angeles');
		 $config = Array(
		  'protocol' => 'smtp',
		  'smtp_host' => 'ssl://smtp.googlemail.com',
		  'smtp_port' => 465,
		  'smtp_user' => 's.nahal@enlightworld.com', // change it to yours
		  'smtp_pass' => '01069393641', // change it to yours
		  'mailtype' => 'html',
		  'charset' => 'iso-8859-1',
		  'wordwrap' => TRUE
			);

		 

		  $this->load->library('email', $config);
		  $this->email->set_newline("\r\n");
		  $this->email->from('test@ColdWell.com'); // change it to yours
		  $this->email->to($to); // change it to yours
		  $this->email->subject($subject);
		  $this->email->message($body);


		  if($this->email->send())
			return true;
		 else
			{
			 show_error($this->email->print_debugger());
			}
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */