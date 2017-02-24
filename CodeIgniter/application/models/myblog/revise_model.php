<?php
class Revise_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
				
    }
	
	public function back($id){
		$this->load->library('session');
		//session_start();
		//$_session['id']=$id;
		$this->session->set_userdata('id',$id);

		$this->load->database();
		$sql="select * from article where id='$id'"; 
		$query=$this->db->query($sql);
		
		foreach ($query->result() as $row)
		{
			$content=$row->content;
		}
		
		return $content;
	}
	
	public function revise($data,$id)
	{
		$this->load->helper('url');
		$this->load->database();
	
		return $this->db->update('article',$data,array("id" => $id));
	}
}