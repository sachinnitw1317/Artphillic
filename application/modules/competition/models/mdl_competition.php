<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_competition extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function data(){
        $data = $this->db->get('db_products');
        return $data;
    }

    function get_info($id){
        $data = $this->db->get_where('db_products', array('id' => $id));
        return $data;
    }
}