<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_page extends MX_Controller {
	
	public function index(){
		$this->get_data();
	}

	public function get_data(){
		$this->load->model('mdl_profile_page');
		$data['query']=$this->mdl_profile_page->data();
		$this->load->view('main_page',$data);

	}

	public function auto(){
		$this->load->model('mdl_profile_page');
		$id=$this->uri->segment(3);
		$data['query']=$this->mdl_profile_page->get_info($id);
		$this->load->view('product_page',$data);
	}

	public function about(){
		$this->load->view('about_us');

	}

	public function login(){
		echo moduleS::run('login');
	}
}
