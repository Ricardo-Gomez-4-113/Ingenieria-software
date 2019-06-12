<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct(){
 parent::__construct();
   $this->load->helper('form');
   $this->load->library('form_validation'); 
   $this->load->library('session'); 
   $this->load->model('Login_model');
 }

 function index(){
     $this->load->helper(array('form'));
    $this->load->view('login_view');
 }
  function inicio(){
    $this->load->view('inico_mu');
 }

public function user_login_process() {
			
      //Valida los campo
        $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');        
        if ($this->form_validation->run() == FALSE) {
			
            if(isset($this->session->userdata['logged_in'])){	
                header('Location:'.base_url().'Inicio/inicio');
            }else{
				
                $this->load->view('login_view');                
            }
			
        }else{
			
				
                $data = array(    'username' => $this->input->post('username'),
                                'password' => ($this->input->post('password')));
                
				print_r($data);
                $result = $this->Login_model->login($data);            			
				
                if ($result == TRUE) {                
			
                    $username = $this->input->post('username');
                    
                    $result = $this->Login_model->read_user_information($username);
                
                    if ($result != false) {
                        $session_data = array(
                                                
                                                'username' => $result[0]->username,
                                                'iduser'=> $result[0]->id,
                                        );                                        
                        // Pasa el arreglo a la vista
                        $this->session->set_userdata('logged_in', $session_data);    
                        header('Location: Login/inicio');                                    
                       
                    }
                }else{
                    $data = array('error_message' => 'Usuario o Password No válidos.');
                    $this->load->view('login_view', $data);
                }
        }
    }
   public function logout() {
    
        // Elimina los datos de la sesión
        $sess_array = array(
        'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'La sesión finalizó correctamente.';
        $this->load->view('login_form', $data);
     }

}