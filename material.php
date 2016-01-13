<?php
 $page_title="原料新增";
include('slice-slice/top.php');
include('db/db.php');?>


   
        <!-- Content Header (Page header) -->
            <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          
             
              <!--TABLE STARTS -->
              
             
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Raw Material
            <small>Input the index.</small>
          </h1>
          <ol class="breadcrumb">
           <div class="btn-group-vertical">
             <form name="form" method="post" action="insert.php">
               <button input="" type="submit"  class="btn btn-warning">新增</button></div>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
               <div class="box-header">
                 <h3 class="box-title">請輸入原料詳細資料</h3> 
               </div><!-- /.box-header -->
               <div class="box-body">

				<form action="insert.php" method="post"><p align = "center"> 
				<br>
					原料名稱：<input type="text" name="mn">
				<br><br>
					購買價錢：<input type="text" name="mp">
				<br><br>
					購買日期：<input type="date" name="md">
				<br><br>
					購買者：<input type="text" name="mb">
				<br><br>
					購買來源：<input type="text" name="mf">
				<br></p>
				</form>      
                      
		   
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>原料</th>
						<th>價錢</th>
                        <th>購買日期</th>
                        <th>購買人</th>
                        <th>向誰購買</th>
                      </tr>
					
                    <?php
						$sql2 = "SELECT * FROM `material`";
						$result2 = mysql_query($sql2);
						while($material_index = mysql_fetch_array($result2)){
					?>
        
                    </thead>
                    <tbody>
                      <tr>
                      <td><?=$material_index['MaterialName']?></td>
				      <td><?=$material_index['Price']?></td>
                      <td><?=$material_index['Date']?></td>
                      <td><?=$material_index['BuyerID']?></td>
                       <td><?=$material_index['BuyFrom']?></td>
                      </tr>
                   <?php
						}
					?>
                   
                    </tbody>
               
                  </table>
				 
				  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              
            </div><!-- /.box-body -->
           
          </div><!-- /.box -->

        </section><!-- /.content -->
      <!-- /.content-wrapper -->

<?php include('slice-slice/bottom.php');?>
    

<!-- page script -->
    <script>
      $(function () {
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
      
<?php include('slice-slice/bottom.php');
  mysql_close($conn); ?>
