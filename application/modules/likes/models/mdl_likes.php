<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_likes extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function post_likes($data)
    {
     $this->db->insert('post_likes', $data);
     $this->db->where('id',$data['id']);
     $query=$this->db->get('user_post');
     foreach ($query->result() as $row)
     {
       $this->db->where('id',$data['id']);
       $this->db->update('user_post',array('likes' => $row->likes + 1));
     }


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