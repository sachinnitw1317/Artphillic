<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_scout extends MX_Controller {
	
	public function index(){
		$this->get_data();
	}

	public function get_data(){
		/*$this->load->model('mdl_profile_scout');
		$this->load->model('following/mdl_following');
		$following=$this->mdl_following->data();
		$data['query']=$this->mdl_profile_scout->data();*/
		$this->load->view('main_page');
	}
	 public function upload_text(){
	 	$this->load->model('mdl_profile_scout');
	 	$data['query'] = array(
	 	'post_text' => $this->input->post('post_text'),
	 	'posted_by' => $_SESSION['username'],
	 	);
	 	$this->mdl_profile_scout->update($data['query']);
	 }


	public function auto(){
		$this->load->model('mdl_profile_scout');
		$id=$this->uri->segment(3);
		$data['query']=$this->mdl_profile_scout->get_info($id);
		$this->load->view('product_page',$data);
	}
	public function load_user(){
		$this->load->model('mdl_profile_scout');
		$id=$this->uri->segment(3);
		if($id==$_SESSION['username']){
			redirect('profile_scout',refresh);
		}
		else{
			if($this->mdl_profile_scout->check_user($id)){
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
