<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function login()
	{
            $this->load->helper('url', 'form');
            
            if(isset($_POST['submit'])){
                
                $this->form_validation->set_rules('username', 'Username','required');
                $this->form_validation->set_rules('password', 'Password','required|min_length[8]');
                
                if($this->form_validation->run()== TRUE){
                    
                    //Load Model
                    $this->load->model('auth_model');
                    $array=$this->auth_model->login_model();
                    $user_data= $array->row();
                    
                    if($array->num_rows()==1){
                    
                        //Set Session
                        $session_data = array(
                        'session_id'=> $user_data->user_id,
                        'session_name'=> $user_data->username,
                        'session_usertype'=> $user_data->user_type,
                        'session_userstatus'=> $user_data->user_status,
                        'is_loggedin'=> TRUE
                        );
                        
                        $this->session->set_userdata($session_data);
                    
                        if(isset($_SESSION['is_loggedin'])){
                            
                            if($_SESSION['session_userstatus']==TRUE){
                                
                                if($session_data['session_usertype']=='admin'){
                                    redirect('dashboard_contra/load_admin_dash');
                                }
                            
                                else if($session_data['session_usertype']=='employee'){ 
                                    redirect('dashboard_contra/load_employee_dash');
                                }
                            }
                            else{
                                $this->session->set_flashdata('error','Account Not Activated');
                                redirect('auth/login');
                                }
                        }
                    }
                    else{
                            $this->session->set_flashdata('error','Login Failed ! Try Again..');
                            redirect('auth/login');
                        }
                }
                
            }
            //Load Login Page View
            $this->load->view('components/header');
            $this->load->view('login');
            $this->load->view('components/footer');
	}
        
    public function logout(){
        
        //$this->load->library('session');
        session_destroy();
        $this->login();
    }
    
    public function register(){
        //Load Libraries and helpers
        $this->load->helper('url', 'form');
        
        if(isset($_POST['submit'])){
            
            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]',
                                    array('is_unique'=> 'Username already exists. Please choose another'));
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.useremail]',
                                    array('is_unique'=>'Email Id already exist'));
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
            
                if($this->form_validation->run()==TRUE){
                    
                    //Load Model
                    $this->load->model('auth_model');
                    $this->auth_model->register_model();
                    $this->session->set_flashdata('success', 'Successfully Created Account');
                    redirect('auth/login');
                } 
        }
        
        //Load Register Page View
        $this->load->view('components/header');
        $this->load->view('register');
        $this->load->view('components/footer');
    }
}
