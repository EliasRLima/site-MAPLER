<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		@session_start();
		$data['selecionar'] = null;
		$this->load->view('topo',$data);
		$this->load->view('contato');
		$this->load->view('footer');
	}
}