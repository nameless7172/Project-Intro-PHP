<!DOCTYPE html>
<html>

<?php include 'head.php' ?>
<title>Serie 1 : Exercice 3</title>


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
        <h1>EXERCICE 3 - SERIE 1 </h1>
      </div>
    </div>
  </div>

  <!-- banner -->
  <div class="tableau_S1ex3">
    <!-- header -->
    <?php


    //question 1
    $auteurs = array('Steinbeck', 'kafka', 'Tolkien', 'Dickens', 'Milton', 'Orwell');


    $livres = array(
      array('titre' => 'The Hobbit', 'auteurID' => 2, 'pubAnnee' => 1937),
      array('titre' => 'The Grapes of Wrath', 'auteurID' => 0, 'pubAnnee' => 1939),
      array('titre' => 'A Tale of Two Cities', 'auteurID' => 3, 'pubAnnee' => 1859),
      array('titre' => 'Paradise Lost', 'auteurID' => 4, 'pubAnnee' => 1667),
      array('titre' => 'Animal Farm', 'auteurID' => 5, 'pubAnnee' => 1945),
      array('titre' => 'The Trial', 'auteurID' => 1, 'pubAnnee' => 1925)
    );

    //question 2
    for ($i = 0; $i < sizeof($auteurs) - 1; $i++) {
      $ident = $livres[$i]['auteurID'];
      $livres[$i]['auteurID'] = $auteurs[$ident];
    }


    ?>



    <table>


      <?php
      for ($i = 0; $i < sizeof($livres); $i++) {

        $gauche = $livres[$i]['titre'];
        $milieu = $livres[$i]['auteurID'];
        $droite = $livres[$i]['pubAnnee'];
        $k = $i + 1;


      ?>

        <tr>
          <td> <?php echo 'Livre ' . "$k" ?> </td>
          <td> <?php echo "$gauche"; ?> </td>
          <td> <?php echo "$milieu"; ?> </td>
          <td> <?php echo "$droite"; ?> </td>
        </tr>






      <?php } ?>

</body>

</html>