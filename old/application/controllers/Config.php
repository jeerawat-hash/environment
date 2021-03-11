<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {

	var $V;

	function __construct()
	{
		parent::__construct();
		$this->V = array('Class' => 'Config','ClassName' => 'จัดการข้อมูลระบบ');
	}

	public function index()
	{
		redirect(base_url());
	}

	public function User()
	{
		$FT = 'Config/User';
		$this->V['FuncName'] = 'ตารางแสดงผลผู้ใช้งาน';
		$this->load->view($FT, $this->V);
	}

	public function Car()
	{
		$FT = 'Config/Car';
		$this->V['FuncName'] = 'ตารางแสดงผลข้อมูลรถ';
		$this->load->view($FT, $this->V);
	}

	public function Trash()
	{
		$FT = 'Config/Trash';
		$this->V['FuncName'] = 'ตารางแสดงข้อมูลถังขยะ';
		$this->load->view($FT, $this->V);
	}
}
