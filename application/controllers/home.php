<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function init()
	{
		$data['all_categories'] = $this->category->get();
		$data['all_sub'] = $this->category->getSubCategories(1);
		$data['total_sub'] = $this->category->getAllSub();
		$data['banner'] = $this->banner->getByPage('home');

		$egypt_sub = array();
		$egypt_sub_destination = array();
		$egypt_sub_interest = array();
		$internaitonal_sub = array();
		$internaitonal_sub_destination = array();
		$internaitonal_sub_interest = array();

		foreach ($data['total_sub'] as $sub ) {
			$category_id = $sub->category_id;
			if($category_id == 1){
				$egypt_sub[] = $sub->name;
				if($sub->type == 1)
					$egypt_sub_destination[] = $sub->name;
				else
					$egypt_sub_interest[] = $sub->name;
			}
			else{
				$internaitonal_sub[]= $sub->name;
				if($sub->type == 1)
					$internaitonal_sub_destination[] = $sub->name;
				else
					$internaitonal_sub_interest[] = $sub->name;
			}
		}

		$data['all_categories'][0]->subs = $egypt_sub;
		$data['all_categories'][0]->destination = $egypt_sub_destination;
		$data['all_categories'][0]->interest = $egypt_sub_interest;
		$data['all_categories'][1]->subs = $internaitonal_sub;
		$data['all_categories'][1]->destination = $internaitonal_sub_destination;
		$data['all_categories'][1]->interest = $internaitonal_sub_interest;
		
		//printme($data);
		//exit();

		return $data;			
	}


	public function index()
	{	
		$data = $this->init();
		$data['banner'] = $this->banner->getByPage('home');
		$data['featured'] = $this->package->getFeatured();
		foreach ($data['featured'] as $feature) {
			$feature->package = $this->package->getByID($feature->package_id);
			$feature->images = $this->category->getPackageImages($feature->package_id);
		}

		 // printme($data);
		 // exit();

		$this->load->view('home_travel',$data);
	}




	public function subcategory()
	{
		$data = $this->init();

		$name = $this->uri->uri_string;
		$name = explode('subcategory/', $name);
		$name = urldecode($name[1]);

		$newname = explode('/',$name);
		$category_id = $newname[1];
		$name = $newname[0];
		$data['sub_category'] = $this->category->getSubByNameAndID($name,$category_id);
		$data['packages'] = $this->category->getSubPackages($data['sub_category']->id);
		if(is_array($data['packages'])){
			foreach ($data['packages'] as $package) {
				$package->images = $this->category->getPackageImages($package->id);
			}
		}

		$this->load->view('subcategory_travel',$data);

		// printme($data);
		// exit();

	}


	public function category()
	{
		$data = $this->init();

		$name = $this->uri->uri_string;
		$name = explode('category/', $name);
		$name = urldecode($name[1]);
		$data['category'] = $this->category->getByName($name);
		if($data['category']->id != 3){
			$data['sub'] = $this->category->getSubCategories($data['category']->id);
			if(is_array($data['sub'])){
				foreach ($data['sub'] as $sub) {
					$tmp = $this->category->getSubPackages($sub->id);
					if(is_array($tmp)){
						foreach ($tmp as $package) {
							$package->images = $this->category->getPackageImages($package->id);
							$data['packages'][] = $package;
						}
					}
				}
				
			}
		}else{
			$data['packages'] = $this->category->getSubPackages(-1);
			if(is_array($data['packages'])){
				foreach ($data['packages'] as $package) {
					$package->images = $this->category->getPackageImages($package->id);
				}
			}
		}
		$this->load->view('category_travel',$data);
	}




	public function flights()
	{
		$data = $this->init();

		$data['banner'] = $this->banner->getByPage('holidays');
		$this->load->view('flights',$data);
	}

	public function hotels()
	{
		$data = $this->init();

		$data['banner'] = $this->banner->getByPage('holidays');
		$this->load->view('hotels',$data);
	}

	public function cars()
	{
		$data = $this->init();

		$data['banner'] = $this->banner->getByPage('holidays');
		$this->load->view('cars',$data);
	}

	public function holidays()
	{
		$data = $this->init();

		$data['banner'] = $this->banner->getByPage('holidays');

		$this->load->view('holidays',$data);
	}

	public function contact()
	{
		$data = $this->init();

		$data['banner'] = $this->banner->getByPage('holidays');
		$this->load->view('contact-us',$data);
	}

	public function aboutus()
	{
		$data = $this->init();

		$data['banner'] = $this->banner->getByPage('holidays');

		$this->load->view('about-us',$data);
	}

	public function golden()
	{
		//$data = $this->init();

		//$data['banner'] = $this->banner->getByPage('holidays');

		$this->load->view('golden');
	}


	public function planyourvacation()
	{
		$data = $this->init();

		$data['banner'] = $this->banner->getByPage('holidays');

		$this->load->view('planyourvacation',$data);
	}

	public function sub($id)
	{
		$data = $this->init();

		$data['banner'] = $this->banner->getByPage('holidays');

		$this->load->model('category');
		$data['category'] = $this->category->getByID($id);
		$data['categories'] = $this->category->get();
		if($id != 3){
			$data['sub'] = $this->category->getSubCategories($id);
			$data['packages']=array();
			foreach ($data['sub'] as $sub) {
				$packages = $this->category->getSubPackages($sub->id);
				if(is_array($packages)){
					$sub->packages = $packages;
					foreach ($packages as $package) {
						$package->images = $this->category->getPackageImages($package->id);
					  $data['packages'][] = $package;
					}

				}

			}
		}else{
				$packages = $this->category->getSubPackages(-1);
				if(is_array($packages)){
					foreach ($packages as $package) {
						$package->images = $this->category->getPackageImages($package->id);
					  $data['packages'][] = $package;
					}

				}
		}
		
		  // printme($data);exit();
		$this->load->view('category',$data);
	}



	public function package()
	{
		$data = $this->init();


		$uri = $this->uri->uri_string;
		$uri = explode('package/', $uri);
		$name = urldecode($uri[1]);



		$data['package'] = $this->package->getByName($name);
		$data['categories'] = $this->category->get();


		if($data['package']->sub_category == -1){
			$data['category'] = $this->category->getByID(3);
		}else{
			$category_id = $this->category->getCategoryBySub($data['package']->sub_category)->category_id;
			$data['category'] = $this->category->getByID($category_id);
		}
		


		$data['package']->images = $this->category->getPackageImages($data['package']->id);
		
		$this->load->view('package_travel',$data);
	}




	// public function init()
	// {	
	// 	$data = array();
		
	// 	if(isset($this->session->userdata['id'])){
	// 		$this->load->model('user');
	// 		$data['loggedIn'] = true;
	// 		$data['user'] = $this->user->getUserByUsername($this->session->userdata['username']);
	// 		if ($data['user']->is_valid == 1)
	// 		{
	// 			$data['is_valid'] = $data['user']->is_valid;
	// 		}
	// 		// $this->load->model('service');
	// 		if ($this->user->is_subscribed($data['user']->id))
	// 		{
	// 			$data['is_subscribed'] = true;
	// 		}
	// 		else{
	// 			$data['is_subscribed'] = false;
	// 		}
	// 	}


	// 	$tmp = $this->session->flashdata('loginError');

	// 	if($tmp){
	// 		$data['loginError'] = $this->session->flashdata('loginError');
	// 		$data['login_username'] = $this->session->flashdata('login_username');
	// 		$data['loginErrorType'] = $this->session->flashdata('loginErrorType');
	// 	}

		
	// 	$uri = $this->uri->uri_string;
		
	// 	return $data;
		
	// }

	

	
}