<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("../db/db.php");

$name = $_POST["name"];
$sex = $_POST["sex"];
$company = $_POST["company"];
$cellphone = $_POST["cellphone"];
$phone = $_POST["phone"];
$fax = $_POST["fax"];
$country = $_POST["country"];
$englishname = $_POST["englishname"];
$nickname = $_POST["nickname"];
$email = $_POST["email"];
$address = $_POST["address"];
$site = $_POST["site"];
$line = $_POST["line-id"];
$birthday = $_POST["birthday"];
$memo = $_POST["memo"];

		
	$sql = "INSERT INTO `crm_customers` (`name`, `phone`, `cellphone`, `fax`, `address`, `email`, `website`, `line`, `englishname`, `nickname`, `country`, `company`, `sex`, `birthday`, `memo`) VALUES ('$name', '$phone', '$cellphone', '$fax', '$address', '$email', '$site', '$line', '$englishname', '$englishname', '$country', '$company', '$sex', '$birthday', '$memo');";

	$result = mysql_query($sql);

	if($result){
                echo "<script>alert('新增成功');location.href='javascript:history.go(-1)';</script>";
        }else{
                echo "<script>alert('QQ\\n好像失敗了');location.href='javascript:history.go(-1)';</script>";
                //echo $sql;
                //echo mysql_error();
        }


?>
