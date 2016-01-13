<meta charset="utf-8">
<?php
/*
echo $_POST["englishname"];
echo $_POST["nickname"];
echo $_POST["email"];
echo $_POST["address"];
echo $_POST["site"];
echo $_POST["line-id"];
echo $_POST["birthday"];
echo $_POST["memo"];
*/
?>
<?php
include("../db/db.php");

$c_id = $_POST["cid"];
$name = $_POST["name"];
$sex = $_POST["sex"];
$company = $_POST["company"];
$cellphone = $_POST["cellphone"];
$phone = $_POST["phone"];
$fax = $_POST["fax"];
$country = $_POST["country"];

//echo "$c_id,$name,$sex,$company,$cellphone,$phone,$fax,$country";

	$sql = "UPDATE `crm_customers` SET `name`='$name', `phone` = '$phone', `cellphone` = '$cellphone', `fax` = '$fax', `country` = '$country', `company` = '$company', `sex` = '$sex'  WHERE `c_uid` = '$c_id';";

	$result=mysql_query($sql);
	if($result){
		echo "<script>alert('修改成功');location.href='javascript:history.go(-1)';</script>";
	}else{
		echo "<script>alert('QQ\\n好像失敗了');location.href='javascript:history.go(-1)';</script>";
		//echo $sql;
		//echo mysql_error();
	}
?>
