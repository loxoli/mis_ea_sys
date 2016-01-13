<?php
 $page_title="Offer Letter";
include('slice-slice/top.php');
include('db/db.php');?>

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>															<!----這裡修改頁面內header標題---->
            Offer Letter
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li><!----這裡修改麵包屑---->
            <li class="active">HR</li>
            <li class="active">Offer Letter</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content"> <!----這個section裡面放內容---->
<?php
$offer_id = $_GET["c"];
$sql="SELECT *  FROM `job_applicant` WHERE `offer_id` = $offer_id";
$result=mysql_query($sql);
$cus_data_array = mysql_fetch_array($result);
?>




		
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">申請人資料</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" id="formid1" action="offer_save.php" method="post">
                
				<input type="hidden" name="cid" value="1">
                  <div class="box-body">
                  <div class="form-group">
                      <label class="col-sm-2 control-label">申請編號</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="offer_id" value="<?php echo $cus_data_array["offer_id"];?>">
                      </div>
                      </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">申請人姓名</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="name"  placeholder="姓名" value="<?php echo $cus_data_array["name"];?>">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-2 control-label">徵求職位</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="job"  value="<?php echo $cus_data_array["job"];?>">
                      </div>
                    </div>
                    
                     <div class="form-group">
                      <label class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="email"  value="<?php echo $cus_data_array["email"];?>">
                      </div>
                    </div>
                    
					<div class="form-group">
					  <label class="col-sm-2 control-label">狀態</label>
                     
                      <div class="col-sm-10">
					
						 <select class="form-control select2" name="offerstatus" style="width: 100%;">
                      <option selected="selected" value="正在等待回應"<?php if($cus_data_array["offerstatus"]=="正在等待回應")echo ' checked="true"';?>>正在等待回應</option>
                      <option selected="selected" value="錄取"<?php if($cus_data_array["offerstatus"]=="錄取")echo ' checked="true"';?>>錄取</option>
                      <option selected="selected" value="拒絕"<?php if($cus_data_array["offerstatus"]=="拒絕")echo ' checked="true"';?>>拒絕</option>
                      
                     
                    </select>
                    
                    </div>
					</div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">分發日期</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="done_date" value="<?php echo $cus_data_array["done_date"];?>">
                      </div>
                    </div>
                     <button input="" type="submit"  class="btn btn-warning" >SAVE</button>
					
					</form>
                  </div><!-- /.box-body -->
                  
              </div><!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- Horizontal Form -->
             
                <!-- form start -->
               
                  
                 <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Send Mail</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="mailbox-read-info">
                    <h3>恭喜你已經被我們錄取！</h3>
                    <h5>From: support@supererp.com <span class="mailbox-read-time pull-right">14 Jan. 2016 10:50 PM</span></h5>
                  </div><!-- /.mailbox-read-info -->
                  <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">
                      <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
                      <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Reply"><i class="fa fa-reply"></i></button>
                      <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Forward"><i class="fa fa-share"></i></button>
                    </div><!-- /.btn-group -->
                    <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i></button>
                  </div><!-- /.mailbox-controls -->
                  <textarea class="form-control" style="height: 300px">
                    Dear Ms. or Mr. : 

SuperERP Company, Inc. is pleased to offer you the position for our organization. We are all excited about the potential that you bring to our company. 

As we discussed during your interviews, you will be working in our office in Taiwan. You will report directly to the xxx and be a member of our xxx Team. 

You will be classified as an exempt/non-exempt employee. Your initial compensation package includes an annual salary of NT$10000 (payable biweekly), full medical and dental coverage through our company's employee benefit plan, and fringe benefits as covered in the enclosed benefit summary. 

In accepting our offer of employment, you certify your understanding that your employment will be on an at-will basis, and that neither yourself nor the Company has entered into a contract regarding the terms or the duration of your employment. As an at-will employee, you will be free to terminate your employment with the Company at any time, with or without cause or advance notice. Likewise, the Company will have the right to reassign you, to change your compensation, or to terminate your employment at any time, with or without cause or advance notice. 

We look forward to your arrival at our company and are confident that you will play a key role in our company's growth. Please let me know if you have any questions or if I can do anything to make your arrival easier. 



_________________________ 

SuperERP Company, Inc.</p></textarea>
                  </div><!-- /.mailbox-read-message -->
                  
                </div><!-- /.box-body -->
                
                
                
                
                
                <div class="box-footer">
                  <div class="pull-right">
                   
                   
                   
                    <button class="btn btn-default"><i class="fa fa-share"></i> <a href="offer_send.php?c=<?=$cus_data_array['offer_id']?>">Send</a></button>
                  </div>
                  
                  
                </div><!-- /.box-footer -->
              </div>   
                      
                      
                
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->

	<?php include('slice-slice/bottom.php');?>
