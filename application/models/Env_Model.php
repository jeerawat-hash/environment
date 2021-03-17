<?php  
class Env_Model extends CI_Model
{	
 

    public function testsql()
    {

      $this->envdb = $this->load->database("envdb",true);

        if ($this->envdb) {
          return 1;
        }else{
          return 0;
        }
 
    }
    
    public function InsertDataTrash($Capacity,$Color,$Remark)
    {   
        $this->envdb = $this->load->database("envdb",true);

        $this->envdb->query(" INSERT INTO jeerawatme_env.Trash (ID, Capacity, Color, Remark) VALUES (NULL, '".$Capacity."', '".$Color."', '".$Remark."') ");
        
        return 1;
    }
    public function GetDataTrash()
    {   
        $this->envdb = $this->load->database("envdb",true);

        return $this->envdb->query(" select * from  jeerawatme_env.Trash ")->result();
         
    }
    public function InsertDataVehicle($LicensePlate,$Color)
    {   
        $this->envdb = $this->load->database("envdb",true);

        $this->envdb->query(" INSERT INTO jeerawatme_env.`Vehicle` (`ID`, `LicensePlate`, `Color`) VALUES (NULL, '".$LicensePlate."', '".$Color."') ");
        
        return 1;
    }
    public function GetDataVehicle()
    {   
        $this->envdb = $this->load->database("envdb",true);

        return $this->envdb->query(" select * from  jeerawatme_env.Vehicle ")->result();
         
    }
    public function InsertDataMemberManage($Name,$Telephone)
    {   
        $this->envdb = $this->load->database("envdb",true);

        $this->envdb->query(" INSERT INTO jeerawatme_env.Member (ID, Name, PositionID, Telephone) VALUES (NULL, '".$Name."', '1', '".$Telephone."') ");
        
        return 1;
    }

    public function GetDataMember()
    {   
        $this->envdb = $this->load->database("envdb",true);

        return $this->envdb->query(" select * from  jeerawatme_env.Member   where PositionID = '1' ")->result();
         
    }  
    public function InsertDataMemberWork($Name,$Telephone)
    {   
        $this->envdb = $this->load->database("envdb",true);

        $this->envdb->query(" INSERT INTO jeerawatme_env.Member (ID, Name, PositionID, Telephone) VALUES (NULL, '".$Name."', '0', '".$Telephone."') ");
        
        return 1;
    }
    public function GetDataMemberWork()
    {   
        $this->envdb = $this->load->database("envdb",true);

        return $this->envdb->query(" select * from  jeerawatme_env.Member    where PositionID = '0' ")->result();
         
    }  
    public function UpdateAuthentication($LineID,$ID)
    {

        $this->envdb = $this->load->database("envdb",true);
        $this->envdb->query(" UPDATE jeerawatme_env.`Member` SET `LineID` = '".$LineID."' WHERE `ID` = ".$ID." ");
        return 1;

    }
    public function GetDataTransactionALL()
    {
        $this->envdb = $this->load->database("envdb",true);

        return $this->envdb->query(" SELECT a.ID as TransacID,a.Lat,a.Lon,c.ID as VehicleID,c.LicensePlate,c.Color,d.Remark FROM `Transaction` a
        JOIN WorkGroup b on a.WorkGroupID = b.ID
        JOIN Vehicle c on b.VehicleID = c.ID
        JOIN Trash d on a.TrashID = d.ID WHERE CAST(a.StampDate as date) = CURRENT_DATE() ")->result(); 
    }
    public function GetDataTransactionOne($TeamID)
    {
        $this->envdb = $this->load->database("envdb",true);

        return $this->envdb->query(" SELECT a.ID as TransacID,a.Lat,a.Lon,c.ID as VehicleID,c.LicensePlate,c.Color,d.Remark FROM `Transaction` a
        JOIN WorkGroup b on a.WorkGroupID = b.ID
        JOIN Vehicle c on b.VehicleID = c.ID
        JOIN Trash d on a.TrashID = d.ID WHERE c.ID = '".$TeamID."' and CAST(a.StampDate as date) = CURRENT_DATE() ")->result();

    }
    public function GetDataTransactionSummaryDay()
    {
        $this->envdb = $this->load->database("envdb",true);

        return $this->envdb->query("SELECT  c.ID as VehicleID,c.LicensePlate,c.Color,sum(d.Capacity) as SumCapacity,COUNT(d.Capacity) as CountCapacity FROM `Transaction` a
        JOIN WorkGroup b on a.WorkGroupID = b.ID
        JOIN Vehicle c on b.VehicleID = c.ID
        JOIN Trash d on a.TrashID = d.ID WHERE CAST(a.StampDate as date) = CURRENT_DATE() GROUP BY c.ID,c.LicensePlate,c.Color ")->result();

    }
    public function GetDataTransactionSummary()
    {
        $this->envdb = $this->load->database("envdb",true);

        return $this->envdb->query("SELECT  c.ID as VehicleID,c.LicensePlate,c.Color,sum(d.Capacity) as SumCapacity,COUNT(d.Capacity) as CountCapacity FROM `Transaction` a
        JOIN WorkGroup b on a.WorkGroupID = b.ID
        JOIN Vehicle c on b.VehicleID = c.ID
        JOIN Trash d on a.TrashID = d.ID GROUP BY c.ID,c.LicensePlate,c.Color")->result();

    }
    public function GetDataTransactionLog()
    {
        $this->envdb = $this->load->database("envdb",true);

        return $this->envdb->query("SELECT  c.ID as VehicleID,c.LicensePlate,c.Color,sum(d.Capacity) as SumCapacity,COUNT(d.Capacity) as CountCapacity,cast(a.StampDate as Date) as StampDate FROM `Transaction` a
        JOIN WorkGroup b on a.WorkGroupID = b.ID
        JOIN Vehicle c on b.VehicleID = c.ID
        JOIN Trash d on a.TrashID = d.ID GROUP BY c.ID,c.LicensePlate,c.Color,cast(a.StampDate as date)")->result();

    }
    public function GetDataMemberWorkGroup()
    {   
        $this->envdb = $this->load->database("envdb",true);

        return $this->envdb->query(" SELECT c.WorkGroupID,c.MemberID,b.LicensePlate,b.Color,d.Name,d.Telephone,a.Remark FROM jeerawatme_env.WorkGroup a
        join jeerawatme_env.Vehicle b on a.VehicleID = b.ID
        join jeerawatme_env.WorkGroupDetail c on a.ID = c.WorkGroupID
        join jeerawatme_env.Member d on c.MemberID = d.ID ")->result();

    } 
    public function CreateGroup($VehicleID,$Remark)
    {   
        $this->envdb = $this->load->database("envdb",true);

        $this->envdb->query(" INSERT INTO jeerawatme_env.WorkGroup (ID, VehicleID, Remark) VALUES (NULL, '".$VehicleID."', '".$Remark."') ");
        
        return 1;
    }
    public function InsertGroupDetail($WorkGroupID,$MemberID)
    {   
        $this->envdb = $this->load->database("envdb",true);

        $this->envdb->query(" INSERT INTO jeerawatme_env.`WorkGroupDetail` (`WorkGroupID`, `MemberID`) VALUES ('".$WorkGroupID."', '".$MemberID."') ");
        
        return 1;
    }
    public function DeleteMemberInGroup($WorkGroupID,$MemberID)
    {

        $this->envdb = $this->load->database("envdb",true);
        return $this->envdb->query(" DELETE FROM jeerawatme_env.`WorkGroupDetail` WHERE WorkGroupID = ".$WorkGroupID." and MemberID = ".$MemberID." ");
  
    }
    public function GetDataVehicleNotCreateGroup()
    {

        $this->envdb = $this->load->database("envdb",true);
        return $this->envdb->query(" SELECT * FROM jeerawatme_env.`Vehicle` WHERE ID not IN( select VehicleID from jeerawatme_env.WorkGroup ) ")->result();
         
    }
    public function GetDataMemberNonGroup()
    {

        $this->envdb = $this->load->database("envdb",true);
        return $this->envdb->query(" SELECT * FROM jeerawatme_env.Member WHERE ID not in ( select MemberID from jeerawatme_env.WorkGroupDetail ) and PositionID = 0 ")->result();
 
    }
    public function GetDataGroup()
    {

        $this->envdb = $this->load->database("envdb",true);
        return $this->envdb->query(" SELECT a.ID,b.LicensePlate,a.Remark FROM `WorkGroup` a JOIN Vehicle b on a.VehicleID = b.ID ")->result();
 
    }
    public function AuthenCheck($MemberID)
    {

        $this->envdb = $this->load->database("envdb",true);
        return $this->envdb->query("  SELECT * FROM `Member` WHERE ID = ".$MemberID." and LineID = '' ")->num_rows();
 
    }
    public function GetDataTrashByID($ID)
    {

        $this->envdb = $this->load->database("envdb",true);
        return $this->envdb->query("  SELECT Remark as Name FROM `Trash` WHERE ID = '".$ID."' ")->result();
 
    }
    public function GetDataMemberPreAuthen($ID)
    {
        $this->envdb = $this->load->database("envdb",true);
        return $this->envdb->query("  SELECT ID,Name,(case WHEN PositionID = 1 then 'ผู้ปฏิบัติงาน' ELSE 'ผู้ดูแลระบบ' end) as Position,LineID FROM `Member` WHERE ID = '".$ID."' ")->result();
        
    }
    public function GetDataMemberPreAuthenCheck($LineID)
    {
        $this->envdb = $this->load->database("envdb",true);
        return $this->envdb->query("  SELECT * FROM `Member` WHERE LineID = '".$LineID."' ")->num_rows();
        
    }
    public function RegisterMemberByQrCode($ID,$LineID)
    {
        $this->envdb = $this->load->database("envdb",true);
        $this->envdb->query(" UPDATE `Member` SET `LineID` = '".$LineID."' WHERE `Member`.`ID` = '".$ID."' ");
        return 1;
    }
    public function GetDataWorkGroupByLineID($LineID)
    {

        $this->envdb = $this->load->database("envdb",true);
        return $this->envdb->query(" SELECT b.WorkGroupID,a.LineID FROM `Member` a 
        join WorkGroupDetail b on a.ID = b.MemberID
        WHERE a.LineID = '".$LineID."' ")->result();
 
    }
    public function CreateDataTransaction($WorkGroupID,$TrashID,$Lat,$Lon)
    {

        $this->envdb = $this->load->database("envdb",true);
        $this->envdb->query(" INSERT INTO `Transaction` (`ID`, `WorkGroupID`, `TrashID`, `Lat`, `Lon`, `StampDate`) VALUES (NULL, '".$WorkGroupID."', '".$TrashID."', '".$Lat."', '".$Lon."', CURRENT_TIMESTAMP) ");
        return 1;
 
    }
    public function GetDataTrashIsPickup($TrashID)
    {
        $this->envdb = $this->load->database("envdb",true);
        return $this->envdb->query(" SELECT * FROM `Transaction` WHERE TrashID = '".$TrashID."' and cast(StampDate as Date) = CURRENT_DATE() ")->num_rows();
        
    }
    public function GetDataTransactionPickupAll()
    {
        $this->envdb = $this->load->database("envdb",true);
        return $this->envdb->query(" SELECT a.ID,c.Color,c.LicensePlate,d.Remark,d.Capacity as Trash,a.StampDate FROM `Transaction` a
        JOIN WorkGroup b on a.WorkGroupID = b.ID
        JOIN Vehicle c on b.VehicleID = c.ID
        JOIN Trash d on a.TrashID = d.ID WHERE CAST(a.StampDate as date) = CURRENT_DATE() ORDER BY a.ID desc ")->result();
        
    }


    

    






}

 ?>