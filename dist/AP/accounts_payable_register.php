<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("../db/db.php");


	$id=$_POST["id"];  /*由POST取得帳號密碼*/
//	
	
	$date_start=$_POST["date_start"];
//

		

	
		$sql = "select password from accounts where id='$id';";
		$result = mysql_query($sql);
		if(mysql_fetch_array($result)){
			echo "<script>alert('很抱歉! 此帳號已經存在!');location.href='../register.php';</script>";
		}else {
			$sql2 = "INSERT INTO `accounts` (`username`, `password`) VALUES ('$usern', '$password');";
			$result2 = mysql_query($sql2);

			echo "<script>alert('註冊成功！請用您的帳號密碼登入！');location.href='../login.php';</script>";
		}
	

?>
