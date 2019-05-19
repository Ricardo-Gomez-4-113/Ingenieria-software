<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {

	public function verusuarios()
	{

		$us = $this->db->query("SELECT * FROM usuarios");
		$data = $us->result_array();
		return $data;
	}
	public function eliminar_model($id)
	{
		$ejecutar_consulta = $this->db->query("DELETE FROM usuarios WHERE id=$id ORDER BY nombre, apellido_p, carrera");
	}

	public function insertarusuario_model($nombre,$apellido,$carrera)
	{
		$ejecutar_consulta = $this->db->query("INSERT INTO usuarios (nombre, apellido_p, carrera) VALUES ('$nombre','$apellido','$carrera')");
	}
public function edit_model($id, $nombre, $apellido, $carrera)
	{
		$ejecutar_consulta = $this->db->query("UPDATE usuarios SET nombre='$nombre', apellido_p='$apellido', carrera='$carrera' WHERE id='$id'");
	}
	
}
