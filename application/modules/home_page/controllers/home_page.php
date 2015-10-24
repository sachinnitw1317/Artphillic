<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_page extends MX_Controller {
	
	public function index(){
		$this->get_data();
	}

	public function get_data(){
		$this->load->model('mdl_home_page');
		$this->load->model('following/mdl_following');
		$id=$this->uri->segment(3);
		$following=$this->mdl_following->data($id);
		$data['query']=$this->mdl_home_page->data($following);
		$this->load->view('main_page',$data);
	}
	 public function upload_text(){
	 	$this->load->model('mdl_home_page');
	 	$data['query'] = array(
	 	'post_text' => $this->input->post('post_text'),
	 	'posted_by' => $_SESSION['username'],
	 	);
	 	$this->mdl_home_page->update($data['query']);
	 }


	public function auto(){
		$this->load->model('mdl_home_page');
		$id=$this->uri->segment(3);
		$data['query']=$this->mdl_home_page->get_info($id);
		$this->load->view('product_page',$data);
	}
	public function load_user(){
		$this->load->model('mdl_home_page');
		$id=$this->uri->segment(3);
		if($id==$_SESSION['username']){
			redirect('home_page',location);
		}
		else{
			if($this->mdl_home_page->check_user($id)){
				redirect("user_page_1/get_data/$id",location);
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
