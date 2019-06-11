<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

public function __construct()
	{	
		parent::__construct();
		$this->load->model('Muebles');
		$this->load->database('default');
	}

	public function index()
	{
		$this->load->view('Muebles_en _exitencia/index');
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
		$this->load->view('Login/Index');
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
	
	public function login()
	{
		
		$correo = $this->input->post('correo');
		$pass = $this->input->post('pass');
		$guardar_datos = $this->Muebles->log_model($correo,$pass);
	}

}