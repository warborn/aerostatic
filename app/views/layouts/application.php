<!DOCTYPE html>
<html lang="en">
<head>
  <base href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/" />
  <meta charset="UTF-8">
</head>
<body>

  <?php echo $yield ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script type="text/javascript" src="vendor/jquery.restfulizer.js"></script>
</body>
</html>
