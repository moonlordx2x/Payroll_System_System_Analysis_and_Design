<?php include '../function/session.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Global Vision Events and Marketing INC.</title>
	<?php include 'bootstrap_admin.php'; ?>
</head>
<body>
	<div class='modal fade' id='my' role='dialog' data-backdrop="static" data-keyboard="false">
	<div class='modal-dialog'>
		<div class='modal-content'>
				<div class='modal-header'>
					<h2>Do you want to Delete this record? <?php echo $_GET['ID_NUM']; ?></h2>
				</div>

				<div class='modal-body'>
				<p>
					<?php  
echo "<a href='remove.php?ID_NUM=".$_GET['ID_NUM']."'><button class='btn btn-danger'>Remove</button></a>";

					?>
					<a href="home.php"><button class="btn btn-default">Cancel</button></a>
				</p>
				</div>

				<div clas='modal-footer'>
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

