<!DOCTYPE html>
<html>
<head>
<title>Payroll System</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</style>
</head>
<body>

<form method="POST" class="form-group">
	<input type="date" name="calendar">
	<input type="submit" name="submit" class="btn btn-primary">
</form>

<table class="table table-hover">
	<thead>
		<th>ID</th>
		<th>date</th>
		<th>Lname</th>
	</thead>
<?php 
require 'connect/connection.php';

if (isset($_POST['submit'])) {
	$calendar = $_POST['calendar'];
	echo $calendar;
	$echo = 20150001;

	$sql = "SELECT * FROM `$echo` where date_time like '$calendar%'";
	$result = mysqli_query($connect,$sql);
	$stamp = mysqli_num_rows($result);
	if ($stamp >= 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['date_time']."</td>";
			echo "<td>".$row['lname']."</td>";
			echo "</tr>";
		}
	}
}

 ?>

</table>

<?php 
date_default_timezone_set("Asia/Manila");
$date = date("Y/m/d h:i:sA");
echo $date;
 ?>
</body>
</html>