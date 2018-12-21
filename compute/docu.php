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
	}

	$fullnane = "$lname $fname $mid";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>DETAILS</title>
	<?php include 'bootstrap_compute.php'; ?>
</head>
<body>
	<div class="modal fade" id="my" role="dialog" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<center><h3>Global Vision Events and marketing Inc</h3>
					<h4><STRONG>PAYSLIP</STRONG></h4></center></div>
				<div class="modal-body">
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
<td><?php echo "<a href='print.php?list=$list' target=_blank><button class='btn btn-primary' type='button'>PRINT PAYSLIP</button></a>"; ?></td>
									<td>NET INCOME</td>
										<td></td>
									<td>&#8369;<?=$net?></td>
								</tr>
								<tr>
<td><?php echo "<a href='detail.php?ID_NUM=$id'><button class='btn btn-danger' type='button'>Return</button></a>"; ?></td>
								</tr>
							</table>
						</table>


				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	$(document).ready(function(){
		$("#my").modal("show");
	});
</script>
</body>
</html>