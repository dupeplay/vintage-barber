<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class dashboard_contra extends CI_Controller{
    
    public function __construct(){
        
        parent:: __construct();
        
	if(!isset($_SESSION['is_loggedin'])){
            session_destroy();
            $this->load->helper('url');
            redirect('auth/login');
	}
    }
    
    public function load_admin_dash(){
        
        //Load Admin View
        $this->load->helper('url');

        $this->load->view('components/header');
        $this->load->view('components/navigations/admin_menu');
        $this->load->view('dashboard');
        $this->load->view('components/footer');
    }
    
    public function load_employee_dash(){
        echo "Loaded Employee Dash";
        die();
    }
    
    
    
    
}