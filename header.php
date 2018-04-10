<?php
$uri = explode('/', $_SERVER['REQUEST_URI'])[1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <?php
  if($uri === 'fassaadid'){
  ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modaal@0.3.1/dist/css/modaal.min.css" type="text/css" />
  <?php } ?>
  <title>Eesti rest</title>
</head>
<body>