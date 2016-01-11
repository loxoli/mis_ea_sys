<?php
 $page_title="Customers List | CRM";
include('slice-slice/top.php');
include('db/db.php');?>

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>															<!----這裡修改頁面內header標題---->
            CRM
            <small>Customers List</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li><!----這裡修改麵包屑---->
            <li class="active">CRM</li>
            <li class="active">Customers List</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content"> <!----這個section裡面放內容---->
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">客戶資料</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" id="formid1" action="process/process_crm_edit.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">姓名</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="林志鴻">
                      </div>
                    </div>
					<div class="form-group">
					  <label class="col-sm-2 control-label">性別</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="male">男性
                        </label>
						<label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="female">女性
                        </label>
						<label>
                          <input type="radio" name="optionsRadios" id="optionsRadios3" value="unknow">未知
                        </label>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">公司/單位</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="中原大學">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">行動電話</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="0900000000">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">室內電話</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="0900000000">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">傳真機</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="0900000000">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">國家</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="Taiwan">
                      </div>
                    </div>
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">修改</button>
					  </div><!-- /.box-footer -->
					</form>
                  </div><!-- /.box-body -->
                  
              </div><!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <!-- form start -->
                <form class="form-horizontal" id="formid2" action="process/process_crm_edit.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">英文名</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  name="englishname" value="Lin Chih-hung">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">暱稱</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="阿拉拉">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Email Address</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="dfgkjl@gldfkj.ll">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">地址</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" rows="2" placeholder="地址" value="中中中北北北路路2000號"></textarea>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">網站</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="https://sfksdlfkj.fsldkjf/">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Line ID</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="line3333">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">生日</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="1999-9-9">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">備註</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" rows="5" placeholder="備註..." value="yoooooooooooooooooooooooooooooooooooooooooooo"></textarea>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="button" onclick="submitit();" class="btn btn-info pull-right">修改</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->

	<?php include('slice-slice/bottom.php');?>
<!-- page script -->
    <script language="javascript">  
		function submitit(){
		//第一个表单
		   var tform1=document.getElementById("formid1");
		//第二个表单
		   var tform2=document.getElementById("formid2");
		//提交第一个表单
		  tform1.submit();
		//提交第二个表单
		  tform2.submit();
		}
		</script>  
