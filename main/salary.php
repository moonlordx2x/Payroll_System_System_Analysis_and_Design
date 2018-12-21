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
		<h4>HELLO ADMIN &nbsp&nbsp<a href="../function/logout.php">LOGOUT</a></h4></center>
<br>
<div id="sidebar"><br>
	<ul class="nav nav-pills nav-stacked">
		<li><center><h4>DASHBOARD</h4></center></li>
		<li class="active"><a href="#">Salary Deduction and Taxes</a></li>
		<li><a href="home.php">List of Employee</a></li>
		<li><a href="add_employee.php">Add Employee</a></li>
		<li><a href="report.php">Payroll Report</a></li><br><br><br><br><br><br>
		<li><a href="help.php">Help <img src="../images/aw.ico" id="sam"></a></li>
	</ul>
</div>
</div>

<div class="panel-group" id="body">
	<div class="panel panel-primary">
		<div class="panel-heading"><h4>Global Vision Events and Marketing Inc. Employees Report</h4>
					<form method="POST" autocomplete="off">
						<div class="form-group">
							<input type="text" name="search" class="form-control" placeholder="search" id="search"><br>
							<button type="submit" class="btn btn-warning" name="submit" id="searchbtn">
							<span class="glyphicon glyphicon-search">Search</span>
						</button>

						<button type="submit" name="submit1" class="btn btn-danger" id="searchbtn">
							<span class="glyphicon glyphicon-refresh">Viewall</span>
						</button>
						</div>
					</form>
		</div>
		<div class="panel-body" id="cool2">
			<table class="table table-hover" id="cool">
			<thead>
				<tr>
					<th>Employees ID</th>
					<th>Lastname</th>
					<th>Firstname</th>
					<th>Middlename</th>
					<th>Gender</th>
					<th><center>Action</center></th>
				</tr>
			</thead>
<?php 

require '../connect/connection.php';
/*
$sql2 = "SELECT * FROM employee group by ID_NUM order by ID_NUM";
$result2 = mysqli_query($connect,$sql2);
if (mysqli_num_rows($result2) > 0) {
	while ($row2 = mysqli_fetch_assoc($result2)){
		echo "<tr>";
		echo "<td>".$row2['ID_NUM']."</td>";
		echo "<td>".$row2['Last_name']."</td>";
		echo "<td>".$row2['First_name']."</td>";
		echo "<td>".$row2['mid_name']."</td>";
		echo "<td><a href=../compute/compute.php?ID_NUM=".$row2['ID_NUM']."><button type='button' class='btn btn-primary'>Report</button></a></td>";
		echo "</tr>";
	}
}
*/

if (isset($_POST['submit'])) {
$search = $_POST['search'];
$sql2 = "SELECT * FROM employee where ID_NUM like '%$search%' or Last_name like '$search%'";
$result2 = mysqli_query($connect,$sql2);
@$town = mysqli_num_rows($result2);
if ($town >= 1) {
	while ($row2 = mysqli_fetch_assoc($result2)){
		echo "<tr>";
		echo "<td>".$row2['ID_NUM']."</td>";
		echo "<td>".$row2['Last_name']."</td>";
		echo "<td>".$row2['First_name']."</td>";
		echo "<td>".$row2['mid_name']."</td>";
		echo "<td>".$row2['gender']."</td>";
		echo "<td><a href=../compute/compute.php?ID_NUM=".$row2['ID_NUM']."><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-stats'>  REPORT</span></button></a></td>";
		echo "</tr>";
	}
}else{
	echo "<div class='alert alert-danger'>";
	echo "<strong>No Match</strong>";
	echo "</div>";
}
}
elseif (isset($_POST['submit1'])) {
$sql = "SELECT * FROM employee group by ID_NUM order by ID_NUM";
$result = mysqli_query($connect,$sql);
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row['ID_NUM']."</td>";
		echo "<td>".$row['Last_name']."</td>";
		echo "<td>".$row['First_name']."</td>";
		echo "<td>".$row['mid_name']."</td>";
		echo "<td>".$row['gender']."</td>";
		echo "<td><a href=../compute/compute.php?ID_NUM=".$row['ID_NUM']."><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-stats'>  REPORT</span></button></a></td>";
		echo "</tr>";
	}
}
}
else{
$sql3 = "SELECT * FROM employee group by ID_NUM order by ID_NUM";
$result3 = mysqli_query($connect,$sql3);
if (mysqli_num_rows($result3) > 0) {
	while ($row3 = mysqli_fetch_assoc($result3)){
		echo "<tr>";
		echo "<td>".$row3['ID_NUM']."</td>";
		echo "<td>".$row3['Last_name']."</td>";
		echo "<td>".$row3['First_name']."</td>";
		echo "<td>".$row3['mid_name']."</td>";
		echo "<td>".$row3['gender']."</td>";
		echo "<td><a href=../compute/compute.php?ID_NUM=".$row3['ID_NUM']."><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-stats'>  REPORT</span></button></a></td>";
		echo "</tr>";
	}
}
}



?>	
			</table>
		</div>
	</div>
</div>

</div>
</body>
</html>