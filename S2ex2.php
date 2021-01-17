<!DOCTYPE html>
<html>
<?php include 'head.php' ?>
<title>Serie 2 : Exercice 2</title>

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
        <h1> EXERCICE 2 - SERIE 2  </h1>
        <form name="inscription" method="post" action="S2ex2.php">
          <label for="Analyse Texte">Veuillez saisir votre nombre à analyser :</label>
          <input type="number" id="Le_Chiffre1" name="chiffre1" min="0"> </br>
          <button class="button">Valider</button>
        </form>
      </div>
    </div>
  </div>

  <div class="tableau_S2ex2">

    <?php

    $chiffre1 = NULL;

    if (isset($_POST['chiffre1'])) {
      $chiffre1 = $_POST['chiffre1'];
    }

    ?>
    <table>
      <tr>
        <th> Nombre </th>
        <th> factoriel </th>
      </tr>

      <?php
      echo "<tr>";
      echo "<td>" . $chiffre1 . "</td>";
      echo "<td>" . fact($chiffre1) . "</td>";
      echo "</tr>";

      ?>


    </table>

    <?php

    function fact($n)
    {
      if ($n == NULL) {
        return NULL;
      }

      if ($n <= 1) {
        return 1;
      } else {
        return $n * fact($n - 1);
      }
    }
    $nombres = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    ?>


    <table>
      <tr>
        <th> Entier </th>
        <th> Factoriel </th>
      </tr>

      <?php
      foreach ($nombres as $nb) {
      ?>

        <tr>
          <td> <?php echo "$nb"; ?> </td>
          <td> <?php echo fact($nb); ?> </td>
        </tr>






      <?php } ?>

  </div>
</body>


</html>