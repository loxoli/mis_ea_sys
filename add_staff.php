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
                
               </section>
      
<?php include('slice-slice/bottom.php');
 mysql_close($conn); ?>