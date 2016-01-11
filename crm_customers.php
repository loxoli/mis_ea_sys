<?php
 $page_title="Customers List | CRM";
include('slice-slice/top.php');
include('db/db.php');?>

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>															<!----這裡修改頁面內header標題---->
            CRM
            <small>Customers List</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li><!----這裡修改麵包屑---->
            <li class="active">CRM</li>
            <li class="active">Customers List</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content"> <!----這個section裡面放內容---->
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">客戶資料</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>姓名</th>
                        <th>電話</th>
                        <th>email</th>
                        <th>公司</th>
						<th>國家</th>
                        <th>地址</th>
						<th></th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
						$sql2 = "SELECT * FROM `crm_customers` order by c_add_time desc";
						$result2 = mysql_query($sql2);
						while($customer = mysql_fetch_array($result2)){
					?>
                      <tr>
                        <td><?=$customer['name']?></td>
                        <td><?=$customer['phone']?></td>
                        <td><?=$customer['email']?></td>
						<td><?=$customer['company']?></td>
                        <td><?=$customer['country']?></td>
                        <td><?=$customer['address']?></td>
						<td><a href="crm_edit_cus.php?c=<?=$customer['c_uid']?>">編輯</a><br><a href="process/process_crm_del_c.php?c=<?=$customer['c_uid']?>">刪除</a></td>
                      </tr>
					<?php
						}
					?>
                    </tbody>
                    <!--
					<tfoot>
                      <tr>
                        <th><i>姓名</i></th>
                        <th><i>電話</i></th>
                        <th><i>email</i></th>
                        <th><i>國家</i></th>
                        <th><i>地址</i></th>
						<th><i></i></th>
                      </tr>
                    </tfoot>
					-->
                  </table>
                </div><!-- /.box-body -->
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
