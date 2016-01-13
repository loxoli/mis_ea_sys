<?php include('slice-slice/top.php'); ?>
  <!--DB連線-->
   <?php include('db/db.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db/db.php");

$result = mysql_query($sql,$link);

$name=$_POST['mn'];
$date=$_POST['md'];
$buyer=$_POST['mb'];
$from=$_POST['mf'];
$price=$_POST['mp'];

$sql = "INSERT INTO `material` (`MaterialName`, `Date`, `BuyerID`, `BuyFrom`, `Price`)VALUES ('$name', '$date', '$buyer', '$from', '$price')";

        if(mysql_query($sql)) {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=material.php>';
        }
        else {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=material.php>';
        }


?>
