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

        <!-- Main content -->
        <section class="content"> <!----這個section裡面放內容---->
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-footer" style="text-align:right">
                    <button type="button" class="btn btn-primary" onclick="location.href='crm_new_ticket.php';">Create A New Ticket</button>
                 </div>
              </div>
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Open Tickets</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>TicketID</th>
                        <th>Summary</th>
                        <th>Regarding</th>
                        <th>Status</th>
						<th>Customer</th>
						<th>Opened</th>
                        <th>Last Updated</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
						$sql3 = "SELECT crm_tickets.* , crm_customers.name FROM `crm_tickets` INNER JOIN `crm_customers` ON crm_tickets.t_customer = crm_customers.c_uid WHERE `status` = 'OPEN' ORDER BY last_update_time DESC";
						$result3 = mysql_query($sql3);
						while($tickets2 = mysql_fetch_array($result3)){
					?>
                      <tr style="font-weight: bolder;">
                        <td><?=$tickets2['ticket_id']?></td>
                        <td><?=$tickets2['title']?></td>
                        <td><?=$tickets2['regarding']?></td>
						<td><?=$tickets2['status']?></td>
						<td><?=$tickets2['name']?></td>
                        <td><?=$tickets2['created_time']?></td>
                        <td><?=$tickets2['last_update_time']?></td>
                      </tr>
					<?php
						}
					?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  
			  <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Closed Tickets</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>TicketID</th>
                        <th>Summary</th>
                        <th>Regarding</th>
                        <th>Status</th>
						<th>Customer</th>
						<th>Opened</th>
                        <th>Last Updated</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
						$sql2 = "SELECT crm_tickets.* , crm_customers.name FROM `crm_tickets` INNER JOIN `crm_customers` ON crm_tickets.t_customer = crm_customers.c_uid WHERE `status` = 'CLOSE' ORDER BY last_update_time DESC";
						$result2 = mysql_query($sql2);
						while($tickets = mysql_fetch_array($result2)){
					?>
                      <tr style="font-weight: bolder;">
                        <td><?=$tickets['ticket_id']?></td>
                        <td><?=$tickets['title']?></td>
                        <td><?=$tickets['regarding']?></td>
						<td><?=$tickets['status']?></td>
						<td><?=$tickets['name']?></td>
                        <td><?=$tickets['created_time']?></td>
                        <td><?=$tickets['last_update_time']?></td>
                      </tr>
					<?php
						}
					?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <div class="box">
                <div class="box-footer" style="text-align:right">
                    <button type="button" class="btn btn-primary" onclick="location.href='crm_new_ticket.php';">Create A New Ticket</button>
                 </div>
              </div

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
