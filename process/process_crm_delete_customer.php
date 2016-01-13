<meta charset="utf-8">
<?php
include("../db/db.php");

$c_id = $_GET["c"];


	$sql = "DELETE FROM `crm_customers` WHERE `c_uid` = '$c_id';";

	$result=mysql_query($sql);
//echo $sql;
	if($result){
		echo "<script>alert('刪除成功');location.href='javascript:history.go(-1)';</script>";
	}else{
		echo "<script>alert('QQ\\n好像失敗了');location.href='javascript:history.go(-1)';</script>";
		//echo $sql;
		//echo mysql_error();
	}

?>
