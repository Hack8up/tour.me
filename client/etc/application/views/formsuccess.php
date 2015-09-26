<html>
<head>
	<title>Simple Login Form using Codeigniter</title>
	<link rel="stylesheet" href="http://localhost:125/css/bootstrap.css">
	<script src="http://localhost:125/js/bootstrap.js"></script>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8 well well-lg">
				<h3>Congratulations <?php echo $fname; ?>! Your form was successfully submitted!</h3>
			</div>
			<div class="col-sm-2"></div>
		</div>

		<div class="row">
			<div class="md-col-4"></div>
			<div class="md-col-4 text-center">
				<p>Now click here to login!</p>
				<a class="btn btn-primary btn-lg" href="registration/destroy">Login Now!</a>
			</div>
			<div class="md-col-4"></div>
		</div>	
	</div>
</body>
</html>
