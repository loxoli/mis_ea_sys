<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db/db.php");


$result = mysql_query($sql,$link);

$o_number = $_POST["o_number"];
$o_customer = $_POST["o_customer"];
$staff = $_POST["staff"];
$o_date = $_POST["o_date"];
$r_date = $_POST["r_date"];
$t_date= $_POST["t_date"];
$money= $_POST["money"];
$customer = $_POST["customer"];
$adress = $_POST["adress"];
	
	
		
$sql = "INSERT INTO `final`.`order` (`o_number`, `o_customer`, `staff`, `o_date`, `r_date`, `t_date`, `money`, `customer`, `adress` ) VALUES ('$o_number', '$o_customer', '$staff', '$o_date', '$r_date`', '$t_date', '$money', '$customer' ,'$adress')";
			

$result = mysql_query($sql);

	if($result){
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=order_add_list.php>';
        }else{
               echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=order_add_list.php>';
                //echo $sql;
                //echo mysql_error();
        }


?>
