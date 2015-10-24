<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_search extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get_result($search_text)
    {
        $this->db->like('username', $search_text);     
        $this->db->order_by('username');
        $query=$this->db->get('users');
        if($query->num_rows()>0){
            $output="";
            foreach ($query->result() as $key) {
                $imageURL="http://localhost/artphilic/images/profile_pic/'.$key->username.'.jpg";
               $output.='<li style="margin:2px 0px;padding:5px 0px;"><a href="http://localhost/artphilic/profile_page/load_user/'.$key->username.'">';
               $output.='<img class="img-circle" alt="profile_pic" width="25px" height="25px" src="http://localhost/artphilic/images/profile_pic/'.$key->username.'.jpg">';
               $output.=''.$key->username.'<img style="margin-right:5px;float:right;" class="img-circle"  alt="profile_pic" width="25px" height="25px" src="http://localhost/artphilic/images/profile_pic/'.$key->username.'.jpg"></li>';
            }
            return $output;
        }
        else
            echo "<strong>no results to display<strrong>";

    }

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
}