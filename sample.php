<!DOCTYPE html>
<html>
<head>
	<title>sample</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#mymodal">
	<span class="glyphicon glyphicon-edit">TRY</span>
</button>

<div class="modal fade" id="mymodal" role="dialog">
	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close"></button>
					<h4 class="modal-title">SAMPLE MODAL</h4>
				</div>

			<div class="modal-body">
				<p>Hello world</p>
			</div>

			<div class="modal-footer">
				<button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
			</div>
			</div>	
	</div>
</div>
</body>
</html>


<a href=update.php?ID_NUM=".$row['ID_NUM']."><button type='button' class='btn btn-success'>Update</button></a>
<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#my'>Remove</button>	
		
<div class='modal fade' id='my' role='dialog'>
	<div class='modal-dialog'>
		<div class='modal-content'>
				<div class='modal-header'>
					<button class='close' type='button' data-dismiss='modal'>&times;</button>
					<h2>Do you want to Delete this record? ".$row['ID_NUM']."</h2>
				</div>

				<div class='modal-body'>
				<p>
					<a href='remove.php?ID_NUM=".$row['ID_NUM']."'>Remove</a>
					<button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>
				</p>
				</div>

				<div>
					<h4>hello</h4>
				</div>
		</div>
	</div>
</div>




	<a href=update.php?ID_NUM=".$row['ID_NUM']."><button type='button' class='btn btn-success'>Update</button></a>
	<button type='button' class='btn btn-danger' onclick='my()'>Remove</button>	
<span id='demo'></span>
<script>
		function my(){
			var txt;
			if(confirm('Do want to delete ".$row['ID_NUM']." records ?') == true){
				window.location = 'remove.php?ID_NUM=".$row['ID_NUM']."';
			}
			else{}
				document.getElementId('demo').innerHTML = txt;
		}
</script>




&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href=update.php?ID_NUM=".$row['ID_NUM']."><button type='button' class='btn btn-success'>Update</button></a>
<button type='button' class='btn btn-danger' onclick='my()'>Remove</button>
		<span id='demo'></span>

<script>
		function my(){
			var txt;
			if(confirm('Do you want to delete this record? ".$row['ID_NUM']."')){
				window.location = 'remove.php?ID_NUM=".$row['ID_NUM']."';
			}
			document.getElementId('demo').innerHTML = txt;
		}
</script>

<script type="text/javascript">
	<?php  ?>
</script>


echo "<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href=update.php?ID_NUM=".$row['ID_NUM']."><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-edit'>Update</span></button></a>
	<a href=remove.php?ID_NUM=".$row['ID_NUM']."><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-remove'>Remove</span></button></a>
</td>";

<a href=remove.php?ID_NUM=".$row['ID_NUM']."><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-remove'>Remove</span></button></a>