<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estatisticas extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		@session_start();
		$data['selecionar'] = null;
		$this->load->view('topo',$data);
		$this->load->view('estatisticas');
		$this->load->view('footer');
		
	}
}