
<?php
 $page_title="Offer Letter";
include('slice-slice/top.php');
include('db/db.php');?>


<?php
$offer_id = $_GET["c"];
$sql="SELECT *  FROM `job_applicant` WHERE `offer_id` = $offer_id";
$result=mysql_query($sql);
$cus_data_array = mysql_fetch_array($result);
?>





<?php
require ("class.phpmailer.php");
require ("class.smtp.php");
require ("PHPMailerAutoload.php");
//以下是实例:
$mail = new phpmailer(); //建立邮件发送类
$address = $cus_data_array["email"];
$mail->IsSMTP(); // 使用SMTP方式发送
$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true;  // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465; 
	$mail->Username = 'cicieclaude@gmail.com';  
	$mail->Password = 'shenyuqin';           
$mail->From = "cicieclaude@gmail.com"; //邮件发送者email地址
$mail->FromName = "Super ERP";
$mail->AddAddress($address, ""); //收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
//$mail->AddReplyTo("", "");
//$mail->AddAttachment("/var/tmp/file.tar.gz"); // 添加附件
//$mail->IsHTML(true); // set email format to HTML //是否使用HTML格式
$mail->Subject = "恭喜您已經被我們錄取－SuperERP"; //邮件标题
$mail->Body = "
<p>
Dear Ms. or Mr. : 
<p>
SuperERP Company, Inc. is pleased to offer you the position for our organization. We are all excited about the potential that you bring to our company. 
<p>
As we discussed during your interviews, you will be working in our office in Taiwan. You will report directly to the xxx and be a member of our xxx Team. <p>

You will be classified as an exempt/non-exempt employee. Your initial compensation package includes an annual salary of NT$10000 (payable biweekly), full medical and dental coverage through our company's employee benefit plan, and fringe benefits as covered in the enclosed benefit summary. 
<p>
In accepting our offer of employment, you certify your understanding that your employment will be on an at-will basis, and that neither yourself nor the Company has entered into a contract regarding the terms or the duration of your employment. As an at-will employee, you will be free to terminate your employment with the Company at any time, with or without cause or advance notice. Likewise, the Company will have the right to reassign you, to change your compensation, or to terminate your employment at any time, with or without cause or advance notice. 
<p>
We look forward to your arrival at our company and are confident that you will play a key role in our company's growth. Please let me know if you have any questions or if I can do anything to make your arrival easier. 

<p>
<p>
_________________________ 
<p>
SuperERP Company, Inc.

"; //邮件内容

if (!$mail->Send()) {
    echo "邮件发送失败. <p>";
    echo "错误原因: " . $mail->ErrorInfo;
    exit;
}
echo "邮件发送成功";
?>