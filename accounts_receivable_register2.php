<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db/db.php");

$date_start = $_POST["date_start"];
$date_end = $_POST["date_end"];
$provider = $_POST["provider"];
$department = $_POST["department"];
$id = $_POST["id"];
$telephone = $_POST["telephone"];
$list1= $_POST["list1"];
$money= $_POST["money"];
$other = $_POST["other"];

	
	
		
$sql = "INSERT INTO `accounts_receivable` (`date_start`, `date_end`, `provider`, `department`, `id`, `telephone`, `list1`, `money`, `other`) VALUES ('$date_start', '$date_end', '$provider', '$department', '$id`', '$telephone', '$list1', '$money', '$other');";
			

$result = mysql_query($sql);

	if($result){
                  echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=accounts_receivable_list.php>';
        }else{
               echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=fam.php>';
                //echo $sql;
                //echo mysql_error();
        }


?>
