<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

	var $V;

	function __construct()
	{
		parent::__construct();
		$this->V = array('Class' => 'Manage','ClassName' => 'บริหารการจัดเก็บ');
	}

	public function index()
	{
		redirect(base_url());
	}

	public function Maps()
	{
		$FT = 'Manage/Maps';
		$this->V['FuncName'] = 'แผนที่การจัดเก็บ';
		$this->load->view($FT, $this->V);
	}

	public function Collect()
	{
		$FT = 'Manage/Collect';
		$this->V['FuncName'] = 'ตารางแสดงผลการจัดเก็บ';
		$this->load->view($FT, $this->V);
	}

	public function Group()
	{
		$FT = 'Manage/Group';
		$this->V['FuncName'] = 'จัดกลุ่มผู้ใช้และรถ';
		$this->load->view($FT, $this->V);
	}
}
