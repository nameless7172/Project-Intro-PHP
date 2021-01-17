<!DOCTYPE html>
<html>

<?php include 'head.php' ?>
<title>Serie 1 : Exercice 2</title>


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

  <div class="banner">
    <img src="img/fond.jfif" alt="fond d'écran" class="banner-image" width="100%" height="100%">

    <div class="banner-content">
      <h1>EXERCICE 2 - SERIE 1 </h1>
      <h2>Voici le nombre de jour selon le mois pour l'année courant<h2>
    </div>
  </div>










  <?php
  //exercice 2



  function isbissect(): bool
  {
    $thisyear = date("Y");
    if (($thisyear % 4 == 0 && $thisyear % 100 != 0) || ($thisyear % 400 == 0)) {
      return true;
      print "l'année est bissextile ";
    } else {
      return false;
      print "l'année n'est pas bissextile ";
    }
  }

  function jourmois($thismonth)
  {


    if (($thismonth % 2 == 0) && ($thismonth <= 7) && ($thismonth != 2) || (($thismonth % 2 == 1) && ($thismonth > 7))) {
      print " 30 jours ";
    } elseif ($thismonth == 2) {
      if (isbissect()) {
        print " 29 jours ";
      } else {
        print " 28 jours ";
      }
    } else {
      print " 31 jours ";
    }
  }


  $months2021 = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");



  ?>

  <div class="tableau_S1ex2">

    <table>
      <tr>
        <th> Le mois </th>
        <th> Nombre de jours </th>
      </tr>

      <?php
      foreach ($months2021 as $mo) {
        $i = array_search($mo, $months2021) + 1;
      ?>

        <tr>
          <td> <?php echo "$mo"; ?> </td>
          <td> <?php echo jourmois($i); ?> </td>
        </tr>






      <?php } ?>

  </div>



</html>