<?php include('slice-slice/top.php'); ?>
  <!--DB連線-->
   <?php include('db/db.php'); ?>
   <?php session_start(); ?>
 
 



   
        <!-- Content Header (Page header) -->
            <!-- Main content -->
            <title>HR-新增員工資料</title>
            
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
           <form name="form" method="post" action="recording.php">
        <button input="" type="submit"  class="btn btn-warning" >SAVE</button></div>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
               <!-- /.box-header -->
                <div class="box-body">
              
              
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">新增員工</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label>全名 Fullname</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-laptop"></i>
                      </div>
                      <input type="text" class="form-control"  name="fullname">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label>加入日期 Join date</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" name="joindate" >
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <!-- Date mm/dd/yyyy -->
                  <div class="form-group">
                   <label>生日 Birthdate</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" name="birthdate" >
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                 
                </div><!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>手機號碼 Phone</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control" name="phone">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  
                  <div class="form-group">
                    <label>員工編號 ID</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa  fa-smile-o"></i>
                      </div>
                      <input type="text" class="form-control" name="staff_id">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>性別 Gender</label>
                    <select class="form-control select2" name="gender" style="width: 100%;">
                      <option selected="selected" value="male">男</option>
                      <option value="female">女</option>
                     
                    </select>
                  </div>
                  
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.box-body -->
            <div class="box-footer">
              員工個人資本資料
            </div>
          </div><!-- /.box -->
                
                      
                      <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">工作詳情 Job Profile</h3>
                </div>
                <div class="box-body">
                <div class="row">
                <div class="col-md-6">
                  <!-- name-->
                  <div class="form-group">
                    <label>職位 Position</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-black-tie"></i>
                      </div>
                      <input type="text" class="form-control" name="position" >
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                
                    <div class="form-group">
                    <label>部門 Department</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa  fa-hand-peace-o"></i>
                      </div>
                      <input type="text" class="form-control" name="department" >
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
</div> <!-- end col-->
<div class="col-md-6">
                   <div class="form-group">
                    <label>公司郵箱 Company Email</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-envelope-o"></i>
                      </div>
                      <input type="text" class="form-control"  name="email">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  </div> <!--end col-->
                  
     </form>
                


              

                </div><!-- /.box-body -->
              </div>
				 
				  
                </div><!-- /.box-body -->
                
                <!--history starts-->
                
                <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">公司工作歷史 History In Company</h3>
                  <p>&nbsp;</p>
                  <div class="box">
               <?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $n_dept = test_input($_POST["n_dept"]);
   $n_position = test_input($_POST["n_position"]);
   $startdate = test_input($_POST["startdate"]);
   $enddate = test_input($_POST["enddate"]);

}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      
                      <th>部門</th>
                      <th>職位</th>
                      <th>開始日期</th>
                      <th>結束日期</th>
                    </tr>
                     <tr>
                      
                      <th>零件製造</th>
                      <th>生產經理</th>
                      <th>2014/12/07</th>
                      <th>2016/01/05</th>
                    </tr>
                    
<?php
echo "<tr><th>";
echo $n_dept;
echo "</th>";
echo "<th>";
echo $n_position;
echo "</th>";
echo "<th>";
echo $startdate;
echo "</th>";
echo "<th>";
echo $enddate;
echo "</th></tr>";

?>
                    
                  </table>
                 
                  <p>&nbsp;</p>
                  <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">新增歷史紀錄 </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                         
                          <th>部門</th>
                          <th>職位</th>
                          <th>開始日期</th>
                          <th>結束日期</th>
                        </tr>
                      </thead>
                      <tbody>
                      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                        <tr>
                      
                          <td><input type="text" name="n_dept"></td>
                          <td><input type="text" name="n_position"></td>
                          <td><input type="text" name="startdate"></td>
                          <td><input type="text" name="enddate"></td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <button type="submit" name="submit2" class="btn btn-sm btn-info btn-flat pull-left">Add a new row</button>
                  </form>
                  
            
            
                </div><!-- /.box-body -->
              </div><!-- /.box -->
                  
               
           
                   
                  
          
                
                
           
           
         

        </section><!-- /.content -->
      <!-- /.content-wrapper -->
      
<?php include('slice-slice/bottom.php');
 mysql_close($conn); ?>