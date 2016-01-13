<?php include('slice-slice/top.php'); ?>
  <!--DB連線-->
   <?php include('db/db.php'); ?>


   
        <!-- Content Header (Page header) -->
            <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          
             
              <!--TABLE STARTS -->
              
             
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Human Resources
            <small>Employee records.</small>
          </h1>
          <ol class="breadcrumb">
           <div class="btn-group-vertical">
                          <button type="button" class="btn btn-warning" ><a href="http://140.135.113.38/EA/add_staff.php">+</a></button></div>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
               <!-- /.box-header -->
                <div class="box-body">
                      
                      
                      
		   
                <table id='example2' class='table table-bordered table-hover'>
                    <thead>
                      <tr>
                        <th>姓名</th>
                       
                        <th>職位</th>
                        <th>員工編號</th>
                        <th>活躍度</th>
                      </tr>
					
         <?php
						$sql2 = "SELECT * FROM `staff`";
						$result2 = mysql_query($sql2);
						while($employee = mysql_fetch_array($result2)){
					?>
        
                    </thead>
                    <tbody>
                      <tr>
                <td><?=$employee['fullname']?></td>
               
                <td><?=$employee['position']?></td>
                <td><?=$employee['staff_id']?></td>
                <td><?=$employee['activity']?></td>
                      </tr>
                   <?php
						}
					?>
                   
                  
                  </table>
				 
				  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              
            </div><!-- /.box-body -->
           
          </div><!-- /.box -->

        </section><!-- /.content -->
      <!-- /.content-wrapper -->
      
<?php include('slice-slice/bottom.php');
  mysql_close($conn); ?>
