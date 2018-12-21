<?php include '../function/session.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Global Vision Events and marketing Inc.</title>
	<?php include 'bootstrap_compute.php'; ?>
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<style type="text/css">
		strong.ids{text-transform: uppercase;}
		#select{
			width: 250px;
			position: relative;
			left: 55px;
			top: -30px;
		}
	</style>
</head>
<body id="back">
<div class="panel-group" id="top">
		<div class="panel panel-primary"  id="size">
			<div class="panel-heading" id="size">
			<h4>Global Vision Events and marketing Inc. Payroll System</h4>
			</div>
		</div>
</div>

<div class="container">
<div class="sidebar">
<center><img src="../images/login_lock.png" class="img-circle" width="150" height="150"><br>
		<h4>HELLO ADMIN &nbsp&nbsp<a href="../function/logout.php">LOGOUT</a></h4></center>
<br>
<div id="sidebar"><br>
	<ul class="nav nav-pills nav-stacked">
		<li><center><h4>DASHBOARD</h4></center></li><br>
		<li class="active"><a href="#">Report</a></li>
		<li><a href="../main/salary.php">Return</a></li>
	</ul>
</div>
</div>
<?php 
require '../connect/connection.php';
if (isset($_GET['ID_NUM'])) {
	$ID_NUM = $_GET['ID_NUM'];
	$_SESSION['id'] = $ID_NUM;
	$sql = "SELECT * FROM employee WHERE ID_NUM = $ID_NUM;";
	$result = mysqli_query($connect,$sql);
	$test = mysqli_num_rows($result);
	if ($test == 1) {
		while ($row = mysqli_fetch_assoc($result)) {
			$lname = $row['Last_name'];
			$fname = $row['First_name'];
			$mid   = $row['mid_name'];
			$status = $row['status'];
		}
	}

}
if (isset($_POST['submit'])) {
	$render = $_POST['day_render'];
	$rate = $_POST['day'];

	$totalday = $render * $rate;
	if 	   ($totalday <=1499 && $totalday >=1000) {$sss = "36.30"; $phil ="100.00";}
	elseif ($totalday <=1999 && $totalday >=1500) {$sss = "54.50"; $phil ="100.00";}
	elseif ($totalday <=2499 && $totalday >=2000) {$sss = "72.70"; $phil ="100.00";}
	elseif ($totalday <=2999 && $totalday >=2500) {$sss = "90.80"; $phil ="100.00";}
	elseif ($totalday <=3499 && $totalday >=3000) {$sss = "109.00";$phil ="100.00";}
	elseif ($totalday <=3999 && $totalday >=3500) {$sss = "127.20";$phil ="100.00";}
	elseif ($totalday <=4499 && $totalday >=4000) {$sss = "145.30";$phil ="100.00";}
	elseif ($totalday <=4999 && $totalday >=4500) {$sss = "163.50";$phil ="100.00";}
	elseif ($totalday <=5499 && $totalday >=5000) {$sss = "181.70";$phil ="100.00";}
	elseif ($totalday <=5999 && $totalday >=5500) {$sss = "199.80";$phil ="100.00";}
	elseif ($totalday <=6499 && $totalday >=6000) {$sss = "218.00";$phil ="100.00";}
	elseif ($totalday <=6999 && $totalday >=6500) {$sss = "236.20";$phil ="100.00";}
	elseif ($totalday <=7499 && $totalday >=7000) {$sss = "254.30";$phil ="100.00";}
	elseif ($totalday <=7999 && $totalday >=7500) {$sss = "272.50";$phil ="100.00";}
	elseif ($totalday <=8499 && $totalday >=8000) {$sss = "290.70";$phil ="100.00";}
	elseif ($totalday <=8999 && $totalday >=8500) {$sss = "308.80";$phil ="100.00";}
	elseif ($totalday <=9499 && $totalday >=9000) {$sss = "327.00";$phil ="112.50";}
	elseif ($totalday <=9999 && $totalday >=9500) {$sss = "345.20";$phil ="112.50";}
	elseif ($totalday <=10499 && $totalday >=10000) {$sss = "363.30";$phil ="125.00";}
	elseif ($totalday <=10999 && $totalday >=10500) {$sss = "381.50";$phil ="125.00";}
	elseif ($totalday <=11499 && $totalday >=11000) {$sss = "399.70";$phil ="137.50";}
	elseif ($totalday <=11999 && $totalday >=11500) {$sss = "417.80";$phil ="137.50";}
	elseif ($totalday <=12499 && $totalday >=12000) {$sss = "436.00";$phil ="150.00";}
	elseif ($totalday <=12999 && $totalday >=12500) {$sss = "454.20";$phil ="150.00";}
	elseif ($totalday <=13499 && $totalday >=13000) {$sss = "472.30";$phil ="162.50";}
	elseif ($totalday <=13999 && $totalday >=13500) {$sss = "490.50";$phil ="162.50";}
	elseif ($totalday <=14499 && $totalday >=14000) {$sss = "508.70";$phil ="175.00";}
	elseif ($totalday <=14999 && $totalday >=14500) {$sss = "526.80";$phil ="175.00";}
	elseif ($totalday <=15499 && $totalday >=15000) {$sss = "545.00";$phil ="187.50";}
	elseif ($totalday <=15999 && $totalday >=15500) {$sss = "563.20";$phil ="187.50";}
	elseif ($totalday <=16999 && $totalday >=16000) {$sss = "581.30";$phil ="200.00";}
	elseif ($totalday <=17999 && $totalday >=17000) {$sss = "581.30";$phil ="212.50";}
	elseif ($totalday <=18999 && $totalday >=18000) {$sss = "581.30";$phil ="225.00";}
	elseif ($totalday <=19999 && $totalday >=19000) {$sss = "581.30";$phil ="237.50";}
	elseif ($totalday <=20999 && $totalday >=20000) {$sss = "581.30";$phil ="250.00";}
	elseif ($totalday <=21999 && $totalday >=21000) {$sss = "581.30";$phil ="262.50";}
	elseif ($totalday <=22999 && $totalday >=22000) {$sss = "581.30";$phil ="275.00";}
	elseif ($totalday <=23999 && $totalday >=23000) {$sss = "581.30";$phil ="287.50";}
	elseif ($totalday <=24999 && $totalday >=24000) {$sss = "581.30";$phil ="300.00";}
	elseif ($totalday <=25999 && $totalday >=25000) {$sss = "581.30";$phil ="312.50";}
	elseif ($totalday <=26999 && $totalday >=26000) {$sss = "581.30";$phil ="325.00";}
	elseif ($totalday <=27999 && $totalday >=27000) {$sss = "581.30";$phil ="337.50";}
	elseif ($totalday <=28999 && $totalday >=28000) {$sss = "581.30";$phil ="350.00";}
	elseif ($totalday <=29999 && $totalday >=29000) {$sss = "581.30";$phil ="362.50";}
	elseif ($totalday <=30999 && $totalday >=30000) {$sss = "581.30";$phil ="375.00";}
	elseif ($totalday <=31999 && $totalday >=31000) {$sss = "581.30";$phil ="387.50";}
	elseif ($totalday <=32999 && $totalday >=32000) {$sss = "581.30";$phil ="400.00";}
	elseif ($totalday <=33999 && $totalday >=33000) {$sss = "581.30";$phil ="412.50";}
	elseif ($totalday <=34999 && $totalday >=34000) {$sss = "581.30";$phil ="425.00";}
	elseif ($totalday >=35000) {$sss = "581.30";$phil ="437.50";}

	$tax = 0;
	$sss = $sss / 2;
	$ibig = 50;
	$phil = $phil / 2;

	$solution1 = $sss + $ibig + $phil;
	$solution2 = $totalday - $solution1;

	if ($status == 'Single' || $status=='Married') {
		if ($solution2 <= 7916 && $solution2 >=5000){
			$exam = $solution2 - 5000;
			$exam1 = $exam * .20;
			$tax = $exam1 + 354.17;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2 <= 4999 && $solution2>=3333){
			$exam = $solution2 - 3333;
			$exam1 = $exam * .15;
			$tax = $exam1 + 104.17;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2 <= 12499 && $solution2>=7917){
			$exam = $solution2 - 7917;
			$exam1 = $exam * .25;
			$tax = $exam1 + 937.50;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2 <= 22916 && $solution2>=12500){
			$exam = $solution2 - 12500;
			$exam1 = $exam * .30;
			$tax = $exam1 + 2083.33;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2>=22917){
			$exam = $solution2 - 22917;
			$exam1 = $exam * .32;
			$tax = $exam1 + 5208.33;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif($solution2 <= 3332 && $solution2 >=2500){
			$exam = $solution2 - 2500;
			$exam1 = $exam * .10;
			$tax = $exam1 + 20.83;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif($solution2 <= 2499 && $solution2 >=2083){
			$exam = $solution2 - 2083;
			$exam1 = $exam * .05;
			$tax = $exam1 + 0;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif($solution2 <=2082){
			$exam = $solution2 - 0;
			$exam1 = $exam;
			$tax = $exam1 + 0;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
	}

	elseif ($status == 'Single w/1 Dependent' || $status=='Married w/1 Dependent') {
		if ($solution2 <= 8957 && $solution2 >=6042){
			$exam = $solution2 - 6042;
			$exam1 = $exam * .20;
			$tax = $exam1 + 354.17;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2 <= 6041 && $solution2>=4375){
			$exam = $solution2 - 4375;
			$exam1 = $exam * .15;
			$tax = $exam1 + 104.17;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2 <= 13541 && $solution2>=8958){
			$exam = $solution2 - 8958;
			$exam1 = $exam * .25;
			$tax = $exam1 + 937.50;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2 <= 23957 && $solution2>=13542){
			$exam = $solution2 - 13542;
			$exam1 = $exam * .30;
			$tax = $exam1 + 2083.33;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2>=23958){
			$exam = $solution2 - 23958;
			$exam1 = $exam * .32;
			$tax = $exam1 + 5208.33;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif($solution2 <=4374 && $solution2 >=3542){
			$exam = $solution2 - 3542;
			$exam1 = $exam * .10;
			$tax = $exam1 + 20.83;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif($solution2 <= 3541 && $solution2 >=3125){
			$exam = $solution2 - 3125;
			$exam1 = $exam * .05;
			$tax = $exam1 + 0;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif($solution2 <=3124){
			$exam = $solution2 - 0;
			$exam1 = $exam;
			$tax = $exam1 + 0;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
	}

	elseif ($status == 'Single w/2 Dependent' || $status=='Married w/2 Dependent') {
		if ($solution2 <=9999 && $solution2 >=7083){
			$exam = $solution2 - 7083;
			$exam1 = $exam * .20;
			$tax = $exam1 + 354.17;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2 <= 7082 && $solution2>=5417){
			$exam = $solution2 - 5417;
			$exam1 = $exam * .15;
			$tax = $exam1 + 104.17;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2 <= 14582 && $solution2>=10000){
			$exam = $solution2 - 10000;
			$exam1 = $exam * .25;
			$tax = $exam1 + 937.50;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2 <= 24999 && $solution2>=14583){
			$exam = $solution2 - 14583;
			$exam1 = $exam * .30;
			$tax = $exam1 + 2083.33;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2>=25000){
			$exam = $solution2 - 25000;
			$exam1 = $exam * .32;
			$tax = $exam1 + 5208.33;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif($solution2 <=5416 && $solution2 >=4583){
			$exam = $solution2 - 4583;
			$exam1 = $exam * .10;
			$tax = $exam1 + 20.83;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif($solution2 <= 4582 && $solution2 >=4167){
			$exam = $solution2 - 4167;
			$exam1 = $exam * .05;
			$tax = $exam1 + 0;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif($solution2 <=4166){
			$exam = $solution2 - 0;
			$exam1 = $exam ;
			$tax = $exam1 + 0;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
	}

	elseif ($status == 'Single w/3 Dependent' || $status=='Married w/3 Dependent') {
		if ($solution2 <=11041 && $solution2 >=8125){
			$exam = $solution2 - 8125;
			$exam1 = $exam * .20;
			$tax = $exam1 + 354.17;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2 <=8124 && $solution2>=6458){
			$exam = $solution2 - 6458;
			$exam1 = $exam * .15;
			$tax = $exam1 + 104.17;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2 <= 15624 && $solution2>=11042){
			$exam = $solution2 - 11042;
			$exam1 = $exam * .25;
			$tax = $exam1 + 937.50;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2 <= 26041 && $solution2>=15625){
			$exam = $solution2 - 14583;
			$exam1 = $exam * .30;
			$tax = $exam1 + 2083.33;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2>=26042){
			$exam = $solution2 - 26042;
			$exam1 = $exam * .32;
			$tax = $exam1 + 5208.33;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif($solution2 <=6457 && $solution2 >=5625){
			$exam = $solution2 - 5625;
			$exam1 = $exam * .10;
			$tax = $exam1 + 20.83;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif($solution2 <= 5624 && $solution2 >=5208){
			$exam = $solution2 - 4167;
			$exam1 = $exam * .05;
			$tax = $exam1 + 0;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif($solution2 <=5207){
			$exam = $solution2 -0;
			$exam1 = $exam;
			$tax = $exam1 + 0;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
	}

	elseif ($status == 'Single w/4 Dependent' || $status=='Married w/4 Dependent') {
		if ($solution2 <=12082 && $solution2 >=9167){
			$exam = $solution2 - 9167;
			$exam1 = $exam * .20;
			$tax = $exam1 + 354.17;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2 <=9166 && $solution2>=7500){
			$exam = $solution2 - 7500;
			$exam1 = $exam * .15;
			$tax = $exam1 + 104.17;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2 <= 16666 && $solution2>=12083){
			$exam = $solution2 - 12083;
			$exam1 = $exam * .25;
			$tax = $exam1 + 937.50;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2 <= 27062 && $solution2>=16667){
			$exam = $solution2 - 16667;
			$exam1 = $exam * .30;
			$tax = $exam1 + 2083.33;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif ($solution2>=27083){
			$exam = $solution2 - 27083;
			$exam1 = $exam * .32;
			$tax = $exam1 + 5208.33;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif($solution2 <=7499 && $solution2 >=6667){
			$exam = $solution2 - 6667;
			$exam1 = $exam * .10;
			$tax = $exam1 + 20.83;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif($solution2 <= 6666 && $solution2 >=6250){
			$exam = $solution2 - 4167;
			$exam1 = $exam * .05;
			$tax = $exam1 + 0;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
		elseif($solution2 <=6249){
			$exam = $solution2 - 0;
			$exam1 = $exam;
			$tax = $exam1 + 0;
			$totaldeduct = $sss + $ibig + $tax + $phil;
			$netincome = $totalday - $totaldeduct;
		}
	}


	date_default_timezone_set("Asia/Manila");
	$time = date("Y-m-d");
	$time2 = date("Y-m-d h:i:sA");

$sql2 = "CREATE TABLE `$ID_NUM`(
list int(10) AUTO_INCREMENT PRIMARY KEY,
id   int(8),
gross float(8),
total float(8),
net   float(8),
date_time varchar(30),
work  int(8),
rate  int(8),
sss   float(8),
ibig  float(8),
tax   float(8),
phil  float(8),
lname varchar(30),
fname varchar(30),
mid   varchar(30),
local varchar(30) Unique
)";
$result2 = mysqli_query($connect,$sql2);

	$compute = "INSERT INTO `$ID_NUM`(id,gross,total,net,date_time,work,rate,sss,ibig,tax,phil,lname,fname,mid,local) VALUES
	('$ID_NUM','$totalday','$totaldeduct','$netincome','$time2','$render','$rate','$sss','$ibig','$tax','$phil','$lname','$fname','$mid','$time')";
	$computeresult = mysqli_query($connect,$compute);
	if ($computeresult) {
		//echo "<div id='sample' class='alert alert-success'><strong>Success</strong></div>";
		echo "<div class='panel-group' id='sample'>";
		echo "<div id='sample' class='alert alert-success'><strong>Success</strong></div>";
		echo "</div>";
	}
}
else{
	$sss = 0;
	$ibig = 0;
	$tax = 0;
	$phil = 0;
	$totalday = 0;
	$totaldeduct = 0;
	$netincome = 0;
}
?>
<div class="panel-group" id="body">
	<div class="panel panel-primary">
		<div class="panel-heading">
		<h4>Semi-Monthly Report</h4>
		</div>
			<div class="panel-body">
			<form method="POST" autocomplete="off">
<?php 
echo "<a href='detail.php?ID_NUM=".$_GET['ID_NUM']."'><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-folder-open'> Record</span></button></a>";
?>
&nbsp&nbsp&nbsp&nbsp
 	<label><strong>Employees ID:&nbsp&nbsp&nbsp<?php echo $ID_NUM;?></strong></label>
<div class="form-group" id="rec1"><label id="label1"><strong>Total Days Work &#8369;:</strong></label>
<?php 

date_default_timezone_set("Asia/Manila");
$blog = date("Y-m-d");

$sam = "SELECT * FROM `$ID_NUM` where local='$blog'";
$sam2 = mysqli_query($connect,$sam);
@$test1 = mysqli_num_rows($sam2);




if($test1 == 0){echo "<input id='form1' type='number' step='0.1'  name='day_render' max='12' min='7' class='form-control' placeholder='Total Days Work' required></div>";}
elseif ($test1 >=0) {
while ($test2 =mysqli_fetch_assoc($sam2)) {
	if ($test2['local'] == $blog) {
echo "<input id='form1' readonly type='number' step='0.1'  name='day_render' max='12' min='7' class='form-control' placeholder='Total Days Work'></div>";
	}
	elseif($test2['local'] != $blog){
		echo "<input id='form1' type='number' step='0.1'  name='day_render' max='12' min='7' class='form-control' placeholder='Total Days Work' required></div>";
	}
}
}
?>


 <br><br><label><strong>Employess Name:&nbsp&nbsp&nbsp<?php echo "$fname $mid $lname"; ?></strong></label>
<div class="form-group" id="rec2"><label id="label2"><strong>Day per-rate &#8369;: </strong></label>
	<?php
date_default_timezone_set("Asia/Manila");
$blog = date("Y-m-d");

$sam = "SELECT * FROM `$ID_NUM` where local='$blog'";
$sam2 = mysqli_query($connect,$sam);
@$test1 = mysqli_num_rows($sam2);


if($test1 == 0){echo "<input id='form2' type='text' name='day' class='form-control' placeholder='Day per-rate'></div><br>";}
elseif ($test1 >=0) {
while ($test2 =mysqli_fetch_assoc($sam2)) {
	if ($test2['local'] == $blog) {
echo "<input id='form2' type='text' readonly name='day' class='form-control' placeholder='Day per-rate'></div><br>";
	}
	elseif($test2['local'] != $blog){
		echo "<input id='form2' type='text' name='day' class='form-control' placeholder='Day per-rate'></div><br>";
	}
}
}
?>
<label><strong>Status : &nbsp<?=$status?></strong></label><br><br>
 <label><strong>DEDUCTION</strong></label><br>

<table id="table">
	<tr id="text">
	<div class="form-group">
		<td><label>SSS</label></td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		<td><input type="text" name="sss" value=<?php echo"&#8369;",@$sss; ?> readonly class="form-control"></td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		<td><label>PAG-IBIG</label></td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		<td><input id="deduct5" type="text" name="ibig" value=<?php echo"&#8369;",@$ibig; ?> readonly class="form-control"></td>
	</div>
	</tr>
	<tr><td><br></td></tr>

	<tr id="text">
	<div class="form-group">
		<td><label>TAX</label></td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		<td><input type="text" name="tax" value=<?php echo"&#8369;",@$tax; ?> readonly class="form-control"></td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		<td><label>PHIL HEALTH </label></td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		<td><input id="deduct5" type="text" name="phil" value=<?php echo"&#8369;",@$phil; ?> readonly class="form-control"></td>
	</div>
	</tr>
</table><br><br>

				
<label><strong>NET INCOME</strong></label><br>

<table id="table">
	<tr id="text">
	<div class="form-group">
		<td><label>GROSS INCOME</label></td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		<td><input type="text" readonly name="gross" placeholder="GROSS INCOME" value=<?php echo"&#8369;",$totalday; ?> class="form-control"></td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
<?php
date_default_timezone_set("Asia/Manila");
$blog = date("Y-m-d");

$sam = "SELECT * FROM `$ID_NUM` where local='$blog'";
$sam2 = mysqli_query($connect,$sam);
@$test1 = mysqli_num_rows($sam2);


if($test1 == 0){echo "<td><input id='deduct6' type='submit' name='submit' value='PROCEED / SAVE' class='btn btn-primary'></td>";}
elseif ($test1 >=0) {
while ($test2 =mysqli_fetch_assoc($sam2)) {
	if ($test2['local'] == $blog) {
echo "<td><input id='deduct6' type='button' name='submit' value='PROCEED / SAVE' class='btn btn-danger disabled'></td>";
	}
	elseif($test2['local'] != $blog){
		echo "<td><input id='deduct6' type='submit' name='submit' value='PROCEED / SAVE' class='btn btn-primary'></td>";
	}
}
}
?>
	</div>
	</tr>
	<tr><td><br></td></tr>

	<tr id="text">
	<div class="form-group">
		<td><label>TOTAL DEDUCTION</label></td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		<td><input type="text" readonly name="total" placeholder="TOTAL DEDUCTION" value=<?php echo"&#8369;",$totaldeduct; ?> class="form-control"></td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	</div>
	</tr><td><br></td></tr>

	<tr id="text">
	<div class="form-group">
		<td><label>NET INCOME</label></td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		<td><input type="text" readonly name="net" value=<?php echo"&#8369;",$netincome; ?> placeholder="NET INCOME" class="form-control"></td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	</div>
	</tr>
</table>
				</form>
		 </div>
	</div>
</div>

</div>
</body>
</html>