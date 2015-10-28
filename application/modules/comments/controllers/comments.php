<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class comments extends MX_Controller {
	
	public function index(){
		$this->get_data();
	}

	public function get_data(){	
		$this->load->model('mdl_comments');
		$id=$_GET['q'];
		$data['query_comments']=$this->mdl_comments->get_result($id);
		$this->load->view('comments_text',$id);
	}

	public function post_data(){
		$this->load->model('mdl_comments');
		$data['username']=$this->session->userdata('username');
		$data['id']=$this->uri->segment(3);//change this id URI segment 3 see ajax form uri not uri on browser
		$data['comments_text']=$_POST['post_text'];
		$this->mdl_comments->post_comments($data);
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


	public function auid(){
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
