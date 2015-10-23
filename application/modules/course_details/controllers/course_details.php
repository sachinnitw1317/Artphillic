<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class course_details extends MX_Controller {
	public function index(){
		$this->get_data();
	}

	public function get_data(){
		$this->load->view("main_page");
	}

	public function post_data(){
		$this->load->model('mdl_course_details');
	 	
	 	$data['name'] =@$_POST['name'];
	 	$data['start'] =@$_POST['start'];
	 	$data['end'] =@$_POST['end'];
	 	$data['description'] =@$_POST['description'];
	 	$this->mdl_course_details->post_details($data);
	 	$this->get_courses();
	}
	
	function get_courses(){
	$this->load->model('mdl_course_details');
	$courses['query']=$this->mdl_course_details->get_list();
	$this->load->view('cart_products',$courses);
	}

	public function auto(){
		$this->load->model('mdl_course_details');
		$id=$this->uri->segment(3);
		$data['query']=$this->mdl_course_details->get_info($id);
		$this->load->view('product_page',$data);
	}
	public function load_user(){
		$this->load->model('mdl_course_details');
		$id=$this->uri->segment(3);
		if($id==$_SESSION['username']){
			redirect('course_details',refresh);
		}
		else{
			if($this->mdl_course_details->check_user($id)){
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
