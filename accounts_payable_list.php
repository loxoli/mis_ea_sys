<?php
 $page_title="應付帳款 | 查詢";
include('slice-slice/top.php');
include('db/db.php');?>

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>															<!----這裡修改頁面內header標題---->
            應付帳款
            <small>單據管理</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li><!----這裡修改麵包屑---->
            <li class="active">單據查詢</li>
            <li class="active">accounts_payable management list</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content"> <!----這個section裡面放內容---->
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">單據管理</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>單據編號</th>
                        <th>單據日期</th>
                        <th>應兌日期</th>
                        <th>供應廠商</th>
						<th>部門</th>
                        <th>填表人</th>
						<th>連絡電話</th>
						<th>商品項目</th>
						<th>金額</th>
						<th>備註</th>
                        <th>交易狀態</th>
						<th></th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
						$sql2 = "SELECT * FROM `accounts_payable`";
						$result2 = mysql_query($sql2);
						while($ord = mysql_fetch_array($result2)){
					?>
                      <tr>
                        <td><?=$ord['編號']?></td>
                        <td><?=$ord['date_start']?></td>
                        <td><?=$ord['date_end']?></td>
						<td><?=$ord['provider']?></td>
                        <td><?=$ord['provider']?></td>
                        <td><?=$ord['id']?></td>
                        <td><?=$ord['telephone']?></td>
						<td><?=$ord['list1']?></td>
						<td><?=$ord['money']?></td>
						<td><?=$ord['other']?></td>
                        <td><?=$ord['condition']?></td>
						<td><a href="accounts_payable1.php?c=<?=$ord['編號']?>">修改</a><br><a href="accounts_payable1.php?c=<?=$ord['編號']?>">繳款</a></td>
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
