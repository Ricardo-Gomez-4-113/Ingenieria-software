<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('display_errors',true);

class Muebles extends CI_Model {

	public function muebles_model()
	{

		$us = $this->db->query("SELECT * FROM muebles");
		$data = $us->result_array();
		return $data;
	}
	public function add_model($modelo,$material,$color, $tipo, $foto)
	{
		$foto=$_FILES["foto"]["name"];
		$ruta=$_FILES["foto"]["tmp_name"];
		$destino=("fotos/".$foto);
		copy($ruta,$destino);
		$this->db->query("INSERT INTO muebles (modelo, material, color, tipo, foto) VALUES ('$modelo','$material','$color','$tipo','$destino')");
		header("Location: inicio");
	}
	public function del_us_model($id)
	{
		$ejecutar_consulta = $this->db->query("DELETE FROM muebles WHERE id='$id' ORDER BY modelo, color, material, tipo");
		header("Location: inicio");
	}
	public function edit_model($modelo,$material,$color, $tipo,$id)
	{
		$ejecutar_consulta = $this->db->query("UPDATE muebles SET modelo='$modelo', material='$material', color='$color', tipo='$tipo' WHERE id='$id'");
		header("Location: inicio");

	}
	public function login_model($email,$pass)
	{
		$this->db->where('email',$email);
		$this->db->where('pass',$pass);
		$q = $this->db->get('usuarios');
		if ($q->num_rows()>0) {
			return true;
		}
		else
		{
			return false;
		}


	}
	

}