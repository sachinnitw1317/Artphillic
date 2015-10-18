<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_user_page extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function data(){
        $this->db->order_by("id", "desc");
        $data = $this->db->get('user_post');
        return $data;
    }

    function get_info($id){
        $data = $this->db->get_where('db_products', array('id' => $id));
        return $data;
    }
}