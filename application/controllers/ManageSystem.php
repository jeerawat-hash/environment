<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageSystem extends CI_Controller {



	public function index()
	{ 
        $header['page_name'] = 'ManageSystem';
        $header['page_focus'] = 'ManageSystem';
        $header['page_menu'] = 1;

		$this->load->view('template/header.php',$header);
		#$this->load->view('page/home.php');
		$this->load->view('template/footer.php');

	}




	



}
