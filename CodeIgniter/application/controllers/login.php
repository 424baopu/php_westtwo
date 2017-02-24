<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	// 构造方法
    function __construct() {
        parent::__construct(); 		
		$this->load->model('myblog/login_model');
		$this->load->helper('url');
    }
        
    // 默认方法
    function index() {
        // 加载login_view视图
        $this->load->view('myblog/login_view');
    }
	
	function login() {
		if($_POST["submit"]=="登陆"){
			
			$this->load->library('session');
			$name=$this->input->post('name');
			
			//session_start();
			//$_session['name']=$name;
			$this->session->set_userdata('name',$name);
			
			$password=md5($this->input->post('password'));
			
			if($name==""&&$password==""){
				echo "用户名或者密码未填写";
			}
			else{
		
				$this->load->model('myblog/login_model');
				$res=$this->login_model->login($name,$password);
				if($res==1){
					//进入主页
					echo "<script>alert('登陆成功!');window.location.href='http://localhost/CodeIgniter/index.php/main/text';</script>";
					//echo "<script>alert('登陆成功!');window.location.href='http://localhost/CodeIgniter/index.php/add';</script>";
					
				}
				else{
					echo "<script>alert('用户名或者密码不正确');window.location.href='http://localhost/CodeIgniter/index.php/login';</script>";
			    }	
			}
		}
		else{
	        echo "登陆未成功";
        }
	}
}