<?php include('slice-slice/top.php'); ?>
  <?php session_start(); ?>
    <html>
      <head><title>原料購買紀錄</title></head>
        <body>
          <br><br>

          <p align = "center"> 
          <?php
            $con = mysql_connect("140.135.113.38","final","3fueeSMfZqmBcWFW");
            mysql_query("SET NAMES 'UTF8'");
            if (!$con) {
            die('Could not connect: ' . mysql_error());
            }

            mysql_select_db("rbq_123456", $con);
            $result = mysql_query("select * from goods");

            echo "<table border='1'>

            <tr>
            <th>原料</th>
            <th>購買日期</th>
            <th>購買人</th>
            <th>向誰購買</th>
            </tr>";

            while($row = mysql_fetch_array($result)) {
              echo "<tr>";
              echo "<td>" . $row['goodsnumber'] . "</td>";
              echo "<td>" . $row['goodsname'] . "</td>";
              echo "<td>" . $row['amount'] . "</td>";
              echo "<td>" . $row['price'] . "</td>";
              echo "<td>" . $row['purchase_price'] . "</td>";
              echo "</tr>";
            }
	  
            echo "</table>";

            mysql_close($con);
          ?>
          </p>
          <br>
          <p align = "center">請輸入原料詳細資料</p>



          <form action="50insert.php" method="post"><p align = "center"> 
          <br>
          原料名稱：<input type="text" name="mn">
          <br><br>
          購買價錢：<input type="int" name="pp">
          <br><br>
          購買日期：<input type="date" name="pt">
          <br><br>
		  購買者：<input type="text" name="pb">
		  <br><br>
		  購買來源：<input type="text" name="pf">
          <br><br>
          <input type='submit' value='送出表單'><br></p>
          </form>

          <br><br>
        </body>
    </html>
