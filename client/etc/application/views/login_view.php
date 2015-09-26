<!DOCTYPE html>
<html>
 <head>
   <title>TourME</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

   <link rel="stylesheet" href="http://localhost/enigma/web/bootstrap/css/bootstrap.css">
   <script src="http://localhost/enigma/web/bootstrap/js/bootstrap.js"></script>
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
   <link rel="stylesheet" href="http://localhost/enigma/web/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
   <link rel="stylesheet" href="http://localhost/enigma/web/plugins/iCheck/square/blue.css">
</head>
<style>
body { margin: 0; background: #000;}
  video#bgvid {
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    background-color: #5f3c03;
    background-size: cover; 
  }


</style>
  <body class="hold-transition login-page">
       <video autoplay="autoplay" loop="" id="bgvid" style="filter: opacity(15%); ">
          <source src="/enigma/web/img/hey.webm#t=10,200" type="video/webm">
          <source src="/enigma/web/img/hey.mp4#t=10,200" type="video/mp4">
        </video> 
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><img class="login-logo" src="/enigma/web/img/tour_logo.png"></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?php 
			echo validation_errors(); 
			echo form_open('verifylogin'); ?>
        <form method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
          <?php 
				echo form_close(); ?>
        </form>

        <!--<div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>
        <a href="/enigma/web/registration" class="text-center">Register a new membership</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="http://localhost/enigma/web/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="http://localhost/enigma/web/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="http://localhost/enigma/web/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>


</html>