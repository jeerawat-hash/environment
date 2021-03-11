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
        JOIN Trash d on a.TrashID = d.ID ")->result(); 
    }
    public function GetDataTransactionOne($TeamID)
    {
        $this->envdb = $this->load->database("envdb",true);

        return $this->envdb->query(" SELECT a.ID as TransacID,a.Lat,a.Lon,c.ID as VehicleID,c.LicensePlate,c.Color,d.Remark FROM `Transaction` a
        JOIN WorkGroup b on a.WorkGroupID = b.ID
        JOIN Vehicle c on b.VehicleID = c.ID
        JOIN Trash d on a.TrashID = d.ID WHERE c.ID = '".$TeamID."' ")->result();

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

        return $this->envdb->query("SELECT  c.ID as VehicleID,c.LicensePlate,c.Color,sum(d.Capacity) as SumCapacity,COUNT(d.Capacity) as CountCapacity,a.StampDate FROM `Transaction` a
        JOIN WorkGroup b on a.WorkGroupID = b.ID
        JOIN Vehicle c on b.VehicleID = c.ID
        JOIN Trash d on a.TrashID = d.ID GROUP BY c.ID,c.LicensePlate,c.Color,a.StampDate")->result();

    }
    public function GetDataMemberWorkGroup()
    {   
        $this->envdb = $this->load->database("envdb",true);

        return $this->envdb->query(" SELECT b.LicensePlate,b.Color,d.Name,d.Telephone FROM jeerawatme_env.WorkGroup a
        join jeerawatme_env.Vehicle b on a.VehicleID = b.ID
        join jeerawatme_env.WorkGroupDetail c on a.ID = c.WorkGroupID
        join jeerawatme_env.Member d on c.MemberID = d.ID ")->result();

    }
    public function GetDataMemberNonGroup()
    {

        $this->envdb = $this->load->database("envdb",true);
        return $this->envdb->query(" SELECT * FROM jeerawatme_env.Member WHERE ID not in ( select MemberID from jeerawatme_env.WorkGroupDetail ) and PositionID = 0 ")->result();
 
    }
    public function CreateGroup($VehicleID,$MemberID,$Remark)
    {   
        $this->envdb = $this->load->database("envdb",true);

        $this->envdb->query(" INSERT INTO jeerawatme_env.WorkGroup (ID, VehicleID, MemberID, Remark) VALUES (NULL, '".$VehicleID."', '".$MemberID."', '".$Remark."') ");
        
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





}

 ?>