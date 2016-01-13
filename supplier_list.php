<?php
 $page_title="Logistics management";
include('slice-slice/top.php');
include('db/db.php');?>

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>															<!----這裡修改頁面內header標題---->
            Logistics
            <small>Logistics management</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li><!----這裡修改麵包屑---->
            <li class="active">物流管理</li>
            <li class="active">Logistics management</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content"> <!----這個section裡面放內容---->
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">供應商列表</h3>   <a href="inventory.php?c=<?=$ord['inventory_information']?>">庫存列表</a></td></button> <a href="supplier.php?c=<?=$ord['supplier_list']?>">供應商列表</a></td></button>
                <div class="box-body">
			
                </div><!-- /.box-header -->
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>供應商編號</th>
                        <th>公司名稱</th>
                        <th>聯絡人</th>
                        <th>地址</th>
						<th>電話</th>
						<th></th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
						$sql2 = "SELECT * FROM `supplier`";
						$result2 = mysql_query($sql2);
						while($ord = mysql_fetch_array($result2)){
					?>
                      <tr>
                     <td><a href="supplier_list.php?c=<?=$ord['s_number']?>"><?=$ord['s_number']?></a></td>
                        <td><?=$ord['company']?></td>
					    <td><?=$ord['s_name']?></td>
                        <td><?=$ord['s_adress']?></td>
                        <td><?=$ord['s_phone']?></td>
	
						<td><a href="crm_edit_cus.php?c=<?=$ord['s_number']?>">新增</a><br><a href="process/process_crm_del_c.php?c=<?=$ord['s_number']?>">刪除</a></td>
                      </tr>
					<?php
						}
					?>
                    </tbody>
                    <!--
					<tfoot>
                      <tr>
                        <th><i>供應商編號</i></th>
                        <th><i>公司名稱</i></th>
                        <th><i>聯絡人</i></th>
                        <th><i>地址</i></th>
                        <th><i>電話</i></th>
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
