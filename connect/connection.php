<?php
@include '../bootstrap.php';
$connect = mysqli_connect('localhost','root','');
if (!$connect) {
	echo "<div class='alert alert-danger'>";
	echo "<center>";
	echo "<strong>Can't connect to database</strong>";
	echo "</center>";
	echo "</div>";
}

if (!mysqli_select_db($connect,'sad')) {
	echo "<div class='alert alert-danger'>";
	echo "<center>";
	echo "<strong>Can't connect to database table</strong>";
	echo "</center>";
	echo "</div>";
}
?>