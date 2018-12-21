<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
	<?php include 'bootstrap_admin.php'; ?>
	<script type="text/javascript">
	function delayed(){
		window.location	="salary.php"
	}
</script>
<style type="text/css">
	strong{
		font-size: 35px;
	}
	#head{
		background-color: #618685;
		color: white;
	}

</style>
</head>
<body onload="setTimeout('delayed()',3000)">

<div class='modal fade' id='my' role='dialog'>
	<div class='modal-dialog'>
		<div class='modal-content'>
				<div class="modal-header" id="head"><h2>Global Vision Events and Marketing INC.</h2></div>
				<div class='modal-body' id="body1">
							<h2>Employees ID NUMBER <?php echo $_GET['sample']; ?></h2>
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