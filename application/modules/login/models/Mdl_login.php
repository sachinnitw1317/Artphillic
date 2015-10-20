<?php
class Mdl_login extends CI_Model
{
	 public function __construct()
    {
        parent::__construct();
    }
    
	public function can_log_in(){
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',$this->input->post('password'));
		$query=$this->db->get('users');
		if($query->num_rows()==1)
			return true;
		else
			return false;

	}
	public function add_user($key){
		$data=array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'email'=>$this->input->post('email'),
			'key'=>$key,
			);
		$query=$this->db->insert('temp_user',$data);
		if($query)
			return true;
		else
			return false;
	}
	public function add_user_verified($key){
		$this->db->where('key',$key);
		$data=$this->db->get('temp_user');
		if($data){
			$row=$data->row();
			$info=array(
				'username'=>$row->username,
				'email'=>$row->email,
				'password'=>$row->password,
				);
			$query=$this->db->insert('users',$info);
			if($query){
				$this->db->where('key',$key);
				$this->db->delete('temp_user');
				return $info;
			}
			else
				return false;
		}
		else
			return false;
	}
}
?>