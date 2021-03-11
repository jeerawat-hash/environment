<?php 

class MController extends CI_Controller
{
   
  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('webmanage/header');
    $this->load->view('webmanage/index');
    $this->load->view('webmanage/footer');
  }

  public function collection()
  {
    $this->load->view('webmanage/header');
    $this->load->view('webmanage/collection');
    $this->load->view('webmanage/footer');
  }

}
  
?>