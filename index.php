<?php include 'function/session2.php'; ?>
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
</head>
<body>
<div class="panel-group">
		<div class="panel panel-primary">
			<div class="panel-heading"><h4>Global Vision Events and marketing Inc. Payroll System</h4></div>
		</div>
</div>

<div class="container">
	<div class="panel-group">
		<div class="panel panel-primary" id="form">
			<div class="panel-heading"><h2>Sign-in Admin</h2></div><br>
				<div class="panel-body" id="form1">
				<form method="POST">
					<div class="input-group" id="form2">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="size" type="text" class="form-control" name="admin" placeholder="Login" maxlength="5" required>
					</div><br>
					<div class="input-group" id="form3">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     						 <input id="size" type="password" class="form-control" name="password" placeholder="Password" maxlength="8" required>
					</div><br>
					<div class="input-group" id="form4">
						<input type="submit" name="login" value="Sign-in" class="btn btn-success" id="size1"><br><br>
<?php  
require 'connect/connection.php';
@session_start();
if (isset($_POST['login'])) {
	$admin = $_POST['admin'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM admin where ADMIN = $admin and password = $password";
	$result = mysqli_query($connect,$sql);
	if ($result) {
	header("location:main/salary.php");
	$_SESSION['admin'] = $admin;
	}
	else{
	echo "<div class='alert alert-danger'>";
	echo "<center>";
	echo "<strong>Invalid</strong>";
	echo "</center>";
	echo "</div>";
	}
}


?>
					</div>
					</form>
				</div>
		  </div>
	</div>
</div>
</body>
</html>