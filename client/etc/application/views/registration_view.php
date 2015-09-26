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
<body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="#"><img class="register-logo" src="/enigma/web/img/tour_logo.png"></a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <?php echo form_open('registration'); ?>
        <form method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Full name" name="fname">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Retype password" name="passwordconf">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div><!-- /.col -->
          </div>
        </form>

        <!--<div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
        </div>-->

        <a href="/enigma/web/login" class="text-center">I already have a membership</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

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