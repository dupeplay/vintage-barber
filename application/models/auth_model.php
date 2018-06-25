<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class auth_model extends CI_Model{
    
    public function login_model(){
        
        $input_data= array(
            'username'=> $_POST['username'],
            'password'=> $_POST['password']
        );
        
        $this->db->SELECT('*');
        $this->db->WHERE($input_data);
        return $this->db->get('users');
    }
    
    public function register_model(){
        
        $input_data= array(
            'username'=> $_POST['username'],
            'useremail'=> $_POST['email'],
            'password'=> $_POST['password'],
            'user_type'=> "employee",
            'user_status'=>FALSE
        );
        
        $this->db->INSERT('users',$input_data );
        
    }
    
}
