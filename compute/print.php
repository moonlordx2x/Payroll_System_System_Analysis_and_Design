<?php include '../function/session.php';?>
<?php 

require '../connect/connection.php';
$list = $_GET['list'];
$id = $_SESSION['id'];
$sql = "SELECT * FROM `$id` where list='$list'";
$result = mysqli_query($connect,$sql);
$sam = mysqli_num_rows($result);
if ($sam == 1) {
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		$lname = $row['lname'];
		$fname = $row['fname'];
		$mid = $row['mid'];
		$work = $row['work'];
		$rate = $row['rate'];
		$sss = $row['sss'];
		$ibig = $row['ibig'];
		$tax = $row['tax'];
		$phil = $row['phil'];
		$gross = $row['gross'];
		$total = $row['total'];
		$net = $row['net'];
		$date = $row['date_time'];
		$local = $row['local'];
	}

	$fullnane = "$lname $fname $mid";
}


?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$id?>&nbsp&nbsp<?=$fullnane?>&nbsp&nbsp<?=$local?></title>
	<?php include 'bootstrap_compute.php'; ?>
</head>
<body onload="setTimeout('delayed()',3000)">
			<center><h3>Global Vision Events and marketing Inc</h3>
					<h4><STRONG>PAYSLIP</STRONG></h4></center>
						<table class="table">
							<thead>
								<tr>
									<th>Employee: <?=$fullnane?></th>
									<th>ID NUMBER: <?=$id?></th>
								</tr>
							</thead>
								<tr>
									<td>Pay-Date: <?=$date?></td>
								</tr>

							<table class="table">
								<thead>
									<tr>
									<th>Earnings</th>
									<th>Amount</th>
									<th>Deductions</th>
									<th>Amount</th></tr>
								</thead>
								<tr>
									<td>Day per-rate</td>
									<td>&#8369;<?=$rate?></td>
									<td>SSS</td>
									<td>&#8369;<?=$sss?></td>
								</tr>
								<tr>
									<td>Work-Days:</td>
									<td><?=$work?></td>
									<td>PAG-IBIG</td>
									<td>&#8369;<?=$phil?></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>TAX</td>
									<td>&#8369;<?=$tax?></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>PHIL HEALTH</td>
									<td>&#8369;<?=$phil?></td>
								</tr>
								<tr>
									<td>GROSS INCOME</td>
									<td>&#8369;<?=$gross?></td>
									<td>TOTAL DEDUCTION</td>
									<td>&#8369;<?=$total?></td>
								</tr>

								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>

								<tr>
									<td></td>
									<td></td>
									<td>NET INCOME</td>
									<td>&#8369;<?=$net?></td>
								</tr>
							</table>
						</table>

						<script type="text/javascript">
							
							window.onload=function(){window.print()};
						</script>
				<script type="text/javascript">
	function delayed(){
		window.location	="compute.php"
	}
</script>
</body>
</html>