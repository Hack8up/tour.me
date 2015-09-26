<html>
 <head>
   <title>Simple Login with CodeIgniter - Private Area</title>
   <script src="http://localhost:125/js/jquery-1.11.0.min.js"></script>
	<script src="http://localhost:125/js/jquery-migrate-1.2.1.min.js"></script>
	<link rel="stylesheet" href="http://localhost:125/css/bootstrap.min.css">
	<script src="http://localhost:125/js/bootstrap.min.js"></script>
	</head>
 <body>
 	<nav class="navbar navbar-inverse navbar-static-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">CodeIgniter</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="http://localhost:125/home">Home</a></li>
	        <li class="active"><a href="http://localhost:125/record">Active Records<span class="sr-only">(current)</span></a></li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hi, <?php echo $username;?>!<span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">Update your infromation</a></li>
	            <li class="divider"></li>
	            <li><a href="home/logout">Logout</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<div class="alert alert-warning" role="alert">
 			<p class="text-left">Be responsible to the account you are updating/editing.</p>
 		</div>
 		<hr>
		<form method="post">
			<?php echo form_open('updateinfo'); ?>
			<?php
				foreach ($users as $user) { ?>
				<div class="form-group">
					<div class="col-md-2">
						<?php echo form_error('fname'); ?>
						<?php echo form_error('mname'); ?>
						<?php echo form_error('sname'); ?>
					</div>
					<input type="hidden" value="<?php echo $user->id;?>" name="userid" />
					<label for="name" class="control-label col-md-1">Name:</label>
					<input type="text" id="fname" name="fname" value="<?php echo $user->fname;?>">
					<input type="text" id="mname" name="mname" value="<?php echo $user->mname;?>">
					<input type="text" id="sname" name="sname" value="<?php echo $user->sname;?>" >
					<br><br><br>
				</div>
				<div class="form-group">
					<div class="col-md-2"><?php echo form_error('username'); ?></div>
					<label for="username" class="control-label col-md-1">Username:</label>
					<input class="col-md-3" type="text" id="username" name="username" value="<?php echo $user->username;?>">
					<br><br><br>
				</div>

				<div class="form-group">
					<div class="col-md-2"><?php echo form_error('email'); ?></div>
					
					<label for="email" class="control-label col-md-1">Email Address:</label>
					<input class="col-md-3" type="email" id="email" name="email" value="<?php echo $user->email;?>">
					<div class="col-md-3"></div><br>
					<br><br>
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-5"></div>
					<div class="form-group col-sm-4">
						<input class="btn btn-success btn-lg" type="submit" value="Update">
						<input class="btn btn-danger btn-lg" type="reset" value="Reset">
					</div>
					<div class="col-sm-3"></div>
				</div>
					
				<?php } ?>
		</form>
	</div>
</body>
</html>