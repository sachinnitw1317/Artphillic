<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_followers extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function data($id){
        $this->db->order_by("id", "desc");
        $this->db->where('username',$id);
        $data = $this->db->get('followers');
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
    function get_info($id){
        $data = $this->db->get_where('db_products', array('id' => $id));
        return $data;
    }
}