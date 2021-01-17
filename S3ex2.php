<!DOCTYPE html>
<html>

<?php include 'head.php' ?>
<title>Serie 3 : Exercice 2</title>

<body>

      <div class="banner">
            <img src="img/fond.jfif" alt="fond d'écran" class="banner-image" width="100%" height="100%">

            <div class="banner-content">
                  <h1>EXERCICE 2 - SERIE 3 </h1>
                  <h3>Choisissez la région</h3>
                  <form action="#" method="post">
                        <select name="list">
                              <option value="France">Amazon France</option>
                              <option value="UK">Amazon UK</option>
                              <option value="Deustchland">Amazon Deustchland</option>
                              <option value="US">Amazon US</option>
                        </select>
                        <input type="submit" value="Visiter !" />
                  </form>
            </div>
      </div>


      <?php
      if (isset($_POST["list"])) {
            switch ($_POST['list']) {
                  case 'France':
                        header('location: http://amazon.fr/');
                        exit;

                  case 'US':
                        header('location: http://amazon.com/');
                        exit;

                  case 'UK':
                        header('location: http://amazon.co.uk');
                        exit;

                  case 'Deustchland':
                        header('location: http://amazon.de');
                        exit;

                  default:
                        header('location: S3ex2.php');
                        exit;
            }
      }
      ?>

      <header class="header">
            <a href="index.php" class="header-logo">Acceuil</a>
            <nav class="header-menu">
                  <?php include 'dropdowns.php' ?>
            </nav>


      </header>


</body>

</html>