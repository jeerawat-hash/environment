<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageStore extends CI_Controller {



	public function index()
	{ 
 

	}
	public function maps()
	{ 
        $header['page_name'] = 'แผนผังการจัดเก็บขยะ';
        $header['page_focus'] = 'ManageStore';
        $header['page_menu'] = 0;
		$data["page_name"] = $header['page_name'];

		$this->load->view('template/header.php',$header);
		$this->load->view('page/ManageStore/0.php',$data);
		$this->load->view('template/footer.php');

	}
	public function detail()
	{ 
        $header['page_name'] = 'รายละเอียดการปฏิบัติงาน';
        $header['page_focus'] = 'ManageStore';
        $header['page_menu'] = 1;
		$data["page_name"] = $header['page_name'];
		
		$this->load->view('template/header.php',$header);
		$this->load->view('page/ManageStore/0.php',$data);
		$this->load->view('template/footer.php');

	}
	public function teams()
	{ 
        $header['page_name'] = 'จัดการกลุ่มผู้ปฏิบัติงาน';
        $header['page_focus'] = 'ManageStore';
        $header['page_menu'] = 2;
		$data["page_name"] = $header['page_name'];
		
		$this->load->view('template/header.php',$header);
		$this->load->view('page/ManageStore/0.php',$data);
		$this->load->view('template/footer.php');

	}




	



}
