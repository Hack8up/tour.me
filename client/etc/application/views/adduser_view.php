<!DOCTYPE html>
<html>
 <head>
   <title>Simple Login with CodeIgniter - Private Area</title>
   <link rel="stylesheet" href="http://localhost/enigma/web//css/bootstrap.css">
	<script src="http://localhost/enigma/web/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<div class="well well-lg">
		<div class="row">
			<div class="md-col-4"></div>
			<div class="md-col-4">
				<h1 class="text-center">Add a user</h1>
			</div>
			<div class="md-col-4"></div>
		</div>

		<div class="container-fluid">
			<?php echo form_open('adduser'); ?>
			<!--<form method="post" action="http://localhost:125/registration/process_registration">-->
			<form method="post" class="form-horizontal">
				<div class="form-group">
					<div class="col-md-2">
						<?php echo form_error('fname'); ?>
						<?php echo form_error('mname'); ?>
						<?php echo form_error('sname'); ?>
					</div>
					<label for="name" class="control-label col-md-1">Name:</label>
					<input type="text" id="name" name="fname" value="<?php echo set_value('fname')?>" placeholder="First Name">
					<input type="text" id="name" name="mname" value="<?php echo set_value('mname')?>" placeholder="Middle Name">
					<input type="text" id="name" name="sname" value="<?php echo set_value('sname')?>" placeholder="Last Name">
					<br><br><br>
				</div>

				<div class="form-group">
					<div class="col-md-2"><?php echo form_error('username'); ?></div>
					<label for="username" class="control-label col-md-1">Username:</label>
					<input class="col-md-3" type="text" id="username" name="username" value="<?php echo set_value('username')?>" placeholder="Choose a username">
					<br><br><br>
				</div>

				<div class="form-group">
					<div class="col-md-2"><?php echo form_error('email'); ?></div>
					
					<label for="email" class="control-label col-md-1">Email Address:</label>
					<input class="col-md-3" type="email" id="email" name="email" value="<?php echo set_value('email')?>" placeholder="username@example.com">
					<div class="col-md-3"></div><br>
					<br><br>
				</div>

				<div class="form-group">
					<div class="col-md-2"><?php echo form_error('password'); ?></div>
					<label for="password" class="control-label col-md-1">Password:</label>
					<input class="col-md-3" placeholder="Choose a password" type="password" id="password" name="password" value="<?php echo set_value('password')?>">
					<br><br><br>
				</div>

				<div class="form-group">
					<div class="col-md-2"><?php echo form_error('passwordconf'); ?></div>
					<label for="con_password" class="control-label col-md-1">Confirm Password:</label>
					<input class="col-md-3" placeholder="Retype your password" type="password" id="passwordconf" name="passwordconf" value="<?php echo set_value('passwordconf')?>">
					<br><br>
				</div>

				<div class="row">
					<div class="col-sm-5"></div>
					<div class="form-group col-sm-4">
						<input class="btn btn-info btn-lg text-left" type="submit" value="Register">
						<input class="btn btn-danger btn-lg" type="reset" value="Reset" href="http://locahost:125/registration">
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
	</div>
</body>