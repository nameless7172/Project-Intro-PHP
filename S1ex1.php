<!DOCTYPE html>
<html>

<?php include 'head.php' ?>
<title>Serie 1 : Exercice 1</title>


<body>

    <header class="header">
        <a href="index.php" class="header-logo">Acceuil</a>
        <nav class="header-menu">
            <?php include 'dropdowns.php' ?>
        </nav>
    </header>

    <div class="banner">
        <img src="img/fond.jfif" alt="fond d'écran" class="banner-image" width="100%" height="100%">
        <div class="banner-content">
            <h1> EXERCICE 1 - SERIE 1 </h1>
            <form name="inscription" method="post" action="S1ex1.php">
                <label for="Analyse Texte">Veuillez saisir votre nombre à analyser :</label>
                <input type="number" id="Le_Chiffre" name="chiffre" min="0"> </br>
                <button class="button">Valider</button>
            </form>
        </div>
    </div>
    </div>

    <div class="S1ex1">
        <div class="resultat_calcul">

            <?php
            $chiffre = NULL;
            if (isset($_POST['chiffre'])) {
                $chiffre = $_POST['chiffre'];
            }
            ?>

            <table>
                <tr>
                    <th> Nombre </th>
                    <th> Premier ? </th>
                    <th> Pair ou impair ? </th>
                </tr>

                <?php

                echo "<tr>";
                echo "<td>" . $chiffre . "</td>";
                echo "<td>" . NbPremier($chiffre) . "</td>";
                echo "<td>" . pair_impair($chiffre) . "</td>";
                echo "</tr>";

                ?>


            </table>

        </div>

        <div class=tableau_S1ex1>

            <?php

            // Exercice 1
            function pair_impair($m)
            {
                if (($m == NULL)) {
                    return NULL;
                }

                if (($m % 2) == 0) {
                    return "Pair";
                } else {
                    return " Impair";
                }
            }

            function NbPremier($x)
            {
                if ($x == NULL) {
                    return NULL;
                }


                if ($x == 1) {
                    return "Exception";
                } else {


                    for ($i = 2; $i < $x; ++$i) {
                        if ($x % $i == 0) {
                            return "Non";
                        }
                    }
                    return "Oui";
                }
            }



            //appel ex 1

            $a1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
            echo "<br>";


            ?>


            <table>
                <tr>
                    <th> Nombre </th>
                    <th> Premier ? </th>
                    <th> Pair ou impair ? </th>
                </tr>

                <?php
                for ($i = 0; $i < 10; $i++) {

                    echo "<tr>";
                    echo "<td>" . $a1[$i] . "</td>";
                    echo "<td>" . NbPremier($a1[$i]) . "</td>";
                    echo "<td>" . pair_impair($a1[$i]) . "</td>";
                    echo "</tr>";
                }
                ?>


            </table>



        </div>
    </div>
</body>

</html>