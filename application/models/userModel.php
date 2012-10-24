<?php
Class userModel extends CI_Model
{
	function login($username,$password)
	{
		$this->db->select('Usuario','ID_Maestro');
		$this->db->from('maestros');
		$this->db->where('Usuario = ' ."'" . $username . "'");
		$this->db->where('Contrasena = ' . "'" . $password . "'");
		$this->db->limit(1);

		$query = $this->db->get();
		if($query->num_rows() == 1)
		{
			return $query->result();
		}else
		{
			return false;
		}
	}

	function loginWithMat($matricula)
	{
		$this->db->select('Nombre','Matricula');
		$this->db->from('alumnos');
		$this->db->where('Matricula =' . "'" . $matricula . "'");
		$this->db->limit(1);
		$query = $this->db->get();
		if($query->num_rows() == 1)
		{
			return $query->result();
		}else
		{
			return false;
		}
	}
}