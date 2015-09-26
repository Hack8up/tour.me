<!DOCTYPE html>
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
 		<table class="table table-striped">
 			<thead>
 				<tr>
 					<th>First Name</th>
 					<th>Middle Name</th>
 					<th>Surname</th>
 					<th colspan="2"></th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php foreach ($users as $user) { ?>
 				<tr>
 					<td><?php echo $user->fname; ?></td>
 					<td><?php echo $user->mname; ?></td>
 					<td><?php echo $user->sname; ?></td>
 					<td><a class="btn btn-info" href="<?php echo site_url('updateinfo?id='.$user->id, 'id="$row->id"'); ?>">Edit Info</a></td>
 					<!--<td><?php //echo anchor('record/delete?id='.$user->id, 'DELETE', 'id="$row->id"'); ?></td>-->
 					<td><a class="btn btn-danger" href="<?php echo site_url('record/delete?id='.$user->id, 'id="$row->id"'); ?>">Delete User</a></td>
 				</tr>
 				<?php } ?>
 			</tbody>
 		</table>

 		<div class="row">
 			<div class="col-md-4"></div>
 			<div class="col-md-4">
 				<a class="btn btn-success btn-lg" href="adduser">Add a new user</a>
 				<a class="btn btn-danger btn-lg" href="deleteall">Delete all users</a>
 			</div>
 			<div class="col-md-4"></div>
 		</div>


 	</div>
 </body>
</html>