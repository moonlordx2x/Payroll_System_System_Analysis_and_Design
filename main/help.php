<?php include '../function/session.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Global Vision Events and marketing Inc.</title>
	<?php include 'bootstrap_admin.php'; ?>
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<style type="text/css">
		#sam{
			height: 20px;
			width: 20px;
			position: relative;
			top: -1px;
		}
		#try{
			height: 500px;
			width: 750px;
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
	<li><center><h4>Help Desk DASHBOARD</h4></center></li>
		<li><a href="#1">Salary Deduction and Taxes</a></li>
		<li><a href="#2">Record</a></li>
		<li><a href="#3">Add Employee</a></li>
		<li><a href="salary.php">Return</a></li>
	</ul>
</div>
</div>

<div class="panel-group" id="body">
	<div class="panel panel-primary" id="1">
		<div class="panel-heading"><h4>Salary Deduction and Taxes <strong>Help</strong></h4></div>
		<div class="panel-body">
			<h4>Salary Deduction and Taxes</h4>
			<p>This will help how to navigate the <strong>Salary Deduction and Taxes</strong><br> each button, searchbox , records and etc have different function and use </p>
			<img src="../images/sam.png" id="try">
			<br><br><br>
<p><strong>1.Report Button -</strong>This button will proceed to <strong>Payroll</strong> and Previous transaction.</p>
			<img src="../images/sam1.png" id="try"><br><br><br>
<p><strong>2.Payroll - </strong>This part of the system will compute the Gross income of the employee base on the Total Days of work multiplied by the Day per-rate , the system will compute the Total Deduction from each benefit of the employee , and the system will compute the Net Income base on the difference of Gross Income and Total Deduction.</p>
			<img src="../images/sam2.png" id="try"><br><br><br>
<p><strong>3.Record Button -</strong>This button will view the previous transaction of the employee</p>
			<img src="../images/sam3.png" id="try"><br><br><br>
		<p>Previous Transaction Record of the Employee</p>	
			<img src="../images/sam4.png" id="try">
			<br><br>
		<p>To See the Full Transaction Record of the Employee press Full Report</p>	
			<img src="../images/sam6.png" id="try">
			<br><br>
		<p>Full Transaction Record of the Employee press print payslip to print the record.</p>	
			<img src="../images/sam7.png" id="try">
			<br><br><br>
<p><strong>4.Search Box -</strong>This will help to locate easily the record of the employee. They are 2 ways to locate the employees record either the Employees ID number or Employees Last Name.</p>
			<img src="../images/sam5.png" id="try"><br><br><br>
		</div>
	</div>
</div>

<div class="panel-group" id="body">
	<div class="panel panel-primary" id="2">
		<div class="panel-heading"><h4>Record</h4></div>
		<div class="panel-body">
<h4>Record</h4>
<p>This will help how to navigate the <strong>Record</strong><br> each button, searchbox , records and etc have different function and use </p>
<img src="../images/rec.png" id="try"><br><br><br>
<p><strong>1.Update Button -</strong>This button will proceed to update employees record.</p>
			<img src="../images/rec1.png" id="try"><br><br>
<p>This is the Update Employees Record</p>
			<img src="../images/rec2.png" id="try">
			<br><br><br>
<p><strong>2.Remove Button -</strong>This button will proceed to remove the employees record.</p>
			<img src="../images/rec3.png" id="try"><br><br><br>
<p><strong>3.Search Box -</strong>This will help to locate easily the record of the employee. They are 2 ways to locate the employees record either the Employees ID number or Employees Last Name.</p>
			<img src="../images/rec4.png" id="try"><br><br>
		</div>
	</div>
</div>

<div class="panel-group" id="body">
	<div class="panel panel-primary" id="3">
		<div class="panel-heading"><h4>Add Employee</h4></div>
		<div class="panel-body">
<h4>Add Employee</h4>
<p>This will help how to navigate the <strong>Add Employee</strong><br> each button, searchbox , records and etc have different function and use </p>
<img src="../images/joy.png" id="try"><br><br><br>
<p><strong>1.Fill up the Form -</strong>This will add new employee after filling up the form .</p>
			<img src="../images/joy1.png" id="try"><br><br>
<p>Add employee button - will add the new employee base on the given data from the form</p>
			<img src="../images/joy2.png" id="try"><br><br>		
		</div>
	</div>
</div>


</div>
</body>
</html>