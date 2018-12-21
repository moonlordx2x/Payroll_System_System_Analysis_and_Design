<!DOCTYPE html>
<html>
<head>
	<title>DETAILS</title>
	<?php include 'bootstrap_compute.php'; ?>
</head>
<body>
<div class="panel-group">
	<div class="panel panel-primary">
		<div class="panel-heading"><strong>Transaction Record</strong></div>
<div class="panel-body">
	<table class="table table-hover">
<thead>
	<tr>
		<th>Date/Time</th>
		<th>EMPLOYEES ID</th>
		<th>GROSS INCOME</th>
		<th>TOTAL DEDUCTION</th>
		<th>NET INCOME</th>
		<th>Action</th>
	</tr>
</thead>
<?php 
include '../function/session.php';
require '../connect/connection.php';

//echo $_GET['ID_NUM'];
$name = $_GET['ID_NUM'];

$sql2 = "SELECT * FROM `$name` order by list desc";
$result2 = mysqli_query($connect,$sql2);
if (@mysqli_num_rows($result2) >0) {
	while ($row = mysqli_fetch_assoc($result2)) {
		$time = strtotime($row['date_time']);
		$date = date('M-d-y h:i:sA',$time);
		$list = $row['list'];
		$id  = $row['id'];
		echo "<tr>";
		echo "<td>".$date."</td>";
		echo "<td>".$row['id']."</td>";
		echo "<td>&#8369;".$row['gross']."</td>";
		echo "<td>&#8369;".$row['total']."</td>";
		echo "<td>&#8369;".$row['net']."</td>";
		echo "<td><a href='docu.php?list=$list'><button type='button' claSs='btn btn-primary'>Full report</button></a></td>";
		echo "</tr>";
	}
}


 ?>
</table>
<?php echo "<a href='../main/salary.php'><button class='btn btn-primary'>Return</button></a>"; ?>

			
</div>
	</div>
</div>
</body>
</html>