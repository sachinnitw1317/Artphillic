<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_course_details extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function post_details($data){
       $this->db->insert('course_details', $data);
      }
    
    function get_list(){
        $courses=$this->db->get('course_details');
        return $courses;

    }
    function update($data){
      $this->db->insert('user_post', $data);
    }

    function get_info($id){
        $data = $this->db->get_where('course_details', array('id' => $id));
        return $data;
    }
}