<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dancer extends MX_Controller {
	
	public function index(){
		$this->get_data();
	}

	public function get_data(){
		$this->load->model('mdl_dancer');
		$this->load->model('following/mdl_following');
		$following=$this->mdl_following->data();
		$data['query']=$this->mdl_dancer->data($following);
		$this->load->view('main_page',$data);
	}
	 public function upload_text(){
	 	$this->load->model('mdl_dancer');
	 	$data['query'] = array(
	 	'post_text' => $this->input->post('post_text'),
	 	'posted_by' => $_SESSION['username'],
	 	);
	 	$this->mdl_dancer->update($data['query']);
	 }


	public function auto(){
		$this->load->model('mdl_dancer');
		$id=$this->uri->segment(3);
		$data['query']=$this->mdl_dancer->get_info($id);
		$this->load->view('product_page',$data);
	}
	public function load_user(){
		$this->load->model('mdl_dancer');
		$id=$this->uri->segment(3);
		if($id==$_SESSION['username']){
			redirect('dancer',refresh);
		}
		else{
			if($this->mdl_dancer->check_user($id)){
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
