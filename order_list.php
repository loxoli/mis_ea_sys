<?php
 $page_title="訂單管理 | 訂單查詢";
include('slice-slice/top.php');
include('db/db.php');?>

     <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>															<!----這裡修改頁面內header標題---->
           訂單管理
            <a href="order_add_list.php?c=<?=$_ord['inventory_information']?>">新增訂單</a></td></button>
          </h1>
          <ol class="breadcrumb"
            <li><a href="#"><i class="fa fa-訂單管理"></i> Home</a></li><!----這裡修改麵包屑---->
            <li class="active">訂單管理</li>
            <li class="active">order management information</li 
          </ol>
        </section>

        <!-- Main content -->
        <section class="content"> <!----這個section裡面放內容---->
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">訂單查詢</h3>  <a href="order_add_list.php?c=<?=$ord['inventory_information']?>">新增訂單</a></td></button>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>訂單編號</th>
                        <th>客戶編號</th>
                        <th>員工編號</th>
                        <th>訂單日期</th>
						<th>要貨日期</th>
                        <th>送貨日期</th>
						<th>總價</th>
						<th>收貨人</th>
						<th>送貨地址</th>
	               
						<th></th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
						$sql2 = "SELECT * FROM `order`";
						$result2 = mysql_query($sql2);
						while($ord = mysql_fetch_array($result2)){
					?>
                          <tr>
                          <td><?=$ord['o_number']?></td>
                          <td><?=$ord['o_customer']?></td>
                          <td><?=$ord['staff']?></td>
						  <td><?=$ord['o_date']?></td>
                          <td><?=$ord['r_date']?></td>
                          <td><?=$ord['t_date']?></td>
                          <td><?=$ord['money']?></td>
						  <td><?=$ord['customer']?></td>
						  <td><?=$ord['adress']?></td>
					
                     
						
                          
						  <td><a href="order_change.php?aid=<?=$ord['o_number']?>">修改</a></td>
                          </tr>
					<?php
						}
					?>
                    </tbody>
                    <!--
					<tfoot>
                      <tr>
                        <th><i>訂單編號</i></th>
                        <th><i>客戶編號</i></th>
                        <th><i>員工編號</i></th>
                        <th><i>訂單日期</i></th>
                        <th><i>要貨日期</i></th>
						<th><i>送貨日期</i></th>
						<th><i>運費</i></th>
						<th><i>收貨人</i></th>
						<th><i>送貨地址</i></th>
						<th><i>訂單狀態</i></th>
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
