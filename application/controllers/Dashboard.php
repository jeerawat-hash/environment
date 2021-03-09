<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {



	public function index()
	{ 
      

	}
	public function summary()
	{ 
        $header['page_name'] = 'ภาพรวมการปฏิบัติงาน';
        $header['page_focus'] = 'Dashboard';
        $header['page_menu'] = 0;
		$data['page_name'] = $header['page_name'];

		$this->load->view('template/header.php',$header);
		$this->load->view('page/Dashboard/0.php',$data);
		$this->load->view('template/footer.php');

	}
	public function collection()
	{ 
        $header['page_name'] = 'ผลรวมการจัดเก็บขยะ';
        $header['page_focus'] = 'Dashboard';
        $header['page_menu'] = 1;
		$data['page_name'] = $header['page_name'];

		$this->load->view('template/header.php',$header);
		$this->load->view('page/Dashboard/1.php',$data);
		$this->load->view('template/footer.php');

	}
	public function garbage()
	{ 
        $header['page_name'] = 'จำนวนถังขยะ';
        $header['page_focus'] = 'Dashboard';
        $header['page_menu'] = 2;
		$data['page_name'] = $header['page_name'];

		$this->load->view('template/header.php',$header);
		$this->load->view('page/Dashboard/2.php',$data);
		$this->load->view('template/footer.php');

	}
	public function vehicle()
	{ 
        $header['page_name'] = 'จำนวนรถเก็บขยะ';
        $header['page_focus'] = 'Dashboard';
        $header['page_menu'] = 3;
		$data['page_name'] = $header['page_name'];

		$this->load->view('template/header.php',$header);
		$this->load->view('page/Dashboard/3.php',$data);
		$this->load->view('template/footer.php');

	}
	public function maintain()
	{ 
        $header['page_name'] = 'ผลการส่งซ่อมบำรุง';
        $header['page_focus'] = 'Dashboard';
        $header['page_menu'] = 4;
		$data['page_name'] = $header['page_name'];

		$this->load->view('template/header.php',$header);
		$this->load->view('page/Dashboard/4.php',$data);
		$this->load->view('template/footer.php');

	}




	



}
