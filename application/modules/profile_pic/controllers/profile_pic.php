<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile_pic extends MX_Controller {
	
	public function index(){
		$this->upload_pic();
		
	}

	public function upload_pic(){
		$target_dir = "images/Profile_pic/";
		$temp = explode(".", $_FILES["fileToUpload"]["name"]);
		$newfilename = $_SESSION['username'] . '.' . end($temp);
		$target_file = $target_dir . basename($newfilename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        $error= "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        $error= "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		if ($_FILES["fileToUpload"]["size"] > 500000) {
		    $error= "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    $error= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		if (file_exists($target_file)) {
		  unlink($target_file);
		 
		}
		if ($uploadOk == 0) {
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    	$this->load->model('mdl_profile_pic');
		    	$this->mdl_profile_pic->put_pic($newfilename);
		    	redirect("profile_page");
		        $error= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		     
		    }
		}
		return $error;
	}














	public function get_data(){
		$this->load->model('mdl_profile_pic');
		if($this->uri->segment(3)){
			$username=$this->uri->segment(3);
		}
		else{
			$username=$_SESSION['username'];
		}
		$data['rating']=$this->mdl_profile_pic->get_user_rating($username);
		$data['query']=$this->mdl_profile_pic->data($username);
		$this->load->view('cart_products',$data);
	}
	 public function upload_text(){
	 	$rating=$_POST['post_rate'];
	 	$user=$this->uri->segment(3);
	 	$this->load->model('mdl_profile_pic');
	 	$query=$this->mdl_profile_pic->update($rating , $user);
	 	//$this->load->view('success',$query);
	 }
	 public function add_user($username){
	 	$this->load->model('mdl_profile_pic');
	 	$this->mdl_profile_pic->add($username);
	 }

	public function auto(){
		$this->load->model('mdl_profile_pic');
		$id=$this->uri->segment(3);
		$data['query']=$this->mdl_profile_pic->get_info($id);
		$this->load->view('product_page',$data);
	}
	public function load_user(){
		$this->load->model('mdl_profile_pic');
		$id=$this->uri->segment(3);
		if($id==$_SESSION['username']){
			redirect('profile_page',refresh);
		}
		else{
			if($this->mdl_profile_pic->check_user($id)){
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
