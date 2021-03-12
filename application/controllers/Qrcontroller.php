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
  public function register()
  {
    $this->load->view('mobile/header');
    $this->load->view('mobile/reg');
    $this->load->view('mobile/footer');
  }
  public function gps()
  { 
    $this->load->view('mobile/gps'); 
  }
 
  public function GetDataTrashByID()
  { 

    echo json_encode($this->Env_Model->GetDataTrashByID($_POST["ID"]));
  
  }
  public function GetDataMemberPreAuthen()
  {
    
    echo json_encode($this->Env_Model->GetDataMemberPreAuthen($_POST["ID"]));

  }
  public function GetDataMemberPreAuthenCheck()
  {

    echo $this->Env_Model->GetDataMemberPreAuthenCheck($_POST["LineID"]);
 
  }
  public function RegisterMemberByQrCode()
  {
    $ID = $_POST["MemberID"];
    $LineID = $_POST["LineID"];
    echo $this->Env_Model->RegisterMemberByQrCode($ID,$LineID);
 
  }
  public function GetDataWorkGroupByLineID()
  {
    echo json_encode($this->Env_Model->GetDataWorkGroupByLineID($_POST["LineID"]));
  }
  public function CreateDataTransaction()
  {
 
    echo $this->Env_Model->CreateDataTransaction($_POST["WorkGroupID"],$_POST["TrashID"],$_POST["Lat"],$_POST["Lon"]);
 
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