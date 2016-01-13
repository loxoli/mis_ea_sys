<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("../db/db.php");


	$ticket_title=$_POST["ticket_title"];
	$t_customer=$_POST["t_customer"];
        $t_staff=$_POST["t_staff"]; //員工編號
        $t_regarding=$_POST["regarding"];
        $t_description=$_POST["t_description"];

		
	$sql = "INSERT INTO `crm_tickets` (`title`, `description`, `regarding`, `status`, `created_time`, `t_customer`, `t_staff`) VALUES ('$ticket_title', '$t_description', '$t_regarding', 'OPEN', NULL, '$t_customer', '$t_staff');";
	$result = mysql_query($sql);

	if($result){
                echo "<script>alert('新增成功');location.href='../crm_supports.php';</script>";
        }else{
                echo "<script>alert('QQ\\n好像失敗了');location.href='../crm_supports.php';</script>";
                //echo $sql;
                //echo mysql_error();
        }


?>
