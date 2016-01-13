<?php
 $page_title="Logistics management";
include('slice-slice/top.php');
include('db/db.php');?>

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>															<!----這裡修改頁面內header標題---->
            Inventory
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
                  <h3 class="box-title">庫存資訊</h3>
<a href="inventory.php?c=<?=$ord['p_number']?>">商品列表</a></td></button><a href="supplier.php?c=<?=$ord['p_number']?>">供應商列表</a></td></button>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <a href='admin_product_deal.jsp?op=add_product'>增加產品&nbsp&nbsp</a>
	<table border="1">
		<tr>
			<td>SP_NO</td>
			<td>服務名稱</td>
			<td>服務價錢</td>
			<td>服務說明</td>
			<td>庫存</td>
			<td>增加庫存</td>
			<td>減少庫存</td>
			<td>刪除產品</td>
			

		</tr>
<?php
						$sql2 = "SELECT * FROM `product``";
						$result2 = mysql_query($sql2);
						while($ord = mysql_fetch_array($result2)){
					?>
			<tr>
			<td><%=rs.getString(1)%></td>
			<td><%=rs.getString(2)%></td>
			<td><%=rs.getString(3)%></td>
			<td><%=rs.getString(6)%></td>
			<td><%=rs.getString(4)%></td> 
			<td><a href='admin_product_deal.jsp?op=add&bm=<%=rs.getString(1)%>'>加</a></td>
			<td><a href='admin_product_deal.jsp?op=div&bm=<%=rs.getString(1)%>'>減</a></td>
			<td><a href='admin_product_deal.jsp?op=del&bm=<%=rs.getString(1)%>'>刪除</a></td>

			
			
		</tr>

	<%

	}
		
%>
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

</body>
</html>