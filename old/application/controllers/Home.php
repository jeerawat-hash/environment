<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	var $V;

	function __construct()
	{
		parent::__construct();
		$this->V = array('Class' => 'Home','ClassName' => 'หน้าหลัก');
	}

	public function index()
	{
		$FT = 'Home';
		$this->V['FuncName'] = 'หน้าหลัก';
		$this->load->view($FT, $this->V);
	}
}