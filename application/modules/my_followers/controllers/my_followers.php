<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_followers extends MX_Controller {
	
	public function index(){
		$this->get_data();
	}

	public function get_data(){
		$this->load->model('mdl_my_followers');
		$this->load->model('following/mdl_following');
		if($this->uri->segment(3)){
			$id=$this->uri->segment(3);
		}else{
			$id=$_SESSION['username'];
		}
		$following=$this->mdl_following->data($id);
		$data['user_pic']=$this->mdl_my_followers->get_user_data($id);
		$data['query']=$this->mdl_my_followers->data($following);
		$this->load->view('main_page',$data);
	}
	 public function upload_text(){
	 	$this->load->model('mdl_my_followers');
	 	$data['query'] = array(
	 	'post_text' => $this->input->post('post_text'),
	 	'posted_by' => $_SESSION['username'],
	 	);
	 	$this->mdl_my_followers->update($data['query']);
	 }


	public function auto(){
		$this->load->model('mdl_my_followers');
		$id=$this->uri->segment(3);
		$data['query']=$this->mdl_my_followers->get_info($id);
		$this->load->view('product_page',$data);
	}
	public function load_user(){
		$this->load->model('mdl_my_followers');
		$id=$this->uri->segment(3);
		if($id==$_SESSION['username']){
			redirect('my_followers',refresh);
		}
		else{
			if($this->mdl_my_followers->check_user($id)){
				redirect("user_page/get_data/$id",refresh);
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
