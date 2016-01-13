<?php
 $page_title="Customers List | CRM";
include('slice-slice/top.php');
include('db/db.php');?>

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>															<!----這裡修改頁面內header標題---->
            CRM
            <small>Add Customer</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li><!----這裡修改麵包屑---->
            <li class="active">CRM</li>
            <li class="active">Add Customer</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content"> <!----這個section裡面放內容---->
          <div class="row">
            <div class="col-xs-12">
		<div class="box-footer" style="text-align:right">
                    <button type="button" class="btn btn-primary" onclick="location.href='crm_customers.php';">Customers List</button>

                  </div>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add A New Customer</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" id="formid1" action="process/process_crm_add_customer.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">姓名</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="name"  placeholder="姓名" >
                      </div>
                    </div>
					<div class="form-group">
					  <label class="col-sm-2 control-label">性別</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sex" id="optionsRadios1" value="male">男性
                        </label>
						<label>
                          <input type="radio" name="sex" id="optionsRadios2" value="female">女性
                        </label>
						<label>
                          <input type="radio" name="sex" id="optionsRadios3" value="unknow">未知
                        </label>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">公司/單位</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="company"  placeholder="公司/單位">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">行動電話</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="cellphone" placeholder="行動電話">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">室內電話</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="phone"  placeholder="室內電話">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">傳真機</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="fax"  placeholder="傳真號碼">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">國家/地區</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="country"  placeholder="國家/地區">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">英文名</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  name="englishname" placeholder="英文姓名 (點此填寫)">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">暱稱</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nickname" placeholder="暱稱(點此填寫)">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Email Address</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" placeholder="Email Address (點此填寫)">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">地址</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" rows="2" name="address" placeholder="地址 (點此填寫)"></textarea>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">網站</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="site" placeholder="網站網址 (點此填寫)">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Line ID</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="line-id" placeholder="客戶 Lind ID (點此填寫)">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">生日</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="birthday" placeholder="客戶生日 (點此填寫)">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">備註</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" rows="5" name="memo" placeholder="備註..."></textarea>
                      </div>
                    </div>
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">修改</button>
					  </div><!-- /.box-footer -->
					</form>
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

	<?php include('slice-slice/bottom.php');?>
