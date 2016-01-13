<meta charset="utf-8">
<?php
include("../db/db.php");

$c_id = $_POST["cid"];
$englishname = $_POST["englishname"];
$nickname = $_POST["nickname"];
$email = $_POST["email"];
$address = $_POST["address"];
$site = $_POST["site"];
$line = $_POST["line-id"];
$birthday = $_POST["birthday"];
$memo = $_POST["memo"];

//echo "$c_id,$name,$sex,$company,$cellphone,$phone,$fax,$country";

	$sql = "UPDATE `crm_customers` SET `englishname`='$englishname', `nickname` = '$nickname', `email` = '$email', `address` = '$address', `website` = '$site', `line` = '$line', `birthday` = '$birthday', `memo` = '$memo'  WHERE `c_uid` = '$c_id';";

	$result=mysql_query($sql);
	if($result){
		echo "<script>alert('修改成功');location.href='javascript:history.go(-1)';</script>";
	}else{
		echo "<script>alert('QQ\\n好像失敗了');location.href='javascript:history.go(-1)';</script>";
		//echo $sql;
		//echo mysql_error();
	}
?>
