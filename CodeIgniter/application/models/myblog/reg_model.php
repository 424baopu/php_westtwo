<?php

class Reg_model extends CI_Model {
        
        function __construct() {
                parent::__construct();
				
        }
        
        //注册函数
        function register($name,$password){
			$this->load->database();
			
			$sql="select name from user where name='$name'"; 
		    $query=$this->db->query($sql);
		    $rows=$query->num_rows();
			
		    if($rows){
				return "该用户名已经存在，请重新输入";
		    }else{
				$sql="INSERT INTO user(name,password)
				     VALUES('$name','$password')";
			    $res_insert = $this->db->query($sql);
			    if($res_insert){
				  return "注册成功";
				  //Header("Location: login.php");
			    }else{
				  return "请再试一次";
			    }  
		  }
               
        }
		
}





