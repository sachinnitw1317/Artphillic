<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_profile_page extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function data($following){
        $this->db->where('posted_by',$this->session->userdata('username'));
        foreach ($following->result() as $key) {
        $this->db->or_where('posted_by', $key->username);
        }
        $this->db->order_by("time", "desc");
        $data = $this->db->get('user_post');
        return $data;
    }

    function get_user_data($username){
     $this->db->where('username',$username);
        $user=$this->db->get('users')->row();
        if($user->pic!="0"){
            $pic=$user->pic;
        }
        else{
            $pic="default.jpg";
        }
        return $pic;
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
    }
}