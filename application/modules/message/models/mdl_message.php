<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_message extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get_result($from,$to)
    {
        $output="";
        $this->db->where("(from = '$from' AND to = '$to') OR (from = '$to' AND to = '$from')");
       /* $this->db->where(array('from' => $from,'to'=>$to));
        $this->db->or_where(array('from' => $to,'to'=>$from));*/
        $this->db->order_by('time','asc');
        $data = $this->db->get('message');
        return $data;
    }

    public function post_message($data)
    {
        $this->db->insert('message',$data);
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