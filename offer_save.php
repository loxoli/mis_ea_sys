
<?php include('slice-slice/top.php'); ?>
  <!--DB連線-->
   <?php include('db/db.php'); ?>
   

 <?php
	if ( !empty($_POST) ) {
		
		$offer_id = $_POST['offer_id'];

$offerstatus = $_POST['offerstatus'];

$name = $_POST['name'];
$job = $_POST['job'];
$email = $_POST['email'];
$done_date = $_POST['done_date'];

		


		$sql = "
		INSERT INTO `job_applicant` (`offer_id`, ` offerstatus`, `name`, `job`, `email`, `done_date`) VALUES ('$offer_id', '$offerstatus', '$name','$job','$email', '$done_date');";
		
		
		
		$result = mysql_query($sql)
	
		 or die('MySQL query error');			
	}
?>