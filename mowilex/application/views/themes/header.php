<!--untuk mengatasi error di  'timezonedb' alreadyloaded-->
<?php error_reporting(0) ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MOWILEX</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- font awesome -->
    <link href="<?php echo base_url()?>/dist/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<!-- ====================================================================== --> 
<!-- MEMBUAT MENU HEADER DI ATAS -->   <!-- Fungsin nav memberikan background abu pada panel atas -->  <nav class="navbar navbar-inverse navbar-fixed-top">   
<div class="container-fluid">       
  <!-- untuk logo  <div class="navbar-header"> -->       
  <div class="navbar-header">         
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#target-list">
      <span class="sr-only">Toggle navigation</span>           
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>           
      <span class="icon-bar"></span>         
    </button>         
    <a class="navbar-brand" href="<?php echo base_url('admin') ?>">TTS Mowilex Application</a>       
  </div>
  <!-- untuk logo  <div class="navbar-header"> -->

 
    <!-- untuk menu -->
    <div class="collapse navbar-collapse" id="target-list">
      <!-- Setting Category -->
      <ul class="nav navbar-nav"> <!-- awal menu -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-folder"></i> Data Aset <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url('asset/data_asset/') ?>"><i class="fa fa-database"></i> Data Asset</a></li>
            
          <li class="divider"></li> <!-- < kode pembatas link -->
          <li><a href="<?php echo base_url('asset/data_asset/data_toko') ?>"><i class="fa fa-database"></i> Data Toko</a></li>
          <li><a href="<?php echo base_url('asset/data_asset/data_mesin') ?>"><i class="fa fa-database"></i> Data Mesin</a></li> 
          
          </ul>
        </li> 
        <!-- Setting Category -->

       
        <!-- <li><a href="#">Link</a></li> -->
        
        <!-- menu dropdown -->         
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">LINK 1</a></li>
            <li><a href="#">LINK 2</a></li>
            <li><a href="#">LINK 3</a></li>
            <li class="divider"></li> 
            <li><a href="#">LINK 1</a></li>
            <li><a href="#">LINK 2</a></li>
            <li><a href="#">LINK 3</a></li>
          </ul>
           
        </li> -->
        <!-- menu dropdown -->    

        <li><a href="<?php echo base_url('kunjungan/data_kunjungan') ?>"><i class="fa fa-gear"></i> Maintenance <span class="sr-only">(current)</span></a></li>     

        <li><a href="<?php echo base_url('complain/data_complain') ?>"><i class="fa fa-tasks"></i> Complain <span class="sr-only">(current)</span></a></li> 

      </ul><!-- akhir menu -->
       

<!-- MENU KANAN PROFIL -->
      <ul class="nav navbar-nav navbar-right">
        

        <!-- untuk menu --> 
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><label class="fa fa-user-md"></label> <?php echo $this->session->userdata('username') ?>  <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            
            <li><a href="<?php echo base_url('profil') ?>"><label class="fa fa-users"></label> Profil</a></li>
            
            <li class="divider"></li> <!-- < kode pembatas link -->
            <li><a href="<?php echo base_url('login/logout') ?>"><label class="fa fa-sign-out"></label> Logout</a></li>
            
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
<?php // Konversi tanggal ke bahasa indonesia
function format_indo($date){
    $BulanIndo = array("Jan", "Feb", "Mar", "Arp", "Mei", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

    $tahun = substr($date, 0, 4);               
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
    @$result = $tgl . " - " . $BulanIndo[(int)$bulan-1]. " - ". $tahun;
    return($result);
}// Konversi tanggal ke bahasa indonesia

?>