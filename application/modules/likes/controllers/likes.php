<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Likes extends MX_Controller {
	
	public function index(){
		$this->get_data();
	}

	public function get_data()
	{	
		$this->load->model('mdl_likes');
		$data['id']=$_POST['post_id'];
		$data['user']=$_POST['post_username'];
		$this->mdl_likes->post_likes($data);
		//$this->load->view('likes_results',$data);
	}














/*
	public function get_data(){
		$this->load->model('mdl_profile_page');
		$data['query']=$this->mdl_profile_page->data();
		$this->load->view('main_page',$data);
	}
	 public function upload_text(){
	 	$this->load->model('mdl_profile_page');
	 	$data['query'] = array(
	 	'post_text' => $this->input->post('post_text'),
	 	'posted_by' => $_SESSION['username'],
	 	'posted_on' => $this->input->post('posted_on'),
	 	);
	 	$this->mdl_profile_page->update($data['query']);
	 }


	public function auto(){
		$this->load->model('mdl_profile_page');
		$id=$this->uri->segment(3);
		$data['query']=$this->mdl_profile_page->get_info($id);
		$this->load->view('product_page',$data);
	}
	public function load_user(){
		$this->load->model('mdl_profile_page');
		$id=$this->uri->segment(3);
		if($id==$_SESSION['username']){
			redirect('Profile_page',refresh);
		}
		else{
			if($this->mdl_profile_page->check_user($id)){
				redirect("user_page/get_data/$id",refresh);
			}
			else
				echo "failed";
		}
	}*/




	public function about(){
		$this->load->view('about_us');

	}

	public function login(){
		echo moduleS::run('login');
	}
}
