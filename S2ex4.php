<!DOCTYPE html>
<html>

<?php include 'head.php' ?>
<title>Serie 2 : Exercice 4</title>


<body>

<!-- header -->
<header  class="header">
    <a href ="index.php" class="header-logo">Acceuil</a>
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
                <h1>  EXERCICE 4 - SERIE 2  </h1>                    
                </form>             
            </div>   

        </div>
    </div>

  <div class="tableau_S2ex4">

<?php

require 'S2ex4/Classlivre.php';
require 'S2ex4/Documentstore.php';

echo "<br/>";

$a = new Document('Horror','Stephen King','it', 8.95);



echo $a->getContent();
echo "<br/>";
 $b = new Documentstore($a);
 $b->addDocument($a);


$c= new Document('Fantasy','Garcia Marquez','1000 years of solitude', 17.00);
$d= new Document('Comedy','Dzianis Yudzitski','Un homme qui fait du php', 5.00);
$b->addDocument($d);
$b->addDocument($c);
$b->getDocuments();


 ?>


</body>

</html>
