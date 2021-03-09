<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageStore extends CI_Controller {



	public function index()
	{ 
        $header['page_name'] = 'ManageStore';
        $header['page_focus'] = 'ManageStore';
        $header['page_menu'] = 0;

		$this->load->view('template/header.php',$header);
		#$this->load->view('page/home.php');
		$this->load->view('template/footer.php');

	}




	



}
