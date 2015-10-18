<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Online extends CI_Controller {
	
	public function index(){
		echo "<h1>I said hello</h1>";
		echo base_url();
	}

}


