<!DOCTYPE html>
<html>
<?php include 'head.php' ?>
<title>Serie 2 : Exercice 3</title>


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
        <h1>EXERCICE 3 - SERIE 2  </h1>
        </form>
      </div>

    </div>
  </div>

  <div class="tableau_S2ex3">


    <?php

    require 'S2Ex3/classcalc.php';
    require 'S2EX3/calcadvanced.php';
    echo "<br/>";


    $a = new Calculator(5, 4);
    echo "<h5>La valeur initiale est <b> 5 </b> et <b> 4 </b></h5>";
    echo "<span class= calcul> On fait l'adition entre 5 et 4</span> = " . $a->add() . "<br/>";
    echo  "<span class= calcul> On fait la soustraction entre 5 et 4</span> = " . $a->substract() . "<br/>";
    echo  "<span class= calcul> On fait la multiplication entre 5 et 4</span> = " . $a->multiply() . "<br/>";
    echo  "<span class= calcul> On fait la division entre 5 et 4</span> = " . $a->divide() . "<br/>";

    //on s'interesse au premier parametre uniquement
    $b = new Calcadvanced(25, 1010100);

    echo "<h5>La valeur initiale est <b> 25 </b> </h5>";

    echo "<span class= calcul> On fait la racine carré</span> =  " . $b->sqrt() . '<br/>';
    echo "<span class= calcul> On fait l'exponentiel</span> =  " . $b->exp() . '<br/>';

    echo "<br/>";


    ?>

  </div>



</body>

</html>