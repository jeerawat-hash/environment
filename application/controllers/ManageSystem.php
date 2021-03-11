<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageSystem extends CI_Controller {


	function __construct()
	{
		parent::__construct(); 
		$this->load->model("Env_Model");

	} 

	public function index()
	{ 
 


	}
    public function employee()
	{ 
        $header['page_name'] = 'ผู้ใช้งานระบบ&ผู้ปฏิบัติงาน';
        $header['page_focus'] = 'ManageSystem';
        $header['page_menu'] = 0;
		$data['page_name'] = $header['page_name'];
        $data['member'] = $this->Env_Model->GetDataMember();
        $data['memberwork'] = $this->Env_Model->GetDataMemberWork();		
		$this->load->view('template/header.php',$header); 
		$this->load->view('page/ManageSystem/0.php',$data);
		$this->load->view('template/footer.php');

	}
    public function vehicle()
	{ 
        $header['page_name'] = 'ข้อมูลรถขยะ';
        $header['page_focus'] = 'ManageSystem';
        $header['page_menu'] = 1;
		$data['page_name'] = $header['page_name'];
        $data['vehicled'] = $this->Env_Model->GetDataVehicle();
		$this->load->view('template/header.php',$header); 
		$this->load->view('page/ManageSystem/1.php',$data);
		$this->load->view('template/footer.php');

	}
    public function garbage()
	{ 
        $header['page_name'] = 'ข้อมูลถังขยะ';
        $header['page_focus'] = 'ManageSystem';
        $header['page_menu'] = 2;
		$data['page_name'] = $header['page_name'];
        $data['trash'] = $this->Env_Model->GetDataTrash();

		$this->load->view('template/header.php',$header); 
		$this->load->view('page/ManageSystem/2.php',$data);
		$this->load->view('template/footer.php');

	}

	public function InsertDataTrash()
	{   
	   if ( !isset($_POST["Capacity"])) {
		  echo "Paramiter Invalid";
		 exit();
	   }

		  $Capacity  =   trim($_POST["Capacity"]) ;  
		  $Color  =   trim($_POST["Color"]) ;  
		  $Remark  =   trim($_POST["Remark"]) ;  
		  $result =   $this->Env_Model->InsertDataTrash($Capacity,$Color,$Remark); 
		  return 1; 
	}
	 
	public function InsertDataVehicle()
	{   
	   if ( !isset($_POST["LicensePlate"])) {
		  echo "Paramiter Invalid";
		 exit();
	   }
  
		  $LicensePlate  =   trim($_POST["LicensePlate"]) ;  
		  $Color  =   trim($_POST["Color"]) ;  
		  $result =   $this->Env_Model->InsertDataVehicle($LicensePlate,$Color); 
		  return 1; 
	}

	
	public function InsertDataMemberManage()
	{   
	   if ( !isset($_POST["Name"])) {
		  echo "Paramiter Invalid";
		 exit();
	   }
  
		  $Name  =   trim($_POST["Name"]) ;  
		  $Telephone  =   trim($_POST["Telephone"]) ;  
		  $result =   $this->Env_Model->InsertDataMemberManage($Name,$Telephone); 
		  return 1; 
	}


	public function InsertDataMemberWork()
	{   
	   if ( !isset($_POST["Name"])) {
		  echo "Paramiter Invalid";
		 exit();
	   }
  
		  $Name  =   trim($_POST["Name"]) ;  
		  $Telephone  =   trim($_POST["Telephone"]) ;  
		  $result =   $this->Env_Model->InsertDataMemberWork($Name,$Telephone); 
		  return 1; 
	}
	public function AuthenCheck()
	{

		echo $this->Env_Model->AuthenCheck($_POST["MemberID"]);

	}
	 


}
