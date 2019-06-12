<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct(){
 parent::__construct();
    $this->load->model('Muebles');
   $this->load->helper('form');
   $this->load->library('form_validation'); 
   $this->load->library('session'); 
   $this->load->model('Login_model');
 }

 function index(){
     $this->load->helper(array('form'));
    $this->load->view('login_view');
 }
  

public function user_login_process() {
			
      //Valida los campo
        $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');        
        if ($this->form_validation->run() == FALSE) {
			
            if(isset($this->session->userdata['logged_in'])){	$this->load->view('inicio_mu');
               
            }else{
				
                $this->load->view('login_view');                
            }
			
        }else{
			
				
                $data = array(    'username' => $this->input->post('username'),
                                'password' => ($this->input->post('password')));
                

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
                         $this->load->view('inicio_mu');                       
                       
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
        $this->load->view('login_view', $data);
     }
     public function ver()
    {
        $this->load->view('Muebles');
    }
    public function add()
    {
        $this->load->view('nuevo');
    }

    public function add_mueble()
    {

        $modelo = $this->input->post('modelo');
        $material = $this->input->post('material');
        $color = $this->input->post('color');
        $tipo = $this->input->post('tipo');
        $foto=$this->input->post('foto');
        $guardar_datos = $this->Muebles->add_model($modelo,$material,$color,$tipo,$foto);
    }
    public function del()
    {
        $this->load->view('del');
    }

    public function del_us()
    {
        $id = $this->input->post('id');
        $guardar_datos = $this->Muebles->del_us_model($id);
    }

    public function Log()
    {

        $email = $this->input->post('email');
        $pass= $this->input->post('pass');
        $w = $this->Muebles->login_model($email,$pass);
        echo "$w";
        if (isset($_POST['pass'])) 
        {
            
            $this->load->model('Muebles');
            if($this->Muebles->login_model($_POST['email'],$_POST['pass']))
            {
                redirect('Inicio/inicio');
            }else
            {
                redirect('inicio');
            }
        }
        $this->load->view('login');
    }
    
    public function inicio()
    {
         
        $this->load->view('inicio_mu');
    }
    public function editar()
    {
        $this->load->view('edit');
    }
    public function editar_mu()
    {
        $modelo = $this->input->post('modelo');
        $material = $this->input->post('material');
        $color = $this->input->post('color');
        $tipo = $this->input->post('tipo');
        $id = $this->input->post('id');
        $guardar_datos = $this->Muebles->edit_model($modelo,$material,$color,$tipo,$id);
    }
    public function up()
    {
        $this->load->view('subir_foto/index');
    }
    public function up_mu()
    {
        $nombre = $this->input->post('nombre');
        $foto = $this->input->post('foto');
        $guardar_datos = $this->Muebles->up_model($nombre,$foto);
    }

}