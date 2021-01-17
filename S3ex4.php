<!DOCTYPE html>
<html>

<?php include 'head.php' ?>
<title>Serie 3 : Exercice 4</title>

<body>

  <!-- header -->
  <header class="header">
    <a href="index.php" class="header-logo">Acceuil</a>
    <nav class="header-menu">
      <?php include 'dropdowns.php' ?>
    </nav>


  </header>

  <!-- header -->

  <!-- banner -->

  <div class="banner">
    <img src="img/fond.jfif" alt="fond d'écran" class="banner-image" width="100%" height="100%">

    <div class="banner-content">
      <h1>EXERCICE 4 - SERIE 3 </h1>
    </div>
  </div>

  <div class="S3ex4">
    <?php
    $time = 0;
    if (!isset($_COOKIE["first"])) {
      setcookie("first", time(), time() + 60 * 60);
    } else {
      $time = time() - $_COOKIE["first"];
    }

    function affichage($time1)
    {
      $second = $time1 % 60;
      $minute = floor(($time1 % 3600) / 60);
      $hour = floor(($time1 % 86400) / 3600);
      $day = floor(($time1 % 2592000) / 86400);

      echo "$day jours, $hour heures, $minute minutes, $second secondes";
    }

    echo 'Bonjour ! Vous avez visité cette page la première fois il y a ';
    echo affichage($time);

    ?>
  </div>

</body>

</html>