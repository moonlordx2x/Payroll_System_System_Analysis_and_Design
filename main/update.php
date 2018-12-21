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

<div class="panel-group" id="body1">
	<div class="panel panel-primary">
		<div class="panel-heading"><h4>Update <?php Echo $_GET['ID_NUM'] ?></h4></div>
		<div class="panel-body">
		<form method="POST" class="form-horizontal" autocomplete="off">
			<?php 

require '../connect/connection.php';
$id = $_GET['ID_NUM'];
$sql = "SELECT * FROM employee where ID_NUM = $id";
$result = mysqli_query($connect,$sql);
$quick = mysqli_num_rows($result);
if ($quick == 1) {
	while ($row = mysqli_fetch_assoc($result)) {
		$last = $row['Last_name'];
		$first = $row['First_name'];
		$mid = $row['mid_name'];
		$age = $row['age'];
		$gender = $row['gender'];
		$day = $row['birthday'];
		$address = $row['address'];
		$select = $row['status'];
	}
}

?>
<div class="form-group">
	<label class="control-label col-sm-3">Last Name:</label>
<div class="col-sm-8"><input type="text" name="lname" value="<?=$last?>" class="form-control" required></div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3">First Name:</label>
	<div class="col-sm-8"><input type="text" name="fname" value="<?=$first?>" class="form-control" required></div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3">Middle Name:</label>
	<div class="col-sm-8"><input type="text" name="mid" value="<?=$mid?>" class="form-control" required></div>
</div>
<div class="form-group">
	<label class="control-label col-sm-3">Status</label>
	<div class="col-sm-8">
		<select class="form-control" name="select" required>
		<!--	<option></option>
			<option value="Single">Single</option>
			<option value="Married">Married</option>
			<option value="Single1">Single w/1 Dependent</option>
			<option value="Single2">Single w/2 Dependent</option>
			<option value="Single3">Single w/3 Dependent</option>
			<option value="Single4">Single w/4 Dependent</option>
			<option value="Married1">Married w/1 Dependent</option>
			<option value="Married2">Married w/2 Dependent</option>
			<option value="Married3">Married w/3 Dependent</option>
			<option value="Married4">Married w/4 Dependent</option>
		</select>
	-->
<?php if ($select=="Single")  {echo "<option selected value='Single'>Single</option>";}else{echo "<option value='Single'>Single</option>";}?>
<?php if ($select=="Married") {echo "<<option selected value='Married'>Married</option>";}else{echo "<option value='Married'>Married</option>";}?>
<?php if ($select=="Single w/1 Dependent") {echo "<<option selected value='Single w/1 Dependent'>Single w/1 Dependent</option>";}else{echo "<option value='Single w/1 Dependent'>Single w/1 Dependent</option>";}?>
<?php if ($select=="Single w/2 Dependent") {echo "<<option selected value='Single w/2 Dependent'>Single w/2 Dependent</option>";}else{echo "<option value='Single w/2 Dependent'>Single w/2 Dependent</option>";}?>
<?php if ($select=="Single w/3 Dependent") {echo "<<option selected value='Single w/3 Dependent'>Single w/3 Dependent</option>";}else{echo "<option value='Single w/3 Dependent'>Single w/3 Dependent</option>";}?>
<?php if ($select=="Single w/4 Dependent") {echo "<<option selected value='Single w/4 Dependent'>Single w/4 Dependent</option>";}else{echo "<option value='Single w/4 Dependent'>Single w/4 Dependent</option>";}?>
<?php if ($select=="Married w/1 Dependent") {echo "<<option selected value='Married w/1 Dependent'>Married w/1 Dependent</option>";}else{echo "<option value='Married w/1 Dependent'>Married w/1 Dependent</option>";}?>
<?php if ($select=="Married w/2 Dependent") {echo "<<option selected value='Married w/2 Dependent'>Married w/2 Dependent</option>";}else{echo "<option value='Married w/2 Dependent'>Married w/2 Dependent</option>";}?>
<?php if ($select=="Married w/3 Dependent") {echo "<<option selected value='Married w/3 Dependent'>Married w/3 Dependent</option>";}else{echo "<option value='Married w/3 Dependent'>Married w/3 Dependent</option>";}?>
<?php if ($select=="Married w/4 Dependent") {echo "<<option selected value='Married w/4 Dependent'>Married w/4 Dependent</option>";}else{echo "<option value='Married w/4 Dependent'>Married w/4 Dependent</option>";}?>





</select>
	</div>
</div>


<div class="form-group">
	<label class="control-label col-sm-3">Age:</label>
	<div class="col-sm-8"><input type="text" name="age" value="<?=$age?>" class="form-control" required></div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3">Gender:</label>
	<div class="col-sm-8">
	<div class="radio">
<?php 
if ($gender == 'Male') {
	echo "<label><input type=radio name=gender value=Male checked=checked required>Male</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	echo "<label><input type=radio name=gender value=Female required>Female</label>";
}else{
	echo "<label><input type=radio name=gender value=Male required>Male</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	echo "<label><input type=radio name=gender value=Female checked=checked required>Female</label>";
}

 ?>
		</div>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3">Birthday:</label>
	<div class="col-sm-8"><input type="date" name="birth" class="form-control" value="<?=$day?>" required></div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3">Address:</label>
	<div class="col-sm-8"><input type="text" name="address" class="form-control" value="<?=$address?>" required></div>
</div>

<div class="form-group">
<div class="col-sm-10">
	<input type="submit" name="submit" value="Update" class="btn btn-primary" id="button1">
	<a href="home.php"><input type="button" name="return" value="Return" class="btn btn-danger" id="button1"></a>
</div>
</div>

<?php
require '../connect/connection.php';
if (isset($_POST['submit'])) {
	$ids = $_GET['ID_NUM'];
	$lastname = $_POST['lname'];
	$firstname = $_POST['fname'];
	$middle = $_POST['mid'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$birth = $_POST['birth'];
	$address  = $_POST['address'];
	$select = $_POST['select'];

	$lname = ucfirst($lastname);
	$fname = ucwords($firstname);
	$mid = ucfirst($middle);
	$address = ucwords($address);

	$step = "UPDATE employee SET Last_name = '$lname',First_name = '$fname' , mid_name = '$mid' , age = '$age' , gender = '$gender' , birthday = '$birth' , address = '$address', status = '$select' where ID_NUM = '$ids'";
	$try = mysqli_query($connect,$step);
	if ($try) {
		//header("location:success.php");

		echo "<script>";
		echo "window.location = 'success.php'";
		echo "</script>";

	}
	else{
		echo "<div class='alert alert-danger'>
					<strong><center>Failed</center></strong>
		</div>";
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