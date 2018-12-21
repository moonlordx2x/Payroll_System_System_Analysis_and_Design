<?php include '../function/session.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Global Vision Events and Marketing INC.</title>
	<?php include 'bootstrap_admin.php'; ?>
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<style type="text/css">
		#sam{
			height: 20px;
			width: 20px;
			position: relative;
			top: -1px;
		}
	</style>
</head>
<body id="back">
<div class="panel-group" id="top">
		<div class="panel panel-primary"  id="size">
			<div class="panel-heading" id="size">
			<h4>Global Vision Events and Marketing Inc. Payroll System</h4>
			</div>
		</div>
</div>
<div class="container">
<div class="sidebar">
	<center><img src="../images/login_lock.png" class="img-circle" width="150" height="150"><br>
			<h4>HELLO ADMIN &nbsp&nbsp<a href="../function/logout.php">LOGOUT</a></h4></center><br>

<div id="sidebar"><br>
	<ul class="nav nav-pills nav-stacked">
	<li><center><h4>DASHBOARD</h4></center></li>
			<li><a href="salary.php">Salary Deduction and Taxes</a></li>
			<li><a href="home.php">List of Employee</a></li>
			<li class="active"><a href="#">Add Employee</a>
			<li><a href="report.php">Payroll Report</a></li></li><br><br><br><br><br><br>
			<li><a href="help.php">Help <img src="../images/aw.ico" id="sam"></a></li>
			</ul>
</div></div>

<div class="panel-group" id="body">
	<div class="panel panel-primary">
		<div class="panel-heading"><h4>Global Vision Events and Marketing Inc. Add new Employee</h4></div>
		<div class="panel-body">
				<h4>Please Fill-Up</h4>
			<form method="POST" class="form-horizontal" autocomplete="off">
<!--
<div class="form-group">
<label class="control-label col-sm-3">Employee ID :</label>
<div class="col-sm-8"><input type="number" class="form-control" name="ID" placeholder="Employees ID Number" maxlength="8" required></div></div> -->

<div class="form-group">
	<label class="control-label col-sm-3">Last Name:</label>
<div class="col-sm-8"><input type="text" name="lname" placeholder="Lastname.." class="form-control" required></div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3">First Name:</label>
	<div class="col-sm-8"><input type="text" name="fname" placeholder="Firstname.." class="form-control" required></div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3">Middle Name:</label>
	<div class="col-sm-8"><input type="text" name="mid" placeholder="Middlename.." class="form-control" required></div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3">Status</label>
	<div class="col-sm-8">
		<select class="form-control" name="select" required>
			<option></option>
			<option value="Single">Single</option>
			<option value="Married">Married</option>
			<option value="Single w/1 Dependent">Single w/1 Dependent</option>
			<option value="Single w/2 Dependent">Single w/2 Dependent</option>
			<option value="Single w/3 Dependent">Single w/3 Dependent</option>
			<option value="Single w/4 Dependent">Single w/4 Dependent</option>
			<option value="Married w/1 Dependent">Married w/1 Dependent</option>
			<option value="Married w/2 Dependent">Married w/2 Dependent</option>
			<option value="Married w/3 Dependent">Married w/3 Dependent</option>
			<option value="Married w/4 Dependent">Married w/4 Dependent</option>
		</select>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3">Age:</label>
	<div class="col-sm-8"><input type="text" name="age" placeholder="Age.." class="form-control" required></div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3">Gender:</label>
	<div class="col-sm-8">
	<div class="radio"><label><input type="radio" name="gender" value="Male" required>Male</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					   <label><input type="radio" name="gender" value="Female" required>Female</label></div></div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3">Birthday:</label>
	<div class="col-sm-8"><input type="date" name="birth" class="form-control" required></div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3">Address:</label>
	<div class="col-sm-8"><input type="text" name="address" class="form-control" placeholder="Address.." required></div>
</div>
<div class="form-group">
<center>
			<a href="home.php"><input type="button" name="return" class="btn btn-danger" value="Cancel" id="button"></a>
			<input type="submit" name="submit" class="btn btn-primary" value="Add employee" id="button">
</center>
</div>

<?php 
require '../connect/connection.php';

if (isset($_POST['submit'])) {
//	$IDnum = '';
	$Last = $_POST['lname'];
	$First = $_POST['fname'];
	$middle = $_POST['mid'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$birth = $_POST['birth'];
	$address = $_POST['address'];
	$select = $_POST['select'];

	$Last = ucfirst($Last);
	$First = ucwords($First);
	$middle = ucfirst($middle);
	$address = ucwords($address);

$sql = "INSERT INTO employee(Last_name,First_name,mid_name,age,gender,birthday,address,status) VALUES('$Last','$First','$middle','$age','$gender','$birth','$address','$select')";
$result = mysqli_query($connect,$sql);
if (!$result) {
	echo "<div class='alert alert-danger'>";
	echo "<center><strong>Cannot be stored in database</strong></center>";
	echo "</div>";
}else{
	$last = mysqli_insert_id($connect);
	//header("location:try.php?sample=$last");
	echo "<script>";
	echo "window.location = 'try.php?sample=$last'";
	echo "</script>";
	//header("Location:try.php?sample=$last");
}

}

 ?>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>