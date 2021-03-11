<!doctype html>
<html class="no-js" lang="en">
<?php   include "conf.inc.php";
       require "class.php"; 


       $AS400 = new SQL($type,$host,$username,$password,$db);
        $AS400->connect();
  $DCNO  = $_GET['DCNO'];
    
        $DLTEXT_A1_1 =    odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'A1' and dldcno = '".$DCNO."' ");
        $DLTEXT_A1_A = odbc_fetch_array($DLTEXT_A1_1);
        $DLTEXT_A1 = iconv("windows-874","utf-8",$DLTEXT_A1_A["DLTEXT"]);            
         
     $DLTEXT_AB17_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AB17' and dldcno = '".$DCNO."' ");
     $DLTEXT_AB17_A = odbc_fetch_array($DLTEXT_AB17_1);
     $DLTEXT_AB17 = iconv("windows-874","utf-8",$DLTEXT_AB17_A["DLTEXT"]);

      $DLTEXT_AF17_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AF17' and dldcno = '".$DCNO."' ");
     $DLTEXT_AF17_A = odbc_fetch_array($DLTEXT_AF17_1);
        $DLTEXT_AF17 = iconv("windows-874","utf-8",$DLTEXT_AF17_A["DLTEXT"]);
      $DLTEXT_H20_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'H20' and dldcno = '".$DCNO."' ");
     $DLTEXT_H20_A = odbc_fetch_array($DLTEXT_H20_1);
        $DLTEXT_H20 = iconv("windows-874","utf-8",$DLTEXT_H20_A["DLTEXT"]);
      $DLTEXT_L20_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'L20' and dldcno = '".$DCNO."' ");
     $DLTEXT_L20_A = odbc_fetch_array($DLTEXT_L20_1);
        $DLTEXT_L20 = iconv("windows-874","utf-8",$DLTEXT_L20_A["DLTEXT"]);
      $DLTEXT_P20_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'P20' and dldcno = '".$DCNO."' ");
     $DLTEXT_P20_A = odbc_fetch_array($DLTEXT_P20_1);
        $DLTEXT_P20 = iconv("windows-874","utf-8",$DLTEXT_P20_A["DLTEXT"]);
      $DLTEXT_X20_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'X20' and dldcno = '".$DCNO."' ");
     $DLTEXT_X20_A = odbc_fetch_array($DLTEXT_X20_1);
        $DLTEXT_X20 = iconv("windows-874","utf-8",$DLTEXT_X20_A["DLTEXT"]);
      $DLTEXT_AF20_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AF20' and dldcno = '".$DCNO."' ");
     $DLTEXT_AF20_A = odbc_fetch_array($DLTEXT_AF20_1);
        $DLTEXT_AF20 = iconv("windows-874","utf-8",$DLTEXT_AF20_A["DLTEXT"]);
      $DLTEXT_AB20_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AB20' and dldcno = '".$DCNO."' ");
     $DLTEXT_AB20_A = odbc_fetch_array($DLTEXT_AB20_1);
        $DLTEXT_AB20 = iconv("windows-874","utf-8",$DLTEXT_AB20_A["DLTEXT"]);
      $DLTEXT_I25_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'I25' and dldcno = '".$DCNO."' ");
     $DLTEXT_I25_A = odbc_fetch_array($DLTEXT_I25_1);
        $DLTEXT_I25 = iconv("windows-874","utf-8",$DLTEXT_I25_A["DLTEXT"]);
      $DLTEXT_I26_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'I26' and dldcno = '".$DCNO."' ");
      $DLTEXT_I26_A = odbc_fetch_array($DLTEXT_I26_1);
        $DLTEXT_I26_1 = iconv("windows-874","utf-8",$DLTEXT_I26_A["DLTEXT"]);
      $DLTEXT_I29_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'I29' and dldcno = '".$DCNO."' ");
      $DLTEXT_I29_A = odbc_fetch_array($DLTEXT_I29_1);
        $DLTEXT_I29 = iconv("windows-874","utf-8",$DLTEXT_I29_A["DLTEXT"]);
      $DLTEXT_I30_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'I30' and dldcno = '".$DCNO."' ");
      $DLTEXT_I30_A = odbc_fetch_array($DLTEXT_I30_1);
        $DLTEXT_I30 = iconv("windows-874","utf-8",$DLTEXT_I30_A["DLTEXT"]);
      $DLTEXT_I31_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'I31' and dldcno = '".$DCNO."' ");
      $DLTEXT_I31_A = odbc_fetch_array($DLTEXT_I31_1);
        $DLTEXT_I31 = iconv("windows-874","utf-8",$DLTEXT_I31_A["DLTEXT"]);
      $DLTEXT_I32_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'I32' and dldcno = '".$DCNO."' ");
      $DLTEXT_I32_A = odbc_fetch_array($DLTEXT_I32_1);
        $DLTEXT_I32 = iconv("windows-874","utf-8",$DLTEXT_I32_A["DLTEXT"]);
      $DLTEXT_I33_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'I33' and dldcno = '".$DCNO."' ");
      $DLTEXT_I33_A = odbc_fetch_array($DLTEXT_I33_1);
        $DLTEXT_I33 = iconv("windows-874","utf-8",$DLTEXT_I33_A["DLTEXT"]);
      $DLTEXT_I34_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'I34' and dldcno = '".$DCNO."' ");
      $DLTEXT_I34_A = odbc_fetch_array($DLTEXT_I34_1);
        $DLTEXT_I34 = iconv("windows-874","utf-8",$DLTEXT_I34_A["DLTEXT"]);
      $DLTEXT_I27_1 = odbc_exec($conn,"select DLVALU from smcdta.RPRTDL where dlcell = 'I27' and dldcno = '".$DCNO."' ");
      $DLTEXT_I27_A = odbc_fetch_array($DLTEXT_I27_1);
        $DLTEXT_I27 = iconv("windows-874","utf-8",$DLTEXT_I27_A["DLTEXT"]);
      $DLTEXT_I28_1 = odbc_exec($conn,"select DLVALU from smcdta.RPRTDL where dlcell = 'I28' and dldcno ='".$DCNO."' ");
      $DLTEXT_I28_A = odbc_fetch_array($DLTEXT_I28_1);
        $DLTEXT_I28 = iconv("windows-874","utf-8",$DLTEXT_I28_A["DLTEXT"]);
      $DLTEXT_H48_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'H48' and dldcno = '".$DCNO."' ");
      $DLTEXT_H48_A = odbc_fetch_array($DLTEXT_H48_1);
        $DLTEXT_H48 = iconv("windows-874","utf-8",$DLTEXT_H48_A["DLTEXT"]);
      $DLTEXT_H49_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'H49' and dldcno = '".$DCNO."' ");
      $DLTEXT_H49_A = odbc_fetch_array($DLTEXT_H49_1);
        $DLTEXT_H49 = iconv("windows-874","utf-8",$DLTEXT_H49_A["DLTEXT"]);
      $DLTEXT_H50_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'H50' and dldcno = '".$DCNO."' ");
      $DLTEXT_H50_A = odbc_fetch_array($DLTEXT_H50_1);
        $DLTEXT_H50 = iconv("windows-874","utf-8",$DLTEXT_H50_A["DLTEXT"]);
      $DLTEXT_H51_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'H51' and dldcno = '".$DCNO."' ");
      $DLTEXT_H51_A = odbc_fetch_array($DLTEXT_H51_1);
        $DLTEXT_H51 = iconv("windows-874","utf-8",$DLTEXT_H51_A["DLTEXT"]);
      $DLTEXT_H52_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'H52' and dldcno = '".$DCNO."' ");
      $DLTEXT_H52_A = odbc_fetch_array($DLTEXT_H52_1);
        $DLTEXT_H52 = iconv("windows-874","utf-8",$DLTEXT_H52_A["DLTEXT"]);
      $DLTEXT_H53_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'H53' and dldcno = '".$DCNO."' ");
      $DLTEXT_H53_A = odbc_fetch_array($DLTEXT_H53_1);
        $DLTEXT_H53 = iconv("windows-874","utf-8",$DLTEXT_H53_A["DLTEXT"]);
      $DLTEXT_H54_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'H54' and dldcno = '".$DCNO."' ");
      $DLTEXT_H54_A = odbc_fetch_array($DLTEXT_H54_1);
        $DLTEXT_H54 = iconv("windows-874","utf-8",$DLTEXT_H54_A["DLTEXT"]);
      $DLTEXT_T17_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'T17' and dldcno = '".$DCNO."' ");
      $DLTEXT_T17_A = odbc_fetch_array($DLTEXT_T17_1);
        $DLTEXT_T17 = iconv("windows-874","utf-8",$DLTEXT_T17_A["DLTEXT"]);
      $DLTEXT_P17_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'P17' and dldcno = '".$DCNO."' ");
      $DLTEXT_P17_A = odbc_fetch_array($DLTEXT_P17_1);
        $DLTEXT_P17 = iconv("windows-874","utf-8",$DLTEXT_P17_A["DLTEXT"]);
      $DLTEXT_L17_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'L17' and dldcno = '".$DCNO."' ");
      $DLTEXT_L17_A = odbc_fetch_array($DLTEXT_L17_1);
        $DLTEXT_L17 = iconv("windows-874","utf-8",$DLTEXT_L17_A["DLTEXT"]);
      $DLTEXT_H17_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'H17' and dldcno = '".$DCNO."' ");
      $DLTEXT_H17_A = odbc_fetch_array($DLTEXT_H17_1);
        $DLTEXT_H17 = iconv("windows-874","utf-8",$DLTEXT_H17_A["DLTEXT"]);
      $DLTEXT_AA25_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AA25' and dldcno = '".$DCNO."' ");
      $DLTEXT_AA25_A = odbc_fetch_array($DLTEXT_AA25_1);
        $DLTEXT_AA25 = iconv("windows-874","utf-8",$DLTEXT_AA25_A["DLTEXT"]);
      $DLTEXT_AA24_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AA24' and dldcno = '".$DCNO."' ");
      $DLTEXT_AA24_A = odbc_fetch_array($DLTEXT_AA24_1);
        $DLTEXT_AA24 = iconv("windows-874","utf-8",$DLTEXT_AA24_A["DLTEXT"]);
      $DLTEXT_AA26_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AA26' and dldcno = '".$DCNO."' ");
      $DLTEXT_AA26_A = odbc_fetch_array($DLTEXT_AA26_1);
        $DLTEXT_AA26 = iconv("windows-874","utf-8",$DLTEXT_AA26_A["DLTEXT"]);
      $DLTEXT_AA27_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AA27' and dldcno = '".$DCNO."' ");
      $DLTEXT_AA27_A = odbc_fetch_array($DLTEXT_AA27_1);
        $DLTEXT_AA27 = iconv("windows-874","utf-8",$DLTEXT_AA27_A["DLTEXT"]);
      $DLTEXT_AA28_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AA28' and dldcno = '".$DCNO."' ");
      $DLTEXT_AA28_A = odbc_fetch_array($DLTEXT_AA28_1);
        $DLTEXT_AA28 = iconv("windows-874","utf-8",$DLTEXT_AA28_A["DLTEXT"]);
      $DLTEXT_AA29_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AA29' and dldcno = '".$DCNO."' ");
      $DLTEXT_AA29_A = odbc_fetch_array($DLTEXT_AA29_1);
        $DLTEXT_AA29 = iconv("windows-874","utf-8",$DLTEXT_AA29_A["DLTEXT"]);
      $DLTEXT_AA30_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AA30' and dldcno = '".$DCNO."' ");
      $DLTEXT_AA30_A = odbc_fetch_array($DLTEXT_AA30_1);
        $DLTEXT_AA30 = iconv("windows-874","utf-8",$DLTEXT_AA30_A["DLTEXT"]);
      $DLTEXT_AA31_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AA31' and dldcno = '".$DCNO."' ");
      $DLTEXT_AA31_A = odbc_fetch_array($DLTEXT_AA31_1);
        $DLTEXT_AA31 = iconv("windows-874","utf-8",$DLTEXT_AA31_A["DLTEXT"]);
      $DLTEXT_AA32_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AA32' and dldcno = '".$DCNO."' ");
      $DLTEXT_AA32_A = odbc_fetch_array($DLTEXT_AA32_1);
        $DLTEXT_AA32 = iconv("windows-874","utf-8",$DLTEXT_AA32_A["DLTEXT"]);
      $DLTEXT_AA33_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AA33' and dldcno = '".$DCNO."' ");
      $DLTEXT_AA33_A = odbc_fetch_array($DLTEXT_AA33_1);
        $DLTEXT_AA33 = iconv("windows-874","utf-8",$DLTEXT_AA33_A["DLTEXT"]);
      $DLTEXT_AA34_1 = odbc_exec($conn,"select DLVALU  from smcdta.RPRTDL where dlcell = 'AA34' and dldcno = '".$DCNO."' ");
      $DLTEXT_AA34_A = odbc_fetch_array($DLTEXT_AA34_1);
        $DLTEXT_AA34 = iconv("windows-874","utf-8",$DLTEXT_AA34_A["DLVALU"]);
      $DLTEXT_AF2_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AF2' and dldcno = '".$DCNO."' ");
      $DLTEXT_AF2_A = odbc_fetch_array($DLTEXT_AF2_1);
        $DLTEXT_AF2 = iconv("windows-874","utf-8",$DLTEXT_AF2_A["DLTEXT"]);
      $DLTEXT_AF3_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AF3' and dldcno = '".$DCNO."' ");
      $DLTEXT_AF3_A = odbc_fetch_array($DLTEXT_AF3_1);
        $DLTEXT_AF3 = iconv("windows-874","utf-8",$DLTEXT_AF3_A["DLTEXT"]);
      $DLTEXT_AF4_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AF4' and dldcno = '".$DCNO."' ");
      $DLTEXT_AF4_A = odbc_fetch_array($DLTEXT_AF4_1);
        $DLTEXT_AF4 = iconv("windows-874","utf-8",$DLTEXT_AF4_A["DLTEXT"]);
      $DLTEXT_G45_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'G45' and dldcno = '".$DCNO."' ");
      $DLTEXT_G45_A = odbc_fetch_array($DLTEXT_G45_1);
        $DLTEXT_G45 = iconv("windows-874","utf-8",$DLTEXT_G45_A["DLTEXT"]);
      $DLTEXT_G46_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'G46' and dldcno = '".$DCNO."' ");
      $DLTEXT_G46_A = odbc_fetch_array($DLTEXT_G46_1);
        $DLTEXT_G46 = iconv("windows-874","utf-8",$DLTEXT_G46_A["DLTEXT"]);
      $DLTEXT_H26_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'H26' and dldcno = '".$DCNO."' ");
      $DLTEXT_H26_A = odbc_fetch_array($DLTEXT_H26_1);
        $DLTEXT_H26 = iconv("windows-874","utf-8",$DLTEXT_H26_A["DLTEXT"]);
      $DLTEXT_H63_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'H63' and dldcno = '".$DCNO."' ");
      $DLTEXT_H63_A = odbc_fetch_array($DLTEXT_H63_1);
        $DLTEXT_H63 = iconv("windows-874","utf-8",$DLTEXT_H63_A["DLTEXT"]);
      $DLTEXT_AF45_1 = odbc_exec($conn,"select DLVALU from smcdta.RPRTDL where dlcell = 'AF45' and dldcno = '".$DCNO."' ");
      $DLTEXT_AF45_A = odbc_fetch_array($DLTEXT_AF45_1);
        $DLTEXT_AF45 = iconv("windows-874","utf-8",$DLTEXT_AF45_A["DLTEXT"]);
      $DLTEXT_H64_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'H64' and dldcno = '".$DCNO."' ");
      $DLTEXT_H64_A = odbc_fetch_array($DLTEXT_H64_1);
        $DLTEXT_H64 = iconv("windows-874","utf-8",$DLTEXT_H64_A["DLTEXT"]);
      $DLTEXT_N45_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'N45' and dldcno = '".$DCNO."' ");
      $DLTEXT_N45_A = odbc_fetch_array($DLTEXT_N45_1);
        $DLTEXT_N45 = iconv("windows-874","utf-8",$DLTEXT_N45_A["DLTEXT"]);
      $LTEXT_O53_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'O53' and dldcno = '".$DCNO."' ");
      $DLTEXT_O53_A = odbc_fetch_array($LTEXT_O53_1);
        $DLTEXT_O53 = iconv("windows-874","utf-8",$DLTEXT_O53_A["DLTEXT"]);
      $DLTEXT_O54_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'O54' and dldcno = '".$DCNO."' ");
      $DLTEXT_O54_A = odbc_fetch_array($DLTEXT_O54_1);
        $DLTEXT_O54 = iconv("windows-874","utf-8",$DLTEXT_O54_A["DLTEXT"]);
      $DLTEXT_O55_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'O55' and dldcno = '".$DCNO."' ");
      $DLTEXT_O55_A = odbc_fetch_array($DLTEXT_O55_1);
        $DLTEXT_O55 = iconv("windows-874","utf-8",$DLTEXT_O55_A["DLTEXT"]);
      $DLTEXT_O56_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'O56' and dldcno = '".$DCNO."' ");
      $DLTEXT_O56_A = odbc_fetch_array($DLTEXT_O56_1);
        $DLTEXT_O56 = iconv("windows-874","utf-8",$DLTEXT_O56_A["DLTEXT"]);
      $DLTEXT_O57_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'O57' and dldcno = '".$DCNO."' ");
      $DLTEXT_O57_A = odbc_fetch_array($DLTEXT_O57_1);
        $DLTEXT_O57 = iconv("windows-874","utf-8",$DLTEXT_O57_A["DLTEXT"]);
      $DLTEXT_U46_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'U46' and dldcno = '".$DCNO."' ");
      $DLTEXT_U46_A = odbc_fetch_array($DLTEXT_U46_1);
        $DLTEXT_U46 = iconv("windows-874","utf-8",$DLTEXT_U46_A["DLTEXT"]);
      $DLTEXT_V54_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'V54' and dldcno = '".$DCNO."' ");
      $DLTEXT_V54_A = odbc_fetch_array($DLTEXT_V54_1);
        $DLTEXT_V54 = iconv("windows-874","utf-8",$DLTEXT_V54_A["DLTEXT"]);
      $DLTEXT_V55_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'V55' and dldcno = '".$DCNO."' ");
      $DLTEXT_V55_A = odbc_fetch_array($DLTEXT_V55_1);
        $DLTEXT_V55 = iconv("windows-874","utf-8",$DLTEXT_V55_A["DLTEXT"]);
      $DLTEXT_X17_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'X17' and dldcno = '".$DCNO."' ");
      $DLTEXT_X17_A = odbc_fetch_array($DLTEXT_X17_1);
        $DLTEXT_X17 = iconv("windows-874","utf-8",$DLTEXT_X17_A["DLTEXT"]);
      $DLTEXT_T20_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'T20' and dldcno = '".$DCNO."' ");
      $DLTEXT_T20_A = odbc_fetch_array($DLTEXT_T20_1);
        $DLTEXT_T20 = iconv("windows-874","utf-8",$DLTEXT_T20_A["DLTEXT"]);
      $DLTEXT_R41_1 = odbc_exec($conn,"select DLVALU from smcdta.RPRTDL where dlcell = 'R41' and dldcno = '".$DCNO."' ");
      $DLTEXT_R41_A = odbc_fetch_array($DLTEXT_R41_1);
        $DLTEXT_R41 = iconv("windows-874","utf-8",$DLTEXT_R41_A["DLVALU"]);
      $DLTEXT_R38_1 = odbc_exec($conn,"select DLVALU from smcdta.RPRTDL where dlcell = 'R38' and dldcno = '".$DCNO."' ");
      $DLTEXT_R38_A = odbc_fetch_array($DLTEXT_R38_1);
        $DLTEXT_R38 = iconv("windows-874","utf-8",$DLTEXT_R38_A["DLVALU"]);
      $DLTEXT_W38_11 = odbc_exec($conn,"select DLVALU from smcdta.RPRTDL where dlcell = 'W38' and dldcno = '".$DCNO."' ");
      $DLTEXT_W38_11A = odbc_fetch_array($DLTEXT_W38_11);
        $DLTEXT_W38 = iconv("windows-874","utf-8",$DLTEXT_W38_11A["DLVALU"]);
      $DLTEXT_W41_1 = odbc_exec($conn,"select DLVALU from smcdta.RPRTDL where dlcell = 'W41' and dldcno = '".$DCNO."' ");
      $DLTEXT_W41_1A = odbc_fetch_array($DLTEXT_W41_1);
        $DLTEXT_W41 = iconv("windows-874","utf-8",$DLTEXT_W41_1A["DLVALU"]);


 

      $DLTEXT_J38_1 = odbc_exec($conn,"select DLVALU from smcdta.RPRTDL where dlcell = 'J38' and dldcno = '".$DCNO."' ");
      $DLTEXT_J38_A = odbc_fetch_array($DLTEXT_J38_1);
        $DLTEXT_J38 = iconv("windows-874","utf-8",$DLTEXT_J38_A["DLVALU"]);
      $DLTEXT_M38_1 = odbc_exec($conn,"select DLVALU from smcdta.RPRTDL where dlcell = 'M38' and dldcno = '".$DCNO."' ");
      $DLTEXT_M38_A = odbc_fetch_array($DLTEXT_M38_1);
        $DLTEXT_M38 = iconv("windows-874","utf-8",$DLTEXT_M38_A["DLVALU"]);
      $DLTEXT_AA38_1 = odbc_exec($conn,"select DLVALU from smcdta.RPRTDL where dlcell = 'AA38' and dldcno = '".$DCNO."' ");
      $DLTEXT_AA38_A = odbc_fetch_array($DLTEXT_AA38_1);
        $DLTEXT_AA38 = iconv("windows-874","utf-8",$DLTEXT_AA38_A["DLVALU"]);
      $DLTEXT_AF38_1 = odbc_exec($conn,"select DLVALU  from smcdta.RPRTDL where dlcell = 'AF38' and dldcno = '".$DCNO."' ");
      $DLTEXT_AF38_A = odbc_fetch_array($DLTEXT_AF38_1);
        $DLTEXT_AF38 = iconv("windows-874","utf-8",$DLTEXT_AF38_A["DLVALU"]);
      $DLTEXT_G38_1 = odbc_exec($conn,"select DLVALU from smcdta.RPRTDL where dlcell = 'G38' and dldcno = '".$DCNO."' ");
      $DLTEXT_G38_A = odbc_fetch_array($DLTEXT_G38_1);
        $DLTEXT_G38 = iconv("windows-874","utf-8",$DLTEXT_G38_A["DLVALU"]);
      $DLTEXT_AA41_1 = odbc_exec($conn,"select DLVALU from smcdta.RPRTDL where dlcell = 'AA41' and dldcno = '".$DCNO."' ");
      $DLTEXT_AA41_A = odbc_fetch_array($DLTEXT_AA41_1);
        $DLTEXT_AA41 = iconv("windows-874","utf-8",$DLTEXT_AA41_A["DLVALU"]);
      $DLTEXT_AF1_1 = odbc_exec($conn,"select DLVALU from smcdta.RPRTDL where dlcell = 'AF1' and dldcno = '".$DCNO."' ");
      $DLTEXT_AF1_A = odbc_fetch_array($DLTEXT_AF1_1);
        $DLTEXT_AF1 = iconv("windows-874","utf-8",$DLTEXT_AF1_A["DLTEXT"]);
       $DLTEXT_AF1_d = substr($DLTEXT_AF1,0,8);
     # $DLTEXT_AF1_1 = $AS400->date_for($DLTEXT_AF1_d);
      $DLTEXT_AF41_1 = odbc_exec($conn,"select DLVALU from smcdta.RPRTDL where dlcell = 'AF41' and dldcno = '".$DCNO."' ");
      $DLTEXT_AF41_A = odbc_fetch_array($DLTEXT_AF41_1);
        $DLTEXT_AF41 = iconv("windows-874","utf-8",$DLTEXT_AF41_A["DLVALU"]);
      $DLTEXT_V56_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'V56' and dldcno = '".$DCNO."' ");
      $DLTEXT_V56_A = odbc_fetch_array($DLTEXT_V56_1);
        $DLTEXT_V56 = iconv("windows-874","utf-8",$DLTEXT_V56_A["DLTEXT"]);
      $DLTEXT_V57_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'V57' and dldcno = '".$DCNO."' ");
      $DLTEXT_V57_A = odbc_fetch_array($DLTEXT_V57_1);
        $DLTEXT_V57 = iconv("windows-874","utf-8",$DLTEXT_V57_A["DLTEXT"]);
      $DLTEXT_C5_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'C5' and dldcno = '".$DCNO."' ");
      $DLTEXT_C5_A = odbc_fetch_array($DLTEXT_C5_1);
        $DLTEXT_C5 = iconv("windows-874","utf-8",$DLTEXT_C5_A["DLTEXT"]);
      $DLTEXT_J3_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'J3' and dldcno = '".$DCNO."' ");
      $DLTEXT_J3_A = odbc_fetch_array($DLTEXT_J3_1);
        $DLTEXT_J3 = iconv("windows-874","utf-8",$DLTEXT_J3_A["DLTEXT"]);
      $DLTEXT_J4_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'J4' and dldcno = '".$DCNO."' ");
      $DLTEXT_J4_A = odbc_fetch_array($DLTEXT_J4_1);
        $DLTEXT_J4 = iconv("windows-874","utf-8",$DLTEXT_J4_A["DLTEXT"]);
      $DLTEXT_J5_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'J5' and dldcno = '".$DCNO."' ");
      $DLTEXT_J5_A = odbc_fetch_array($DLTEXT_J5_1);
        $DLTEXT_J5 = iconv("windows-874","utf-8",$DLTEXT_J5_A["DLTEXT"]);
      $DLTEXT_J6_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'J6' and dldcno = '".$DCNO."' ");
      $DLTEXT_J6_A = odbc_fetch_array($DLTEXT_J6_1);
        $DLTEXT_J6 = iconv("windows-874","utf-8",$DLTEXT_J6_A["DLTEXT"]);
      $DLTEXT_J7_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'J7' and dldcno = '".$DCNO."' ");
      $DLTEXT_J7_A = odbc_fetch_array($DLTEXT_J7_1);
        $DLTEXT_J7 = iconv("windows-874","utf-8",$DLTEXT_J7_A["DLTEXT"]);
      $DLTEXT_J8_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'J8' and dldcno = '".$DCNO."' ");
      $DLTEXT_J8_A = odbc_fetch_array($DLTEXT_J8_1);
        $DLTEXT_J8 = iconv("windows-874","utf-8",$DLTEXT_J8_A["DLTEXT"]);
      $DLTEXT_J9_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'J9' and dldcno = '".$DCNO."' ");
      $DLTEXT_J9_A = odbc_fetch_array($DLTEXT_J9_1);
        $DLTEXT_J9 = iconv("windows-874","utf-8",$DLTEXT_J9_A["DLTEXT"]);
      $DLTEXT_J10_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'J10' and dldcno = '".$DCNO."' ");
      $DLTEXT_J10_A = odbc_fetch_array($DLTEXT_J10_1);
        $DLTEXT_J10 = iconv("windows-874","utf-8",$DLTEXT_J10_A["DLTEXT"]);
      $DLTEXT_J11_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'J11' and dldcno = '".$DCNO."' ");
      $DLTEXT_J11_A = odbc_fetch_array($DLTEXT_J11_1);
        $DLTEXT_J11 = iconv("windows-874","utf-8",$DLTEXT_J11_A["DLTEXT"]);
      $DLTEXT_J12_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'J12' and dldcno = '".$DCNO."' ");
      $DLTEXT_J12_A = odbc_fetch_array($DLTEXT_J12_1);
        $DLTEXT_J12 = iconv("windows-874","utf-8",$DLTEXT_J12_A["DLTEXT"]);
      $DLTEXT_J13_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'J13' and dldcno = '".$DCNO."' ");
      $DLTEXT_J13_A = odbc_fetch_array($DLTEXT_J13_1);
        $DLTEXT_J13 = iconv("windows-874","utf-8",$DLTEXT_J13_A["DLTEXT"]);
      $DLTEXT_H7_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'H7' and dldcno = '".$DCNO."' ");
      $DLTEXT_H7_A = odbc_fetch_array($DLTEXT_H7_1);
        $DLTEXT_H7 = trim(iconv("windows-874","utf-8",$DLTEXT_H7_A["DLTEXT"]));
      $DLTEXT_L7_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'L7' and dldcno = '".$DCNO."' ");
      $DLTEXT_L7_A = odbc_fetch_array($DLTEXT_L7_1);
        $DLTEXT_L7 = trim(iconv("windows-874","utf-8",$DLTEXT_L7_A["DLTEXT"]));
      $DLTEXT_P7_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'P7' and dldcno = '".$DCNO."' ");
      $DLTEXT_P7_A = odbc_fetch_array($DLTEXT_P7_1);
        $DLTEXT_P7 = iconv("windows-874","utf-8",$DLTEXT_P7_A["DLTEXT"]);
      $DLTEXT_T7_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'T7' and dldcno = '".$DCNO."' ");
      $DLTEXT_T7_A = odbc_fetch_array($DLTEXT_T7_1);
        $DLTEXT_T7 = iconv("windows-874","utf-8",$DLTEXT_T7_A["DLTEXT"]);
      $DLTEXT_X7_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'X7' and dldcno = '".$DCNO."' ");
      $DLTEXT_X7_A = odbc_fetch_array($DLTEXT_X7_1);
        $DLTEXT_X7 = iconv("windows-874","utf-8",$DLTEXT_X7_A["DLTEXT"]);
      $DLTEXT_AB7_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AB7' and dldcno = '".$DCNO."' ");
      $DLTEXT_AB7_A = odbc_fetch_array($DLTEXT_AB7_1);
        $DLTEXT_AB7 = iconv("windows-874","utf-8",$DLTEXT_AB7_A["DLTEXT"]);
      $DLTEXT_AF7_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AF7' and dldcno = '".$DCNO."' ");
      $DLTEXT_AF7_A = odbc_fetch_array($DLTEXT_AF7_1);
        $DLTEXT_AF7 = iconv("windows-874","utf-8",$DLTEXT_AF7_A["DLTEXT"]);
      $DLTEXT_H10_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'H10' and dldcno = '".$DCNO."' ");
      $DLTEXT_H10_A = odbc_fetch_array($DLTEXT_H10_1);
        $DLTEXT_H10 = iconv("windows-874","utf-8",$DLTEXT_H10_A["DLTEXT"]);
      $DLTEXT_L10_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'L10' and dldcno = '".$DCNO."' ");
      $DLTEXT_L10_A = odbc_fetch_array($DLTEXT_L10_1);
        $DLTEXT_L10 = iconv("windows-874","utf-8",$DLTEXT_L10_A["DLTEXT"]);
      $DLTEXT_P10_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'P10' and dldcno = '".$DCNO."' ");
      $DLTEXT_P10_A = odbc_fetch_array($DLTEXT_P10_1);
        $DLTEXT_P10 = iconv("windows-874","utf-8",$DLTEXT_P10_A["DLTEXT"]);
      $DLTEXT_T10_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'T10' and dldcno = '".$DCNO."' ");
      $DLTEXT_T10_A = odbc_fetch_array($DLTEXT_T10_1);
        $DLTEXT_T10 = iconv("windows-874","utf-8",$DLTEXT_T10_A["DLTEXT"]);
      $DLTEXT_X10_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'X10' and dldcno = '".$DCNO."' ");
      $DLTEXT_X10_A = odbc_fetch_array($DLTEXT_X10_1);
        $DLTEXT_X10 = iconv("windows-874","utf-8",$DLTEXT_X10_A["DLTEXT"]);
      $DLTEXT_AB10_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AB10' and dldcno = '".$DCNO."' ");
      $DLTEXT_AB10_A = odbc_fetch_array($DLTEXT_AB10_1);
        $DLTEXT_AB10 = iconv("windows-874","utf-8",$DLTEXT_AB10_A["DLTEXT"]);
      $DLTEXT_AF10_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AF10' and dldcno = '".$DCNO."' ");
      $DLTEXT_AF10_A = odbc_fetch_array($DLTEXT_AF10_1);
        $DLTEXT_AF10 = iconv("windows-874","utf-8",$DLTEXT_AF10_A["DLTEXT"]);
      $DLTEXT_AA29_1_1 = odbc_exec($conn,"select DLTEXT  from smcdta.RPRTDL where dlcell = 'AA29' and dldcno = '".$DCNO."' ");
      $DLTEXT_AA29_1_A = odbc_fetch_array($DLTEXT_AA29_1_1);
        $DLTEXT_AA29_1 = iconv("windows-874","utf-8",$DLTEXT_AA29_1_A["DLTEXT"]);

  $DLTEXT_X45_1 = odbc_exec($conn,"select DLVALU  from smcdta.RPRTDL where dlcell ='X45'  and dldcno = '".$DCNO."' ");
          $DLTEXT_X45_1A = odbc_fetch_array($DLTEXT_X45_1);
        $DLTEXT_X45 = iconv("windows-874","utf-8",$DLTEXT_X45_1A["DLVALU"]);    
 $DLTEXT_X45_1_d = substr($DLTEXT_X45,0,8);
          $DLTEXT_X45_1_dd = date_create_from_format('Ymd',$DLTEXT_X45_1_d);
          $DLTEXT_X45_1 = date_format($DLTEXT_X45_1_dd,'Y/m/d');

   $DLTEXT_AF45_1 = odbc_exec($conn,"select DLVALU  from smcdta.RPRTDL where dlcell ='AF45'  and dldcno = '".$DCNO."' ");
                    $DLTEXT_AF45_1A = odbc_fetch_array($DLTEXT_AF45_1);
        $DLTEXT_AF45 = iconv("windows-874","utf-8",$DLTEXT_AF45_1A["DLVALU"]);  
$DLTEXT_AF45_1 = date_format($DLTEXT_AF45_1_dd,'Y/m/d');
    $DLTEXT_AF45_trim = trim($DLTEXT_AF45);
          $DLTEXT_AF45_1_d = substr($DLTEXT_AF45_trim,0,8);
          $DLTEXT_AF45_1_dd = date_create_from_format('Ymd',$DLTEXT_AF45_1_d);
          $DLTEXT_AF45_1 = date_format($DLTEXT_AF45_1_dd,'Y/m/d');








  
      $querystr_sopu5 = odbc_exec($conn,"select *  from smcdta.sopu5 where  U5DCNO = '".$DCNO."'  ");
        $querystr_code_request_SOPU5 = odbc_fetch_array($querystr_sopu5);
        $U5COCD = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5COCD"]);
        $U5DCNO = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5DCNO"]);
        $U5DCDT = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5DCDT"]);
        $U5CUSN = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5CUSN"]);
        $U5DSTC = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5DSTC"]);
        $U5EFDT = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5EFDT"]);
        $U5EXPD = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5EXPD"]);
        $U5STAT = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5STAT"]);
        $U5TYPE = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5TYPE"]);
        $U5DCST = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5DCST"]);
        $U5DSTU = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5DSTU"]);
        $U5SLMN = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5SLMN"]);
        $U5MKSH = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5MKSH"]);
        $U5PTTL = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5PTTL"]);
        $U5CPT1 = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5CPT1"]);
        $U5CPT2 = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5CPT2"]);
        $U5CPT3 = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5CPT3"]);
        $U5CPT4 = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5CPT4"]);
        $U5CPT5 = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5CPT5"]);
        $U5LYSL = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5LYSL"]);
        $U5BDGY = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5BDGY"]);
        $U5CHSL = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5CHSL"]);
        $U5JVST = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5JVST"]);
        $U5VPVS = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5VPVS"]);
        $U5EXHB = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5EXHB"]);
        $U5FTTR = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5FTTR"]);
        $U5OTH1 = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5OTH1"]);
        $U5OTH2 = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5OTH2"]);
        $U5RMK1 = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5RMK1"]);
        $U5RMK2 = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5RMK2"]);
        $U5SRAC = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5SRAC"]);
        $U5SRVL = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5SRVL"]);
        $U5SRFR = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5SRFR"]);
        $U5SRFT = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5SRFT"]);
        $U5SRTB = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5SRTB"]);
        $U5SROY = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5SROY"]);
        $U5SRTT = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5SRTT"]);
        $U5CRAC = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5CRAC"]);
        $U5CRVL = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5CRVL"]);
        $U5CRFR = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5CRFR"]);
        $U5CRFT = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5CRFT"]);
        $U5CRTB = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5CRTB"]);
        $U5CROY = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5CROY"]);
        $U5CRTT = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5CRTT"]);
        $U5ERAC = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5ERAC"]);
        $U5ERVL = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5ERVL"]);
        $U5ERFR = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5ERFR"]);
        $U5ERFT = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5ERFT"]);
        $U5ERTB = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5ERTB"]);
        $U5EROY = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5EROY"]);
        $U5ERTT = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5ERTT"]);
        $U5OPCD = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5OPCD"]);
        $U5OPDT = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5OPDT"]);
        $U5OPTM = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5OPTM"]);
        $U5DSLM = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5DSLM"]);
        $U5DSPS = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5DSPS"]);
        $U5UHNO = iconv("windows-874","utf-8",$querystr_code_request_SOPU5["U5UHNO"]);
        $U5OPCD_trim = trim($U5OPCD);
 
 $querystr_sopov_0 = $AS400->query("select OVDATE,OVTIME,OVAPBY from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."'  and OVEVCD = '1' order by OVDATE  ,OVTIME DESC ");
    $querystr_sopov_re_0  = $AS400->fetch ($querystr_sopov_0);
    $OVDATE_0 = $AS400->textconvert ($querystr_sopov_re_0["OVDATE"]);
    $OVTIME_0 = $AS400->textconvert ($querystr_sopov_re_0["OVTIME"]);
    $OVDATE_0_date = date_create_from_format('Ymd',$OVDATE_0);
    $OVDATE_0_dates = date_format($OVDATE_0_date,'Y/m/d');
    $OVAPBY_0 = $AS400->textconvert ($querystr_sopov_re_0["OVAPBY"]);
    $OVAPBY_0_T = trim($OVAPBY_0);


/////////////////
/*if($U5PTTL <=35) { $DLTEXT_A1= "L1" ; }
  else if$U5PTTL<=40) { $DLTEXT_A1= "L2" ; }
  else if$U5PTTL<=50) { $DLTEXT_A1= "L3" ; }
  else if$U5PTTL<=55) { $DLTEXT_A1= "L4" ; }
  else if$U5PTTL<=60) { $DLTEXT_A1= "L5" ; }
  else  { $DLTEXT_A1= "L6" ; }  */
 $DLTEXT_A1 = iconv("windows-874","utf-8",$AS400->dltext("A1",$DCNO));
//////////////////


    //Query  name SOPO7_AF7
        $querystr_SOPO7_AF7 = odbc_exec($conn,"select * from smcdta.SOPO7   where  O7SLMN  = '".trim($DLTEXT_AF7)."'   ");
        $querystr_code_request_SOPO7_LV1 = odbc_fetch_array($querystr_SOPO7_AF7);
        $O7SLMN_AF7 = iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV1["O7SLMN"]);
        $O7ESR1_AF7 = iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV1["O7ESR1"]);
        $O7TSR1_AF7 = iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV1["O7TSR1"]);
        $O7TSNM_AF7 = iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV1["O7TSNM"]);
        $O7ESNM_AF7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV1["O7ESNM"]);
        $O7POSI_AF7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV1["O7POSI"]);
        $O7SPCD_AF7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV1["O7SPCD"]);
        $O7DIVI_AF7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV1["O7DIVI"]);
        $O7SECT_AF7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV1["O7SECT"]);
        $O7SLLV_AF7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV1["O7SLLV"]);
        $O7EAD1_AF7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV1["O7EAD1"]);

       $querystr_BGPBT_SLMN_USERCODE =  odbc_exec($conn," select BTCODE,BTDESC,BTEMCD from smcdta.BGPBT where  BTSYSC  = 'SLMN'  and  BTCODE ='".$O7SLMN_AF7."'  ");
        $querystr_code__AF7 = odbc_fetch_array($querystr_BGPBT_SLMN_USERCODE);
        $BTDESC_AF7 = iconv("windows-874", "utf-8", $querystr_code__AF7["BTDESC"]);
        $BTCODE_AF7 = iconv("windows-874", "utf-8", $querystr_code__AF7["BTCODE"]);
        $BTEMCD_AF7 = iconv("windows-874", "utf-8", $querystr_code__AF7["BTEMCD"]);

       $querystr_BGPBT_SOPO7_AF7 =  odbc_exec($conn," select BTDESC,BTEMCD,BTCODE  from smcdta.BGPBT where  BTSYSC  = 'USID'  and  BTEMCD ='".$BTEMCD_AF7."'  ");
        $querystr_code_request_BGPBT_SOPO7_AF7 = odbc_fetch_array($querystr_BGPBT_SOPO7_AF7);
         $BTDESC_AF7_S1 = iconv("windows-874", "utf-8", $querystr_code_request_BGPBT_SOPO7_AF7["BTDESC"]);
         $BTCODE_AF7_S1 = iconv("windows-874", "utf-8", $querystr_code_request_BGPBT_SOPO7_AF7["BTCODE"]);
    //Query  name SOPO7_AB7

        $DLTEXT_AB7_SUB = $DLTEXT_AB7;
        $DLTEXT_AB7_SUB_SSE = substr($DLTEXT_AB7_SUB, 0 ,strpos($DLTEXT_AB7_SUB, " "));
        $DLTEXT_AB7_SUB_BM = substr($DLTEXT_AB7_SUB,strpos($DLTEXT_AB7_SUB, " ")+1);
        $DLTEXT_AB7_SUB_BM_trim = trim($DLTEXT_AB7_SUB_BM);

        $querystr_SOPO7_AB7_BM = odbc_exec($conn,"select  *  from smcdta.SOPO7   where  O7SLMN  = '".$DLTEXT_AB7_SUB_BM_trim."'   ");
        $querystr_code_request_SOPO7_LV2 = odbc_fetch_array($querystr_SOPO7_AB7_BM);
        $O7SLMN_AB7_BM = iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV2["O7SLMN"]);
        $O7ESR1_AB7_BM = iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV2["O7ESR1"]);
        $O7TSR1_AB7_BM = iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV2["O7TSR1"]);
        $O7TSNM_AB7_BM = iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV2["O7TSNM"]);
        $O7ESNM_AB7_BM =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV2["O7ESNM"]);
        $O7POSI_AB7_BM =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV2["O7POSI"]);
        $O7SPCD_AB7_BM =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV2["O7SPCD"]);
        $O7DIVI_AB7_BM =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV2["O7DIVI"]);
        $O7SECT_AB7_BM =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV2["O7SECT"]);
        $O7SLLV_AB7_BM =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV2["O7SLLV"]);
        $O7EAD1_AB7_BM =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV2["O7EAD1"]);

       $querystr_BGPBT_SLMN_USERCODE_AB7BM  =  odbc_exec($conn," select BTCODE,BTDESC,BTEMCD from smcdta.BGPBT where  BTSYSC  = 'SLMN'  and  BTCODE ='".$O7SLMN_AB7_BM."'  ");
        $querystr_code_AB7BM = odbc_fetch_array($querystr_BGPBT_SLMN_USERCODE_AB7BM);
        $BTDESC_AB7_BM = iconv("windows-874", "utf-8", $querystr_code_AB7BM["BTDESC"]);
        $BTCODE_AB7_BM = iconv("windows-874", "utf-8", $querystr_code_AB7BM["BTCODE"]);
        $BTEMCD_AB7_BM = iconv("windows-874", "utf-8", $querystr_code_AB7BM["BTEMCD"]);

       $querystr_BGPBT_SOPO7_AB7BM =  odbc_exec($conn," select BTDESC,BTEMCD,BTCODE  from smcdta.BGPBT where  BTSYSC  = 'USID'  and  BTEMCD ='".$BTEMCD_AB7_BM."'  ");
        $querystr_code_request_BGPBT_SOPO7_AB7BM = odbc_fetch_array($querystr_BGPBT_SOPO7_AB7BM);
         $BTDESC_AB7_S1BM = iconv("windows-874", "utf-8", $querystr_code_request_BGPBT_SOPO7_AB7BM["BTDESC"]);
         $BTCODE_AB7_S1BM = iconv("windows-874", "utf-8", $querystr_code_request_BGPBT_SOPO7_AB7BM["BTCODE"]);



        $DLTEXT_AB7_SUB_SSET = trim($DLTEXT_AB7_SUB_SSE);
        $querystr_SOPO7_AB7_SSE = odbc_exec($conn,"select  *  from smcdta.SOPO7   where  O7SLMN  = '".$DLTEXT_AB7_SUB_SSET."'   ");
        $querystr_code_request_SOPO7_LV21 = odbc_fetch_array($querystr_SOPO7_AB7_SSE);
        $O7SLMN_AB7_SSE = iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV21["O7SLMN"]);
        $O7ESR1_AB7_SSE = iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV21["O7ESR1"]);
        $O7TSR1_AB7_SSE = iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV21["O7TSR1"]);
        $O7TSNM_AB7_SSE = iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV21["O7TSNM"]);
        $O7ESNM_AB7_SSE =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV21["O7ESNM"]);
        $O7POSI_AB7_SSE =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV21["O7POSI"]);
        $O7SPCD_AB7_SSE =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV21["O7SPCD"]);
        $O7DIVI_AB7_SSE =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV21["O7DIVI"]);
        $O7SECT_AB7_SSE =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV21["O7SECT"]);
        $O7SLLV_AB7_SSE =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV21["O7SLLV"]);
        $O7EAD1_AB7_SSE =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV21["O7EAD1"]);


       $querystr_BGPBT_SLMN_USERCODE_AB7SSE  =  odbc_exec($conn,"select BTCODE,BTDESC,BTEMCD from smcdta.BGPBT where  BTSYSC  = 'SLMN'  and  BTCODE ='".$O7SLMN_AB7_SSE."'  ");
        $querystr_code_AB7SSE = odbc_fetch_array($querystr_BGPBT_SLMN_USERCODE_AB7SSE);
        $BTDESC_AB7_SSE = iconv("windows-874", "utf-8", $querystr_code_AB7SSE["BTDESC"]);
        $BTCODE_AB7_SSE = iconv("windows-874", "utf-8", $querystr_code_AB7SSE["BTCODE"]);
        $BTEMCD_AB7_SSE = iconv("windows-874", "utf-8", $querystr_code_AB7SSE["BTEMCD"]);

       $querystr_BGPBT_SOPO7_AB7SSE =  odbc_exec($conn," select BTDESC,BTEMCD,BTCODE  from smcdta.BGPBT where  BTSYSC  = 'USID'  and  BTEMCD ='".$BTEMCD_AB7_SSE."'  ");
        $querystr_code_request_BGPBT_SOPO7_AB7SSE = odbc_fetch_array($querystr_BGPBT_SOPO7_AB7SSE);
         $BTDESC_AB7_S1SSE = iconv("windows-874", "utf-8", $querystr_code_request_BGPBT_SOPO7_AB7SSE["BTDESC"]);
         $BTCODE_AB7_S1SSE = iconv("windows-874", "utf-8", $querystr_code_request_BGPBT_SOPO7_AB7SSE["BTCODE"]);



    //Query  name SOPO7_X7
        $querystr_SOPO7_X7 = odbc_exec($conn,"select  *  from smcdta.SOPO7   where  O7SLMN  = '".$DLTEXT_X7."'   ");
        $querystr_code_request_SOPO7_LV3 = odbc_fetch_array($querystr_SOPO7_X7);
        $O7SLMN_X7 = iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV3["O7SLMN"]);
        $O7ESR1_X7 = iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV3["O7ESR1"]);
        $O7TSR1_X7 = iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV3["O7TSR1"]);
        $O7TSNM_X7 = iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV3["O7TSNM"]);
        $O7ESNM_X7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV3["O7ESNM"]);
        $O7POSI_X7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV3["O7POSI"]);
        $O7SPCD_X7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV3["O7SPCD"]);
        $O7DIVI_X7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV3["O7DIVI"]);
        $O7SECT_X7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV3["O7SECT"]);
        $O7SLLV_X7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV3["O7SLLV"]);
        $O7EAD1_X7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV3["O7EAD1"]);


       $querystr_BGPBT_SLMN_USERCODE_X7  =  odbc_exec($conn," select BTCODE,BTDESC,BTEMCD from smcdta.BGPBT where  BTSYSC  = 'SLMN'  and  BTCODE ='".$O7SLMN_X7."'  ");
        $querystr_code_X7 = odbc_fetch_array($querystr_BGPBT_SLMN_USERCODE_X7);
        $BTDESC_X7 = iconv("windows-874", "utf-8", $querystr_code_X7["BTDESC"]);
        $BTCODE_X7 = iconv("windows-874", "utf-8", $querystr_code_X7["BTCODE"]);
        $BTEMCD_X7 = iconv("windows-874", "utf-8", $querystr_code_X7["BTEMCD"]);

       $querystr_BGPBT_SOPO7_X7 =  odbc_exec($conn," select BTDESC,BTEMCD,BTCODE  from smcdta.BGPBT where  BTSYSC  = 'USID'  and  BTEMCD ='".$BTEMCD_X7."'  ");
        $querystr_code_request_BGPBT_SOPO7_X7 = odbc_fetch_array($querystr_BGPBT_SOPO7_X7);
         $BTDESC_AB7_X7 = iconv("windows-874", "utf-8", $querystr_code_request_BGPBT_SOPO7_X7["BTDESC"]);
         $BTCODE_AB7_X7 = iconv("windows-874", "utf-8", $querystr_code_request_BGPBT_SOPO7_X7["BTCODE"]);




    //Query  name SOPO7_T7
        $querystr_SOPO7_T7 = odbc_exec($conn,"select  *  from smcdta.SOPO7   where  O7SLMN  = '".$DLTEXT_T7."'   ");
        $querystr_code_request_SOPO7_LV4 = odbc_fetch_array($querystr_SOPO7_T7);
        $O7SLMN_T7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV4["O7SLMN"]);
        $O7ESR1_T7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV4["O7ESR1"]);
        $O7TSR1_T7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV4["O7TSR1"]);
        $O7TSNM_T7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV4["O7TSNM"]);
        $O7ESNM_T7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV4["O7ESNM"]);
        $O7POSI_T7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV4["O7POSI"]);
        $O7SPCD_T7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV4["O7SPCD"]);
        $O7DIVI_T7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV4["O7DIVI"]);
        $O7SECT_T7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV4["O7SECT"]);
        $O7SLLV_T7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV4["O7SLLV"]);
        $O7EAD1_T7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV4["O7EAD1"]);

       $querystr_BGPBT_SLMN_USERCODE_T7  =  odbc_exec($conn," select BTCODE,BTDESC,BTEMCD from smcdta.BGPBT where  BTSYSC  =  'SLMN'  and  BTCODE ='".$O7SLMN_T7."'  ");
        $querystr_code_T7 = odbc_fetch_array($querystr_BGPBT_SLMN_USERCODE_T7);
        $BTDESC_T7 = iconv("windows-874", "utf-8", $querystr_code_T7["BTDESC"]);
        $BTCODE_T7 = iconv("windows-874", "utf-8", $querystr_code_T7["BTCODE"]);
        $BTEMCD_T7 = iconv("windows-874", "utf-8", $querystr_code_T7["BTEMCD"]);

       $querystr_BGPBT_SOPO7_T7 =  odbc_exec($conn," select BTDESC,BTEMCD,BTCODE  from smcdta.BGPBT where  BTSYSC  = 'USID'  and  BTEMCD ='".$BTEMCD_T7."'  ");
        $querystr_code_request_BGPBT_SOPO7_T7 = odbc_fetch_array($querystr_BGPBT_SOPO7_T7);
         $BTDESC_AB7_T7 = iconv("windows-874", "utf-8", $querystr_code_request_BGPBT_SOPO7_T7["BTDESC"]);
         $BTCODE_AB7_T7 = iconv("windows-874", "utf-8", $querystr_code_request_BGPBT_SOPO7_T7["BTCODE"]);



    //Query  name SOPO7_P7
        $querystr_SOPO7_P7 = odbc_exec($conn,"select  *  from smcdta.SOPO7   where  O7SLMN  = '".$DLTEXT_P7."'   ");
        $querystr_code_request_SOPO7_LV5 = odbc_fetch_array($querystr_SOPO7_P7);
        $O7SLMN_P7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV5["O7SLMN"]);
        $O7ESR1_P7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV5["O7ESR1"]);
        $O7TSR1_P7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV5["O7TSR1"]);
        $O7TSNM_P7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV5["O7TSNM"]);
        $O7ESNM_P7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV5["O7ESNM"]);
        $O7POSI_P7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV5["O7POSI"]);
        $O7SPCD_P7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV5["O7SPCD"]);
        $O7DIVI_P7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV5["O7DIVI"]);
        $O7SECT_P7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV5["O7SECT"]);
        $O7SLLV_P7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV5["O7SLLV"]);
        $O7EAD1_P7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV5["O7EAD1"]);

        $O7SLMN_P71 = trim($O7SLMN_P7);
        $querystr_BGPBT_SLMN_USERCODE_P7  =  odbc_exec($conn,"select BTCODE,BTDESC,BTEMCD from smcdta.BGPBT where  BTSYSC  =  'SLMN'  and  BTCODE ='".$O7SLMN_P71."'  ");
        $querystr_code_P7 = odbc_fetch_array($querystr_BGPBT_SLMN_USERCODE_P7);
        $BTDESC_P7 = iconv("windows-874", "utf-8", $querystr_code_P7["BTDESC"]);
        $BTCODE_P7 = iconv("windows-874", "utf-8", $querystr_code_P7["BTCODE"]);
        $BTEMCD_P7 = iconv("windows-874", "utf-8", $querystr_code_P7["BTEMCD"]);

       $querystr_BGPBT_SOPO7_P7 =  odbc_exec($conn," select BTDESC,BTEMCD,BTCODE  from smcdta.BGPBT where  BTSYSC  = 'USID'  and  BTEMCD ='".$BTEMCD_P7."' and BTSYSQ  = '1' ");
        $querystr_code_request_BGPBT_SOPO7_P7 = odbc_fetch_array($querystr_BGPBT_SOPO7_P7);
         $BTDESC_AB7_P7 = iconv("windows-874", "utf-8", $querystr_code_request_BGPBT_SOPO7_P7["BTDESC"]);
         $BTCODE_AB7_P7 = iconv("windows-874", "utf-8", $querystr_code_request_BGPBT_SOPO7_P7["BTCODE"]);

    //Query check

         $strstat = odbc_exec($conn,"select *  from smcdta.SOPCAL   where  CLDCNO   = '".$DCNO."'  ");
          $statcheck =  odbc_result($strstat,"CLCSM0");
          $statcheck1 = odbc_result($strstat,"CLCSM1");
          $statcheck2 = odbc_result($strstat,"CLCSM2");
          $statcheck3 = odbc_result($strstat, "CLCSM3");
          $statcheck4 = odbc_result($strstat, "CLCSM4");
          $statcheck5 = odbc_result($strstat, "CLCSM5");
          $statcheck6 = odbc_result($strstat, "CLCSM6");
          $statcheck7 = odbc_result($strstat, "CLCSM7");

    //Query status sopu5

       $strstat_u5 = odbc_exec($conn,"select U5STAT  from smcdta.sopu5   where  U5DCNO   = '".$DCNO."'   and U5CUSN = '".$DLTEXT_I26."'   and U5DSTC =  '".$DLTEXT_J10."'   ");
         $checkstatus =  odbc_result($strstat_u5,"U5STAT");

    //Query  name SOPO7_H7
        $querystr_SOPO7_H7 = odbc_exec($conn,"select  *  from smcdta.SOPO7   where  O7SLMN  = '".$DLTEXT_H7."'   ");
        $querystr_code_request_SOPO7_LV6 = odbc_fetch_array($querystr_SOPO7_H7);
        $O7SLMN_H7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV6["O7SLMN"]);
        $O7ESR1_H7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV6["O7ESR1"]);
        $O7TSR1_H7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV6["O7TSR1"]);
        $O7TSNM_H7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV6["O7TSNM"]);
        $O7ESNM_H7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV6["O7ESNM"]);
        $O7POSI_H7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV6["O7POSI"]);
        $O7SPCD_H7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV6["O7SPCD"]);
        $O7DIVI_H7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV6["O7DIVI"]);
        $O7SECT_H7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV6["O7SECT"]);
        $O7SLLV_H7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV6["O7SLLV"]);
        $O7EAD1_H7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV6["O7EAD1"]);

        $querystr_BGPBT_SLMN_USERCODE_H7  = odbc_exec($conn," select BTCODE,BTDESC,BTEMCD from smcdta.BGPBT where  BTSYSC  =  'SLMN'  and  BTCODE = '".$O7SLMN_H7."'  ");
        $querystr_code_H7 = odbc_fetch_array($querystr_BGPBT_SLMN_USERCODE_H7);
        $BTDESC_H7 = iconv("windows-874", "utf-8", $querystr_code_H7["BTDESC"]);
        $BTCODE_H7 = iconv("windows-874", "utf-8", $querystr_code_H7["BTCODE"]);
        $BTEMCD_H7 = iconv("windows-874", "utf-8", $querystr_code_H7["BTEMCD"]);
        $BTCODE_H7_T = trim($BTCODE_H7);

       $querystr_BGPBT_SOPO7_H7 =  odbc_exec($conn," select BTDESC,BTEMCD,BTCODE  from smcdta.BGPBT where  BTSYSC  = 'USID'  and  BTEMCD ='".$BTEMCD_H7."'  ");
        $querystr_code_request_BGPBT_SOPO7_H7 = odbc_fetch_array($querystr_BGPBT_SOPO7_H7);
         $BTDESC_AB7_H7 = iconv("windows-874", "utf-8", $querystr_code_request_BGPBT_SOPO7_H7["BTDESC"]);
         $BTCODE_AB7_H7 = iconv("windows-874", "utf-8", $querystr_code_request_BGPBT_SOPO7_H7["BTCODE"]);
    $BTCODE_AB7_H7_1 = trim($BTCODE_AB7_H7);


    //Query  name SOPO7_L7
        $querystr_SOPO7_L7 = odbc_exec($conn,"select  *  from smcdta.SOPO7   where  O7SLMN  = '".$DLTEXT_L7."'   ");
        $querystr_code_request_SOPO7_LV7 = odbc_fetch_array($querystr_SOPO7_L7);
        $O7SLMN_L7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV7["O7SLMN"]);
        $O7ESR1_L7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV7["O7ESR1"]);
        $O7TSR1_L7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV7["O7TSR1"]);
        $O7TSNM_L7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV7["O7TSNM"]);
        $O7ESNM_L7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV7["O7ESNM"]);
        $O7POSI_L7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV7["O7POSI"]);
        $O7SPCD_L7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV7["O7SPCD"]);
        $O7DIVI_L7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV7["O7DIVI"]);
        $O7SECT_L7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV7["O7SECT"]);
        $O7SLLV_L7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV7["O7SLLV"]);
        $O7EAD1_L7 =  iconv("windows-874","utf-8",$querystr_code_request_SOPO7_LV7["O7EAD1"]);

        $querystr_BGPBT_SLMN_USERCODE_L7  =  odbc_exec($conn," select BTCODE,BTDESC,BTEMCD from smcdta.BGPBT where  BTSYSC  =  'SLMN'  and  BTCODE ='".$O7SLMN_L7."'  ");
        $querystr_code_L7 = odbc_fetch_array($querystr_BGPBT_SLMN_USERCODE_L7);
        $BTDESC_L7 = iconv("windows-874", "utf-8", $querystr_code_L7["BTDESC"]);
        $BTCODE_L7_T = iconv("windows-874", "utf-8", $querystr_code_L7["BTCODE"]);
        $BTEMCD_L7 = iconv("windows-874", "utf-8", $querystr_code_L7["BTEMCD"]);
        $BTCODE_L7 = trim($BTCODE_L7_T);

       $querystr_BGPBT_SOPO7_L7 =  odbc_exec($conn," select BTDESC,BTEMCD,BTCODE  from smcdta.BGPBT where  BTSYSC  = 'USID'  and  BTEMCD ='".$BTEMCD_L7."'  ");
        $querystr_code_request_BGPBT_SOPO7_L7 = odbc_fetch_array($querystr_BGPBT_SOPO7_L7);
         $BTDESC_AB7_L7 = iconv("windows-874", "utf-8", $querystr_code_request_BGPBT_SOPO7_L7["BTDESC"]);
         $BTCODE_AB7_L7 = iconv("windows-874", "utf-8", $querystr_code_request_BGPBT_SOPO7_L7["BTCODE"]);
      $BTCODE_AB7_L7_1 = trim($BTCODE_AB7_L7);


    //Query sopu6

      $querystr_sopu6 = odbc_exec($conn,"select *  from smcdta.UMPDTLNR where  U6DCNO = '".$DCNO."'  and  U6DSTC = '".$DLTEXT_AA31."'  ORDER BY  U6LINE ");


        $querystr_sopu6_1 = odbc_exec($conn,"select *  from smcdta.UMPDTLNR where  U6DCNO = '".$DCNO."'   ");
         $querystr_code_request_SOPu6 = odbc_fetch_array($querystr_sopu6_1);
        $U6LINE =  iconv("windows-874","utf-8",$querystr_code_request_SOPu6["U6LINE"]);
        $U6NETR =  iconv("windows-874","utf-8",$querystr_code_request_SOPu6["U6NETR"]);
        $U6MNQT =  iconv("windows-874","utf-8",$querystr_code_request_SOPu6["U6MNQT"]);
        $U6LIST =  iconv("windows-874","utf-8",$querystr_code_request_SOPu6["U6LIST"]);
        $U6PRNO =  iconv("windows-874","utf-8",$querystr_code_request_SOPu6["U6PRNO"]);

    //Query sopum
      #$querystr_sopum = odbc_exec($conn,"select *  from smcdta.SOPUM where  UMDCNO = '".$DCNO."'  ");



          $DCNOLV1 =  $DCNO.".".$BTCODE_AB7_S1SSE;
          $DCNOLV2 =  $DCNO.".".$BTCODE_AB7_S1BM;
          $DCNOLV3 =  $DCNO.".".$BTCODE_AB7_X7;
          $DCNOLV4 =  $DCNO.".".$BTCODE_AB7_T7;
          $DCNOLV5 =  $DCNO.".".$BTCODE_AB7_P7;
          $DCNOLV6 =  $DCNO.".".$BTCODE_AB7_H7;
          $DCNOLV61 = $DCNO.".".$BTCODE_AB7_L7;


       $querystr_BGPBT_RQ = odbc_exec($conn," select BTDESC,BTEMCD from smcdta.BGPBT where  BTSYSC  = 'USID'  and  BTCODE ='".$U5OPCD_trim."'  ");
        $querystr_code_request = odbc_fetch_array($querystr_BGPBT_RQ);
        $BTDESC_RQ = iconv("windows-874","utf-8", $querystr_code_request["BTDESC"]);
        $BTEMCD_RQ = iconv("windows-874","utf-8",$querystr_code_request["BTEMCD"]);


        $querystr_BGPBT_SLMN_RQ  = odbc_exec($conn," select BTCODE,BTDESC from smcdta.BGPBT where  BTSYSC  = 'SLMN'  and  BTEMCD ='".$BTEMCD_RQ."'  ");
        $querystr_code_request_RQ= odbc_fetch_array($querystr_BGPBT_SLMN_RQ);
        $BTDESC_1_RQ = iconv("windows-874","utf-8", $querystr_code_request_RQ["BTDESC"]);
        $BTCODE_RQ = iconv("windows-874","utf-8",$querystr_code_request_RQ["BTCODE"]);


          $querystr_ITPN4 = odbc_exec($conn,"select N4MAIL from smcdta.ITPN4 where  N4USID   = '".$U5OPCD_trim."'  order by  N4OPDT desc ");
        $querystr_code_request_ITPN4= odbc_fetch_array($querystr_ITPN4);
        $N4MAIL = iconv("windows-874","utf-8",$querystr_code_request_ITPN4["N4MAIL"]);



        $querystr_sopug_1 = odbc_exec($conn,"select UGTQTY  from smcdta.UMPDSBTA  where  UGCOCD = '02'  and UGDCNO = '".$DCNO."' and UGDSTC = '".$DLTEXT_AA31."'  ");
         $querystr_code_request_SOPug = odbc_fetch_array($querystr_sopug_1);
        $UGTQTY =  iconv("windows-874","utf-8",$querystr_code_request_SOPug["UGTQTY"]);


      // Query SQL DATE Approve


    $querystr_sopov_1 = odbc_exec($conn,"select OVDATE,OVTIME,OVAPBY from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."'  and OVEVCD = '1' order by OVDATE desc , OVTIME DESC ");
    $querystr_sopov_re_1  = odbc_fetch_array($querystr_sopov_1);
    $OVDATE_1 = iconv("windows-874","utf-8",$querystr_sopov_re_1["OVDATE"]);
    $OVTIME_1 = iconv("windows-874","utf-8",$querystr_sopov_re_1["OVTIME"]);
    $OVDATE_1_date = date_create_from_format('Ymd',$OVDATE_1);
    $OVDATE_1_dates = date_format($OVDATE_1_date,'Y/m/d');
    $OVAPBY_1 = iconv("windows-874","utf-8",$querystr_sopov_re_1["OVAPBY"]);
    $OVAPBY_1_T = trim($OVAPBY_1);


    $querystr_sopov_E = odbc_exec($conn,"select OVDATE,OVTIME,OVAPBY from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."'  and OVEVCD = 'E' order by OVDATE desc , OVTIME DESC ");
    $querystr_sopov_re_E  = odbc_fetch_array($querystr_sopov_E);
    $OVDATE_E = iconv("windows-874","utf-8",$querystr_sopov_re_E["OVDATE"]);
    $OVTIME_E = iconv("windows-874","utf-8",$querystr_sopov_re_E["OVTIME"]);
    $OVDATE_E_date = date_create_from_format('Ymd',$OVDATE_E);
    $OVDATE_E_dates = date_format($OVDATE_E_date,'Y/m/d');
    $OVAPBY_E = iconv("windows-874","utf-8",$querystr_sopov_re_E["OVAPBY"]);
    $OVAPBY_E_T = trim($OVAPBY_E);


    $querystr_sopov_B = odbc_exec($conn,"select OVDATE,OVTIME,OVAPBY from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."'  and OVEVCD = 'B' order by OVDATE desc , OVTIME DESC  ");
    $querystr_sopov_re_B  = odbc_fetch_array($querystr_sopov_B);
    $OVDATE_B = iconv("windows-874","utf-8",$querystr_sopov_re_B["OVDATE"]);
    $OVTIME_B = iconv("windows-874","utf-8",$querystr_sopov_re_B["OVTIME"]);
    $OVDATE_B_date = date_create_from_format('Ymd',$OVDATE_B);
    $OVDATE_B_dates = date_format($OVDATE_B_date,'Y/m/d');
    $OVAPBY_B = iconv("windows-874","utf-8",$querystr_sopov_re_B["OVAPBY"]);
    $OVAPBY_B_T = trim($OVAPBY_B);


    $querystr_sopov_A = odbc_exec($conn,"select OVDATE,OVTIME,OVAPBY from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."'  and OVEVCD = 'A' order by OVDATE desc , OVTIME DESC ");
    $querystr_sopov_re_A  = odbc_fetch_array($querystr_sopov_A);
    $OVDATE_A = iconv("windows-874","utf-8",$querystr_sopov_re_A["OVDATE"]);
    $OVTIME_A = iconv("windows-874","utf-8",$querystr_sopov_re_A["OVTIME"]);
    $OVDATE_A_date = date_create_from_format('Ymd',$OVDATE_A);
    $OVDATE_A_dates = date_format($OVDATE_A_date,'Y/m/d');
    $OVAPBY_A = iconv("windows-874","utf-8",$querystr_sopov_re_A["OVAPBY"]);
    $OVAPBY_A_T = trim($OVAPBY_A);



    $querystr_sopov_M = odbc_exec($conn,"select OVDATE,OVTIME,OVEVCD,OVAPBY from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."'  and OVEVCD = 'M' order by OVDATE desc , OVTIME DESC ");
    $querystr_sopov_re_M  = odbc_fetch_array($querystr_sopov_M);
    $OVDATE_M = iconv("windows-874","utf-8",$querystr_sopov_re_M["OVDATE"]);
    $OVTIME_M = iconv("windows-874","utf-8",$querystr_sopov_re_M["OVTIME"]);
    $OVDATE_M_date = date_create_from_format('Ymd',$OVDATE_M);
    $OVDATE_M_dates = date_format($OVDATE_M_date,'Y/m/d');
    $OVAPBY_M = iconv("windows-874","utf-8",$querystr_sopov_re_M["OVAPBY"]);
    $OVEVCD_M_sta  = iconv("windows-874","utf-8",$querystr_sopov_M["OVEVCD"]);
    $OVAPBY_M_T = trim($OVAPBY_M);


    $querystr_sopov_S = odbc_exec($conn,"select OVDATE,OVTIME,OVAPBY from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."'  and OVEVCD = 'S' order by OVDATE desc , OVTIME DESC ");
    $querystr_sopov_re_S  = odbc_fetch_array($querystr_sopov_S);
    $OVDATE_S = iconv("windows-874","utf-8",$querystr_sopov_re_S["OVDATE"]);
    $OVTIME_S = iconv("windows-874","utf-8",$querystr_sopov_re_S["OVTIME"]);
    $OVDATE_S_date = date_create_from_format('Ymd',$OVDATE_S);
    $OVDATE_S_dates = date_format($OVDATE_S_date,'Y/m/d');
    $OVAPBY_S = iconv("windows-874","utf-8",$querystr_sopov_re_S["OVAPBY"]);
    $OVAPBY_S_T = trim($OVAPBY_S);


    $querystr_sopov_L = odbc_exec($conn,"select OVDATE,OVTIME,OVAPBY from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."'  and OVEVCD = 'L' order by OVDATE desc , OVTIME DESC ");
    $querystr_sopov_re_L  = odbc_fetch_array($querystr_sopov_L);
    $OVDATE_L = iconv("windows-874","utf-8",$querystr_sopov_re_L["OVDATE"]);
    $OVTIME_L = iconv("windows-874","utf-8",$querystr_sopov_re_L["OVTIME"]);
    $OVDATE_L_date = date_create_from_format('Ymd',$OVDATE_L);
    $OVDATE_L_dates = date_format($OVDATE_L_date,'Y/m/d');
    $OVAPBY_L = iconv("windows-874","utf-8",$querystr_sopov_re_L["OVAPBY"]);
    $OVAPBY_L_T = trim($OVAPBY_L);


    $querystr_sopov_N = odbc_exec($conn,"select OVDATE,OVTIME,OVAPBY from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."'  and OVEVCD = 'N' order by OVDATE desc , OVTIME DESC ");
    $querystr_sopov_re_N  = odbc_fetch_array($querystr_sopov_N);
    $OVDATE_N = iconv("windows-874","utf-8",$querystr_sopov_re_N["OVDATE"]);
    $OVTIME_N = iconv("windows-874","utf-8",$querystr_sopov_re_N["OVTIME"]);
    $OVDATE_N_date = date_create_from_format('Ymd',$OVDATE_N);
    $OVDATE_N_dates = date_format($OVDATE_N_date,'Y/m/d');
    $OVAPBY_N = iconv("windows-874","utf-8",$querystr_sopov_re_N["OVAPBY"]);
    $OVAPBY_N_T = trim($OVAPBY_N);


 $querystr_sopov_G = odbc_exec($conn,"select *  from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."'  and OVEVCD = 'Z' order by OVDATE desc , OVTIME DESC ");
    $querystr_sopov_re_G  = odbc_fetch_array($querystr_sopov_G);
    $OVDATE_G = iconv("windows-874","utf-8",$querystr_sopov_re_G["OVDATE"]);
    $OVTIME_G = iconv("windows-874","utf-8",$querystr_sopov_re_G["OVTIME"]);
    $OVDATE_G_date = date_create_from_format('Ymd',$OVDATE_G);
    $OVDATE_G_dates = date_format($OVDATE_G_date,'Y/m/d');
    $OVAPBY_G = iconv("windows-874","utf-8",$querystr_sopov_re_G["OVAPBY"]);
    $OVAPBY_G_T = trim($OVAPBY_G);                                    
    $OVEVEN_6APMD_G   = iconv("windows-874","utf-8",$querystr_sopov_re_G["OVEVEN"]);
    $OVEVEN_6CAPMD1_G = trim($OVEVEN_6APMD_G);

 $querystr_sopov_Y = odbc_exec($conn,"select * from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."'  and OVEVCD = 'Y' order by OVDATE desc , OVTIME DESC ");
    $querystr_sopov_re_Y  = odbc_fetch_array($querystr_sopov_Y);
    $OVDATE_Y = iconv("windows-874","utf-8",$querystr_sopov_re_Y["OVDATE"]);
    $OVTIME_Y = iconv("windows-874","utf-8",$querystr_sopov_re_Y["OVTIME"]);
    $OVDATE_Y_date = date_create_from_format('Ymd',$OVDATE_Y);
    $OVDATE_Y_dates = date_format($OVDATE_Y_date,'Y/m/d');
    $OVAPBY_Y = iconv("windows-874","utf-8",$querystr_sopov_re_Y["OVAPBY"]);
      $OVAPBY_Y_T = trim($OVAPBY_Y);                                     
    $OVEVEN_6APMD_Y   = iconv("windows-874","utf-8",$querystr_sopov_re_Y["OVEVEN"]);
    $OVEVEN_6CAPMD1_Y = trim($OVEVEN_6APMD_Y);
    
    $querystr_sopov_6 = odbc_exec($conn,"select OVDATE,OVAPBY,OVEVCD,OVAPBY from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."'  and OVEVCD = '6' order by OVDATE desc , OVTIME DESC ");
    $querystr_sopov_re_6  = odbc_fetch_array($querystr_sopov_6);
    $OVDATE_6 = iconv("windows-874","utf-8",$querystr_sopov_re_6["OVDATE"]);
    $OVAPBY_61 = iconv("windows-874","utf-8",$querystr_sopov_re_6["OVAPBY"]);
    $OVDATE_6_date = date_create_from_format('Ymd',$OVDATE_6);
    $OVDATE_6_dates = date_format($OVDATE_6_date,'Y/m/d');
    $OVEVCD_6_sta  = iconv("windows-874","utf-8",$querystr_sopov_re_6["OVEVCD"]);
    $OVAPBY_6  = trim($OVAPBY_61);
    $datesig = $OVDATE_E_dates."  ".$OVDATE_B_dates;

$querystr_sopov_6APMD_null = odbc_exec($conn,"select OVDATE,OVAPBY,OVEVCD,OVEVEN from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."' and OVEVEN = 'MD Price Approved'  and OVEVCD = '' ");
                 $querystr_sopov6_6APMD_null = odbc_fetch_array($querystr_sopov_6APMD_null);
                 $OVAPBY_6APMD_null  = iconv("windows-874","utf-8",$querystr_sopov6_6APMD_null["OVAPBY"]);
                 $OVEVCD_6APMD_null   = iconv("windows-874","utf-8",$querystr_sopov6_6APMD_null["OVEVCD"]);
                 $OVEVEN_6APMD_null   = iconv("windows-874","utf-8",$querystr_sopov6_6APMD_null["OVEVEN"]);
                 $OVDATE_6APMD_null   = iconv("windows-874","utf-8",$querystr_sopov6_6APMD_null["OVDATE"]);
                 $OVDATE_6APMD_null_date_null = date_create_from_format('Ymd',$OVDATE_6APMD_null);
                 $OVDATE_6APMD_nulls_dates_null = date_format($OVDATE_6APMD_null_date_null,'Y/m/d');
                 $OVAPBY_6APMD1_null  = trim($OVAPBY_6APMD_null);
                 $OVEVEN_6CAPMD1_null = trim($OVEVEN_6APMD_null);





$querystr_sopov_6APSD_null = odbc_exec($conn,"select OVDATE,OVAPBY,OVEVCD,OVEVEN from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."' and OVEVEN = 'SD Price Approved'  and OVEVCD = '' ");
                 $querystr_sopov6_6APSD_null = odbc_fetch_array($querystr_sopov_6APSD_null);
                 $OVAPBY_6APSD_null  = iconv("windows-874","utf-8",$querystr_sopov6_6APSD_null["OVAPBY"]);
                 $OVEVCD_6APSD_null   = iconv("windows-874","utf-8",$querystr_sopov6_6APSD_null["OVEVCD"]);
                 $OVEVEN_6APSD_null   = iconv("windows-874","utf-8",$querystr_sopov6_6APSD_null["OVEVEN"]);
                 $OVDATE_6APSD_null   = iconv("windows-874","utf-8",$querystr_sopov6_6APSD_null["OVDATE"]);
                 $OVDATE_6APSD_null_date_null = date_create_from_format('Ymd',$OVDATE_6APSD_null);
                 $OVDATE_6APSD_nulls_dates_null = date_format($OVDATE_6APSD_null_date_null,'Y/m/d');
                 $OVAPBY_6APSD1_null  = trim($OVAPBY_6APSD_null);
                 $OVEVEN_6CAPSD1_null = trim($OVEVEN_6APSD_null);




$querystr_sopov_6APMD = odbc_exec($conn,"select OVDATE,OVAPBY,OVEVCD,OVEVEN from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."' and OVEVEN = 'MD Price Approved'  and OVEVCD = 'N' ");
                 $querystr_sopov6_6APMD = odbc_fetch_array($querystr_sopov_6APMD);
                 $OVAPBY_6APMD  = iconv("windows-874","utf-8",$querystr_sopov6_6APMD["OVAPBY"]);
                 $OVEVCD_6APMD   = iconv("windows-874","utf-8",$querystr_sopov6_6APMD["OVEVCD"]);
                 $OVEVEN_6APMD   = iconv("windows-874","utf-8",$querystr_sopov6_6APMD["OVEVEN"]);
                 $OVDATE_6APMD   = iconv("windows-874","utf-8",$querystr_sopov6_6APMD["OVDATE"]);
                 $OVDATE_6APMD_null_date = date_create_from_format('Ymd',$OVDATE_6APMD);
                 $OVDATE_6APMD_nulls_dates = date_format($OVDATE_6APMD_null_date,'Y/m/d');
                 $OVAPBY_6APMD1  = trim($OVAPBY_6APMD);
                 $OVEVEN_6CAPMD1 = trim($OVEVEN_6APMD);





$querystr_sopov_6APSD = odbc_exec($conn,"select OVDATE,OVAPBY,OVEVCD,OVEVEN from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."' and OVEVEN = 'SD Price Approved'  and OVEVCD = 'L' ");
                 $querystr_sopov6_6APSD = odbc_fetch_array($querystr_sopov_6APSD);
                 $OVAPBY_6APSD  = iconv("windows-874","utf-8",$querystr_sopov6_6APSD["OVAPBY"]);
                 $OVEVCD_6APSD   = iconv("windows-874","utf-8",$querystr_sopov6_6APSD["OVEVCD"]);
                 $OVEVEN_6APSD   = iconv("windows-874","utf-8",$querystr_sopov6_6APSD["OVEVEN"]);
                 $OVDATE_6APSD   = iconv("windows-874","utf-8",$querystr_sopov6_6APSD["OVDATE"]);
                 $OVDATE_6APSD_null_date = date_create_from_format('Ymd',$OVDATE_6APSD);
                 $OVDATE_6APSD_nulls_dates = date_format($OVDATE_6APSD_null_date,'Y/m/d');
                 $OVAPBY_6APSD1  = trim($OVAPBY_6APSD);
                 $OVEVEN_6CAPSD1 = trim($OVEVEN_6APSD);

                 
   $querystr_sopo6 = odbc_exec($conn,"select OVDATE,OVAPBY,OVEVCD,OVEVEN from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."'  and OVEVEN = 'SSE Cancel' ");
                 $querystr_sopov6_ck  = odbc_fetch_array($querystr_sopo6);
                 $OVAPBY_6CK = iconv("windows-874","utf-8",$querystr_sopov6_ck["OVAPBY"]);
                 $OVEVCD_6CK  = iconv("windows-874","utf-8",$querystr_sopov6_ck["OVEVCD"]);
                 $OVEVEN_6CK  = iconv("windows-874","utf-8",$querystr_sopov6_ck["OVEVEN"]);
                 $OVDATE_6CK  = iconv("windows-874","utf-8",$querystr_sopov6_BM["OVDATE"]);
                 $OVDATE_6CK_null_date = date_create_from_format('Ymd',$OVDATE_6CK);
                 $OVDATE_6CK_nulls_dates = date_format($OVDATE_6CK_null_date,'Y/m/d');
                 $OVAPBY_6CY  = trim($OVAPBY_6CK);
                 $OVEVEN_6CK1 = trim($OVEVEN_6CK);

$querystr_sopo6BM = odbc_exec($conn,"select OVDATE,OVAPBY,OVEVCD,OVEVEN from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."' and OVEVEN = 'BM Cancel' ");
                 $querystr_sopov6_BM = odbc_fetch_array($querystr_sopo6BM);
                 $OVAPBY_6BM = iconv("windows-874","utf-8",$querystr_sopov6_BM["OVAPBY"]);
                 $OVEVCD_6BM  = iconv("windows-874","utf-8",$querystr_sopov6_BM["OVEVCD"]);
                 $OVEVEN_6BM  = iconv("windows-874","utf-8",$querystr_sopov6_BM["OVEVEN"]);
                 $OVDATE_6BM  = iconv("windows-874","utf-8",$querystr_sopov6_BM["OVDATE"]);
                 $OVDATE_6BM_null_date = date_create_from_format('Ymd',$OVDATE_6BM);
                 $OVDATE_6BM_nulls_dates = date_format($OVDATE_6BM_null_date,'Y/m/d');
                 $OVAPBY_6BM1  = trim($OVAPBY_6BM);
                 $OVEVEN_6CBM1 = trim($OVEVEN_6BM);

$querystr_sopo6ASM = odbc_exec($conn,"select OVDATE,OVAPBY,OVEVCD,OVEVEN from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."' and OVEVEN = 'ASM Cancel' ");
                 $querystr_sopov6_ASM = odbc_fetch_array($querystr_sopo6ASM);
                 $OVAPBY_6ASM = iconv("windows-874","utf-8",$querystr_sopov6_ASM["OVAPBY"]);
                 $OVEVCD_6ASM  = iconv("windows-874","utf-8",$querystr_sopov6_ASM["OVEVCD"]);
                 $OVEVEN_6ASM  = iconv("windows-874","utf-8",$querystr_sopov6_ASM["OVEVEN"]);
                 $OVDATE_6ASM  = iconv("windows-874","utf-8",$querystr_sopov6_ASM["OVDATE"]);
                 $OVDATE_6ASM_null_date = date_create_from_format('Ymd',$OVDATE_6ASM);
                 $OVDATE_6ASM_nulls_dates = date_format($OVDATE_6ASM_null_date,'Y/m/d');
                 $OVAPBY_6ASM1  = trim($OVAPBY_6ASM);
                 $OVEVEN_6ASM1 = trim($OVEVEN_6ASM);

$querystr_sopo6SM = odbc_exec($conn,"select OVDATE,OVAPBY,OVEVCD,OVEVEN from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."' and OVEVEN = 'SM Cancel' ");
                 $querystr_sopov6_SM = odbc_fetch_array($querystr_sopo6SM);
                 $OVAPBY_6SM = iconv("windows-874","utf-8",$querystr_sopov6_SM["OVAPBY"]);
                 $OVEVCD_6SM  = iconv("windows-874","utf-8",$querystr_sopov6_SM["OVEVCD"]);
                 $OVEVEN_6SM  = iconv("windows-874","utf-8",$querystr_sopov6_SM["OVEVEN"]);
                 $OVDATE_6SM  = iconv("windows-874","utf-8",$querystr_sopov6_SM["OVDATE"]);
                 $OVDATE_6SM_null_date = date_create_from_format('Ymd',$OVDATE_6SM);
                 $OVDATE_6SM_nulls_dates = date_format($OVDATE_6SM_null_date,'Y/m/d');
                 $OVAPBY_6SM1  = trim($OVAPBY_6SM);
                 $OVEVEN_6SM1 = trim($OVEVEN_6SM);

$querystr_sopo6SMM = odbc_exec($conn,"select OVDATE,OVAPBY,OVEVCD,OVEVEN from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."' and OVEVEN = 'SMM Cancel' ");
                 $querystr_sopov6_SMM = odbc_fetch_array($querystr_sopo6SMM);
                 $OVAPBY_6SMM = iconv("windows-874","utf-8",$querystr_sopov6_SMM["OVAPBY"]);
                 $OVEVCD_6SMM  = iconv("windows-874","utf-8",$querystr_sopov6_SMM["OVEVCD"]);
                 $OVEVEN_6SMM  = iconv("windows-874","utf-8",$querystr_sopov6_SMM["OVEVEN"]);
                 $OVDATE_6SMM  = iconv("windows-874","utf-8",$querystr_sopov6_SMM["OVDATE"]);
                 $OVDATE_6SMM_null_date = date_create_from_format('Ymd',$OVDATE_6SMM);
                 $OVDATE_6SMM_nulls_dates = date_format($OVDATE_6SMM_null_date,'Y/m/d');
                 $OVAPBY_6SMM1  = trim($OVAPBY_6SMM);
                 $OVEVEN_6SMM1 = trim($OVEVEN_6SMM);


$querystr_sopo6SD = odbc_exec($conn,"select OVDATE,OVAPBY,OVEVCD,OVEVEN from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."' and OVEVEN = 'SD Cancel' order by OVDATE desc , OVTIME DESC  ");
                 $querystr_sopov6_SD = odbc_fetch_array($querystr_sopo6SD);
                 $OVAPBY_6SD = iconv("windows-874","utf-8",$querystr_sopov6_SD["OVAPBY"]);
                 $OVEVCD_6SD  = iconv("windows-874","utf-8",$querystr_sopov6_SD["OVEVCD"]);
                 $OVEVEN_6SD  = iconv("windows-874","utf-8",$querystr_sopov6_SD["OVEVEN"]);
                 $OVDATE_6SD  = iconv("windows-874","utf-8",$querystr_sopov6_SD["OVDATE"]);
                 $OVDATE_6SD_null_date = date_create_from_format('Ymd',$OVDATE_6SD);
                 $OVDATE_6SD_nulls_dates = date_format($OVDATE_6SD_null_date,'Y/m/d');
                 $OVAPBY_6SD1  = trim($OVAPBY_6SD);
                 $OVEVEN_6SD1 = trim($OVEVEN_6SD);

$querystr_sopo6MD = odbc_exec($conn,"select OVDATE,OVAPBY,OVEVCD,OVEVEN from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."' and OVEVEN = 'MD Cancel'    order by OVDATE desc , OVTIME DESC  ");
                 $querystr_sopov6_MD = odbc_fetch_array($querystr_sopo6MD);
                 $OVAPBY_6MD = iconv("windows-874","utf-8",$querystr_sopov6_MD["OVAPBY"]);
                 $OVEVCD_6MD  = iconv("windows-874","utf-8",$querystr_sopov6_MD["OVEVCD"]);
                 $OVEVEN_6MD  = iconv("windows-874","utf-8",$querystr_sopov6_MD["OVEVEN"]);
                 $OVDATE_6MD  = iconv("windows-874","utf-8",$querystr_sopov6_MD["OVDATE"]);
                 $OVDATE_6MD_null_date = date_create_from_format('Ymd',$OVDATE_6MD);
                 $OVDATE_6MD_nulls_dates = date_format($OVDATE_6MD_null_date,'Y/m/d');
                 $OVAPBY_6MD1  = trim($OVAPBY_6MD);
                 $OVEVEN_6MD1 = trim($OVEVEN_6MD);


$querystr_sopo6MD_null = odbc_exec($conn,"select OVDATE,OVAPBY,OVEVCD,OVEVEN from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."' and OVEVEN = 'MD Cancel' and OVEVCD = ''   order by OVDATE desc , OVTIME DESC  ");
                 $querystr_sopov6_MD_null = odbc_fetch_array($querystr_sopo6MD_null);
                 $OVAPBY_6MD_null = iconv("windows-874","utf-8",$querystr_sopov6_MD_null["OVAPBY"]);
                 $OVEVCD_6MD_null  = iconv("windows-874","utf-8",$querystr_sopov6_MD_null["OVEVCD"]);
                 $OVEVEN_6MD_null  = iconv("windows-874","utf-8",$querystr_sopov6_MD_null["OVEVEN"]);
                 $OVDATE_6MD_null  = iconv("windows-874","utf-8",$querystr_sopov6_MD_null["OVDATE"]);
                 $OVDATE_6MD_null_date_null = date_create_from_format('Ymd',$OVDATE_6MD_null);
                 $OVDATE_6MD_nulls_dates_null = date_format($OVDATE_6MD_null_date_null,'Y/m/d');
                 $OVAPBY_6MD1_null  = trim($OVAPBY_6MD_null);
                 $OVEVEN_6MD1_null = trim($OVEVEN_6MD_null);
                  $OVEVCD_6MD1_null = trim($OVEVCD_6MD_null);

$querystr_sopo6SD_null = odbc_exec($conn,"select OVDATE,OVAPBY,OVEVCD,OVEVEN from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."' and OVEVEN = 'SD Cancel' and OVEVCD = ''   order by OVDATE desc , OVTIME DESC  ");
                 $querystr_sopov6_SD_null = odbc_fetch_array($querystr_sopo6SD_null);
                 $OVAPBY_6SD_null = iconv("windows-874","utf-8",$querystr_sopov6_SD_null["OVAPBY"]);
                 $OVEVCD_6SD_null  = iconv("windows-874","utf-8",$querystr_sopov6_SD_null["OVEVCD"]);
                 $OVEVEN_6SD_null  = iconv("windows-874","utf-8",$querystr_sopov6_SD_null["OVEVEN"]);
                 $OVDATE_6SD_null  = iconv("windows-874","utf-8",$querystr_sopov6_SD_null["OVDATE"]);
                 $OVDATE_6SD_null_date_null = date_create_from_format('Ymd',$OVDATE_6SD_null);
                 $OVDATE_6SD_nulls_dates_null = date_format($OVDATE_6SD_null_date_null,'Y/m/d');
                 $OVAPBY_6SD1_null  = trim($OVAPBY_6SD_null);
                 $OVEVEN_6SD1_null = trim($OVEVEN_6SD_null);
                 $OVEVCD_6SD1_null = trim($OVEVCD_6SD_null);


$querystr_sopo6MD_null_Z = odbc_exec($conn,"select OVDATE,OVAPBY,OVEVCD,OVEVEN from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."' and OVEVEN = 'MD Cancel' and OVEVCD = 'Z'   order by OVDATE desc , OVTIME DESC  ");
                 $querystr_sopov6_MD_null_Z = odbc_fetch_array($querystr_sopo6MD_null_Z);
                 $OVAPBY_6MD_null_Z = iconv("windows-874","utf-8",$querystr_sopov6_MD_null_Z["OVAPBY"]);
                 $OVEVCD_6MD_null_Z  = iconv("windows-874","utf-8",$querystr_sopov6_MD_null_Z["OVEVCD"]);
                 $OVEVEN_6MD_null_Z  = iconv("windows-874","utf-8",$querystr_sopov6_MD_null_Z["OVEVEN"]);
                 $OVDATE_6MD_null_Z  = iconv("windows-874","utf-8",$querystr_sopov6_MD_null_Z["OVDATE"]);
                 $OVDATE_6MD_null_date_null_Z = date_create_from_format('Ymd',$OVDATE_6MD_null_Z);
                 $OVDATE_6MD_nulls_dates_null_Z = date_format($OVDATE_6MD_null_date_null_Z,'Y/m/d');
                 $OVAPBY_6MD1_null_Z  = trim($OVAPBY_6MD_null_Z);
                 $OVEVEN_6MD1_null_Z = trim($OVEVEN_6MD_null_Z);
                  $OVEVCD_6MD1_null_Z = trim($OVEVCD_6MD_null_Z);

$querystr_sopo6SD_null_Z = odbc_exec($conn,"select OVDATE,OVAPBY,OVEVCD,OVEVEN from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."' and OVEVEN = 'SD Cancel' and OVEVCD = 'Z'  order by OVDATE desc , OVTIME DESC  ");
                 $querystr_sopov6_SD_null_Z = odbc_fetch_array($querystr_sopo6SD_null_Z);
                 $OVAPBY_6SD_null_Z = iconv("windows-874","utf-8",$querystr_sopov6_SD_null_Z["OVAPBY"]);
                 $OVEVCD_6SD_null_Z  = iconv("windows-874","utf-8",$querystr_sopov6_SD_null_Z["OVEVCD"]);
                 $OVEVEN_6SD_null_Z  = iconv("windows-874","utf-8",$querystr_sopov6_SD_null_Z["OVEVEN"]);
                 $OVDATE_6SD_null_Z  = iconv("windows-874","utf-8",$querystr_sopov6_SD_null_Z["OVDATE"]);
                 $OVDATE_6SD_null_Z_date_null_Z = date_create_from_format('Ymd',$OVDATE_6SD_null_Z);
                 $OVDATE_6SD_nulls_dates_null_Z = date_format($OVDATE_6SD_null_date_null_Z,'Y/m/d');
                 $OVAPBY_6SD1_null_Z  = trim($OVAPBY_6SD_null_Z);
                 $OVEVEN_6SD1_null_Z = trim($OVEVEN_6SD_null_Z);
                 $OVEVCD_6SD1_null_Z = trim($OVEVCD_6SD_null_Z);



   $querystr_sopov_nulldate = odbc_exec($conn,"select *  from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."'  and OVEVCD = '' order by OVDATE desc , OVTIME DESC ");
    $querystr_sopov_null_dt  = odbc_fetch_array($querystr_sopov_nulldate);
    $OVDATE_null = iconv("windows-874","utf-8",$querystr_sopov_null_dt["OVDATE"]);
    $OVTIME_null = iconv("windows-874","utf-8",$querystr_sopov_null_dt["OVTIME"]);
    $OVDATE_null_date = date_create_from_format('Ymd',$OVDATE_null);
    $OVDATE_nulls_dates = date_format($OVDATE_null_date,'Y/m/d');
    $OVEVCD_null = iconv("windows-874","utf-8",$querystr_sopov_null_dt["OVEVCD"]);
    $OVEVCD_null_trim = trim($OVEVCD_null); 
    $OVAPBY_null   =   iconv("windows-874","utf-8",$querystr_sopov_null_dt["OVAPBY"]);
    $OVAPBY_null_Z  = trim($OVAPBY_null);


   $querystr_sopov_nulldate_Z = odbc_exec($conn,"select *  from smcdta.SOAIRLO1 where  OVORDN   =  '".$DCNO."'  and OVEVCD = 'Z' order by OVDATE desc , OVTIME DESC ");
    $querystr_sopov_null_dt_z  = odbc_fetch_array($querystr_sopov_nulldate_Z);
    $OVDATE_null_Z = iconv("windows-874","utf-8",$querystr_sopov_null_dt_z["OVDATE"]);
    $OVTIME_null_Z = iconv("windows-874","utf-8",$querystr_sopov_null_dt_z["OVTIME"]);
    $OVDATE_null_date_Z = date_create_from_format('Ymd',$OVDATE_null_Z);
    $OVDATE_nulls_dates_Z = date_format($OVDATE_null_date_Z,'Y/m/d');
    $OVEVCD_null_Z = iconv("windows-874","utf-8",$querystr_sopov_null_dt_Z["OVEVCD"]);
     $OVEVCD_null_z_trim = trim($OVEVCD_null_Z); 

    $querystr_sopcan  = odbc_exec($conn,"select CNLINK2 from smcdta.SOALMAIL4 where  CNDCNO   =  '".$DCNO."'    ");
    $querystr_sopcan_1  = odbc_fetch_array($querystr_sopcan);
    $CNLINK2 = iconv("windows-874","utf-8",$querystr_sopcan_1["CNLINK2"]); 
     $CNLINK2_trim = trim($CNLINK2); 
################ SIGNATURE  #############

  $querystr_SOPO7_A6 = $AS400->query("select * from smcdta.SOPO7   where  O7SLMN  = '".$OVAPBY_6."'   ");
        $querystr_code_request_SOPO7_A6 = $AS400->fetch ($querystr_SOPO7_A6);
        $O7SLMN_A6 = trim($AS400->textconvert ($querystr_code_request_SOPO7_A6["O7SLMN"]));
        $O7ESR1_A6 = $AS400->textconvert ($querystr_code_request_SOPO7_A6["O7ESR1"]);
        $O7TSR1_A6 = $AS400->textconvert ($querystr_code_request_SOPO7_A6["O7TSR1"]);
        $O7TSNM_A6 = $AS400->textconvert ($querystr_code_request_SOPO7_A6["O7TSNM"]);
        $O7ESNM_A6 =  $AS400->textconvert ($querystr_code_request_SOPO7_A6["O7ESNM"]);
        $O7POSI_A6 =  $AS400->textconvert ($querystr_code_request_SOPO7_A6["O7POSI"]);
        $O7SPCD_A6 =  $AS400->textconvert ($querystr_code_request_SOPO7_A6["O7SPCD"]);
        $O7DIVI_A6 =  $AS400->textconvert ($querystr_code_request_SOPO7_A6["O7DIVI"]);
        $O7SECT_A6 =  $AS400->textconvert ($querystr_code_request_SOPO7_A6["O7SECT"]);
        $O7SLLV_A6 =  $AS400->textconvert ($querystr_code_request_SOPO7_A6["O7SLLV"]);
        $O7EAD1_A6 =  $AS400->textconvert ($querystr_code_request_SOPO7_A6["O7EAD1"]);

         ////// LEVEL ///////
      if ("L0" == trim($O7SLLV_A6) or "3" == trim($O7SLLV_A6)  ) {
          $LEVELSE = $O7SLMN_A6;
          $LEVELDSE = $DLTEXT_AF10;
          $DATEAF = $OVDATE_6_dates;
          
      }else if ("L1" == trim($O7SLLV_A6) ) {
           $LEVELSSE = $O7SLMN_A6;
           $LEVELDSSE = $DLTEXT_AF10;
           $DATEAB = $OVDATE_6_dates;
      }else if ("L2" == trim($O7SLLV_A6) or "L3" == trim($O7SLLV_A6)) {
          $LEVELBM = $O7SLMN_A6;
          $LEVELDBM = $DLTEXT_AF10;
           $DATEAB = $OVDATE_6_dates;
      }else if ("L4" == trim($O7SLLV_A6) or "C0" == trim($O7SLLV_A6) ) {
           $LEVELASM = $O7SLMN_A6;
           $LEVELDASM = $DLTEXT_AF10;
           $DATEX = $OVDATE_6_dates;
      }else if ("L6" == trim($O7SLLV_A6) ) {
          $LEVELSMM = $O7SLMN_A6;
          $LEVELDSMM = $DLTEXT_AF10;
           $DATEP = $OVDATE_6_dates;
      
      }else if ("L5" == trim($O7SLLV_A6) and $OVAPBY_6 == "NSA" ) {
           $LEVELSD = $O7SLMN_A6;
            $LEVELDSD = $DLTEXT_AF10;
              $DATEL = $OVDATE_6_dates;
      }
      else if ("L5" == trim($O7SLLV_A6) and $OVAPBY_6 == "PSU" ) {
         $LEVELMD = $O7SLMN_A6;
         $LEVELDMD = $DLTEXT_AF10;
           $DATEH  =  $OVDATE_6_dates;
      }
      else if ("L5" == trim($O7SLLV_A6) or $OVAPBY_6 != "NSA"  or $OVAPBY_6 != "PSU"  ) {
          $LEVELSM = $O7SLMN_A6;
          $LEVELDSM = $DLTEXT_AF10;
          $DATET = $OVDATE_6_dates;
      } 

      ////// END LEVEL ///////
        ////// LEVEL ///////
      if ("L0" == trim($O7SLLV_AF7) or "3" == trim($O7SLLV_AF7)  ) {
          $LEVELSE = trim($O7SLMN_AF7);
          $SALESCODED = $LEVELSE;
          $DATEAF = $DLTEXT_AF10;
          
      }else if ("L1" == trim($O7SLLV_AF7) ) {
           $LEVELSSE = trim($O7SLMN_AF7);
            $SALESCODED = $LEVELSSE;
           $LEVELDSSE = $DLTEXT_AF10;
           
          $DATEAB = $DLTEXT_AF10;

      }else if ("L2" == trim($O7SLLV_AF7) or "L3" == trim($O7SLLV_AF7)) {
           $LEVELBM = trim($O7SLMN_AF7);
           $SALESCODED = $LEVELBM;
           $DATEAB = $DLTEXT_AF10;

      }else if ("L4" == trim($O7SLLV_AF7) or "C0" == trim($O7SLLV_AF7) ) {
           $LEVELASM =trim($O7SLMN_AF7);
            $SALESCODED = $LEVELASM;
           $DATEX =$DLTEXT_AF10;

      }else if ("L5" == trim($O7SLLV_AF7) and $DL_USER == "NSA" ) {
           $LEVELSD = trim($O7SLMN_AF7);
             $SALESCODED = $LEVELSD;
            $DATEL = $DLTEXT_AF10;

      }
      else if ("L5" == trim($O7SLLV_AF7) and $DL_USER == "PSU" ) {
         $LEVELMD = trim($O7SLMN_AF7);
           $SALESCODED = $LEVELMD;
            $DATEH  =  $DLTEXT_AF10;
      }
      else if ("L5" == trim($O7SLLV_AF7) or $DL_USER != "NSA"  or $DL_USER != "PSU"  ) {
          $LEVELSM = trim($O7SLMN_AF7);
            $SALESCODED = $LEVELSM;
            $DATET = $DLTEXT_AF10;

      }else if ("L6" == trim($O7SLLV_AF7) ) {
          $LEVELSMM = trim($O7SLMN_AF7);
           $SALESCODED = $LEVELSMM;
            $DATEP = $DLTEXT_AF10;
      }

      /////////////////
 //////////////////////// Signature /////////////////////////
      if ($U5STAT == '1'  ) {
           if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             } 
  }
  if ($U5STAT == 'E'  ) {
       if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
             if ($OVDATE_E_dates != "") {
                      $datesig_1 =  $OVDATE_E_dates;
                 }else {
                     $datesig_1  = "";
             } 
    }
        ###  STATUS  B ### 
        if ($U5STAT == 'B'  ) {
           if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
            if ($OVDATE_E_dates != "") {
                $datesig_1 =  $OVDATE_E_dates;
             }else {
                   $datesig_1  = "";
                 }

            if ($OVDATE_B_dates != "") {
                    $datesig_2 =  $OVDATE_B_dates;
                 }else {
                    $datesig_2  = "";
                 } 
      }
       ###  STATUS  A ### 

       if ($U5STAT == 'A'  ) {
         if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
        if ($OVDATE_E_dates != "") {
                $datesig_1 =  $OVDATE_E_dates;
              }else {
                $datesig_1  = "";
              }

         if ($OVDATE_B_dates != "") {
                $datesig_2 =  $OVDATE_B_dates;
              }else {
                $datesig_2  = "";
              }


             if ($OVDATE_A_dates != "") {
                $OVDATE_X10 =  $OVDATE_A_dates;
              }else {
                $OVDATE_X10  = "";
              } 
             
    }
       ###  STATUS  S ### 
         if ($U5STAT == 'S'  ) {
           if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
   if ($OVDATE_E_dates != "") {
                $datesig_1 =  $OVDATE_E_dates;
              }else {
                $datesig_1  = "";
              }

         if ($OVDATE_B_dates != "") {
                $datesig_2 =  $OVDATE_B_dates;
              }else {
                $datesig_2  = "";
              }

             if ($OVDATE_A_dates != "") {
                $OVDATE_X10 =  $OVDATE_A_dates;
              }else {
                $OVDATE_X10  = "";
              }

              if ($OVDATE_S_dates != "") {
                $OVDATE_T10 =  $OVDATE_S_dates;
              }else {
                $OVDATE_T10  = "";
              }
         }

           ###  STATUS  M  ###      
         if ($U5STAT == 'M'  ) {
           if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
             if ($OVDATE_E_dates != "") {
                  $datesig_1 =  $OVDATE_E_dates;
                }else {
                  $datesig_1  = "";
                }

           if ($OVDATE_B_dates != "") {
                  $datesig_2 =  $OVDATE_B_dates;
                }else {
                  $datesig_2  = "";
                }


               if ($OVDATE_A_dates != "") {
                  $OVDATE_X10 =  $OVDATE_A_dates;
                }else {
                  $OVDATE_X10  = "";
                }

                if ($OVDATE_S_dates != "") {
                  $OVDATE_T10 =  $OVDATE_S_dates;
                }else {
                  $OVDATE_T10  = "";
                }

            if ($OVDATE_M_dates != "") {
                $OVDATE_P10 =  $OVDATE_M_dates;
              }else {
                $OVDATE_P10  = "";
              }
         }
     ###  STATUS  L ###
         if ($U5STAT == 'L'  ) {
           if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
         if ($OVDATE_E_dates != "") {
                  $datesig_1 =  $OVDATE_E_dates;
                }else {
                  $datesig_1  = "";
                }

           if ($OVDATE_B_dates != "") {
                  $datesig_2 =  $OVDATE_B_dates;
                }else {
                  $datesig_2  = "";
                }


               if ($OVDATE_A_dates != "") {
                  $OVDATE_X10 =  $OVDATE_A_dates;
                }else {
                  $OVDATE_X10  = "";
                }

                if ($OVDATE_S_dates != "") {
                  $OVDATE_T10 =  $OVDATE_S_dates;
                }else {
                  $OVDATE_T10  = "";
                }

            if ($OVDATE_M_dates != "") {
                $OVDATE_P10 =  $OVDATE_M_dates;
              }else {
                $OVDATE_P10  = "";
              }
            if ($OVAPBY_L_T ==   $BTCODE_L7 or $OVAPBY_L_T ==   "SHR") {
                if ($OVDATE_L_dates   != "" ) {
                $OVDATE_L10 =  $OVDATE_L_dates;
              }else {
                $OVDATE_L10  = "";
              }
             }             
         }

       ###  STATUS  N ###       
       if ($U5STAT == 'N'  ) {
         if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
          if ($OVDATE_E_dates != "") {
                  $datesig_1 =  $OVDATE_E_dates;
                }else {
                  $datesig_1  = "";
                }

           if ($OVDATE_B_dates != "") {
                  $datesig_2 =  $OVDATE_B_dates;
                }else {
                  $datesig_2  = "";
                }


               if ($OVDATE_A_dates != "") {
                  $OVDATE_X10 =  $OVDATE_A_dates;
                }else {
                  $OVDATE_X10  = "";
                }

                if ($OVDATE_S_dates != "") {
                  $OVDATE_T10 =  $OVDATE_S_dates;
                }else {
                  $OVDATE_T10  = "";
                }

            if ($OVDATE_M_dates != "") {
                $OVDATE_P10 =  $OVDATE_M_dates;
              }else {
                $OVDATE_P10  = "";
              }
             
 
            if ($OVAPBY_N_T == $BTCODE_H7_T) {
                 if ($OVDATE_N_dates != "") {
                $OVDATE_H10 =  $OVDATE_N_dates;
              }else {
                $OVDATE_H10  = "";
              }
            }


       }

        ###  STATUS  Y ###    
       if ($U5STAT == 'Y'  ) {
         if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
            if ($OVDATE_E_dates != "") {
                  $datesig_1 =  $OVDATE_E_dates;
                }else {
                  $datesig_1  = "";
                }

           if ($OVDATE_B_dates != "") {
                  $datesig_2 =  $OVDATE_B_dates;
                }else {
                  $datesig_2  = "";
                }


               if ($OVDATE_A_dates != "") {
                  $OVDATE_X10 =  $OVDATE_A_dates;
                }else {
                  $OVDATE_X10  = "";
                }

                if ($OVDATE_S_dates != "") {
                  $OVDATE_T10 =  $OVDATE_S_dates;
                }else {
                  $OVDATE_T10  = "";
                }

            if ($OVDATE_M_dates != "") {
                $OVDATE_P10 =  $OVDATE_M_dates;
              }else {
                $OVDATE_P10  = "";
              }

             if ($OVAPBY_L_T ==   $BTCODE_L7 or $OVAPBY_L_T ==   "SHR") {
                if ($OVDATE_L_dates   != "" ) {
                $OVDATE_L10 =  $OVDATE_L_dates;
              }else {
                $OVDATE_L10  = "";
              }
             }
              
 


             
              if ($OVAPBY_Y_T ==  $BTCODE_L7  ) {
            
                    if ($OVDATE_Y_dates != "") {
                          $OVDATE_L10 =  $OVDATE_Y_dates;
                      }else{
                            $OVDATE_L10 =  "";
                    }
                }

     /*     if ($OVAPBY_G_T ==   $BTCODE_H7_T ) {
            
            if ($OVDATE_G_dates != "") {
                  $OVDATE_H10 =  $OVDATE_G_dates;
                 }else{
              $OVDATE_H10 =  "";
          }
        } */
             
   }

     ###  STATUS  Z ###  
       if ($U5STAT == 'Z'  ) {
         if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
            if ($OVDATE_E_dates != "") {
                  $datesig_1 =  $OVDATE_E_dates;
                }else {
                  $datesig_1  = "";
                }

           if ($OVDATE_B_dates != "") {
                  $datesig_2 =  $OVDATE_B_dates;
                }else {
                  $datesig_2  = "";
                }


               if ($OVDATE_A_dates != "") {
                  $OVDATE_X10 =  $OVDATE_A_dates;
                }else {
                  $OVDATE_X10  = "";
                }

                if ($OVDATE_S_dates != "") {
                  $OVDATE_T10 =  $OVDATE_S_dates;
                }else {
                  $OVDATE_T10  = "";
                }

            if ($OVDATE_M_dates != "") {
                $OVDATE_P10 =  $OVDATE_M_dates;
              }else {
                $OVDATE_P10  = "";
              }


              
 
            if ($OVAPBY_N_T == $BTCODE_H7_T) {
                 if ($OVDATE_N_dates != "") {
                $OVDATE_H10 =  $OVDATE_N_dates;
              }else {
                $OVDATE_H10  = "";
              }
            }
             if ($OVAPBY_G_T ==   $BTCODE_H7_T ) {       
                     if ($OVDATE_G_dates != "") {
                           $OVDATE_H10 =  $OVDATE_G_dates;
                         }else{
                           $OVDATE_H10 =  "";
                      }
                  }
 


       }



######### END DATE APPROVE  #########  
 

    $U5STAT_trim = trim($U5STAT); 
        if ($U5STAT_trim == "6"  ) {

    if ($DLTEXT_A1 == "L1") {
       if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
      if ($OVDATE_6_dates != "") {
              $datesig_1 =  $OVDATE_6_dates;
            }else {
              $datesig_1  = "";
            }

   }

   if ($DLTEXT_A1 == "L2") {
     if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
        if ($OVDATE_E_dates != "") {
              $datesig_1 =  $OVDATE_E_dates;
            }else {
              $datesig_1  = "";
            }


       if ($OVDATE_6_dates != "") {
              $datesig_2 =  $OVDATE_6_dates;
            }else {
              $datesig_2  = "";
            }

   }

   if ($DLTEXT_A1 == "L3") {
     if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
      if ($OVDATE_E_dates != "") {
              $datesig_1 =  $OVDATE_E_dates;
            }else {
              $datesig_1  = "";
            }


       if ($OVDATE_B_dates != "") {
              $datesig_2 =  $OVDATE_B_dates;
            }else {
              $datesig_2  = "";
            }

       if ($OVDATE_6_dates != "") {
              $OVDATE_X10 =  $OVDATE_6_dates;
            }else {
              $OVDATE_X10  = "";
            }


     }
    if ($DLTEXT_A1 ==  "L4") {
       if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
        if ($OVDATE_E_dates != "") {
                $datesig_1 =  $OVDATE_E_dates;
              }else {
                $datesig_1  = "";
              }

         if ($OVDATE_B_dates != "") {
                $datesig_2 =  $OVDATE_B_dates;
              }else {
                $datesig_2  = "";
              }


             if ($OVDATE_A_dates != "") {
                $OVDATE_X10 =  $OVDATE_A_dates;
              }else {
                $OVDATE_X10  = "";
              }


              if ($OVDATE_6_dates != "") {
                $OVDATE_T10 =  $OVDATE_6_dates;
              }else {
                $OVDATE_T10  = "";
              }
      }


    if ($DLTEXT_A1 == "L5") {
       if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
        if ($OVDATE_E_dates != "") {
                $datesig_1 =  $OVDATE_E_dates;
              }else {
                $datesig_1  = "";
              }

         if ($OVDATE_B_dates != "") {
                $datesig_2 =  $OVDATE_B_dates;
              }else {
                $datesig_2  = "";
              }


             if ($OVDATE_A_dates != "") {
                $OVDATE_X10 =  $OVDATE_A_dates;
              }else {
                $OVDATE_X10  = "";
              }

              if ($OVDATE_S_dates != "") {
                $OVDATE_T10 =  $OVDATE_S_dates;
              }else {
                $OVDATE_T10  = "";
              }



            if ($OVDATE_6_dates != "") {
                $OVDATE_P10 =  $OVDATE_6_dates;
              }else {
                $OVDATE_P10  = "";
              }
      }

    if ($DLTEXT_A1 == "L6") {
       if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
          if ($OVDATE_E_dates != "") {
                  $datesig_1 =  $OVDATE_E_dates;
                }else {
                  $datesig_1  = "";
                }

               if ($OVDATE_B_dates != "") {
                  $datesig_2 =  $OVDATE_B_dates;
                }else {
                  $datesig_2  = "";
                }


               if ($OVDATE_A_dates != "") {
                  $OVDATE_X10 =  $OVDATE_A_dates;
                }else {
                  $OVDATE_X10  = "";
                }

                if ($OVDATE_S_dates != "") {
                  $OVDATE_T10 =  $OVDATE_S_dates;
                }else {
                  $OVDATE_T10  = "";
                }

            if ($OVDATE_M_dates != "") {
                $OVDATE_P10 =  $OVDATE_M_dates;
              }else {
                $OVDATE_P10  = "";
              }

            if ($OVDATE_6_dates != "" && $OVAPBY_6 == $BTCODE_L7 or $OVAPBY_6 ==   "SHR") {
                $OVDATE_L10 =  $OVDATE_6_dates;
              } 

               if ($OVDATE_6_dates != "" && $OVAPBY_6 == $BTCODE_H7_T) {
                $OVDATE_H10 =  $OVDATE_6_dates;
              } 

                if ($OVAPBY_Y_T ==  $BTCODE_L7  ) {
                     if ($OVDATE_Y_dates != "") {
                              $OVDATE_L10 =  $OVDATE_Y_dates;
                                 }else{
                              $OVDATE_L10 =  "";
                             }
                     }

                 if ($OVAPBY_G_T ==   $BTCODE_H7_T ) {           
                         if ($OVDATE_G_dates != "") {
                             $OVDATE_H10 =  $OVDATE_G_dates;
                                  }else{
                              $OVDATE_H10 =  "";
                        }
                 }

               if ($OVAPBY_L_T == $BTCODE_L7) {
                   if ($OVDATE_L_dates  != "") {
                      $OVDATE_L10 =  $OVDATE_L_dates;
                  }else {
                 $OVDATE_L10  = "";
                 }
               }

                          if ($OVAPBY_N_T == $BTCODE_H7_T) {
               if ($OVDATE_N_dates != "") {
                $OVDATE_H10 =  $OVDATE_N_dates;
              }else {
                $OVDATE_H10  = "";
              }
            }

         }
     } 






    $U5STAT_trim = trim($U5STAT); 
        if ($U5STAT_trim == "X"  ) {

    if ($DLTEXT_A1 == 'L1') {
       if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
      if ($OVDATE_6_dates != "") {
              $datesig_1 =  $OVDATE_6_dates;
            }else {
              $datesig_1  = "";
            }

   }

   if ($DLTEXT_A1 == 'L2') {
     if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
        if ($OVDATE_E_dates != "") {
              $datesig_1 =  $OVDATE_E_dates;
            }else {
              $datesig_1  = "";
            }


       if ($OVDATE_6_dates != "") {
              $datesig_2 =  $OVDATE_6_dates;
            }else {
              $datesig_2  = "";
            }

   }

   if ($DLTEXT_A1 == 'L3') {
     if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
      if ($OVDATE_E_dates != "") {
              $datesig_1 =  $OVDATE_E_dates;
            }else {
              $datesig_1  = "";
            }


       if ($OVDATE_B_dates != "") {
              $datesig_2 =  $OVDATE_B_dates;
            }else {
              $datesig_2  = "";
            }

       if ($OVDATE_6_dates != "") {
              $OVDATE_X10 =  $OVDATE_6_dates;
            }else {
              $OVDATE_X10  = "";
            }


     }
    if ($DLTEXT_A1 == 'L4') {
       if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
        if ($OVDATE_E_dates != "") {
                $datesig_1 =  $OVDATE_E_dates;
              }else {
                $datesig_1  = "";
              }

         if ($OVDATE_B_dates != "") {
                $datesig_2 =  $OVDATE_B_dates;
              }else {
                $datesig_2  = "";
              }


             if ($OVDATE_A_dates != "") {
                $OVDATE_X10 =  $OVDATE_A_dates;
              }else {
                $OVDATE_X10  = "";
              }


              if ($OVDATE_6_dates != "") {
                $OVDATE_T10 =  $OVDATE_6_dates;
              }else {
                $OVDATE_T10  = "";
              }
      }


    if ($DLTEXT_A1 == 'L5') {
       if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
        if ($OVDATE_E_dates != "") {
                $datesig_1 =  $OVDATE_E_dates;
              }else {
                $datesig_1  = "";
              }

         if ($OVDATE_B_dates != "") {
                $datesig_2 =  $OVDATE_B_dates;
              }else {
                $datesig_2  = "";
              }


             if ($OVDATE_A_dates != "") {
                $OVDATE_X10 =  $OVDATE_A_dates;
              }else {
                $OVDATE_X10  = "";
              }

              if ($OVDATE_S_dates != "") {
                $OVDATE_T10 =  $OVDATE_S_dates;
              }else {
                $OVDATE_T10  = "";
              }



            if ($OVDATE_6_dates != "") {
                $OVDATE_P10 =  $OVDATE_6_dates;
              }else {
                $OVDATE_P10  = "";
              }
      }

    if ($DLTEXT_A1 == 'L6') {
       if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
          if ($OVDATE_E_dates != "") {
                  $datesig_1 =  $OVDATE_E_dates;
                }else {
                  $datesig_1  = "";
                }

               if ($OVDATE_B_dates != "") {
                  $datesig_2 =  $OVDATE_B_dates;
                }else {
                  $datesig_2  = "";
                }


               if ($OVDATE_A_dates != "") {
                  $OVDATE_X10 =  $OVDATE_A_dates;
                }else {
                  $OVDATE_X10  = "";
                }

                if ($OVDATE_S_dates != "") {
                  $OVDATE_T10 =  $OVDATE_S_dates;
                }else {
                  $OVDATE_T10  = "";
                }

            if ($OVDATE_M_dates != "") {
                $OVDATE_P10 =  $OVDATE_M_dates;
              }else {
                $OVDATE_P10  = "";
              }

            if ($OVDATE_6_dates != "" && $OVAPBY_6 == $BTCODE_L7) {
                $OVDATE_L10 =  $OVDATE_6_dates;
              } 

               if ($OVDATE_6_dates != "" && $OVAPBY_6 == $BTCODE_H7_T) {
                $OVDATE_H10 =  $OVDATE_6_dates;
              } 

                if ($OVAPBY_Y_T ==  $BTCODE_L7  ) {
                     if ($OVDATE_Y_dates != "") {
                              $OVDATE_L10 =  $OVDATE_Y_dates;
                                 }else{
                              $OVDATE_L10 =  "";
                             }
                     }

                 if ($OVAPBY_G_T ==   $BTCODE_H7_T ) {           
                         if ($OVDATE_G_dates != "") {
                             $OVDATE_H10 =  $OVDATE_G_dates;
                                  }else{
                              $OVDATE_H10 =  "";
                        }
                 }

               if ($OVAPBY_L_T == $BTCODE_L7) {
                   if ($OVDATE_L_dates  != "") {
                      $OVDATE_L10 =  $OVDATE_L_dates;
                  }else {
                 $OVDATE_L10  = "";
                 }
               }

                          if ($OVAPBY_N_T == $BTCODE_H7_T) {
               if ($OVDATE_N_dates != "") {
                $OVDATE_H10 =  $OVDATE_N_dates;
              }else {
                $OVDATE_H10  = "";
              }
            }

         }
     } 

#######################################
         $U5STAT_trim = trim($U5STAT); 
   
         /////////////////////////////  Date  Cancel ////////////////////////
 $U5STAT_trim = trim($U5STAT); 

    if ($U5STAT_trim == ''  ) {
          if ($CNLINK2_trim == "SE Cancel" ) {
              if ($OVDATE_nulls_dates != "") {
                   $OVDATE_AF10 =  $OVDATE_nulls_dates;
             }else {
                 $OVDATE_AF10  = "";
             }

           }

          if ($CNLINK2_trim == "SSE Cancel" ) {
             if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
              if ($OVDATE_nulls_dates != "") {
                   $datesig_1 =  $OVDATE_nulls_dates;
             }else {
                 $datesig_1  = "";
             }

           }

          if ($CNLINK2_trim == "BM Cancel" ) {
             if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
             if ($OVDATE_E_dates != "") {
                  $datesig_1 =  $OVDATE_E_dates;
                }else {
                  $datesig_1  = "";
                }


              if ($OVDATE_nulls_dates != "") {
                   $datesig_2 =  $OVDATE_nulls_dates;
             }else {
                   $datesig_2  = "";
             }



          }

          if ($CNLINK2_trim == "ASM Cancel" ) {
             if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
             if ($OVDATE_E_dates != "") {
                  $datesig_1 =  $OVDATE_E_dates;
                }else {
                  $datesig_1  = "";
                }

               if ($OVDATE_B_dates != "") {
                  $datesig_2 =  $OVDATE_B_dates;
                }else {
                  $datesig_2  = "";
                }

              if ($OVDATE_nulls_dates != "") {
                   $OVDATE_X10 =  $OVDATE_nulls_dates;
             }else {
                 $OVDATE_X10  = "";
             }


          }


          if ($CNLINK2_trim == "SM Cancel" ) {
            

              if ($OVDATE_nulls_dates != "") {
                   $DATET =  $OVDATE_nulls_dates;
              }else {
                 $DATET  = "";
             }

          }

          if ($CNLINK2_trim == "SMM Cancel" ) {
         

              if ($OVDATE_nulls_dates != "") {
                   $DATEP =  $OVDATE_nulls_dates;
             }else {
                 $DATEP  = "";
             }



          }
          if ($CNLINK2_trim == "MD Cancel" ) {
             if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
               if ($OVDATE_E_dates != "") {
                  $datesig_1 =  $OVDATE_E_dates;
                }else {
                  $datesig_1  = "";
                }

               if ($OVDATE_B_dates != "") {
                  $datesig_2 =  $OVDATE_B_dates;
                }else {
                  $datesig_2  = "";
                }


               if ($OVDATE_A_dates != "") {
                  $OVDATE_X10 =  $OVDATE_A_dates;
                }else {
                  $OVDATE_X10  = "";
                }

                if ($OVDATE_S_dates != "") {
                  $OVDATE_T10 =  $OVDATE_S_dates;
                }else {
                  $OVDATE_T10  = "";
                }

                if ($OVDATE_nulls_dates != "") {
                   $OVDATE_P10 =  $OVDATE_nulls_dates;
                 }else {
                   $OVDATE_P10  = "";
                 }

                if ($OVAPBY_null_Z  ==   $BTCODE_L7 ) {
                   if ($OVDATE_nulls_dates  != "") {
                      $OVDATE_L10 =  $OVDATE_nulls_dates;
                  }else {
                 $OVDATE_L10  = "";
                 }
            }
            if ($OVAPBY_Y_T ==  $BTCODE_L7 ) {
             if ($OVDATE_Y_dates != "") {
                     $OVDATE_L10 =  $OVDATE_Y_dates;
                 }else{
                     $OVDATE_L10 =  "";
             }

          }
             if ($OVAPBY_G_T ==  $BTCODE_H7_T  ) {
               if ($OVDATE_G_dates != "") {
                     $OVDATE_H10 =  $OVDATE_G_dates;
                  }else{
                      $OVDATE_H10 =  "";
              }


         }



           if ($OVAPBY_6APSD1_null  ==  $BTCODE_L7 ) {   
              if ($OVDATE_6APSD_nulls_dates_null != "") {
                 $OVDATE_L10 =  $OVDATE_6APSD_nulls_dates_null;
             }else{
                   $OVDATE_L10 =  "";
             }
           }

      
        if ($OVAPBY_6MD1  ==  $BTCODE_H7_T  ) {    
            if ($OVDATE_6MD_nulls_dates != "") {
                $OVDATE_H10 =  $OVDATE_6MD_nulls_dates;
            }else{
                $OVDATE_H10 =  "";
            }
         }

 



           if ($OVAPBY_L_T == $BTCODE_L7) {
                   if ($OVDATE_L_dates  != "") {
                      $OVDATE_L10 =  $OVDATE_L_dates;
                  }else {
                 $OVDATE_L10  = "";
                 }
               }

     }


              if ($CNLINK2_trim == "SD Cancel" ) {
                 if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
               if ($OVDATE_E_dates != "") {
                  $datesig_1 =  $OVDATE_E_dates;
                }else {
                  $datesig_1  = "";
                }

               if ($OVDATE_B_dates != "") {
                  $datesig_2 =  $OVDATE_B_dates;
                }else {
                  $datesig_2  = "";
                }


               if ($OVDATE_A_dates != "") {
                  $OVDATE_X10 =  $OVDATE_A_dates;
                }else {
                  $OVDATE_X10  = "";
                }

                if ($OVDATE_S_dates != "") {
                  $OVDATE_T10 =  $OVDATE_S_dates;
                }else {
                  $OVDATE_T10  = "";
                }

              if ($OVDATE_nulls_dates != "") {
                   $OVDATE_P10 =  $OVDATE_nulls_dates;
             }else {
                 $OVDATE_P10  = "";
             }

             if ($OVAPBY_null_Z  ==   $BTCODE_L7 ) {
               if ($OVDATE_nulls_dates  != "") {
                      $OVDATE_L10 =  $OVDATE_nulls_dates;
                  }else {
                 $OVDATE_L10  = "";
                 }
            }
            if ($OVAPBY_Y_T ==  $BTCODE_L7 ) {
             if ($OVDATE_Y_dates != "") {
                     $OVDATE_L10 =  $OVDATE_Y_dates;
                 }else{
                     $OVDATE_L10 =  "";
             }

          }
             if ($OVAPBY_G_T ==  $BTCODE_H7_T  ) {
               if ($OVDATE_G_dates != "") {
                     $OVDATE_H10 =  $OVDATE_G_dates;
                  }else{
                      $OVDATE_H10 =  "";
              }
         }


           if ($OVAPBY_6SD1  ==  $BTCODE_L7 ) {   
              if ($OVDATE_6SD_nulls_dates != "") {
                 $OVDATE_L10 =  $OVDATE_6SD_nulls_dates;
             }else{
                   $OVDATE_L10 =  "";
             }
           }

      
        if ($OVAPBY_6APMD1_null  ==  $BTCODE_H7_T  ) {    
            if ($OVDATE_6APMD_nulls_dates_null != "") {
                $OVDATE_H10 =  $OVDATE_6APMD_nulls_dates_null;
            }else{
                $OVDATE_H10 =  "";
            }
         }

      }



    if ($CNLINK2_trim == "MD Price Approved" ) {
       if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
               if ($OVDATE_E_dates != "") {
                  $datesig_1 =  $OVDATE_E_dates;
                }else {
                  $datesig_1  = "";
                }

               if ($OVDATE_B_dates != "") {
                  $datesig_2 =  $OVDATE_B_dates;
                }else {
                  $datesig_2  = "";
                }


               if ($OVDATE_A_dates != "") {
                  $OVDATE_X10 =  $OVDATE_A_dates;
                }else {
                  $OVDATE_X10  = "";
                }

                if ($OVDATE_S_dates != "") {
                  $OVDATE_T10 =  $OVDATE_S_dates;
                }else {
                  $OVDATE_T10  = "";
                }

                if ($OVDATE_nulls_dates != "") {
                   $OVDATE_P10 =  $OVDATE_nulls_dates;
                 }else {
                   $OVDATE_P10  = "";
                 }

                if ($OVAPBY_null_Z  ==   $BTCODE_L7 ) {
                   if ($OVDATE_nulls_dates  != "") {
                      $OVDATE_L10 =  $OVDATE_nulls_dates;
                  }else {
                 $OVDATE_L10  = "";
                 }
            }
            if ($OVAPBY_Y_T ==  $BTCODE_L7 ) {
             if ($OVDATE_Y_dates != "") {
                     $OVDATE_L10 =  $OVDATE_Y_dates;
                 }else{
                     $OVDATE_L10 =  "";
             }

          }
             if ($OVAPBY_G_T ==  $BTCODE_H7_T  ) {
               if ($OVDATE_G_dates != "") {
                     $OVDATE_H10 =  $OVDATE_G_dates;
                  }else{
                      $OVDATE_H10 =  "";
              }


         }



           if ($OVAPBY_6APSD1_null  ==  $BTCODE_L7 ) {   
              if ($OVDATE_6APSD_nulls_dates_null != "") {
                 $OVDATE_L10 =  $OVDATE_6APSD_nulls_dates_null;
             }else{
                   $OVDATE_L10 =  "";
             }
           }

      
        if ($OVAPBY_6APMD1_null  ==  $BTCODE_H7_T  ) {    
            if ($OVDATE_6APMD_nulls_dates_null != "") {
                $OVDATE_H10 =  $OVDATE_6APMD_nulls_dates_null;
            }else{
                $OVDATE_H10 =  "";
            }
         }

 



           if ($OVAPBY_L_T == $BTCODE_L7) {
                   if ($OVDATE_L_dates  != "") {
                      $OVDATE_L10 =  $OVDATE_L_dates;
                  }else {
                 $OVDATE_L10  = "";
                 }
               }

     }


              if ($CNLINK2_trim == "SD Price Approved" ) {
                 if ($OVDATE_0_dates != "") {
                  $OVDATE_AF10 =  $OVDATE_0_dates;
                 }else {
                 $OVDATE_AF10  = "";
             }
               if ($OVDATE_E_dates != "") {
                  $datesig_1 =  $OVDATE_E_dates;
                }else {
                  $datesig_1  = "";
                }

               if ($OVDATE_B_dates != "") {
                  $datesig_2 =  $OVDATE_B_dates;
                }else {
                  $datesig_2  = "";
                }


               if ($OVDATE_A_dates != "") {
                  $OVDATE_X10 =  $OVDATE_A_dates;
                }else {
                  $OVDATE_X10  = "";
                }

                if ($OVDATE_S_dates != "") {
                  $OVDATE_T10 =  $OVDATE_S_dates;
                }else {
                  $OVDATE_T10  = "";
                }

              if ($OVDATE_nulls_dates != "") {
                   $OVDATE_P10 =  $OVDATE_nulls_dates;
             }else {
                 $OVDATE_P10  = "";
             }

             if ($OVAPBY_null_Z  ==   $BTCODE_L7 ) {
               if ($OVDATE_nulls_dates  != "") {
                      $OVDATE_L10 =  $OVDATE_nulls_dates;
                  }else {
                 $OVDATE_L10  = "";
                 }
            }
            if ($OVAPBY_Y_T ==  $BTCODE_L7 ) {
             if ($OVDATE_Y_dates != "") {
                     $OVDATE_L10 =  $OVDATE_Y_dates;
                 }else{
                     $OVDATE_L10 =  "";
             }

          }
             if ($OVAPBY_G_T ==  $BTCODE_H7_T  ) {
               if ($OVDATE_G_dates != "") {
                     $OVDATE_H10 =  $OVDATE_G_dates;
                  }else{
                      $OVDATE_H10 =  "";
              }
         }


           if ($OVAPBY_6SD1  ==  $BTCODE_L7 ) {   
              if ($OVDATE_6SD_nulls_dates != "") {
                 $OVDATE_L10 =  $OVDATE_6SD_nulls_dates;
             }else{
                   $OVDATE_L10 =  "";
             }
           }

              if ($OVAPBY_6APSD1_null   ==  $BTCODE_L7 ) {   
              if ($OVDATE_6APSD_nulls_dates_null != "") {
                 $OVDATE_L10 =  $OVDATE_6APSD_nulls_dates_null;
             }else{
                   $OVDATE_L10 =  "";
             }
           }


        if ($OVAPBY_6APMD1_null  ==  $BTCODE_H7_T  ) {    
            if ($OVDATE_6APMD_nulls_dates_null != "") {
                $OVDATE_H10 =  $OVDATE_6APMD_nulls_dates_null;
            }else{
                $OVDATE_H10 =  "";
            }
         }

      }



   }   
 

 
          /////////////////////////////  Date  Cancel ////////////////////////
          /////////////////////////////  Date  Cancel ////////////////////////

            if ($datesig_2 !=  $datesig_1) {
               $OVDATE_AB10 = $datesig_1."   ".$datesig_2;
            }else
            {
               $OVDATE_AB10 = $datesig_1;
            }

            if ($DLTEXT_AA34_1 == "") {
              $DLTEXT_AA34_12 = "";
            }else {$DLTEXT_AA34_12 = $DLTEXT_AA34_1 ;}
      // Query SQL DAte Approve
           $DLTEXT_AF45_chk  = trim($DLTEXT_AF45_1);
            if ($DLTEXT_AF45_chk == "0") {
              $DLTEXT_AF45_12 = "";
            }else {$DLTEXT_AF45_12 = $DLTEXT_AF45_1;}
      // Query SQL DAte Approve
                $SIGNATURE = array();
                $SSE_img = "";
                $BM_img   = "";
                $ASM_img  = "";
                $SM_img  = "";
                $SMM_img  = "";
                $SD_img  = "";
                $MD_img   = "";
                $AF_img  = "";
                $title = "";
                 $path = '../../../../Kittikarn/Quotation/picsignature/';
                $exten = ".jpg";
                $pig_bank = "blank";
                $title = "logosmc" ;
                if ($U5STAT == '6') {
                     $titleapprove =   "approve";
                   }
                   else{
                  $titleapprove =   "deny" ;
                  }
 

 
             
     
 
                  if ($U5STAT == '1' && $statcheck1 !='1' &&  $statcheck == '1'   ) {
                      $STATTUSSHOW_AF10  = "APPROVE";
                   $AF_img = $OVAPBY_0_T;
                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                     } 



              else    if ($U5STAT == 'E') {
                     $STATTUSSHOW_AF10  = "APPROVE";
                 $STATTUSSHOW_AB10  = "APPROVE";

                     
                  $AF_img = $OVAPBY_0_T;
                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                    
                      
                    $SSE_img = $OVAPBY_E_T;
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
                     } 



             else   if  ($U5STAT == 'B'  ) {
                 $STATTUSSHOW_AF10  = "APPROVE";
                $STATTUSSHOW_AB10  = "APPROVE";

                 
                  $AF_img = $OVAPBY_0_T;
                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";

                    $SSE_img = $OVAPBY_E_T;
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";

                    $BM_img = $OVAPBY_B_T;
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                     } 


                

             else     if($U5STAT == 'A'  ) {
   $STATTUSSHOW_AF10  = "APPROVE";
                   $STATTUSSHOW_AB10  = "APPROVE";
                    $STATTUSSHOW_X10  = "APPROVE";

                  $AF_img = $OVAPBY_0_T;
                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                     
                    $SSE_img = $OVAPBY_E_T;
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
                     
                    $BM_img = $OVAPBY_B_T;
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                
                    $ASM_img = $OVAPBY_A_T;
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                   

              }



        else  if ($U5STAT == 'S'  ) {
          
                  $STATTUSSHOW_T10  = "APPROVE";    

                  	if ($LEVELSE != "") {
                     	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                     
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///
                 
                    $SM_img = $OVAPBY_S_T;
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    

            }


         else  if ($U5STAT == 'L'  ) {
   
                  $STATTUSSHOW_L10  = "APPROVE";
                  	 if ($LEVELSE != "") {
          		
                        	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                     
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///



                 
                    $SD_img = $OVAPBY_L_T;
                    $IMGSD  = " <img src='cid:".$SD_img."' height='50' width='100'></img>";
                    $IMGSD_T  = "<img src='".$path.$SD_img.$exten."'   height='50' width='100'></img>";
                     
           }
       //////////////////////////////////////////////////
             else  if ($U5STAT == 'M' ) {
                  
                  $STATTUSSHOW_P10 = "APPROVE";
                   if ($LEVELSE != "") {
                               	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                     
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///
                     

                 
                    $SMM_img = $OVAPBY_M_T;
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                      

                }
      

      ///////////////////////////////////////////

      //////////////// STATUS L /////////////////

            else   if ($U5STAT == 'L' ) {
                    if ($OVAPBY_E_T == "") {
                 $STATTUSSHOW_AF10  = " ";
                 $STATTUSSHOW_AB10  = " ";
                 $STATTUSSHOW_X10  = " ";
                 $STATTUSSHOW_T10  = " ";    
                 $STATTUSSHOW_P10 = " ";
                 $STATTUSSHOW_L10  = "APPROVE";
                   
               } else if ($OVAPBY_E_T != "") {
                    
                 $STATTUSSHOW_L10  = "APPROVE";

               }
               	if ($LEVELSE != "") {

                                 	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                     
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///
                   
                    $SD_img = $DLTEXT_L7;
                    $IMGSD  = " <img src='cid:".$SD_img."' height='50' width='100'></img>";
                    $IMGSD_T  = "<img src='".$path.$SD_img.$exten."'   height='100' width='100'></img>";
                     
                   


                }

      //////////////// END STATUS L//////////////          

          //////////////// STATUS N /////////////////

             else  if ($U5STAT == 'N' ) {
                   
                  $STATTUSSHOW_N10  = "APPROVE";
                      $STATTUSSHOW_H10  = "APPROVE";


                   

                      		if ($LEVELSE != "") {

                  ///  AF  ///
                              	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                     
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///



                   if ($OVAPBY_N_T == $BTCODE_H7_T ) {
                      
                    $MD_img = $DLTEXT_H7;
                    $IMGMD  = " <img src='cid:".$MD_img."' height='50' width='100'></img>";
                    $IMGMD_T  = "<img src='".$path.$MD_img.$exten."'   height='100' width='100'></img>";
                        
                    }

                }

      //////////////// END STATUS N//////////////  
    


        




          //////////////////////////////////////////////
        else   if ($U5STAT == '6'  ) {

               if ($DLTEXT_A1 == "L1" ) {
                     $STATTUSSHOW_AF10  = "APPROVE";
                    $STATTUSSHOW_AB10  = "APPROVE";
                  ///  AF  ///

                    
                    $AF_img = $OVAPBY_0_T;
                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                    



                     
                    $SSE_img = $OVAPBY_6;
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
                     

                }

                if ($DLTEXT_A1 == "L2" ) {
                     $STATTUSSHOW_AF10  = "APPROVE";
                    $STATTUSSHOW_AB10  = "APPROVE";
                  ///  AF  ///
                 
                    $AF_img = $OVAPBY_0_T;
                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                  



                     
                    $SSE_img = $OVAPBY_E_T;
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
                     

                      

                    $BM_img = $OVAPBY_6;
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                }
                //////////////////  LV2  //////////////////////////



                //////////////////  LV 3  //////////////////

                if ($DLTEXT_A1 == "L3" ) {
                     $STATTUSSHOW_AF10  = "APPROVE";
                    $STATTUSSHOW_AB10  = "APPROVE";
                    $STATTUSSHOW_X10  = "APPROVE";
                  ///  AF  ///
                  
                                 	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                     
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///
                     
 
                    $ASM_img = $OVAPBY_6;
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                      
                }
                ///////////////////  LV3  //////////////////

                ///////////////////  LV4 //////////////////


                if ($DLTEXT_A1 == "L4" ) {
                    
                   $STATTUSSHOW_T10  = "APPROVE";  
                  ///  AF  ///
                 
                     ////  AF  ////
                   	if ($LEVELSE != "") {

                             	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                     
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///


                 
                    $SM_img = $OVAPBY_6;
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                     
                }
                ///////////////////  LV4  //////////////////
                /////////////////    L5  //////////////////
                  if ($DLTEXT_A1 == "L5" ) {
                     
                  $STATTUSSHOW_P10 = "APPROVE";

                  	if ($LEVELSE != "") {


                                 	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                     
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///
                    $SMM_img = $OVAPBY_6;
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                     

                }
                /////////////////  L5  ////////////////////

                 /////////////////  L6  ////////////////////
                if ($DLTEXT_A1 == "L6" ) {
                       
               if ($OVAPBY_E_T == "") {
                 $STATTUSSHOW_AF10  = " ";
                 $STATTUSSHOW_AB10  = " ";
                 $STATTUSSHOW_X10  = " ";
                 $STATTUSSHOW_T10  = " ";    
                 $STATTUSSHOW_P10 = " ";
                 $STATTUSSHOW_L10  = "APPROVE";
                       $STATTUSSHOW_H10  = "APPROVE";
                   
               } else if ($OVAPBY_E_T != "") {
                  
                       $STATTUSSHOW_L10  = "APPROVE";
                       $STATTUSSHOW_H10  = "APPROVE";

               }
               	if ($LEVELSE != "") {


                                	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                   
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///
                     


                     ############# start  status  #####################
                     
                    $SD_img = $DLTEXT_L7;
                    $IMGSD  = " <img src='cid:".$SD_img."' height='50' width='100'></img>";
                    $IMGSD_T  = "<img src='".$path.$SD_img.$exten."'   height='100' width='100'></img>";
                     


                   
                    $MD_img = $DLTEXT_H7;
                    $IMGMD  = " <img src='cid:".$MD_img."' height='50' width='100'></img>";
                    $IMGMD_T  = "<img src='".$path.$MD_img.$exten."'   height='100' width='100'></img>";
                     


                        
                    ################end  sTATUS  ####################

                  
                    $SD_img = $DLTEXT_L7;
                    $IMGSD  = " <img src='cid:".$SD_img."' height='50' width='100'></img>";
                    $IMGSD_T  = "<img src='".$path.$SD_img.$exten."'   height='100' width='100'></img>";
                    


                  
                    $MD_img = $DLTEXT_H7;
                    $IMGMD  = " <img src='cid:".$MD_img."' height='50' width='100'></img>";
                    $IMGMD_T  = "<img src='".$path.$MD_img.$exten."'   height='100' width='100'></img>";
                     

                }
                 /////////////////  L6  ////////////////////




           

                                 /////////////////////////////////////////////////////////////////////



 else   if ($U5STAT == 'X'  ) {

               if ($DLTEXT_A1 == "L1" ) {
                   $STATTUSSHOW_AF10  = "APPROVE";
                    $STATTUSSHOW_AB10  = "APPROVE";
                  ///  AF  ///

                    
                    $AF_img = $OVAPBY_0_T;
                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                    



                     
                    $SSE_img = $OVAPBY_6;
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
                     

                }

                if ($DLTEXT_A1 == "L2" ) {
                   
                    $STATTUSSHOW_AB10  = "APPROVE";
                  ///  AF  ///
                   ////  AF  ////
              

                    $AF_img = $LEVELSE;
                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                      
                    $SSE_img = $LEVELSSE;
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                

                    $BM_img = $LEVELBM;
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

          

                      

                    $BM_img = $OVAPBY_6;
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                }
                //////////////////  LV2  //////////////////////////



                //////////////////  LV 3  //////////////////

                if ($DLTEXT_A1 == "L3" ) {
                    
                    $STATTUSSHOW_X10  = "APPROVE";
                  ///  AF  ///
                 ////  AF  ////
               if ($LEVELSE != "") {

                              	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                  
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///
 
                    $ASM_img = $OVAPBY_6;
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                      
                }
                ///////////////////  LV3  //////////////////

                ///////////////////  LV4 //////////////////


                if ($DLTEXT_A1 == "L4" ) {
              
                   $STATTUSSHOW_T10  = "APPROVE";  
                  ///  AF  ///'
                    if ($LEVELSE != "") { 
                 
                             	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                   
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///

                 
                    $SM_img = $OVAPBY_6;
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                     
                }
                ///////////////////  LV4  //////////////////
                /////////////////    L5  //////////////////
                  if ($DLTEXT_A1 == "L5" ) {
                     
                  $STATTUSSHOW_P10 = "APPROVE";

                   if ($LEVELSE != "") {

                                    	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                   
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///
                    


                 
                    $SMM_img = $OVAPBY_6;
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                     

                }
                /////////////////  L5  ////////////////////

                 /////////////////  L6  ////////////////////
                if ($DLTEXT_A1 == "L6" ) {
                   
                       $STATTUSSHOW_L10  = "APPROVE";
                       $STATTUSSHOW_H10  = "APPROVE";
                       	 if ($LEVELSE != "") {
                         	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                  
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///

                     ############# start  status  #####################
                     
                    $SD_img = $DLTEXT_L7;
                    $IMGSD  = " <img src='cid:".$SD_img."' height='50' width='100'></img>";
                    $IMGSD_T  = "<img src='".$path.$SD_img.$exten."'   height='100' width='100'></img>";
                     


                   
                    $MD_img = $DLTEXT_H7;
                    $IMGMD  = " <img src='cid:".$MD_img."' height='50' width='100'></img>";
                    $IMGMD_T  = "<img src='".$path.$MD_img.$exten."'   height='100' width='100'></img>";
                     


                        
                    ################end  sTATUS  ####################

                  
                    $SD_img = $DLTEXT_L7;
                    $IMGSD  = " <img src='cid:".$SD_img."' height='50' width='100'></img>";
                    $IMGSD_T  = "<img src='".$path.$SD_img.$exten."'   height='100' width='100'></img>";
                    


                  
                    $MD_img = $DLTEXT_H7;
                    $IMGMD  = " <img src='cid:".$MD_img."' height='50' width='100'></img>";
                    $IMGMD_T  = "<img src='".$path.$MD_img.$exten."'   height='100' width='100'></img>";
                     

                }
                 /////////////////  L6  ////////////////////




           }

                  

          $U5STAT1 = trim($U5STAT);   
 //////////////////////////////////////////////////////////         
  if ($U5STAT1 == ''  ) {
     if ($CNLINK2_trim == 'SE Cancel' ) {
                  
                     $STATTUSSHOW_AF10  = "DENY";

               ////  AF  ////
              

                    $AF_img = $OVAPBY_6CY;
                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                     
               ////  AF  ////

                

           }
           if ($CNLINK2_trim == 'SSE Cancel' ) {
             $STATTUSSHOW_AF10  = "APPROVE";
                   $STATTUSSHOW_AB10  = "DENY";


                          	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                  
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///

               ///  SSE  ////
                     
                    $SSE_img = $OVAPBY_6CY;
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";

                     
              ///  SSE  ////

           }

            if ($CNLINK2_trim == 'BM Cancel' ) {
               
                   $STATTUSSHOW_AB10  = "DENY";

                   	 if ($LEVELSE != "") {
                     	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                  
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///
              ///  BM   ////

                    

                    $BM_img = $OVAPBY_6BM1;
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                     
             ///  BM ////

           }

           //////////////////////////////////////////////////////////////////////////////////////
             if ($CNLINK2_trim == 'ASM Cancel' ) {
              
                   $STATTUSSHOW_X10  = "DENY";
                    if ($LEVELSE != "") {

                              	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                  
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///
             /// ASM  ///

                     

                    $ASM_img = $OVAPBY_6ASM1;
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                     
             /// ASM ///


           }


           //////////////////////////////////////////////////////////////////////////////////////
             if ($CNLINK2_trim == 'SM Cancel' ) {
               
                   $STATTUSSHOW_T10  = "DENY";
                    if ($LEVELSE != "") {
                    	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                 
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///
             /// SM ///
               

                    $SM_img = $OVAPBY_6SM1;
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                     
             /// SM ///


           }

               //////////////////////////////////////////////////////////////////////////////////////
             if ($CNLINK2_trim == 'SMM Cancel' ) {
               
                   $STATTUSSHOW_P10  = "DENY";


                    if ($LEVELSE != "") {
                    	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                     
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///
            /// SMM ///
                

                    $SMM_img = $OVAPBY_6SMM1;
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                      
             /// SMM ///

           }

              //////////////////////////////////////////////////////////////////////////////////////
             if ($CNLINK2_trim == 'SD Cancel' ) {
                                     
                   $STATTUSSHOW_L10  = "DENY"; 


              if ($OVAPBY_G_T ==   $BTCODE_H7_T ) {
                        $STATTUSSHOW_H10  = "DENY"; 
              }
 
           else  if  ($OVAPBY_N_T == $BTCODE_H7_T) {
                      $STATTUSSHOW_H10  = "APPROVE"; 
                    }  

                     if ($LEVELSE != "") {

                    	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                     
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///

             /// SD///
                    
                    $SD_img = $OVAPBY_6SD1;
                    $IMGSD  = " <img src='cid:".$SD_img."' height='50' width='100'></img>";
                    $IMGSD_T  = "<img src='".$path.$SD_img.$exten."'   height='50' width='100'></img>";
                    

             /// SD ///
             /// MD ///

                   if ($OVAPBY_N_T == $BTCODE_H7_T ) {
                     
                    $MD_img = $DLTEXT_H7;
                    $IMGMD  = " <img src='cid:".$MD_img."' height='50' width='100'></img>";
                    $IMGMD_T  = "<img src='".$path.$MD_img.$exten."'   height='100' width='100'></img>";
                     
                    }
 
                             if ($OVEVEN_6CAPSD1_null == $U5STAT1   ) {
                       

                     if ($OVAPBY_6APSD1_null == $BTCODE_L7 ) {

                      
                    $SD_img = $DLTEXT_L7;
                    $IMGSD  = " <img src='cid:".$SD_img."' height='50' width='100'></img>";
                    $IMGSD_T  = "<img src='".$path.$SD_img.$exten."'   height='100' width='100'></img>";
                     

                    
                        
                    }
                  }

                    
                      
                    $MD_img = $DLTEXT_H7;
                    $IMGMD  = " <img src='cid:".$MD_img."' height='50' width='100'></img>";
                    $IMGMD_T  = "<img src='".$path.$MD_img.$exten."'   height='100' width='100'></img>";
                      
            
             /// MD ///        
           }

             //////////////////////////////////////////////////////////////////////////////////////
             if ($CNLINK2_trim == 'MD Cancel') {
                                       
                   $STATTUSSHOW_H10  = "DENY";

             if ($OVAPBY_Y_T ==   $BTCODE_L7 ) {
                        $STATTUSSHOW_L10  = "DENY"; 
             }
 
              else  if ($OVAPBY_L_T == $BTCODE_L7) {
                        $STATTUSSHOW_L10  = "APPROVE"; 
                    }  
                    
                 
             ////  AF  ////
                     if ($LEVELSE != "") {
                    	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                     
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///
             /// SD///

       
 
                    $MD_img = $OVAPBY_6MD1;
                    $IMGMD  = " <img src='cid:".$MD_img."' height='50' width='100'></img>";
                    $IMGMD_T  = "<img src='".$path.$MD_img.$exten."'   height='50' width='100'></img>";
                    

             /// SD ///
                        /// SD///
                    if ($OVAPBY_L_T == $BTCODE_L7 ) {
                     
                    $SD_img = $DLTEXT_L7;
                    $IMGSD  = " <img src='cid:".$SD_img."' height='50' width='100'></img>";
                    $IMGSD_T  = "<img src='".$path.$SD_img.$exten."'   height='100' width='100'></img>";
                     
                 }
                         
       


  
               

                       
                    $SD_img = $DLTEXT_L7;
                    $IMGSD  = " <img src='cid:".$SD_img."' height='50' width='100'></img>";
                    $IMGSD_T  = "<img src='".$path.$SD_img.$exten."'   height='100' width='100'></img>";
                     
                 


           if ($OVEVEN_6CAPMD1_null == $U5STAT1   ) {


                  if ($OVAPBY_6APMD1_null == $BTCODE_H7_T ) {
                     
                    $MD_img = $DLTEXT_H7;
                    $IMGMD  = " <img src='cid:".$MD_img."' height='50' width='100'></img>";
                    $IMGMD_T  = "<img src='".$path.$MD_img.$exten."'   height='100' width='100'></img>";
                    
                    
                    }
              }
             /// SD ///
           }
             //////////////////////////////////////////////////////////////////////////////////////
             if ($CNLINK2_trim == 'MD Price Approved') {
                                     
                 $STATTUSSHOW_H10  = "APPROVE";

             if ($OVAPBY_Y_T ==   $BTCODE_L7 ) {
                        $STATTUSSHOW_L10  = "DENY"; 
             }
 
              else  if ($OVAPBY_L_T == $BTCODE_L7) {
                      $STATTUSSHOW_L10  = "APPROVE"; 
                    }  
          
           
           
                    	 if ($LEVELSE != "") {
                    	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                     
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///
          
                         
      

                     
                    $SD_img = $DLTEXT_L7;
                    $IMGSD  = " <img src='cid:".$SD_img."' height='50' width='100'></img>";
                    $IMGSD_T  = "<img src='".$path.$SD_img.$exten."'   height='100' width='100'></img>";
                     
                 

 
 
                     
                    $MD_img = $DLTEXT_H7;
                    $IMGMD  = " <img src='cid:".$MD_img."' height='50' width='100'></img>";
                    $IMGMD_T  = "<img src='".$path.$MD_img.$exten."'   height='100' width='100'></img>";
                    
             
             /// SD ///
           }



             //////////////////////////////////////////////////////////////////////////////////////
             if ($CNLINK2_trim == 'SD Price Approved') {
               

              if ($OVAPBY_G_T ==   $BTCODE_H7_T ) {
                        $STATTUSSHOW_H10  = "DENY"; 
              }
 
           else  if  ($OVAPBY_N_T == $BTCODE_H7_T) {
                      $STATTUSSHOW_H10  = "APPROVE"; 
                    }  
          
                    	 if ($LEVELSE != "") {

                        	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                     
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///

             
                 


   
                    $SD_img = $DLTEXT_L7;
                    $IMGSD  = " <img src='cid:".$SD_img."' height='50' width='100'></img>";
                    $IMGSD_T  = "<img src='".$path.$SD_img.$exten."'   height='100' width='100'></img>";
                  

 
  
                    $MD_img = $DLTEXT_H7;
                    $IMGMD  = " <img src='cid:".$MD_img."' height='50' width='100'></img>";
                    $IMGMD_T  = "<img src='".$path.$MD_img.$exten."'   height='100' width='100'></img>";
                      
             
             /// SD ///
           
        }   
 
      ////////////////  Approve  Cancel //////////////////////

  ////////////////  Approve  Cancel //////////////////////
          $U5STAT1 = trim($U5STAT);

 
/////////////////// N  L Y  Z  CNACLE /////////////////////
if ($U5STAT1 == 'Y') {
    //////////////////////////////////////////////////////////////////////////////////////
             if ($CNLINK2_trim == 'SD Cancel' ) {
                                      
                 $STATTUSSHOW_L10  = "DENY"; 
                 	 if ($LEVELSE != "") {
     
                    	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                     
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///

             /// SD///
                    
                    $SD_img = $OVAPBY_6SD1;
                    $IMGSD  = " <img src='cid:".$SD_img."' height='50' width='100'></img>";
                    $IMGSD_T  = "<img src='".$path.$SD_img.$exten."'   height='50' width='100'></img>";
                    

           

            if ($OVEVEN_6CAPMD1_null == $U5STAT1   ) {
                        
                       

                     if ($OVAPBY_6APSD1_null == $BTCODE_L7 ) {

                      
                    $SD_img = $DLTEXT_L7;
                    $IMGSD  = " <img src='cid:".$SD_img."' height='50' width='100'></img>";
                    $IMGSD_T  = "<img src='".$path.$SD_img.$exten."'   height='100' width='100'></img>";
                     } 
                    }
                  
 
             /// MD ///        
           }

        }
        
        if ($U5STAT1 == 'Z') {   

             //////////////////////////////////////////////////////////////////////////////////////
             if ($OVEVEN_6MD1_null_Z == 'MD Cancel') {
                                    
                 $STATTUSSHOW_H10  = "DENY";

  		 if ($LEVELSE != "") {
                    	  $AF_img = $LEVELSE;
                    }else {
                    	 $AF_img = "blank";
                    }
                    

                    $IMGAF  = " <img src='cid:".$AF_img."' height='50' width='100'></img>";
                    $IMGAF_T  = "<img src='".$path.$AF_img.$exten."'   height='50' width='100'></img>";
                   
               ////  AF  ////

               ///  SSE  ////
                    if ($LEVELSSE != "") {
                    	 $SSE_img = $LEVELSSE;
                    }else {
                    	 $SSE_img = "blank";
                    }
                    
                    $IMGSSE  = " <img src='cid:".$SSE_img."' height='50' width='100'></img>";
                    $IMGSSE_T  = "<img src='".$path.$SSE_img.$exten."'   height='50' width='100'></img>";
 
              ///  SSE  ////
                 ///  BM   ////

                
                    if ($LEVELBM != "") {
                    	  $BM_img = $LEVELBM;
                    }else {
                    	 $BM_img = "blank";
                    }
                   
                    $IMGBM  = " <img src='cid:".$BM_img."' height='50' width='100'></img>";
                    $IMGBM_T  = "<img src='".$path.$BM_img.$exten."'   height='50' width='100'></img>";
                    

                
             ///  BM ////
             /// ASM  ///
                    if ($LEVELASM != "") {
                    	  $ASM_img = $LEVELASM;
                    }else {
                    	 $ASM_img = "blank";
                    }
                   
                  
                     
                    $IMGASM  = " <img src='cid:".$ASM_img."' height='50' width='100'></img>";
                    $IMGASM_T  = "<img src='".$path.$ASM_img.$exten."'   height='50' width='100'></img>";
                  
             /// ASM ///
             /// SM ///
                       if ($LEVELSM != "") {
                    	  $SM_img = $LEVELSM;
                    }else {
                    	 $SM_img = "blank";
                    }
                   
 
                    $IMGSM  = " <img src='cid:".$SM_img."' height='50' width='100'></img>";
                    $IMGSM_T  = "<img src='".$path.$SM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SM ///
            /// SMM ///
                 if ($LEVELSMM != "") {
                    	  $SMM_img = $LEVELSMM;
                    }else {
                    	 $SMM_img = "blank";
                    }
 
                    $IMGSMM  = " <img src='cid:".$SMM_img."' height='50' width='100'></img>";
                    $IMGSMM_T  = "<img src='".$path.$SMM_img.$exten."'   height='50' width='100'></img>";
                    
             /// SMM ///
             /// SD///

                

                    $MD_img = $OVAPBY_6MD1;
                    $IMGMD  = " <img src='cid:".$MD_img."' height='50' width='100'></img>";
                    $IMGMD_T  = "<img src='".$path.$MD_img.$exten."'   height='50' width='100'></img>";
                    

     

                       if ($OVEVEN_6CAPSD1_null == $U5STAT1   ) {


                  if ($OVAPBY_6APMD1_null == $BTCODE_H7_T ) {
                     
                    $MD_img = $DLTEXT_H7;
                    $IMGMD  = " <img src='cid:".$MD_img."' height='50' width='100'></img>";
                    $IMGMD_T  = "<img src='".$path.$MD_img.$exten."'   height='100' width='100'></img>";
                     
                    }
              }
             /// SD ///
           }
} 
 
////////////////// END  N L Y Z CNACLE ////////////////////  



################ SIGNATURE  ############## 

 ?> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> SMC (Thailand) Ltd.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <!--  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">-->
    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
    ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
    ============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
    ============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
    ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
    ============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- x-editor CSS
    ============================================ -->
    <link rel="stylesheet" href="css/editor/select2.css">
    <link rel="stylesheet" href="css/editor/datetimepicker.css">
    <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="css/editor/x-editor-style.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index.php"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="index.php">
                   <span class="educate-icon educate-home icon-wrap"></span>
                   <span class="mini-click-non">Home</span>
                </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="index.php"><span class="mini-sub-pro">More  Detail </span></a></li>
                           
                            </ul>
                        </li>
                        
                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.php"><img class="main-logo"  width="10%"  height="10%" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                          <i class="educate-icon educate-nav"></i>
                        </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.php">More  Detail</a></li>
                                   
                                            </ul>
                                        </li>
                               
            
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

  <?php   
     #########################################################
 
    #$DCNO = $_GET['DCNO'];

   $querystr_sopoh_hs = odbc_exec($conn,"select OHGRP1,OHCCTX,OHSTRG   from smcdta.sopoh where  OHCUSN  = '".$HSCUSN."' and OHCOCD = '02'  ");          
    $querystr_code_sopoh_hs = odbc_fetch_array($querystr_sopoh_hs);
    $OHGRP1_hs = iconv("windows-874", "utf-8", $querystr_code_sopoh_hs["OHGRP1"]); 
     $OHCCTX_hs = iconv("windows-874", "utf-8", $querystr_code_sopoh_hs["OHCCTX"]); 
     $OHSTRG_hs = iconv("windows-874", "utf-8", $querystr_code_sopoh_hs["OHSTRG"]); 


 

     ############################################################




  ?>



            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">   SPR Indirectsales  <?php echo $DCNO; ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


  <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <!--  <div class="product-status-wrap drp-lst">
                      
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">For SMC use only</a></li>
                             
                            </ul>
                            <div class="asset-inner">
                                 <table id="user" class="table table-bordered table-striped x-editor-custom">
                                    <tr>
                                        <th> <center> C.C. / Distribute list </center> </th>
                                        <th><center>  MD</center></th>
                                        <th><center>  SD</center></th>
                                        <th><center>  SMM</center></th>
                                        <th><center> SM </center></th>
                                        <th><center>  ASM</center></th>
                                        <th><center> BM/SSE</center></th>
                                        <th><center> SE</center></th>
                                        
                                    </tr>
                                    <tr>
 

 <?php  echo     "                                   <td>      </td>
                                     
  <td  > <center>".$IMGMD_T." </center> <br>Date : ".$OVDATE_H10." </td>
  <td><center> ".$IMGSD_T."  </center><br> Date : ".$OVDATE_L10."</td>
  <td><center> ".$IMGSMM_T." </center> <br> Date : ".$DATEP."</td>
  <td><center> ".$IMGSM_T."  </center><br> Date : ".$DATET."</td>
  <td><center> ".$IMGASM_T."  </center><br> Date : ".$DATEX."</td>
     <td> <center>".$IMGBM_T."<br> ".$IMGSSE_T." </center> <br> Date : ".$DATEAB."  </td>
  <td><center> ".$IMGAF_T."   </center> <br> Date : ".$DATEAF."</td>
 
 " ; ?>

                                    </tr>
                                    
                   <tr>
 

 <?php  echo     "                                   
    <th> <center>  STATUS </center>  </th>                                  
  <th   ><center> ".$STATTUSSHOW_H10." </center>  </th>
  <th> <center> ".$STATTUSSHOW_L10."  </center> </th>
  <th><center>  ".$STATTUSSHOW_P10."  </center></th>
  <th  ><center>  ".$STATTUSSHOW_T10."  </center> </th>
  <th  > <center> ".$STATTUSSHOW_X10." </center> </th>
     <th ><center>  ".$STATTUSSHOW_AB10." </center> </th>
      <th>       </th>
 
 " ; ?>

                                    </tr>             
                                 
                                    
                                </table>
                            </div>   
                      
                        </div> -->
                    </div>
                </div>
            </div>
        </div>



 <div class="static-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                 
                                     <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">SMC use only</a></li>
                             
                            </ul>

                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                   <table id="user" class="table table-bordered table-striped x-editor-custom">
                                       
                                        <tbody>
                                            <tr>
                                                <th>Document no. :   </center></th>
                                                <td>     </td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Customer Name :</center></th>
                                                <td></td>
                                               
                                            </tr>
                                            <tr>
                                                <th>SMC A/C code  :</center></th>
                                                <td><?php echo $DLTEXT_I25  ; ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Type of customer :</center></th>
                                                <td></td>
                                              
                                            </tr>
                                            <tr>
                                                <th>Industry Type  :</center></th>
                                                <td></td>
                                             
                                            </tr>
                                            <tr>
                                                <th>Salesperson :</center></th>
                                                <td><?php echo $DLTEXT_I29  ; ?></td>
                                                
                                            </tr>
                                              <tr>
                                                <th>Distributor Name :</center></th>
                                                <td></td>
                                              
                                            </tr>
                                            <tr>
                                                <th>Distributor Sales Code : </center></th>
                                                <td></td>
                                               
                                            </tr>
                                            <tr>
                                                <th>UH No. : </center></th>
                                                <td></td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Effective Date : </center></th>
                                                <td></td>
                                               
                                            </tr>
                                            <tr>
                                                <th>Expire Date :</center> </th>
                                                <td></td>
                                               
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline9-list mt-b-30 res-mg-t-30 analysis-progrebar-ctn">
                            <div class="sparkline9-hd">
                                <div class="main-sparkline9-hd">
                                     <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Distributor use only</a></li>
                             
                            </ul>
                                    
                                </div>
                            </div>
                            <div class="sparkline9-graph">
                                <div class="static-table-list">
                                    <table id="user" class="table table-bordered table-striped x-editor-custom">
                                        <tbody>
                                            <tr>
                                                <th>  Document no. :   </th>
                                                <td>  <?php echo $DLTEXT_AA24  ; ?> </td>
                                                
                                            </tr>
                                            <tr>
                                                <th >Customer Name :</th>
                                                <td> <?php echo $DLTEXT_AA25  ; ?>  </td>
                                               
                                            </tr>
                                            <tr>
                                                <th> SMC A/C code  :</th>
                                                <td> <?php echo $DLTEXT_AA26  ; ?>  </td>
                                                
                                            </tr>
                                            <tr>
                                                <th> Type of customer :</th>
                                                <td>  <?php echo $DLTEXT_AA27  ; ?> </td>
                                              
                                            </tr>
                                            <tr>
                                                <th> Industry Type  :</th>
                                                <td>  <?php echo $DLTEXT_AA28  ; ?> </td>
                                             
                                            </tr>
                                            <tr>
                                                <th> Salesperson :</th>
                                                <td>  <?php echo $DLTEXT_AA29_1  ; ?> </td>
                                                
                                            </tr>
                                              <tr>
                                                <th> Distributor Name :</th>
                                                <td>  <?php echo $DLTEXT_AA30  ; ?> </td>
                                              
                                            </tr>
                                            <tr>
                                                <th> Distributor Sales Code : </th>
                                                <td>  <?php echo $DLTEXT_AA31  ; ?> </td>
                                               
                                            </tr>
                                            <tr>
                                                <th> UH No. : </th>
                                                <td>  <?php echo $DLTEXT_AA32  ; ?> </td>
                                                
                                            </tr>
                                            <tr>
                                                <th> Effective Date : </th>
                                                <td>  <?php echo $DLTEXT_AA33  ; ?>  </td>
                                            </tr>
                                            <tr>
                                                <th>  Expire Date :  </th>
                                                <td>  <?php echo $DLTEXT_AA34_12  ; ?> </td>
                                               
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                                      
  

                     <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                      
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">SPR. Applied for</a></li>
                             
                            </ul>
                            <div class="asset-inner">
                               <table id="user" class="table table-bordered table-striped x-editor-custom">
                                    <tr>
                                        <th> <center> Total <br>Line Item </center> </th>
                                        <th><center>  Total <br>  Pieces</center></th>
                                        <th><center>  Total <br> List Price</center></th>
                                        <th><center>  Current<br>  Net Price</center></th>
                                        <th><center>  Current <br>  Discount Rate </center></th>
                                        <th><center>  Altered <br> Net Price</center></th>
                                        <th><center>  Altered<br>  Discount Rate</center></th>
                                        <th><center>  Current Sales<br> Price to User</center></th>
                                        <th><center>  Current  <br> Distributor Mgr</center></th>
                                        <th><center>  Difference <br>Amount</center></th>
                                        <th><center>  Difference<br> Rate</center></th>
                                    </tr>
                                 
                          <?php 


           #   $DLTEXT_G38_1 = $DLTEXT_G38 *100;
              $DLTEXT_G38_1_1 = number_format($DLTEXT_G38 , 2);
              $DLTEXT_J38_1_1 = number_format($DLTEXT_J38 , 2);
               $DLTEXT_M38_1_1 = number_format($DLTEXT_M38 , 2);
                $DLTEXT_R38_1_1 = number_format($DLTEXT_R38 , 2);
                    $DLTEXT_W38_1 = $DLTEXT_W38 *100;
                  $DLTEXT_W38_1_1 = number_format($DLTEXT_W38_1 , 2);
                  $DLTEXT_AA38_1 = number_format($DLTEXT_AA38 , 2);
                   $DLTEXT_AF38_1 = $DLTEXT_AF38 *100;
                  $DLTEXT_AF38_1_1 = number_format($DLTEXT_AF38_1 , 2);
                   $DLTEXT_R41_1_1 = number_format($DLTEXT_R41 , 2);
                     $DLTEXT_W41_11 = $DLTEXT_W41 *100;
                  $DLTEXT_W41_11_1 = number_format($DLTEXT_W41_11 , 2);

                    $DLTEXT_AA41_1 = number_format($DLTEXT_AA41 , 2);
                   $DLTEXT_AF41_1 = $DLTEXT_AF41 *100;
                  $DLTEXT_AF41_1_1 = number_format($DLTEXT_AF41_1 , 2);
 

                           echo "          <tr>
                                        <td><center>".$DLTEXT_G38_1_1."</center></td>
                                        <td><center>".$DLTEXT_J38_1_1."</center></td>
                                        <td><center>
                                           ".$DLTEXT_M38_1_1." </center>  
                                        </td>
                                        <td><center> ".$DLTEXT_R38_1_1." </center></td>
                                        <td><center>".$DLTEXT_W38_1_1."% </center></td>
                                        <td><center>".$DLTEXT_AA38_1." </center></td>
                                        <td><center>".$DLTEXT_AF38_1_1."%</center></td>
                                        <td><center>".$DLTEXT_R41_1_1."</center></td>
                                        <td><center>".$DLTEXT_W41_11_1."%</center></td>
                                        <td> <center>".$DLTEXT_AA41_1." </center></td>
                                        <td><center>
                                             ".$DLTEXT_AF41_1_1."% 
                                        </center></td>
                                    </tr>  ";  ?>
                                    
                         
                                 
                                    
                                </table>
                            </div>
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>

  <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Sale Unit</a></li>
                             
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">

                                                              <?php 
                                                              $DLTEXT_G45A = trim($DLTEXT_G45);

                                                             
                                                               
                                                               if ($DLTEXT_G45A ==  "X") {
                  echo "   <input name='for' type='checkbox' disabled='disabled' checked > One time only  ";
                }else{
                  echo "  <input name='for' type='checkbox'  disabled='disabled' >  One time only>";
                }


                                                                ?>
                                                            </div>
                                                            <div class="form-group">
                                                                Start Date    <input type="text"  readonly="" value="<?php echo $DLTEXT_X45_1 ;?>" id=""> 
                                                            </div>
                                                            <div class="form-group">
 <?php 
                             $DLTEXT_G46A = trim($DLTEXT_G46);
                                                               if ($DLTEXT_G46A  ==  "X") {
                  echo "   <input name='for' type='checkbox' disabled='disabled' checked > Received order   ==>  attach PO.  ";
                }else{
                  echo "  <input name='for' type='checkbox'  disabled='disabled' >  Received order   ==>  attach PO.>";
                }
?>

                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                               

                                                               <?php 
                             $DLTEXT_N45A = trim($DLTEXT_N45);
                                                               if ($DLTEXT_N45A  ==  "X") {
                  echo "   <input name='for' type='checkbox' disabled='disabled' checked > Continuously ";
                }else{
                  echo "  <input name='for' type='checkbox'  disabled='disabled' >   Continuously ";
                }
?>


                                                            </div>
                                                            <div class="form-group">
                                                               Expire Date      <input type="text" readonly="" value="<?php echo $DLTEXT_AF45_12 ;?>"  id=" ">
                                                            </div>
                                                            <div class="form-group">
                                                                <?php 
                             $DLTEXT_U46A = trim($DLTEXT_U46);
                                                               if ($DLTEXT_U46A  ==  "X") {
                  echo "   <input name='for' type='checkbox' disabled='disabled' checked >Sold ==> attach Inv. ";
                }else{
                  echo "  <input name='for' type='checkbox'  disabled='disabled' >  Sold ==> attach Inv.";
                }
?>

                                                                 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


 

            <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row" >
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                        <div class="alert-title dropzone-custom-sys" >
                                      <div class="main-sparkline8-hd"  align="left" >
                               
                                     <ul id="myTabedu1" class="tab-review-design">
                                <li class="active">   <a     href="#description">Explanation  : </a></li>
                             
                            </ul>
                            
                                </div>      
                                 <?php echo "   <p align = 'left'> ".$DLTEXT_H48."</p>  
                                                <p align = 'left'> ".$DLTEXT_H49."</p>  
                                                <p align = 'left'> ".$DLTEXT_H50."</p>  
                                                <p align = 'left'> ".$DLTEXT_H51."</p>  
                                                <p align = 'left'> ".$DLTEXT_H52."</p>   ";   ?>                  
                                
                                      


                        </div>
                    </div>
                </div>
            </div>
        </div>  
        

 
 <div class="static-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                      
                               
                                     <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Competitor  : </a></li>
                             
                            </ul>
                             

                                       
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                   <table id="user" class="table table-bordered table-striped x-editor-custom">
                                        
                                        <tbody>
                                            <tr>
                                                <th> Competitor No.1  </center></th>
                                                <td><?php   echo $DLTEXT_O53 ;?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th> Competitor No.2  </center></th>
                                                <td><?php   echo $DLTEXT_O54 ;?></td>
                                               
                                            </tr>
                                            <tr>
                                                <th> Competitor No.3  </center></th>
                                                <td><?php   echo $DLTEXT_O55 ;?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th> Competitor No.4  </center></th>
                                                <td><?php   echo $DLTEXT_O56 ;?></td>
                                              
                                            </tr>
                                            <tr>
                                                <th> Competitor No.5  </center></th>
                                                <td><?php   echo $DLTEXT_O57 ;?></td>
                                             
                                            </tr>
                                           
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

 

 

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline9-list mt-b-30 res-mg-t-30 analysis-progrebar-ctn">
                            <div class="sparkline9-hd">
                                <div class="main-sparkline9-hd">
                                    
                                             <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Reason for special price </a></li>
                             
                            </ul>
                             
                                </div>
                            </div>
                            <div class="sparkline9-graph">
                                <div class="static-table-list">
                                    <table id="user" class="table table-bordered table-striped x-editor-custom">
                                        <tbody>
                                            <tr>
                                                <th> 
  <?php 
                             $DLTEXT_V54A = trim($DLTEXT_V54);
                                                               if ($DLTEXT_V54A  ==  "X") {
                  echo "  1. <input name='for' type='checkbox' disabled='disabled' checked > Request from customer ";
                }else{
                  echo "  1. <input name='for' type='checkbox'  disabled='disabled' > Request from customer";
                }


                
?>


                                                </th>
                                              
                                                
                                            </tr>
                                            <tr>
                                                <th >
                                                  <?php 
                             $DLTEXT_V55A = trim($DLTEXT_V55);
                                                               if ($DLTEXT_V55A  ==  "X") {
                  echo "  2. <input name='for' type='checkbox' disabled='disabled' checked > Correspond to competitor's ";
                }else{
                  echo "  2. <input name='for' type='checkbox'  disabled='disabled' > Correspond to competitor's";
                }


                
?>  </th>
                                              
                                               
                                            </tr>
                                            <tr>
                                                <th>
                                                   <?php 
                             $DLTEXT_V56A = trim($DLTEXT_V56);
                                                               if ($DLTEXT_V56A  ==  "X") {
                  echo "  3. <input name='for' type='checkbox' disabled='disabled' checked > New development customer";
                }else{
                  echo "  3. <input name='for' type='checkbox'  disabled='disabled' > New development customer";
                }


                
?>  </th>
 
                                                 
                                                
                                            </tr>
                                            <tr>
                                                <th>
                                                <?php 
                             $DLTEXT_V57A = trim($DLTEXT_V57);
                                                               if ($DLTEXT_V57A  ==  "X") {
                  echo "  4. <input name='for' type='checkbox' disabled='disabled' checked > Others";
                }else{
                  echo "  4. <input name='for' type='checkbox'  disabled='disabled' > Others";
                }


                
?> 
  
                                               
                                              
                                            </tr>
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                        <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Part Number  </a></li>
                             
                            </ul>

                                    
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
                      <option value="">Export Basic</option>
                      <option value="all">Export All</option>
                      <option value="selected">Export Selected</option>
                    </select>
                                    </div>
 

                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                          <tr>
                                              
                                              
                                                <th  rowspan="2"  data-field="Item">Item</th>
                                                <th rowspan="2"   data-field="Part Number" data-editable="true">Part Number</th>
                                            
                                                  <th colspan = '3' data-field="List Price Base" data-editable="true">List Price Base</th>
                                                 <th colspan = '3' data-field="Net Offer Price to end user" data-editable="true">Net Offer Price to end user</th>
                                                <th colspan = '4' data-field="Net Selling Price to Distributor" data-editable="true">Net Selling Price to Distributor</th>
                                            

                                                
                                            </tr>
                                               <tr>
                                                 
                                             
                                                <th data-field="Qty.">Qty.</th >
                                                <th data-field="List">List Price</th>
                                                <th data-field="Amount">Amount</th>
                                                <th data-field="Unit Price(฿)1" data-editable="true">Unit Price(฿)</th>
                                                <th data-field="Discount %1" data-editable="true">Discount %</th>
                                                <th data-field="Amount1" data-editable="true">Amount</th>
                                                <th data-field="Unit Price(฿)" data-editable="true">Unit Price(฿)</th>
                                                <th data-field="Discount %" data-editable="true">Discount %</th>
                                                <th data-field="Amount2" data-editable="true">Amount</th>
                                                <th data-field="Margin" data-editable="true">Margin</th>
  

                                             
                                            </tr>
                                        </thead>
                                        <tbody>

                                           <?php  
           $array_all = array( );
             $querystr_sopu6 = odbc_exec($conn,"select U6DSTC ,U6NETP, U6CUSN,U6SLPR ,U6DSTU ,U6PRIC,U6LINE,U6PRNO from smcdta.UMPDTLNO where  U6DCNO = '".$DCNO."'     ORDER BY  U6LINE ");


                 $loop_value = 0;

                while ( $result = odbc_fetch_array($querystr_sopu6) ) {
                  
                  $array_all["U6SLPR"][] = $result["U6SLPR"];
                  $array_all["U6DSTC"][] = $result["U6DSTC"];
                  $array_all["U6CUSN"][] = $result["U6CUSN"];
                  $array_all["U6DSTU"][] = $result["U6DSTU"];
                  $array_all["U6LINE"][] = $result["U6LINE"];
                  $array_all["U6PRNO"][] = $result["U6PRNO"];
                  $array_all["U6PRIC"][] = $result["U6PRIC"];
                  $array_all["U6NETP"][] = $result["U6NETP"];
                  $querystr_sopum = odbc_exec($conn,"select *  from smcdta.SOPUM where  UMDCNO = '".$DCNO."' and UMDSTC ='".$result["U6DSTC"]."'  and  UMCUSN  = '".$result["U6CUSN"]."'  and UMDSTU = '".$result["U6DSTU"]."' and UMLINE  = '".$result["U6LINE"]."' and UMPRNO  = '".$result["U6PRNO"]."' ");


                   $um_row1 = odbc_fetch_array($querystr_sopum);
                   //$um = $um_row1['UMORQT'];
                   $array_all["UM"][] = $um_row1['UMORQT'];



                  $loop_value += 1;

                }


                  for ($i=0; $i < $loop_value ; $i++) { 

                              
                  $total_e = $array_all["U6PRIC"][$i] * $array_all["UM"][$i];

                  $total_g = ($array_all["U6PRIC"][$i] - $array_all["U6SLPR"][$i])/$array_all["U6PRIC"][$i];
                  $total_h = ($array_all["U6SLPR"][$i] * $array_all["UM"][$i]);
                  $total_K = ($array_all["U6PRIC"][$i] - $array_all["U6NETP"][$i])/$array_all["U6PRIC"][$i];
                  $total_L = ($array_all["UM"][$i] * $array_all["U6NETP"][$i]);
                  $total_M = ($array_all["U6SLPR"][$i] - $array_all["U6NETP"][$i])/ $array_all["U6SLPR"][$i];
 
              $UM1 = number_format($array_all["UM"][$i] , 2);
              $PRIC = number_format($array_all["U6PRIC"][$i] , 2);
              $SLPR = number_format($array_all["U6SLPR"][$i] , 2);
              $NRTP = number_format($array_all["U6NETP"][$i] , 2);
              $total_e1 = number_format($total_e , 2);     
              $total_h1 = number_format($total_h , 2);
            
              $total_L1 = number_format($total_L , 2);
              
              $total_g2 = $total_g *100;
              $total_g3 = number_format($total_g2 , 2);
              $total_K2 = $total_K *100;
              $total_K3 = number_format($total_K2 , 2);

              $total_M2 = $total_M *100;
              $total_M3 = number_format($total_M2 , 2);
                                                                       
                                                
  echo "                 <tr>
                                                <td>".$array_all["U6LINE"][$i]."</td>
                                                <td>".$array_all["U6PRNO"][$i]."</td>
                                                <td>".$UM1."'</td>
                                                <td>".$PRIC."</td>
                                                <td>".$total_e1."</td>
                                                <td>".$SLPR."</td>
                                                <td>".$total_g3."%</td>
                                                <td> ".$total_h1."</td>
                                                <td>".$NRTP."</td>
                                                <td>".$total_K3."%</td>
                                                <td>".$total_L1."</td>
                                                 <td>".$total_M3."%</td>
                                              
                                                                       
                                                

                                             </tr> ";
                  }

                                           ?>
                                          
                                          
                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2019. All rights reserved. SMC (Thailand) Ltd.  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
    ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
    ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
    ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
    ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
    ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
    ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
    ============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
    ============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
    <!-- Chart JS
    ============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- tab JS
    ============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
    ============================================ -->
  <!--   <script src="js/main.js"></script>-->
    <!-- tawk chat JS
    ============================================ -->
  <!--     <script src="js/tawk-chat.js"></script>-->
</body>

</html>


<?php odbc_close($conn)  ?>