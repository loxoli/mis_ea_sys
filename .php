<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("../db/db.php");

$date_start = $_POST["date_start"];
$date_end = $_POST["date_end"];
$provider = $_POST["provider"];
$department = $_POST["department"];
$id = $_POST["id"];
$telephone = $_POST["telephone"];
$list= $_POST["list"];
$money= $_POST["money"];
$other = $_POST["other"]
	

	
		    $result = mysql_query($sql);
			////"insert into accounts_payable (date_start, date_end, provider, department, id, telephone, list, money, other) values ('$date_start', '$date_end', '$provider', '$department', '$id', '$telephone', '$list', '$money', '$other')";
			$sql2 = "INSERT INTO `accounts_payable` (`date_start`, `date_end`) VALUES ('$date_start', '$date_end');";
			$result2 = mysql_query($sql2);

			echo "<script>alert('註冊成功！請用您的帳號密碼登入！');location.href='../login.php';</script>";
		
	

?>
