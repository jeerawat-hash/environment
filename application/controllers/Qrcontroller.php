<?php

class Qrcontroller extends CI_Controller
{
  
  function __construct()
  {
    parent::__construct();
    $this->load->model("Env_Model");
  }

  public function index()
  {
    $this->load->view('mobile/header');
    $this->load->view('mobile/index');
    $this->load->view('mobile/footer');
  }
 
  public function GetDataTrashByID()
  { 
    
    echo json_encode($this->Env_Model->GetDataTrashByID($_POST["ID"]));
  
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