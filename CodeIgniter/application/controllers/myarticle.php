<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myarticle extends CI_Controller{
	
	function index(){
		$this->load->library('session');
		$this->load->database();
		
		$this->load->library('pagination');//加载分页类
        $this->load->helper('url');
		
		$config['base_url']= site_url('myarticle/index');
		
		//进行查询
		$name=$this->session->name;
		$sql="select * from  article where name='$name'"; 
		//$sql="select * from user where name='$name' and password = '$password'"; 
		$res=$this->db->query($sql);
		$config['total_rows']=$res->num_rows();//总记录数
		
		
		$page_size=2;//每页记录数
	    $config['per_page']=$page_size;
		$config['prev_link'] = '上一页';
        $config['next_link'] = ' 下一页';
		$this->pagination->initialize($config);//初始化分页
		
		//得到数据库博客记录
		$offset=intval($this->uri->segment(3));
		$sql="select * from article where name='$name' limit $offset,$page_size ";
		$query=$this->db->query($sql);
		$data['blogs']=$query->result_array();
		$data['links']=$this->pagination->create_links();
		
		$this->load->view('myblog/myarticle_view',$data);
	}
	
	function torevise(){

		$this->load->model('myblog/revise_model');
		$this->load->helper('url');
		
		$id=$_GET['id'];
		//通过model取content
		$content=$this->revise_model->back($id);
		//将content传给视图
		$data=array('content'=>$content,'id'=>$id);
		$this->load->view('myblog/revise_view',$data);
		
	}
	
	function revise(){
		
		if($_POST["submit"]=="修改"){
			$this->load->library('session');
			$name = $this->session->name;
			$data = array(
				'name'=>$name,
				'title' => $this->input->post('title'),
				'type' => $this->input->post('type'),
				'content' => $this->input->post('text')
			);
			$this->load->model('myblog/revise_model');
			$res=$this->revise_model->revise($data,$this->session->id);
			if($res==1){
			   echo"<script>alert('发布成功!');window.location.href='http://localhost/CodeIgniter/index.php/myarticle';</script>";
			}
			else{
				echo"发布未成功";
			}
			
		}
		else{
	        echo "修改未成功";
        }
		
		
	}
}