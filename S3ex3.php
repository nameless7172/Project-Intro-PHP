<!DOCTYPE html>
<html>
<?php include 'head.php' ?>
<title>Serie 3 : Exercice 3</title>

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
            <h1>EXERCICE 3 - SERIE 3 </h1>

        </div>
    </div>
    <div class="S3ex3">
        <?php
        // nous avons reussi de produire un code qui nous permet de revenir en arriere et ne pas perdre d'informations. On suppose que c'etait ca la question 3.
        // Le code est Franco-anglais parce que nous nous sommes beaucoup inspirés de Stackoverflow, notamment pour la question 2 et 3.

        if (isset($_POST["step"]) and $_POST["step"] >= 1 and $_POST["step"] <= 3) {
            call_user_func("processStep" . (int)$_POST["step"]);
        } else {
            displayStep1();
        }

        function setInputValue($fieldName)
        {
            if (isset($_POST[$fieldName])) {
                echo $_POST[$fieldName];
            }
        }

        function setChecked($fieldName, $fieldValue)
        {
            if (isset($_POST[$fieldName]) and $_POST[$fieldName] == $fieldValue) {
                echo 'checked = "checked" ';
            }
        }

        function setSelected($fieldName, $fieldValue)
        {

            if (isset($_POST[$fieldName]) and $_POST[$fieldName] == $fieldValue) {
                echo 'selected = "selected"';
            }
        }



        function displayStep1()
        {
        ?>

            <form action="S3ex3.php" method="post">
                <h1>Inscription: Etape 1</h1>
                <div style="width: 30em;">


                    <input type="hidden" name="step" value="1">
                    <label></label><input type="hidden" name="genre" value=" <?php setInputValue('genre'); ?>"><br><br>

                    <label for="favourite"></label><input type="hidden" name="favourite" id="favourite" value="<?php setInputValue('favourite'); ?>"> <br><br>

                    <label for="comments"></label><input type="hidden" name="comments" id="comments" value="<?php setInputValue('comments'); ?>"><br><br>
                    <label for="password"></label><input type="hidden" name="password" id="password"><br><br>
                    <label for="passwordRetype"></label><input type="hidden" name="passwordRetype" id="passwordRetype"><br><br>

                    <label for="firstName">Prénom</label><input type="text" name="firstName" id="firstName" value="<?php setInputValue('firstName'); ?>"><br><br>
                    <label for="lastName">Nom</label><input type="text" name="lastName" id="lastName" value="<?php setInputValue('lastName'); ?>"><br><br>
                    <input type="submit" name="submitButton" value="Next &gt;">
                </div>
            </form>

        <?php } ?>

        <?php
        function processStep1()
        {
            displayStep2();
        }

        function displayStep2()
        { ?>

            <form action="S3ex3.php" method="post" autocomplete="on">
                <h1>Inscription : Etape 2</h1>
                <div style="width: 30em;">
                    <input type="hidden" name="step" value="2">
                    Votre genre<br>

                    <label for="homme">Homme</label><input type="radio" name="genre" id="homme" value="homme" <?php setChecked('genre', 'homme'); ?>> <br><br>
                    <label for="femme">Femme</label><input type="radio" name="genre" id="femme" value="femme" <?php setChecked('genre', 'femme'); ?>> <br><br>


                    Votre langage préféré:
                    <select name="favourite">


                        <option value="defaut" <?php setSelected('favourite', 'default'); ?>>defaut</option>
                        <option value="Php" <?php setSelected('favourite', 'php'); ?>>Php</option>
                        <option value="Javascript" <?php setSelected('favourite', 'Javascript'); ?>>Javascript</option>
                        <option value="Java" <?php setSelected('favourite', 'Java'); ?>>Java</option>

                    </select>
                    <label for="comments"></label><input type="hidden" name="comments" id="comments" value="<?php setInputValue('comments'); ?>"><br><br>

                    <label for="firstName"></label><input type="hidden" name="firstName" id="firstName" value="<?php setInputValue('firstName'); ?>"><br><br>
                    <label for="lastName"></label><input type="hidden" name="lastName" id="lastName" value="<?php setInputValue('lastName'); ?>"><br><br>

                    <input type="submit" name="submitButton" id="back" value="&lt; Back">
                    <input type="submit" name="submitButton" id="next" value="Next &gt;">
                </div>
            </form>


        <?php } ?>

        <?php
        function processStep2()
        {

            if (isset($_POST["submitButton"]) and $_POST["submitButton"] == "< back") {
                displayStep1();
            } else {
                displayStep3();
            }
        }

        function displayStep3()
        { ?>

            <form action="S3ex3.php" method="post">
                <h1>Inscription : Etape 3</h1>
                <div style="width: 30em;">
                    <input type="hidden" name="step" value="3">
                    <label></label><input type="hidden" name="genre" value=" <?php setInputValue('genre'); ?>"><br><br>

                    <label for="favourite"></label><input type="hidden" name="favourite" id="favourite" value="<?php setInputValue('favourite'); ?>"><br><br>
                    Faite nous part d'un commentaire<br>
                    <label for="comments"></label><input type="text" name="comments" id="comments" value="<?php setInputValue('comments'); ?>"><br><br>
                    <input type='checkbox' name='case' value='on'>
                    Newsletter ? <br>

                    <label for="firstName"></label><input type="hidden" name="firstName" id="firstName" value="<?php setInputValue('firstName'); ?>"><br><br>
                    <label for="lastName"></label><input type="hidden" name="lastName" id="lastName" value="<?php setInputValue('lastName'); ?>"><br><br>

                    <input type="submit" name="submitButton" id="back" value="&lt; Back">
                    <input type="submit" name="submitButton" id="next" value="Next &gt;">
                </div>
            </form>


        <?php } ?>

        <?php


        function processStep3()
        {

            if (isset($_POST["submitButton"]) and $_POST["submitButton"] == "< back") {
                displayStep2();
            } else {
                displayThanks();
            }
        }

        function displayThanks()
        {
            echo "Merci, votre demande d'inscription a été envoyée";
        }
        $_POST = array(); // pour effacer

        ?>
    </div>
</body>

</html>