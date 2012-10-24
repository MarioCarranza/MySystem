<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class verifyLogin extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('userModel','',TRUE);
		$this->load->library('form_validation');
	}

	function index()
	{
		
		$this->form_validation->set_rules('username','Username','trim|required|xss_clean');
		$this->form_validation->set_rules('password','Password','trim|required|xss_clean|callback_check_database');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('loginView');

		}else
		{
			redirect('home','refresh');
		}
	}

	function checkMat()
	{
		$this->form_validation->set_rules('matricula','Matricula','trim|required|css_clean|callback_check_matricula');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('loginView');
		}else
		{
			redirect('home/alumno','refresh');
		}
	}

	function check_matricula($matricula)
	{
		$result = $this->userModel->loginWithMat($matricula);
		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'matricula' => $row->Matricula,
					'nombre' => $row->Nombre);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return TRUE;
		}else
		{
			$this->form_validation->set_message('check_matricula','Matricula Incorrecta.');
			return false;
		}
		
	}

	function check_database($password)
	{
		$username = $this->input->post('username');
		$result = $this->userModel->login($username,$password);
		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'id' => $row->ID_Usuario,
					'username' => $row->User)
				;
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return TRUE;
		}else
		{
			$this->form_validation->set_message('check_database','Usuario / Password Invalido.');
			return false;
		}
	}
}