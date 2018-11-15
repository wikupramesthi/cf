<!DOCTYPE html>
 <html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/AdminLTE.min.css">
  
</head>

<body class="hold-transition login-page">
 <div class="login-box">
  <div class="login-logo">
   <b>Web Admin</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login masuk ke dalam sistem pakar</p>

    <form role="form" method="post" data-toggle="validator" action="ceklogin.php">
      <div class="form-group has-feedback">
        <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input class="form-control" placeholder="Password" name="password" type="password" value="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row form-group">
        <div class="col-xs-12">
          <button type="submit" id="submit" nama="submit" class="btn btn-danger btn-block btn-flat">Login</button>
        </div>
      </div>
    </form>

  </div>
 </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>