<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class settings_contra extends CI_Controller{
    
    public function __construct(){
        
        parent::__construct();

        if(!isset($_SESSION['is_loggedin'])){
            session_destroy();
            $this->load->helper('url');
            redirect('auth/login');
        }
    }
    
    public function general(){
        
        //Loading General Info
        $this->load->model('settings_model');
        $array_settings_model=$this->settings_model->general();
        $settings_data['general']=$array_settings_model->row();
        
        //Loading Cart Options
        $this->load->model('settings_model');
        $array_cartoptions=$this->settings_model->cartopts();
        $settings_data['cartoptions']=$array_cartoptions->row();
        
        //Loading QMS Options
        $this->load->model('settings_model');
        $array_qmsoptions=$this->settings_model->qmsopts();
        $settings_data['qmsoptions']=$array_qmsoptions->row();
        
        
    
    $this->load->helper('url');
    
    $this->load->view('components/header') ;
    $this->load->view('components/navigations/admin_menu');
    $this->load->view('settings', $settings_data);
    $this->load->view('components/footer');
    }
    
    public function company_edit(){
        
       if (isset($_POST['submit'])){ 
        
           $data=array (
            'companyname' => $_POST['companyname'],
            'streetaddress' => $_POST['streetaddress'],
            'buildingaddress' => $_POST['buildingaddress'],
            'unit' => $_POST['unit'],
            'country' => $_POST['country'],
            'postalcode' => $_POST['postalcode'],
            'companyemail' => $_POST['companyemail'],
            'website' => $_POST['website']
        );
           
        //print_r ($data);
        //die();
           
        $this->load->model('settings_model');
        $array=$this->settings_model->comp_edit($data);
        
        
         //Loading General Info
        $this->load->model('settings_model');
        $array_settings_model=$this->settings_model->general();
        $settings_data['general']=$array_settings_model->row();
        
        //print_r ($settings_data);
        //die();
        
        if(isset($array)){
            $this->session->set_flashdata('success', "Suceessfully Updated");
            $this->load->helper('url');
            $this->general();   
        }
        else{
            $this->session->set_flashdata('error', "Unsuccessful");
            $this->load->helper('url');
            $this->general();
        }
       }
       
    }
    
    public function cart_edit(){
        
        if (isset($_POST['submit'])){
            
            $data_cart=array (
              
                'apptitle' => $_POST('apptitle'),
                'receipt_start' => $_POST('receipt_start'),
                'language' => $_POST('language'),
                'currency_symbol' => $_POST('currency_symbol'),
                'streetaddress' => $_POST('streetaddress'),
                'buildingaddress' => $_POST('buildingaddress'),
                'unit' => $_POST('unit'),
                'town' => $_POST('town'),
                'country' => $_POST('country'),
                'postalcode' => $_POST('postalcode'),
                'header_message' => $_POST('header_message'),
                'footer_message' => $_POST('footer_message')   
            );
            
            print_r ($data_cart);
            die();
        }
        
    }
    
    
}
