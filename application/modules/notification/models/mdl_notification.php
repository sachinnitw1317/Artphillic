<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_notification extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get_result($following)
    {
        $output="";
        $this->db->where('posted_by',$this->session->userdata('username'));
        foreach ($following->result() as $key) {
        $this->db->or_where('posted_by', $key->username);
        }
        $this->db->order_by("time", "desc");
        $data = $this->db->get('user_post');
      if($data->num_rows()>0){
            foreach ($data->result() as $key) {
               $output.='<li><a href="http://localhost/artphilic/user_page/get_data/'.$key->posted_by.'">';
               $output.='<img class="img-circle" alt="profile_pic" width="20px" height="20px" src="http://localhost/artphilic/images/profile_pic/'.$key->posted_by.'.jpg">';
               $output.=''.$key->posted_by.' posted on profile page</li>';

            }
            return $output;
        }
    }
}
       /* $query=$this->db->get('users');
        if($query->num_rows()>0){
            $output="";
            foreach ($query->result() as $key) {
                $imageURL="http://localhost/artphilic/images/profile_pic/'.$key->username.'.jpg";
               $output.='<li><a href="http://localhost/artphilic/user_page/get_data/'.$key->username.'">';
               $output.='<img class="img-circle" alt="profile_pic" width="20px" height="20px" src="http://localhost/artphilic/images/profile_pic/'.$key->username.'.jpg">';
               $output.=''.$key->username.'</li>';
            }*/

    

  /*  function data(){
        $this->db->order_by("id", "desc");
        $data = $this->db->get('user_post');
        return $data;
    }
    function check_user($username){
        $query = $this->db->get_where('users', array('username' => $username));
        if($query->num_rows()==1){
            return TRUE;
        }
        else
            return FALSE;
    }
    function update($data){
      $this->db->insert('user_post', $data);
    }

    function get_info($id){
        $data = $this->db->get_where('db_products', array('id' => $id));
        return $data;
    }*/