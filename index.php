<?php
	if (isset($_GET['open'])){
		shell_exec ('gpio write 0 1');
		sleep('3');
		shell_exec ('gpio write 0 0');
	}
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>You shall past</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<img src='assets/images/logo.png' width="100">
  		</div>
  		<div class="row">
  		<br />
  		<a href="index.php?open">
		<button type="button" class="btn btn-success btn-lg">
		  <i class="fa fa-key"></i> Ouvrir
		</button>
		</a>

		<div>
	</div>
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html