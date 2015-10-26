<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Rating extends MX_Controller {
	
	public function index(){
		$this->get_data();
		
	}

	public function get_data(){
		$this->load->model('mdl_rating');
		if($this->uri->segment(3)){
			$username=$this->uri->segment(3);
		}
		else{
			$username=$_SESSION['username'];
		}
		$data['rating']=$this->mdl_rating->get_user_rating($username);
		$data['query']=$this->mdl_rating->data($username);
		$this->load->view('main_page',$data);
	}
	 public function upload_text(){
	 	$rating=$_POST['post_rate'];
	 	$user=$this->uri->segment(3);
	 	$this->load->model('mdl_rating');
	 	$query=$this->mdl_rating->update($rating , $user);
	 	//$this->load->view('success',$query);
	 }
	 public function add_user($username){
	 	$this->load->model('mdl_rating');
	 	$this->mdl_rating->add($username);
	 }

	public function auto(){
		$this->load->model('mdl_rating');
		$id=$this->uri->segment(3);
		$data['query']=$this->mdl_rating->get_info($id);
		$this->load->view('product_page',$data);
	}
	public function load_user(){
		$this->load->model('mdl_rating');
		$id=$this->uri->segment(3);
		if($id==$_SESSION['username']){
			redirect('profile_page',refresh);
		}
		else{
			if($this->mdl_rating->check_user($id)){
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
