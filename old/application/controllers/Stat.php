<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stat extends CI_Controller {

	var $V;

	function __construct()
	{
		parent::__construct();
		$this->V = array('Class' => 'Stat','ClassName' => 'สถิติ');
	}

	public function index()
	{
		redirect(base_url());
	}

	public function Trash()
	{
		$FT = 'Stat/Trash';
		$this->V['FuncName'] = 'จำนวนถังในระบบ';
		$this->load->view($FT, $this->V);
	}

	public function Car()
	{
		$FT = 'Stat/Car';
		$this->V['FuncName'] = 'จำนวนรถในระบบ';
		$this->load->view($FT, $this->V);
	}

	public function Summary()
	{
		$FT = 'Stat/Summary';
		$this->V['FuncName'] = 'จำแนกผลรวมการจัดเก็บ';
		$this->load->view($FT, $this->V);
	}

	public function Maintainance()
	{
		$FT = 'Stat/Maintainance';
		$this->V['FuncName'] = 'รายงานผลการส่งซ่อมบำรุง';
		$this->load->view($FT, $this->V);
	}
}
