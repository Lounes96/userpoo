<?php

require_once('class_database.php');
  $connexion = new Database('db5000303638.hosting-data.io', 'dbs296625', 'dbu526569', '*8y.4YNe');
  $bdd = $connexion->PDOConnexion();

  require_once('User.php');



$email = !empty($_POST['email']) ? $_POST['email'] : NULL;
$pass = !empty($_POST['pass']) ? $_POST['pass'] : NULL;

$user1 = new User($email, $pass);
$user1->connexion($bdd);

?>
