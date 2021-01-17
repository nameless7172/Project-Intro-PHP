<!DOCTYPE html>
<html>

<?php include 'head.php' ?>
<title>Serie 1 : Exercice 4</title>


<!--- body --->

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
  <div class="bloc">
    <div class="banner">
      <img src="img/fond.jfif" alt="fond d'écran" class="banner-image" width="100%" height="100%">
      <div class="banner-content">
        <h1>EXERCICE 4 - SERIE 1 </h1>
      </div>
    </div>
  </div>

  <div class="mine">




    <?php

    $nbcase = 400;
    $nbmine = 10;


    $mines = array();
    $cases = array();


    //creation du champ
    for ($i = 0; $i < $nbcase; $i++) {
      $cases[$i] = '<i class="fas fa-square fa-2x blackiconcolor1"></i>';
    }



    //placement des mines
    for ($i = 0; $i < $nbmine; $i++) {
      $pos = rand(0, $nbcase);
      $cases[$pos] = '<i class="fas fa-square fa-2x blackiconcolor""></i>';
    }



    //affichage
    echo "<br/>";
    $ligne = 0;
    foreach ($cases as $case) {
      print $case;

      $ligne += 1;
      if ($ligne >= 20) {
        print "<br/>";
        $ligne = 0;
      }
    }



    ?>
  </div>

</body>

</html>