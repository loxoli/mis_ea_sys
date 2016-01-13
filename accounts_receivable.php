<?php
 $page_title="應收帳款 | 建立單據";
include('slice-slice/top.php');
include('db/db.php');?>

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

        <!-- Content Header (Page header) -->
        
        <section class="content-header">
          <h1><!----這裡修改頁面內header標題---->
            應收帳款
            <small>建立表單</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li><!--這裡修改麵包屑---->
            <li class="active">返回財務管理</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content"> <!----這個section裡面放內容---->
        
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">表單資料</h3>
                </div><!-- /.box-header --
                
          <!-- form start -->
        <form role="form" action="accounts_receivable_register2.php" method="POST">
                  <div class="box-body">
                 
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label>客戶單號:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                   <input type="text" name="date_start" /> 
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->


                  <!-- Date mm/dd/yyyy -->
                  <div class="form-group">
                    <label>收據產生日期:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="date_end" /> 
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

 
            
                    <div class="form-group">
                    <label>廠商名稱:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-laptop"></i>
                      </div>
                      <input type="text" name="provider" /> 
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                   
                  
                  <div class="form-group">
                    <label>部門:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-black-tie"></i>
                      </div>
                   <input type="text" name="department" /> 
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  
                  <div class="form-group">
                    <label>填表人:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                       <i class="fa  fa-smile-o"></i>
                      </div>
                    <input type="text" name="id" /> 
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  
                  <div class="form-group">
                    <label>聯絡電話:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                  <input type="text" name="telephone" /> 
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  
                   
                  <div class="form-group">
                    <label>商品規格:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-balance-scale"></i>
                      </div>
                  <input type="text" name="list1" /> 
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  
                  <div class="form-group">
                    <label>金額:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class=" fa fa-dollar"></i>
                      </div>
                      <input type="text" name="money" /> 
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  
                  <div class="form-group">
                    <label>備註:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-black-tie"></i>
                      </div>
                    <textarea name="other" cols="45" rows="5"></textarea> <br>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->




        
          
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        
      
<?php include('slice-slice/bottom.php');?>
 <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script> 
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>	
<!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
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

