<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {



	public function index()
	{ 
        $header['page_name'] = 'Home';
        $header['page_focus'] = 'Dashboard';
        $header['page_menu'] = 0;

		$this->load->view('template/header.php',$header);
		#$this->load->view('page/home.php');
		$this->load->view('template/footer.php');

	}




	



}
