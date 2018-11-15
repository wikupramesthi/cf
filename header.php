<!DOCTYPE html>
 <html lang="en">
 <head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap4.min.css">
  <link href="css/style.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  
</head>

<body id="page-top">

 <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <div class="navbar-brand js-scroll-trigger"></div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
           <span <?php if (stripos($_SERVER['REQUEST_URI'],'index.php') !== false) {echo 'class="active"';} ?>>
            <a class="nav-link" href="index.php">Home</a>
            </span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Login</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="about.php">disease</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Admin</a>
          </li>
        </ul>
      </div>
    </nav>