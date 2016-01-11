<?php
 $page_title="Logistics management";
include('slice-slice/top.php');
include('db/db.php');?>

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>															<!----這裡修改頁面內header標題---->
            商品列表
            <small>Inventory management</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li><!----這裡修改麵包屑---->
            <li class="active">庫存管理</li>
            <li class="active">Inventory management</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content"> <!----這個section裡面放內容---->
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">商品列表</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>產品編號</th>
                        <th>產品名稱</th>
                        <th>供應商編號</th>
                        <th>單位</th>
						<th>單價</th>
	
						<th></th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
						$sql2 = "SELECT * FROM `product`";
						$result2 = mysql_query($sql2);
						while($ord = mysql_fetch_array($result2)){
					
                      <tr>
                        <td><a href="inventory_information.php?c=<?=$ord['p_number']?>"><?=$ord['p_number']?></a></td> 
                        <td><?=$ord['p_name']?></td>
                        <td><a href="supplier_list.php?c=<?=$ord['s_number']?>"><?=$ord['s_number']?></a></td>
                        <td><?=$ord['p_nuit']?></td>
                        <td><?=$ord['price']?></td>
	
						<td><a href="inventory.php?c=<?=$ord['p_number']?>">新增</a><br><a href="process/process_crm_del_c.php?c=<?=$ord['s_number']?>">刪除</a></td>
                      </tr>
					<?php
						}
					?>
                    </tbody>
                    <!--
					<tfoot>
                      <tr>
                        <th><i>產品編號</i></th>
                        <th><i>產品名稱</i></th>
                        <th><i>供應商編號</i></th>
                        <th><i>單位</i></th>
                        <th><i>單價</i></th
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