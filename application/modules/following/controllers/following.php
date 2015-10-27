<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Following extends MX_Controller {
	
	public function index(){
		$this->get_data();
	}

	public function get_data(){
		$this->load->model('mdl_following');
		if($this->uri->segment(3)){
			$id=$this->uri->segment(3);
		}
		else
		$id=$this->session->userdata('username');
		$data['user_pic']=$this->mdl_following->get_user_data($id);
		$data['query']=$this->mdl_following->data($id);
		$data['CI']=$this;
		$this->load->view('following',$data);

	}
	public function get_pic($value)
	{
		$this->load->model('mdl_following');
		$pic=$this->mdl_following->get_user_data($value);
		return $pic;
		
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
