<html>

<head>
  <?php include 'head.php' ?>
  <title>Ajouter un utilisateur</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>



  <!-- header -->

  <!-- banner -->
  

    <div class="banner">
      <img src="img/fond.jfif" alt="fond d'écran" class="banner-image" width="100%" height="100%">

      <div class="banner-content">
        <h1>Ajouter un utilisateur </h1>
      </div>
    </div>

    <div class="ajout">
    <form action="ajouter.php" method="POST">
      Prénom :
      <input type="text" name="firstname"> <br>
      Nom :
      <input type="text" name="lastname"> <br>
      Email :
      <input type="text" name="Email"> <br> 
      Portable :
      <input type="text" name="Phone"> <br> 
      Adresse :
      <input type="text" name="adress"> <br> 

      <input type="hidden" name="form_submitted" value="1" />

      <input type="submit" value="Ajouter" name='ajouter'>


    </form>


    <?php
    try {
      $bdd = new PDO('mysql:host=localhost;dbname=exercice_introphp;charset=utf8', 'root', '');
    } catch (Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }




    if (isset($_POST['ajouter'])) {

      //on sauvegarde dans le fichier $req et on l'execute après

      $req = $bdd->prepare('INSERT INTO users(`FirstName`, `LastName`, `EmailId`, `ContactNumber`, `Address`, `InscriptionDate`)
    VALUES(:prenom,:nom,:mail,:numero,:adresse,NOW())');
      $req->bindValue(':prenom', $_POST['firstname']);
      $req->bindValue(':nom', $_POST['lastname']);
      $req->bindValue(':mail', $_POST['Email']);
      $req->bindValue(':numero', $_POST['Phone']);
      $req->bindValue(':adresse', $_POST['adress']);
      $req->execute();
      echo ("Le joueur a bien été ajouté !");

      header("Location: lister.php");
    }


    // On ajoute une entrée dans la table jeux_video


    ?>
  </div>
  <header class="header">
    <a href="index.php" class="header-logo">Acceuil</a>
    <nav class="header-menu">



      <?php include 'dropdowns.php' ?>
    </nav>


  </header>




</body>

</html>