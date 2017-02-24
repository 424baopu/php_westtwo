<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Content-type:text/html;charset=utf8");
class Add extends CI_Controller {
	
	function __construct() {
        parent::__construct(); 		
		$this->load->model('myblog/add_model');
		$this->load->helper('url');
    }
        
    // 默认方法
    function index() {
        $this->load->view('myblog/add_view');
    }
	function add(){
		if($_POST["submit"]=="发布"){
			$this->load->library('session');
			$name = $this->session->name;
			$data = array(
				'name'=>$name,
				'title' => $this->input->post('title'),
				'type' => $this->input->post('type'),
				'content' => $this->input->post('text')
			);
			$this->load->model('myblog/add_model');
			$res=$this->add_model->add($data);
			if($res==1){
			   echo"<script>alert('发布成功!');window.location.href='http://localhost/CodeIgniter/index.php/myarticle';</script>";
			}
			else{
				echo"发布未成功";
			}
		}
		else{
	        echo "发布未成功";
        }
	}
	
}