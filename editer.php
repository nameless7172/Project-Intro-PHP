<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=exercice_introphp;charset=utf8', 'root', '');
} catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}

if (!isset($_GET['id']) && !isset($_POST['id'])) {
  header("Location: lister.php");
} else if (isset($_POST['id'])) {
  // Update
  $req = $bdd->prepare('UPDATE users SET `FirstName` = :prenom, `LastName` = :nom, `EmailId` = :mail, `ContactNumber` = :numero, `Address` = :adresse WHERE id = :id');
  $req->bindValue(':id', $_POST['id']);
  $req->bindValue(':prenom', $_POST['firstname']);
  $req->bindValue(':nom', $_POST['lastname']);
  $req->bindValue(':mail', $_POST['Email']);
  $req->bindValue(':numero', $_POST['Phone']);
  $req->bindValue(':adresse', $_POST['adress']);
  $req->execute();

  header("Location: lister.php");
}

$req = $bdd->prepare('SELECT * FROM users WHERE id = :id');
$req->bindValue(':id', $_GET['id']);
$req->execute();

$donnees = $req->fetch();
// Si utilisateur n'est pas trouvé
if (!isset($donnees)) {
  header("Location: lister.php");
}
?>

<html>

<head>
  <?php include 'head.php' ?>
  <title>Éditer un utilisateur</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
  <div class="banner">
    <img src="img/fond.jfif" alt="fond d'écran" class="banner-image" width="100%" height="100%">

    <div class="banner-content">
      <h1>Editer un utilisateur </h1>
    </div>
  </div>



  <header class="header">
    <a href="index.php" class="header-logo">Acceuil</a>
    <nav class="header-menu">



      <?php include 'dropdowns.php' ?>
    </nav>


  </header>

  <div class="editer">
    <h2>Editer un utilisateur</h2>

    <form action="editer.php" method="POST">
      Prénom :
      <input type="text" name="firstname" value="<?php echo $donnees['FirstName']; ?>"> <br>
      Nom :
      <input type="text" name="lastname" value="<?php echo $donnees['LastName']; ?>"> <br>
      Email :
      <input type="text" name="Email" value="<?php echo $donnees['EmailId']; ?>"> <br> :
      Portable :
      <input type="text" name="Phone" value="<?php echo $donnees['ContactNumber']; ?>"> <br> :
      Adresse :
      <input type="text" name="adress" value="<?php echo $donnees['Address']; ?>"> <br> :

      <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>" />
      <input type="submit" value="Éditer">
    </form>
  </div>
</body>

</html>