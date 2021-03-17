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
  public function SendDataReport()
  {
 

      $message = "จากคุณ ".$_POST["Name"]."\n".trim($_POST["BinName"])."\n".$_POST["ReportComment"];
  
      notify($message,"DQ1Egmzk6gXlt6rGxtezxPVpqRMsyBEPPU8uLTOxx2C");

      echo $this->Env_Model->CreateDataTransaction->InsertDataReportTrash($_POST["TrashID"],$_POST["ReportComment"],$_POST["ImgUrl"],$_POST["Name"]);

  }
  public function GetDataTrashIsPickup()
  {

    
    echo $this->Env_Model->GetDataTrashIsPickup($_POST["TrashID"]);


  }
  public function GetDataTrashReport()
  {

    
    echo json_encode($this->Env_Model->GetDataTrashReport());


  }
  
   


}



function notify($message,$token){

          $lineapi = $token; 
        $mms =  trim($message); 
        date_default_timezone_set("Asia/Bangkok");
        $con = curl_init();
        curl_setopt( $con, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
        // SSL USE 
        curl_setopt( $con, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt( $con, CURLOPT_SSL_VERIFYPEER, 0); 
        //POST 
        curl_setopt( $con, CURLOPT_POST, 1); 
        curl_setopt( $con, CURLOPT_POSTFIELDS, "message=$mms"); 
        $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'', );
          curl_setopt($con, CURLOPT_HTTPHEADER, $headers); 
        curl_setopt( $con, CURLOPT_RETURNTRANSFER, 1); 
        $result = curl_exec( $con ); 

}
?>