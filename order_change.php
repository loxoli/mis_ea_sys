<?php
 $page_title="訂單管理| 後台新增店單";
include('slice-slice/top.php');
include('db/db.php');?>

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1><!----這裡修改頁面內header標題---->
            訂單修改
          <a href="order_list.php?c=<?=$_ord['inventory_information']?>">訂單查詢</a></td></button>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li><!--這裡修改麵包屑---->
            <li class="active">修改訂單</li>  
          </ol>
        </section>


        <!-- Main content -->
        <section class="content"> <!----這個section裡面放內容---->
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">修改訂單</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
				<?php
				    $id=$_GET['aid'];
					$sql2 = "SELECT * FROM `order` where `o_number`=$id";
					$result2 = mysql_query($sql2);
					$ord = mysql_fetch_array($result2);
				?>
                <form role="form" action="order_receive.php" method="POST">
                  <div class="box-body">
                    <div class="form-group">
					  
                      <label>訂單編號：</label>
					  
                      <input class="form-control" name="o_number" placeholder="" value="<?=$ord['o_number']?>">
                    </div>
					<div class="form-group">
                      <label>客戶編號：</label>
                      <input class="form-control" name="o_customer" placeholder="" value="<?=$ord['o_customer']?>">
                    </div>
					<div class="form-group">
                      <label>員工姓名：</label>
                      <input class="form-control" name="staff" placeholder="" value="<?=$ord['staff']?>">
                    </div>
					<div class="form-group">
                      <label>訂單日期：</label>
                      <input class="form-control" name="o_date" placeholder="" value="<?=$ord['o_date']?>">
                    </div>
					<div class="form-group">
                      <label>要貨日期：</label>
                      <input class="form-control" name="r_date" placeholder="" value="<?=$ord['r_date']?>">
                    </div>
					<div class="form-group">
                      <label>送貨日期：</label>
                      <input class="form-control" name="=t_date" placeholder="" value="<?=$ord['r_date']?>">
                    </div>
					<div class="form-group">
                      <label>總價：
					  </label>
                      <input class="form-control" name="money" placeholder="" value="<?=$ord['money']?>">
                    </div>
					<div class="form-group">
                      <label>收貨人：</label>
                      <input class="form-control" name="customer" placeholder="" value="<?=$ord['customer']?>">
                    </div>
					<div class="orm-group">
                      <label>送貨地址：</label>
                      <input class="form-control" name="adress" placeholder="" value="<?=$ord['adress']?>">
                    </div>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save the change</button>
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
