<!DOCTYPE html>
<html>
<head>
	<title>sample</title>
</head>
<body>
		<?php 

$time = DATE("Y/m/d h:s:i");
echo $time;

		 ?>



		<?php 

		$ID = 20150007;

require 'connect/connection.php';
date_default_timezone_set("Asia/Manila");
$blog = date("Y-m-d");

$sql = "SELECT * FROM `$ID` order by local";
$result = mysqli_query($connect,$sql);
@$row = mysqli_num_rows($result);
if($row==0){echo "No table";}
elseif ($row >=0) {
	while (@$rows = mysqli_fetch_assoc($result)) {
		if(!$rows['local'] == $blog) {
				echo "error";
		}
		elseif($rows['local'] == $blog){
			echo "success";
		}
		elseif($rows['local'] != $blog){
			echo "mali";
		}
	}
}
else{
	echo "error";
}

		 ?>
</body>
</html>