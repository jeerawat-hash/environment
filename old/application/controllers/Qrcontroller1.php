<?php

class Qrcontroller extends CI_Controller
{
  
  function __construct()
  {
    parent::__construct();
    $this->load->model("QRModel"); 
  }

  public function index()
  {
    $this->load->view('webqrcode/header');
    $this->load->view('webqrcode/index');
    $this->load->view('webqrcode/footer');
  }

  public function testdb()
  {
    echo $this->QRModel->testsql();
  }

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
 
  public function getlocation()
  {
    echo json_encode($this->QRModel->getlocation());
  }

  public function GetDatabyID()
  {
    echo json_encode($this->QRModel->GetDatabyID($_POST['id']));
  }
  public function GetDataBinByID()
  {

    #print_r($_POST);
    echo json_encode($this->QRModel->GetDataBinByID($_POST["ID"]));

  }

  public function GetDataSummary()
  {


    echo json_encode($this->QRModel->GetDataSummary());


  }




}
?>