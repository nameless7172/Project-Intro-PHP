<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=exercice_introphp;charset=utf8', 'root', '');
} catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('SELECT * FROM users');

$req->execute();
?>

<!DOCTYPE html>
<html lang="en">
<!--- head --->

<head>
  <meta charset="utf-8">

  <!--- CSS --->
  <link rel="stylesheet" href="main_S4.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!--- CSS --->




  <!--JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!--JQuery -->



  <!--BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <!--BOOTSTRAP -->

  <!--- Font --->
  <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/687df4a78a.js" crossorigin="anonymous"></script>

  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

  <!--- Font --->

</head>

<body class="bg-light">
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
      <h1> SERIE 4 </h1>

    </div>
  </div>
  
  <div class="serie4">
  
  <div class="container pt-5">
  <a class="btn btn-success" href="ajouter.php">AJOUTER UTILISATEUR</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Email</th>
          <th scope="col">Contact</th>
          <th scope="col">Adresse</th>
          <th scope="col">Date d'inscription</th>
          <th scope="col">Éditer</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>

      
        <?php

        while ($donnees = $req->fetch()) {
        ?>
          <tr>
            <th scope="row"><?php echo $donnees['id']; ?></th>
            <td><?php echo $donnees['FirstName']; ?></td>
            <td><?php echo $donnees['LastName']; ?></td>
            <td><?php echo $donnees['EmailId']; ?></td>
            <td><?php echo $donnees['ContactNumber']; ?></td>
            <td><?php echo $donnees['Address']; ?></td>
            <td><?php echo $donnees['InscriptionDate']; ?></td>
            <td><a href="editer.php?id=<?php echo $donnees['id'] ?>" class="btn btn-primary">Éditer</a></td>
            <td><a href="supprimer.php?id=<?php echo $donnees['id'] ?>" class="btn btn-danger">Supprimer</a></td>
          </tr>
        <?php
        }

        $req->closeCursor();
        ?>
        
      </tbody>
    </table>
  </div>
</body>

</html>