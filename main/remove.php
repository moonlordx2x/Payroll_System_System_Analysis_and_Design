<?php 
require '../connect/connection.php';

$ID = $_GET['ID_NUM'];
echo $ID;

$sql2 = "DELETE From employee where ID_NUM =$ID";
$result2 = mysqli_query($connect,$sql2);
if ($result2) {
	$sql = "DROP TABLE `$ID`";
	$result = mysqli_query($connect,$sql);
	header("Location:home.php");
}
else{
	echo "Failed";
}

 ?>