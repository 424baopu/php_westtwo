<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg extends CI_Controller{
	// 构造方法
    function __construct() {
        parent::__construct();
	    // 加载计算模型  		
        $this->load->model('myblog/reg_model');
		$this->load->helper('url');
    }
        
    // 默认方法
    function index() {
        // 加载_view视图
        $this->load->view('myblog/reg_view');
    }
	
	function register() {
		if(isset($_POST["submit"])&&$_POST["submit"]=="注册"){
			$name=$this->input->post('name');
			$password=md5($this->input->post('password'));
			
			if($name==""&&$password==""){
				echo "用户名或者密码未填写";
			}
			else{
				$res=$this->reg_model->register($name,$password);
				if($res=="注册成功"){
					//$this->load->model('myblog/login_model');
					//$this->load->view('myblog/login_view');
					//$this->load->controller('myblog/login_controller');
					//header("location:".site_url("common/login"));
                    echo "<script>alert('注册成功');window.location.href='http://localhost/CodeIgniter/index.php/login';</script>";				
				}
				else{
					echo $res;
				}
			}
		}
		else{
	        echo "注册未成功";
        }
	}
}