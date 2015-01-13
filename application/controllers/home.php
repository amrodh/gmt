<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{	

		$data['banner'] = $this->banner->getByPage('home');

		$this->load->view('home',$data);
	}

	public function flights()
	{
		$data['banner'] = $this->banner->getByPage('holidays');
		$this->load->view('flights',$data);
	}

	public function hotels()
	{
		$data['banner'] = $this->banner->getByPage('holidays');
		$this->load->view('hotels',$data);
	}

	public function cars()
	{
		$data['banner'] = $this->banner->getByPage('holidays');
		$this->load->view('cars',$data);
	}

	public function holidays()
	{
		$data['banner'] = $this->banner->getByPage('holidays');

		$this->load->view('holidays',$data);
	}

	public function contact()
	{
		$data['banner'] = $this->banner->getByPage('holidays');
		$this->load->view('contact-us',$data);
	}

	public function sub($id)
	{
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
		$data['banner'] = $this->banner->getByPage('holidays');

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
		
		$this->load->view('package',$data);
	}




	public function init()
	{	
		$data = array();
		
		if(isset($this->session->userdata['id'])){
			$this->load->model('user');
			$data['loggedIn'] = true;
			$data['user'] = $this->user->getUserByUsername($this->session->userdata['username']);
			if ($data['user']->is_valid == 1)
			{
				$data['is_valid'] = $data['user']->is_valid;
			}
			// $this->load->model('service');
			if ($this->user->is_subscribed($data['user']->id))
			{
				$data['is_subscribed'] = true;
			}
			else{
				$data['is_subscribed'] = false;
			}
		}


		$tmp = $this->session->flashdata('loginError');

		if($tmp){
			$data['loginError'] = $this->session->flashdata('loginError');
			$data['login_username'] = $this->session->flashdata('login_username');
			$data['loginErrorType'] = $this->session->flashdata('loginErrorType');
		}

		
		$uri = $this->uri->uri_string;
		
		return $data;
		
	}

	

	
}