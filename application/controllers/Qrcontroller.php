<?php

class Qrcontroller extends CI_Controller
{
  
  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('mobile/header');
    $this->load->view('mobile/index');
    $this->load->view('mobile/footer');
  }
 

/*
  public function insertlocation()
  {
    $Latitude = $_POST["Latitude"];
    $Longitude = $_POST["Longitude"];
    $Img = $_POST["Img"];
    $Textpf = $_POST["Textpf"];
    $BinID = $_POST["BinID"];
    $UserID = $_POST["UserID"];
    echo $this->QRModel->insertlocation( $UserID,$BinID,$Latitude,$Longitude,$Img,$Textpf);

  }
  */



}
?>