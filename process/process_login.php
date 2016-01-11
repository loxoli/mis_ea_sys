<?php
session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("../db/db.php");


	$usern=$_POST["email"];  /*由POST取得帳號密碼*/
	//echo $usern;
	
	$password=$_POST["password"];
	//echo $password;

		
	if($usern==""||$password==""){
		echo "<script>alert('請乖乖輸入帳號&密碼~');location.href='../login.php';</script>";
	}
	else{
		$sql = "select password from accounts where username='$usern';";  //取得所有帳號密碼資料
	        $result = mysql_query($sql);
	        $a_pass = mysql_fetch_array($result);

		if($password==$a_pass["password"]){
			$_SESSION["username"]=$usern;
			echo "<script>alert('登入成功!');location.href='../login.php'; </script>";
		}else{
			echo "<script>alert('帳號或密碼錯誤:( 請再試一次');location.href='../login.php'; </script>";
		}
	}

?>
