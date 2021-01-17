<!DOCTYPE html>
<html>
<?php include 'head.php' ?>
<title>Serie 2 : Exercice 1</title>


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
                <h1> EXERCICE 1 - SERIE 2  </h1>
            </div>
        </div>
    </div>

    <body>


        <div class="tableau_S2ex1">

            <?php

            function affichage($tab)
            {
                $cle = array_keys($tab);
                $val = array_values($tab);

                for ($i = 0; $i <= sizeof($cle) - 1; $i++) {

                    echo "<table>";
                    // Output a row
                    echo "<tr>";
                    echo "<td>" . $cle[$i] . "</td>";
                    echo "<td>" . $val[$i] . "</td>";
                    echo "</tr>";
                }

                // Close the table
                echo "</table>";
            }

            $table = [
                'Titre' => 'Interstellar',
                'Auteur' => 'Christopher Nolan',
                'PubAnnee' => 2014
            ];
            affichage($table);

            ?>
        </div>
    </body>

</html>