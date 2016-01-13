<?php
 $page_title="Tickets | CRM";
include('slice-slice/top.php');
include('db/db.php');?>

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>															<!----這裡修改頁面內header標題---->
            CRM
            <small>Support Tickets System</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li><!----這裡修改麵包屑---->
            <li class="active">Support</li>
            <li class="active">Tickets</li>
          </ol>
        </section>
 <?php
	$sql = "SELECT crm_tickets.* , crm_customers.name FROM `crm_tickets` INNER JOIN `crm_customers` ON crm_tickets.t_customer = crm_customers.c_uid WHERE `status` = 'OPEN' ORDER BY last_update_time DESC";
	$result = mysql_query($sql);
	$tickets = mysql_fetch_array($result3);
?>
        <!-- Main content -->
        <section class="content"> <!----這個section裡面放內容---->
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">#000000 TTTTT</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="process/process_crm_add_ticket.php" method="POST">
                  <div class="box-body">
		    <div class="form-group">
                      <label>Customer</label>
                      <p>12 </p>
                    </div>
                    <div class="form-group">
                      <label>Staff</label>
                      <p>12 </p>
                    </div>
					<div class="form-group">
                      <label>Regarding</label>
                      <p>12 </p>
                    </div>
					<div class="form-group">
                      <label>Description</label>
		      <p>12 </p>
		    </div>
		    <div class="form-group">
                      <label>Created</label>
                      <p>12 </p>
                    </div>
		    <div class="form-group">
                      <label>Last Updated</label><span>　132323</span>
                      <p>12 </p>
                    </div>
                    
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
