


<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=exercice_introphp;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
if(isset($_GET['id'])) {
    $req = $bdd->prepare('DELETE FROM users WHERE id = :id');
    $req->bindValue(':id', $_GET['id']);
    $req->execute();
}

header("Location: lister.php");
