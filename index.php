<?php
include 'src/NBPdata/nbpApiDownload.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Currency app</title>
    <link rel = "stylesheet" type="text/css" href = "src/main.css"/>
  </head>
  <body>
    <header class = "header main-header">
      Exchange rates from NBP
    </header>
    <main class = "content">
      <section class = "rates">
        <header class = "header rates-header">
          Rates from C table
        </header>
        <?php require_once "src/NBPdata/printData.php"; ?>
      </section>
      <section class = "currents">
        <ul>
        <li class = "gold">
          <label class = "currents-title">Current gold price (in PLN):</label> <?php echo $final_gold; ?>
        </li>
      </ul>
      <canvas id = "gold-canvas">
      </canvas>
      </section>
    </main>
  </body>
  <?php include "src/NBPdata/goldcurrent.php"?>
</html>
