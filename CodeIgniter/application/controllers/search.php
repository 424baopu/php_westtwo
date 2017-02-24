<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller{
	
	function index(){
		$this->load->database();
		$this->load->library('session');
		$this->load->library('pagination');//加载分页类
        $this->load->helper('url');
		
		$config['base_url']= site_url('search/index');
		
		//进行查询
		$key=$this->session->key;
		$sql="select * from  article where name='$key'||type='$key'"; 
		$res=$this->db->query($sql);
		$config['total_rows']=$res->num_rows();//总记录数
		
		
		$page_size=2;//每页记录数
	    $config['per_page']=$page_size;
		$config['prev_link'] = '上一页';
        $config['next_link'] = ' 下一页';
		$this->pagination->initialize($config);//初始化分页
		
		//得到数据库博客记录
		$offset=intval($this->uri->segment(3));
		$sql="select * from article where name='$key'||type='$key' limit $offset,$page_size ";
		$query=$this->db->query($sql);
		$data['blogs']=$query->result_array();
		$data['links']=$this->pagination->create_links();
		
		$this->load->view('myblog/search_view',$data);
	}
	
}