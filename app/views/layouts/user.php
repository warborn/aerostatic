<!DOCTYPE html>
<html lang="en">
<head>
  <base href="http://<?php echo $_SERVER['HTTP_HOST'] . Config::get('base_url') ?>/" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Aerostatic</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="vendor/materialize/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/shared.css" type="text/css" rel="stylesheet">
  <link href="css/user_style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <?php render('shared/_nav'); ?>

  <div class="container">
    <?php echo $yield; ?>
  </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="vendor/materialize/js/materialize.min.js"></script>
  <script src="vendor/jquery.restfulizer.js"></script>
  <script src="js/user_init.js"></script>
  </body>
</html>
