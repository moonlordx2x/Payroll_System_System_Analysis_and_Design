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
		#id{
			width: 170px;
		}
		#word{
			width: 170px;
		}
		#body2{
	position: relative;
	top: 70px;
	left: 200px;
	width: 1050px;
}
#body3{
	overflow-y: auto;
	height: 520px;
}
th{
	font-size:12px; 
}

	</style>
</head>
<?php 
@$calendar = $_POST['calendar'];
@$filter = $_POST['filter'];
 ?>
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
			<li><a href="add_employee.php">Add Employee</a></li>
			<li class="active"><a href="report.php">Payroll Report</a></li><br><br><br><br><br><br>
			<li><a href="help.php">Help <img src="../images/aw.ico" id="sam"></a></li>
			</ul>
</div></div>

<div class="panel-group" id="body2">
	<div class="panel panel-primary">
		<div class="panel-heading"><h4>Global Vision Events and Marketing Inc. Payroll Report</h4></div>
		<div class="panel-body" id='body3'>
			<form method="POST" class="form-inline">
				<h4>SELECT DATE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFILTER</h4>
<div class="form-group">
	<label class="glyphicon glyphicon-calendar"></label>
 <input type="date" class="form-control" id="id" name="calendar" value="<?=$calendar?>">
</div>
<div class="form-group">
<label class="glyphicon glyphicon-list"></label>
 <select class="form-control" name="filter">
 <?php if ($filter == "View-all") {echo "<option selected>View-all</option>";}else{echo "<option>View-all</option>";}?>
 <?php if ($filter == "SSS") {echo "<option selected>SSS</option>";}else{echo "<option>SSS</option>";}?>
 <?php if ($filter == "Pag-Ibig") {echo "<option selected>Pag-Ibig</option>";}else{echo "<option>Pag-Ibig</option>";}?>
 <?php if ($filter == "Tax") {echo "<option selected>Tax</option>";}else{echo "<option>Tax</option>";}?>
 <?php if ($filter == "Phil-Health") {echo "<option selected>Phil-Health</option>";}else{echo "<option>Phil-Health</option>";}?>
 <?php if ($filter == "Gross Income") {echo "<option selected>Gross Income</option>";}else{echo "<option>Gross Income</option>";}?>
 <?php if ($filter == "Total Deduction") {echo "<option selected>Total Deduction</option>";}else{echo "<option>Total Deduction</option>";}?>
 <?php if ($filter == "Net Income") {echo "<option selected>Net Income</option>";}else{echo "<option>Net Income</option>";}?>
 </select>
</div>

	<input type="submit" name="submit" value="Proceed" class="btn btn-primary">
			</form>
<?php
require '../connect/connection.php';


if (isset($_POST['submit'])) {
$calendar = $_POST['calendar'];
$filter = $_POST['filter'];

if ($filter == 'View-all') {
	echo "<table class='table table-hover'>

	<thead>
		<th>ID_NUM</th>
		<th>Last Name</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Status</th>
		<th>SSS</th>
		<th>Pag-Ibig</th>
		<th>Tax</th>
		<th>Phil-Health</th>
		<th>Gross Income</th>
		<th>Total Deduction</th>
		<th>Net Income</th>
		<th>Transaction Date</th>
	</thead>";

	$sql = "SELECT * FROM employee order by ID_NUM";
	$result = mysqli_query($connect,$sql);
	if (mysqli_num_rows($result) >=0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['ID_NUM'];


			$table = "SELECT * FROM `$id` where id='$id'";
			@$table1 = mysqli_query($connect,$table);
			@$table2 = mysqli_num_rows($table1);
			if (@$table2 >=0) {
				while (@$row2 = mysqli_fetch_assoc($table1)) {
					$calendar2 = $row2['local'];


					if ($calendar == $calendar2) {

						echo "<tr>";
							echo "<td>".$row2['id']."</td>";
							echo "<td>".$row['Last_name']."</td>";
							echo "<td>".$row['First_name']."</td>";
							echo "<td>".$row['mid_name']."</td>";
							echo "<td>".$row['status']."</td>";
							echo "<td>&#8369;".$row2['sss']."</td>";
							echo "<td>&#8369;".$row2['ibig']."</td>";
							echo "<td>&#8369;".$row2['tax']."</td>";
							echo "<td>&#8369;".$row2['phil']."</td>";
							echo "<td>&#8369;".$row2['gross']."</td>";
							echo "<td>&#8369;".$row2['total']."</td>";
							echo "<td>&#8369;".$row2['net']."</td>";
							echo "<td>".$row2['date_time']."</td>";
						echo "</tr>";

					}
				}
			}
			 
		}
	}

echo "</table>";
}
elseif ($filter == 'SSS') {
echo "<table class='table table-hover'>

	<thead>
		<th>ID_NUM</th>
		<th>Last Name</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Status</th>
		<th>SSS</th>
		<th>Transaction Date</th>
	</thead>";

	$sql = "SELECT * FROM employee order by ID_NUM";
	$result = mysqli_query($connect,$sql);
	if (mysqli_num_rows($result) >=0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['ID_NUM'];


			$table = "SELECT * FROM `$id` where id='$id'";
			@$table1 = mysqli_query($connect,$table);
			@$table2 = mysqli_num_rows($table1);
			if (@$table2 >=0) {
				while (@$row2 = mysqli_fetch_assoc($table1)) {
					$calendar2 = $row2['local'];


					if ($calendar == $calendar2) {

						echo "<tr>";
							echo "<td>".$row2['id']."</td>";
							echo "<td>".$row['Last_name']."</td>";
							echo "<td>".$row['First_name']."</td>";
							echo "<td>".$row['mid_name']."</td>";
							echo "<td>".$row['status']."</td>";
							echo "<td>&#8369;".$row2['sss']."</td>";
							echo "<td>".$row2['date_time']."</td>";
						echo "</tr>";

					}
				}
			}
			 
		}
	}

echo "</table>";
}
elseif ($filter == 'Pag-Ibig') {
	echo "<table class='table table-hover'>

	<thead>
		<th>ID_NUM</th>
		<th>Last Name</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Status</th>
		<th>Pag-Ibig</th>
		<th>Transaction Date</th>
	</thead>";

	$sql = "SELECT * FROM employee order by ID_NUM";
	$result = mysqli_query($connect,$sql);
	if (mysqli_num_rows($result) >=0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['ID_NUM'];


			$table = "SELECT * FROM `$id` where id='$id'";
			@$table1 = mysqli_query($connect,$table);
			@$table2 = mysqli_num_rows($table1);
			if (@$table2 >=0) {
				while (@$row2 = mysqli_fetch_assoc($table1)) {
					$calendar2 = $row2['local'];


					if ($calendar == $calendar2) {

						echo "<tr>";
							echo "<td>".$row2['id']."</td>";
							echo "<td>".$row['Last_name']."</td>";
							echo "<td>".$row['First_name']."</td>";
							echo "<td>".$row['mid_name']."</td>";
							echo "<td>".$row['status']."</td>";
							echo "<td>&#8369;".$row2['ibig']."</td>";
							echo "<td>".$row2['date_time']."</td>";
						echo "</tr>";

					}
				}
			}
			 
		}
	}

echo "</table>";
}
elseif ($filter == 'Tax') {
	echo "<table class='table table-hover'>

	<thead>
		<th>ID_NUM</th>
		<th>Last Name</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Status</th>
		<th>Tax</th>
		<th>Transaction Date</th>
	</thead>";

	$sql = "SELECT * FROM employee order by ID_NUM";
	$result = mysqli_query($connect,$sql);
	if (mysqli_num_rows($result) >=0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['ID_NUM'];


			$table = "SELECT * FROM `$id` where id='$id'";
			@$table1 = mysqli_query($connect,$table);
			@$table2 = mysqli_num_rows($table1);
			if (@$table2 >=0) {
				while (@$row2 = mysqli_fetch_assoc($table1)) {
					$calendar2 = $row2['local'];


					if ($calendar == $calendar2) {

						echo "<tr>";
							echo "<td>".$row2['id']."</td>";
							echo "<td>".$row['Last_name']."</td>";
							echo "<td>".$row['First_name']."</td>";
							echo "<td>".$row['mid_name']."</td>";
							echo "<td>".$row['status']."</td>";
							echo "<td>&#8369;".$row2['tax']."</td>";
							echo "<td>".$row2['date_time']."</td>";
						echo "</tr>";

					}
				}
			}
			 
		}
	}

echo "</table>";
}
elseif ($filter == 'Phil-Health') {
	echo "<table class='table table-hover'>

	<thead>
		<th>ID_NUM</th>
		<th>Last Name</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Status</th>
		<th>Phil-Health</th>
		<th>Transaction Date</th>
	</thead>";

	$sql = "SELECT * FROM employee order by ID_NUM";
	$result = mysqli_query($connect,$sql);
	if (mysqli_num_rows($result) >=0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['ID_NUM'];


			$table = "SELECT * FROM `$id` where id='$id'";
			@$table1 = mysqli_query($connect,$table);
			@$table2 = mysqli_num_rows($table1);
			if (@$table2 >=0) {
				while (@$row2 = mysqli_fetch_assoc($table1)) {
					$calendar2 = $row2['local'];


					if ($calendar == $calendar2) {

						echo "<tr>";
							echo "<td>".$row2['id']."</td>";
							echo "<td>".$row['Last_name']."</td>";
							echo "<td>".$row['First_name']."</td>";
							echo "<td>".$row['mid_name']."</td>";
							echo "<td>".$row['status']."</td>";
							echo "<td>&#8369;".$row2['phil']."</td>";
							echo "<td>".$row2['date_time']."</td>";
						echo "</tr>";

					}
				}
			}
			 
		}
	}

echo "</table>";
}
elseif ($filter == 'Gross Income') {
	echo "<table class='table table-hover'>

	<thead>
		<th>ID_NUM</th>
		<th>Last Name</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Status</th>
		<th>Gross Income</th>
		<th>Transaction Date</th>
	</thead>";

	$sql = "SELECT * FROM employee order by ID_NUM";
	$result = mysqli_query($connect,$sql);
	if (mysqli_num_rows($result) >=0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['ID_NUM'];


			$table = "SELECT * FROM `$id` where id='$id'";
			@$table1 = mysqli_query($connect,$table);
			@$table2 = mysqli_num_rows($table1);
			if (@$table2 >=0) {
				while (@$row2 = mysqli_fetch_assoc($table1)) {
					$calendar2 = $row2['local'];


					if ($calendar == $calendar2) {

						echo "<tr>";
							echo "<td>".$row2['id']."</td>";
							echo "<td>".$row['Last_name']."</td>";
							echo "<td>".$row['First_name']."</td>";
							echo "<td>".$row['mid_name']."</td>";
							echo "<td>".$row['status']."</td>";
							echo "<td>&#8369;".$row2['gross']."</td>";
							echo "<td>".$row2['date_time']."</td>";
						echo "</tr>";

					}
				}
			}
			 
		}
	}

echo "</table>";
}
elseif ($filter == 'Total Deduction') {
	echo "<table class='table table-hover'>

	<thead>
		<th>ID_NUM</th>
		<th>Last Name</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Status</th>
		<th>Total Deduction</th>
		<th>Transaction Date</th>
	</thead>";

	$sql = "SELECT * FROM employee order by ID_NUM";
	$result = mysqli_query($connect,$sql);
	if (mysqli_num_rows($result) >=0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['ID_NUM'];


			$table = "SELECT * FROM `$id` where id='$id'";
			@$table1 = mysqli_query($connect,$table);
			@$table2 = mysqli_num_rows($table1);
			if (@$table2 >=0) {
				while (@$row2 = mysqli_fetch_assoc($table1)) {
					$calendar2 = $row2['local'];


					if ($calendar == $calendar2) {

						echo "<tr>";
							echo "<td>".$row2['id']."</td>";
							echo "<td>".$row['Last_name']."</td>";
							echo "<td>".$row['First_name']."</td>";
							echo "<td>".$row['mid_name']."</td>";
							echo "<td>".$row['status']."</td>";
							echo "<td>&#8369;".$row2['total']."</td>";
							echo "<td>".$row2['date_time']."</td>";
						echo "</tr>";

					}
				}
			}
			 
		}
	}

echo "</table>";
}
elseif ($filter == 'Net Income') {
	echo "<table class='table table-hover'>

	<thead>
		<th>ID_NUM</th>
		<th>Last Name</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Status</th>
		<th>Net Income</th>
		<th>Transaction Date</th>
	</thead>";

	$sql = "SELECT * FROM employee order by ID_NUM";
	$result = mysqli_query($connect,$sql);
	if (mysqli_num_rows($result) >=0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['ID_NUM'];


			$table = "SELECT * FROM `$id` where id='$id'";
			@$table1 = mysqli_query($connect,$table);
			@$table2 = mysqli_num_rows($table1);
			if (@$table2 >=0) {
				while (@$row2 = mysqli_fetch_assoc($table1)) {
					$calendar2 = $row2['local'];


					if ($calendar == $calendar2) {

						echo "<tr>";
							echo "<td>".$row2['id']."</td>";
							echo "<td>".$row['Last_name']."</td>";
							echo "<td>".$row['First_name']."</td>";
							echo "<td>".$row['mid_name']."</td>";
							echo "<td>".$row['status']."</td>";
							echo "<td>&#8369;".$row2['net']."</td>";
							echo "<td>".$row2['date_time']."</td>";
						echo "</tr>";

					}
				}
			}
			 
		}
	}

echo "</table>";
}
else{
	echo "<div class='alert alert-danger'>";
	echo "<strong>No Report Found</strong>";
	echo "</div>";
}

}




?>



		</div>
	</div>
</div>
</div>
</body>
</html>