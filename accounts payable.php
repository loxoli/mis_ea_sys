<?php 
$page_title="自訂標題";
include('slice-slice/top.php'); //請把這玩意兒放在頁面最上面 ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>															<!----這裡修改頁面內header標題---->
            應付帳款管理系統
            <small>建立應付帳款</small>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            
            
<form name="form" method="post" action="register_finish.php">
公司名稱：<input type="text" name="id" /> <br>
支出帳號：<input type="password" name="pw" /> <br>
日期：<input type="password" name="pw2" /> <br>
金額：<input type="text" name="telephone" /> <br>
明細：<textarea name="other" cols="45" rows="5"></textarea> <br>
附檔：<input type="text" name="address" /> <br>
<input type="submit" name="button" value="確定" />
</form>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li><!----這裡修改麵包屑---->
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content"> <!----這個section裡面放內容---->

        </section><!-- /.content -->
<?php include('slice-slice/bottom.php //請把這玩意兒放在頁面最下面');
