<?php
header ('Content-Type: text/html; charset=utf8');
?>
<?php include('slice-slice/top.php'); ?>
<?php include('db/db.php'); ?>

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>															<!----這裡修改頁面內header標題---->
           訂單管理
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-訂單管理"></i> Home</a></li><!----這裡修改麵包屑---->
            <li class="active">訂單管理</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content"> <!----這個section裡面放內容---->
		

<? $data=mysql_query("select * from order")?>

	
<table width="546" border="1">
<tr>
<td>訂單編號</td>
<td>客戶編號</td>
<td>員工編號</td>
<td>訂單日期</td>
<td>要貨日期</td>
<td>送貨日期</td>
<td>運費</td>
<td>收貨人</td>
<td>送貨地址</td>
</tr>

<?php
for($i=1;$i<=mysql_num_rows($data);$i++)
{ $rs=mysql_fetch_row($data);
?><tr>
<td><?php echo $rs[0]?></td>
<td><?php echo $rs[1]?></td>
<td><?php echo $rs[2]?></td>
<td><?php echo $rs[3]?></td>
<td><?php echo $rs[4]?></td>
<td><?php echo $rs[5]?></td>
</tr>
<?php }?>

</table>
		
</section><!-- /.content -->
<?php include('slice-slice/bottom.php');
