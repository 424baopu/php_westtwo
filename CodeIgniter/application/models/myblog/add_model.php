<?php
class Add_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
				
    }
	
	public function add($data)
	{
		$this->load->helper('url');
		$this->load->database();
		//$slug = url_title($this->input->post('title'), 'dash', TRUE);
		//$d = date("Y-m-d");
	
		return $this->db->insert('article',$data);
	}
}