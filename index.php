<!DOCTYPE html>
<html>

<?php include 'head.php' ?>
<title>Page d'acceuil</title>
<!--- body --->

<body>

    <!-- header -->
    <header class="header">
    <a href="index.php" class="header-logo">Acceuil</a>


    </header>

    <!-- header -->

    <!-- banner -->

    <div class="banner">
        <img src="img/fondprinci.jpg" alt="fond d'écran principal" class="banner-image" width="100%" height="100%">
        <div class="banner-content">
            <h1>Bienvenue sur notre projet !</h1>
            <h2>Découvrez le travail de Dzianis Yudzitski et de Kuchukhidze Mikhail (Groupe 688R)</h2>
            <h3>Veuillez chosir l'exercice que vous souhaitez de voir </h3>

            <div class="test">
                <?php include 'dropdowns.php' ?>
            </div>

        </div>

    </div>



    <!-- banner -->

</body>

</html>