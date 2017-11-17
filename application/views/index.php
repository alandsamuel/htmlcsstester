<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" type="text/css" media="all"/>

  </head>

  <body>
  <div id="page" class="round">
    <center>
    <img src="<?php echo base_url();?>images/logo.png" alt="Logo" height=150 width=150/><br>
    Welcome, <strong><?php echo $user; ?></strong>
    </center>
    <div id="nav" class="round">
    <center>
      <a href="<?php echo base_url(); ?>index.php/">Home</a> &nbsp|&nbsp <a href="<?php echo base_url(); ?>index.php\tester">Html Tester</a> &nbsp|&nbsp <a href="#">Menu 2</a>
    </center>
    </div>

    <div id="isi" class="round">
    <h3>Softskill</h3>
    <hr>
    <p>
      "Organisasi dalam bentuk apapun akan selalu berada dalam kita" Itulah kalimat sederhana yang dituliskan James A.F. Stoner tentang organisasi. Memang benar, organisasi menjadi keseharian dari hidup manusia dengan karakter makhluk sosial. Manusia berusaha bertahan hidup dalam sebuah lingkaran organisasi atau suatu sistem organisme (baca: kehidupan) yang membuat manusia saling membutuhkan dengan sesamanya maupun alam semesta ini.
      <br>
      <a href="<?php echo base_url();?>index.php/home/baca"> Read More >> </a>
    </p>
    </div>
  </div>
            
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
  </body>
</html>