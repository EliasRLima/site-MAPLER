<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		@session_start();
		$data['selecionar'] = null;
		$this->load->view('topo',$data);
		$this->load->view('menu_inicial');
		$this->load->view('footer');
	}
}