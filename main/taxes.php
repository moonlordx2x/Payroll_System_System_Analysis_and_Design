<?php include '../function/session.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Global Vision Events and marketing Inc.</title>
	<?php include 'bootstrap_admin.php'; ?>
	<link rel="stylesheet" type="text/css" href="../css/home.css">
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
		<li><center><h4>DASHBOARD</h4></center></li>
		<li><a href="salary.php">Salary Deduction and Taxes</a></li>
		<li><a href="home.php">Overview</a></li>
		<li><a href="add_employee.php">Add Employee</a></li><br>
		<li class="active"><a href="#">Daily Activity Report</a></li><br>
	</ul>
</div>
</div>

</div>
</body>
</html>