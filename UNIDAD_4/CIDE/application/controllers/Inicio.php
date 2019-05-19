<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {


	public function __construct()
	{	
		parent::__construct();
		$this->load->model('Usuarios');
		$this->load->database('default');
	}


	public function index()
	{
		$this->load->view('inicio');
	}

	public function usuarios()
	{
		$this->load->view('usuarios');
	}

	public function agregarusuarios()
	{
		$this->load->view('nuevousuario_views');
	}

	public function insertarusuario()
	{
		$nombre = $this->input->post('nombre_vista');
		$carrera = $this->input->post('carrera');
		$apellido = $this->input->post('apellido_p');
		$guardar_datos = $this->Usuarios->insertarusuario_model($nombre, $apellido, $carrera);
	}
	public function eliminar_us()
	{
		$this->load->view('eliminar');
	}
	public function eliminarusuario()
	{
		$id=$this->input->post('ID');
		$guardar_datos = $this->Usuarios->eliminar_model($id);
	}
	public function editar_us()
	{
		$this->load->view('editar');
	}
	public function editusuario()
	{
		$nombre = $this->input->post('nombre_vista');
		$carrera = $this->input->post('carrera');
		$id = $this->input->post('id');
		$apellido = $this->input->post('apellido_p');
		$guardar_datos = $this->Usuarios->edit_model($id, $nombre, $apellido, $carrera);
	}



}
