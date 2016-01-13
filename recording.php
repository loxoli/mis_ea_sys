

<?php include('slice-slice/top.php'); ?>
  <!--DB連線-->
   <?php include('db/db.php'); ?>
   
 
 
 <?php
	if ( !empty($_POST) ) {
		$fullname = $_POST['fullname'];
$joindate = $_POST['joindate'];
$birthdate = $_POST['birthdate'];
$phone = $_POST['phone'];
$staff_id = $_POST['staff_id'];
$gender = $_POST['gender'];
$position = $_POST['position'];
$department = $_POST['department'];
$email = $_POST['email'];


		


		$sql = "
		INSERT INTO `staff` (`fullname`, ` status`, `position`, `staff_id`, `activity`, `username`, `joindate`, `birthdate`, `gender`,`phone`,`email`,`department`) VALUES ('$fullname', '在職', '$position', '$staff_id', '', '活躍', '$joindate', '$birthdate', '$gender','$phone', '$email','$epartment');";
		
		
		
		$result = mysql_query($sql)
	
		 or die('MySQL query error');			
	}
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="refresh" content="0;url=http://140.135.113.38/EA/staff.php" />
<title>Recording</title>
</head>

<body>
</body>
</html>