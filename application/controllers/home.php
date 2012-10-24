<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends Ci_Controller{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('home_view', $data);
		}else
		{
			redirect('login','refresh');
		}
	}

	function alumno()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['nombre'] = $session_data['nombre'];
			$this->load->view('alumno_view',$data);
		}else
		{
			redirect('login/checkMat','refresh');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect(base_url(),'refresh');
	}
}