

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
		INSERT INTO `staff` (`fullname`, ` status`, `position`, `staff_id`, `activity`, `username`, `joindate`, `birthdate`, `gender`,`phone`) VALUES ('$fullname', '在職', '$position', '$staff_id', '', '活躍', '$joindate', '$birthdat', '$gender',`$phone`);";
		$sql2 = "INSERT INTO `job` (`staff_id`, `department`, `email`) VALUES ('＄staff_id', '＄department', '＄email');
		
		";
		
		
		$result = mysql_query($sql);
		$result2 = mysql_query($sql2)
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