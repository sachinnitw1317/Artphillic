<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends MX_Controller {
	
	public function index(){
		$this->get_data();
	}

	public function get_data(){	
		$this->load->model('mdl_message');
		$from=$_SESSION['username'];
		$to=$_GET['q'];//change this to URI segment 3
		$data['query_message']=$this->mdl_message->get_result($from,$to);
		$data['from']=$from;
		$data['to']=$to;
		$this->load->view('message_text',$data);
	}

	public function post_data(){
		$this->load->model('mdl_message');
		$data['from']=$this->session->userdata('username');
		$data['to']=$this->uri->segment(3);//change this to URI segment 3
		$data['message_text']=$_POST['post_text'];
		$this->mdl_message->post_message($data);
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
