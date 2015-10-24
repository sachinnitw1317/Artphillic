<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_page_1 extends MX_Controller {
	
	public function index(){
		$this->get_data();
	}

	public function get_data(){
		$this->load->model('mdl_user_page_1');
		//$this->load->model('following/mdl_following');
		if($this->uri->segment(3)){
			$id=$this->uri->segment(3);
		}
		else
		$id=$this->session->userdata('username');
	
		//$following=$this->mdl_following->data($id);
		$data['query']=$this->mdl_user_page_1->data($id);
		$this->load->view('main_page',$data);
	}
	 public function upload_text(){
	 	$this->load->model('mdl_user_page_1');
	 	$data['query'] = array(
	 	'post_text' => $this->input->post('post_text'),
	 	'posted_by' => $_SESSION['username'],
	 	);
	 	$this->mdl_user_page_1->update($data['query']);
	 }


	public function auto(){
		$this->load->model('mdl_user_page_1');
		$id=$this->uri->segment(3);
		$data['query']=$this->mdl_user_page_1->get_info($id);
		$this->load->view('product_page',$data);
	}
	public function load_user(){
		$this->load->model('mdl_user_page_1');
		$id=$this->uri->segment(3);
		if($id==$_SESSION['username']){
			redirect('profile_page',refresh);
		}
		else{
			if($this->mdl_user_page_1->check_user($id)){
				redirect("user_page_1/get_data/$id",refresh);
			}
			else
				echo "failed";
		}
	}




	public function about(){
		$this->load->view('about_us');

	}

	public function login(){
		echo moduleS::run('login');
	}
}
