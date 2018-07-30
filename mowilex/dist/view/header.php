<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>APP</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <!-- font awesome -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<!-- ====================================================================== -->
<!-- MEMBUAT MENU HEADER DI ATAS -->  
<!-- Fungsin nav memberikan background abu pada panel atas -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
      <!-- untuk logo  <div class="navbar-header"> -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#target-list">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><i class="fa fa-desktop"></i> TITLE</a>
      </div>
      <!-- untuk logo  <div class="navbar-header"> -->

 
    <!-- untuk menu -->
    <div class="collapse navbar-collapse" id="target-list">
      <!-- Menu 1 -->
      <ul class="nav navbar-nav"> <!-- awal menu -->
        
        <!-- application -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-database"></i> Application <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <li><a href="index.php"> DASHBOARD</a></li>
          <li><a href="forms.php"> FORMS</a></li>
          <li><a href="login.php"> LOGIN</a></li>
          <li><a href="#"> Menu 1</a></li>
          <li class="divider"></li> <!-- < kode pembatas link -->
          <li><a href="#"> Menu 1</a></li>
          <li><a href="#"> Menu 2</a></li>
          <li><a href="#"> Menu 3</a></li>
          </ul>
        </li> 
        <!-- application -->
        <!-- Menu 1 -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-database"></i> LINK 1 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <li><a href="#"> Menu 1</a></li>
          <li><a href="#"> Menu 2</a></li>
          <li><a href="#"> Menu 3</a></li>
          <li class="divider"></li> <!-- < kode pembatas link -->
          <li><a href="#"> Menu 1</a></li>
          <li><a href="#"> Menu 2</a></li>
          <li><a href="#"> Menu 3</a></li>
          </ul>
        </li> 
        <!-- Menu 1 -->

        <li><a href="#"><i class="fa fa-book"></i> LINK 2 <span class="sr-only">(current)</span></a></li>
        <!-- <li><a href="#">Link</a></li> -->
            

        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="glyphicon glyphicon-stats"></i> LINK 3 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Menu 1</a></li>
            <li><a href="#">Menu 2</a></li>
            <!-- <li><a href="#">Something else here</a></li> -->
            <li class="divider"></li> <!-- < kode pembatas link -->
            <li><a href="#">Menu 1</a></li>
          </ul>
        </li> 
    
        <!-- untuk menu setting -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-gears"></i> LINK 4 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Setting reset data</a></li>
            <!-- <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li> -->
            <li class="divider"></li> <!-- < kode pembatas link -->
            <li><a href="#">Separated link</a></li>
          </ul>
        </li> 
        <!-- untuk menu setting -->
      </ul><!-- akhir menu -->
       

<!-- MENU KANAN PROFIL -->
      <ul class="nav navbar-nav navbar-right">
        <!-- untuk menu --> 
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profil Satu <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li> <!-- < kode pembatas link -->
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <!-- akhir menu -->

        <!-- untuk menu --> 
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profil <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li> <!-- < kode pembatas link -->
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <!-- akhir menu -->
      </ul>
<!-- MENU KANAN PROFIL -->   

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> <!-- Akhir NaV -->
<!-- ====================================================================== -->
<br><br><br><br>