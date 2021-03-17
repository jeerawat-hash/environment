<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageStore extends CI_Controller {



	function __construct()
	{
		parent::__construct(); 
		$this->load->model("Env_Model");

	} 

	public function index()
	{ 
		
		echo $this->Env_Model->testsql();

	}
	public function maps()
	{ 
        $header['page_name'] = 'แผนผังการจัดเก็บขยะ';
        $header['page_focus'] = 'ManageStore';
        $header['page_menu'] = 0;
		$data["page_name"] = $header['page_name'];

		$this->load->view('template/header.php',$header);
		$this->load->view('page/ManageStore/0.php',$data);
		$this->load->view('template/footer.php');

	}
	public function detail()
	{ 
        $header['page_name'] = 'รายละเอียดการปฏิบัติงาน';
        $header['page_focus'] = 'ManageStore';
        $header['page_menu'] = 1;
		$data["page_name"] = $header['page_name'];
		
		$data["Transaction"] = $this->Env_Model->GetDataTransactionLog();

		$this->load->view('template/header.php',$header);
		$this->load->view('page/ManageStore/1.php',$data);
		$this->load->view('template/footer.php');

	}
	public function teams()
	{ 
        $header['page_name'] = 'จัดการกลุ่มผู้ปฏิบัติงาน';
        $header['page_focus'] = 'ManageStore';
        $header['page_menu'] = 2;
		$data["page_name"] = $header['page_name'];
		$data["VehicleNotCreate"] = $this->Env_Model->GetDataVehicleNotCreateGroup();
		$data["MemberNotGroup"] = $this->Env_Model->GetDataMemberNonGroup();
		$data["MemberGroup"] = $this->Env_Model->GetDataMemberWorkGroup();
		$data["GroupData"] = $this->Env_Model->GetDataGroup();

		
		
		$this->load->view('template/header.php',$header);
		$this->load->view('page/ManageStore/2.php',$data);
		$this->load->view('template/footer.php');

	}
	public function report()
	{ 
        $header['page_name'] = 'รายการแจ้งปัญหา';
        $header['page_focus'] = 'ManageStore';
        $header['page_menu'] = 3;
		$data["page_name"] = $header['page_name'];
 
		
		$this->load->view('template/header.php',$header);
		$this->load->view('page/ManageStore/3.php',$data);
		$this->load->view('template/footer.php');

	}
	public function DeleteMemberInGroup()
	{

		$WorkGroupID = $_POST["WorkGroupID"];
		$MemberID = $_POST["MemberID"];
		echo $this->Env_Model->DeleteMemberInGroup($WorkGroupID,$MemberID);

	}
	public function CreateGroup()
	{
		$VehicleID = $_POST["VehicleID"];
		$Remark = $_POST["Remark"];

		echo $this->Env_Model->CreateGroup($VehicleID,$Remark);
 
	}
	public function InsertGroupDetail()
	{

		$WorkGroupID = $_POST["WorkGroupID"];
		$MemberID = $_POST["MemberID"];
		echo $this->Env_Model->InsertGroupDetail($WorkGroupID,$MemberID);
 
	}
	public function GetDataTransaction()
	{

		if($_POST["GroupID"] == 0){

			echo json_encode($this->Env_Model->GetDataTransactionALL());

		}else{

			echo json_encode($this->Env_Model->GetDataTransactionOne($_POST["GroupID"]));

		}
		 
		
	} 
	public function GetDataTransactionSummaryDay()
	{

		echo json_encode($this->Env_Model->GetDataTransactionSummaryDay());


	}
	public function GetDataTransactionSummary()
	{

		echo json_encode($this->Env_Model->GetDataTransactionSummary());


	}
	public function GetDataTransactionLog()
	{

		echo json_encode($this->Env_Model->GetDataTransactionLog());


	}
	public function GetDataTransactionPickupAll()
	{

		echo json_encode($this->Env_Model->GetDataTransactionPickupAll());

	}
	




	



}
