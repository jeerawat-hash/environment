<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageSystem extends CI_Controller {



	public function index()
	{ 
 


	}
    public function employee()
	{ 
        $header['page_name'] = 'ผู้ใช้งานระบบ&ผู้ปฏิบัติงาน';
        $header['page_focus'] = 'ManageSystem';
        $header['page_menu'] = 0;

		$this->load->view('template/header.php',$header);
		#$this->load->view('page/home.php');
		$this->load->view('template/footer.php');

	}
    public function vehicle()
	{ 
        $header['page_name'] = 'ข้อมูลรถขยะ';
        $header['page_focus'] = 'ManageSystem';
        $header['page_menu'] = 1;

		$this->load->view('template/header.php',$header);
		#$this->load->view('page/home.php');
		$this->load->view('template/footer.php');

	}
    public function garbage()
	{ 
        $header['page_name'] = 'ข้อมูลถังขยะ';
        $header['page_focus'] = 'ManageSystem';
        $header['page_menu'] = 2;

		$this->load->view('template/header.php',$header);
		#$this->load->view('page/home.php');
		$this->load->view('template/footer.php');

	}




	



}
