<?php 
session_start();
if (isset($_SESSION["admin"])) {
	header("location:main/salary.php");
	exit();
}
?>