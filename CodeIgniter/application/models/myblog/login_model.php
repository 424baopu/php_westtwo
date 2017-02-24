<?php
class Login_model extends CI_Model {
        
        function __construct() {
                parent::__construct();
				
        }
        
        //µÇÂ½º¯Êý
        function login($name,$password){
			$this->load->database();
			
			$sql="select * from user where name='$name' and password = '$password'"; 
		    $query=$this->db->query($sql);
		    $rows=$query->num_rows();
			
		    if($rows){
				return 1;
		    }else{
				return 0; 
		  }
               
        }
		
}
