<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Following extends MX_Controller {
	
	public function index(){
		$this->get_data();
	}

	public function get_data(){
		$this->load->model('mdl_following');
		$data['query']=$this->mdl_following->data();
		$this->load->view('following',$data);

	}

	public function auto(){
		$this->load->model('mdl_following');
		$id=$this->uri->segment(3);
		$data['query']=$this->mdl_following->get_info($id);
		$this->load->view('product_page',$data);
	}

	public function about(){
		$this->load->view('about_us');

	}

	public function login(){
		echo moduleS::run('login');
	}
}
