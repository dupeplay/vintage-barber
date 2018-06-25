<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class settings_model extends CI_Model{
    
    public function general(){
        
        $this->db->SELECT('*');
        return $this->db->get('settings');
    }
    
    public function cartopts(){
        
        $this->db->SELECT('*');
        return $this->db->get('cartoptions');
    }
    
    public function qmsopts(){
        
        $this->db->SELECT('*');
        return $this->db->get('qmsoptions');
    }
    
    public function comp_edit($data){
        
        $this->db->UPDATE('settings', $data);
        return TRUE;
    }
    
}