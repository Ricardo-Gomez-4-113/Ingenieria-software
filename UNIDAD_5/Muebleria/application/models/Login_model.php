<?php
Class Login_model extends CI_Model{
public function login($data){
   $this -> db -> select('id, username, password');
   $this -> db -> from('usuarios');
   $this -> db -> where('username', $data['username']);
   $this -> db -> where('password', $data['password']);
   $this -> db -> limit(1);
   $query = $this -> db -> get();
   if($query -> num_rows() == 1){
     return $query->result();
   }else{
     return false;
   }
 }
//Leer los datos para devolverlas en variable de sesion
public function read_user_information($data) {
    $this->db->select('*');
    $this->db->from('usuarios');
    $this->db->where('username', $data);
    $this->db->limit(1);
    $query = $this->db->get();
    if ($query->num_rows() == 1) {
     return $query->result();
    } else {
       return false;
    }
  }
}