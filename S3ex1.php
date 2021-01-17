<!DOCTYPE html>
<html>

<?php include 'head.php' ?>
<title>Serie 3 : Exercice 1</title>

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
      <h1>EXERCICE 1 - SERIE 3 </h1>



    </div>
  </div>

  <div class="S3ex1">
    <?php

    session_start();
    $gagne = false;
    $fini = false;
    $nombre = 0;

    // la session n'existe pas encore (cas 1)
    if (!isset($_SESSION['devinette'])) {
      $randomnumber = rand(1, 100);
      $_SESSION['devinette'] = $randomnumber;
      $_SESSION['compteur'] = 1;
      echo $randomnumber;
    } else if (isset($_POST['nombre']) && $_POST['nombre']) {

      echo '</br>';
      $nombre = $_POST['nombre'];
      if ($_SESSION['compteur'] >= 6) {
        echo "Perdu, le nombre était " . $_SESSION['devinette'];
        $fini = true;
      } else if ($nombre < $_SESSION['devinette']) {
        echo "Reessayez, le nombre est plus grand";
      } else if ($nombre == $_SESSION['devinette']) {
        $fini = true;
        echo "Gagné, le nombre est " . $nombre;
        $gagne = true;
      } else {
        echo "Reessayez, le nombre est plus petit";
      }
      $_SESSION['compteur']++;
    }

    echo '<fieldset style="width:25%;">';

    if (!$fini) {    ?>
      <?php
      if ($_SESSION['compteur'] > 1 && $_SESSION['compteur'] < 6) {
        echo '<br>';
        echo '<br>';
        echo "Il reste " . (6 - $_SESSION['compteur']) . ' essais';
      }
      ?>

      <form action="S3EX1.php" method="post">
        Saisissez un nombre entre 0 et 100.
        <br>

        <input type="number" name="nombre" min="0" max="100">
        <input type="submit" name="" value="Essayer">
      </form>

    <?php
    } else {
      session_destroy();
    }
    ?>

    </fieldset>
  </div>

</body>

</html>