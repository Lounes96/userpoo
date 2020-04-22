<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

require_once('class_database.php');
  $connexion = new Database('db5000303638.hosting-data.io', 'dbs296625', 'dbu526569', '*8y.4YNe');
  $bdd = $connexion->PDOConnexion();

?>

<div class="title-dada-affiche">
    <h2>A l'affiche</h2>
</div>


<div class="center slider">

<?php

$req = $bdd->prepare("SELECT affiche ,id_film FROM Film");
$req ->execute();

while( $donnees = $req->fetch()) { ?>

    <a class="link-poster" href="parasite.php?id=<?php echo $donnees['id_film']; ?>"><img src=<?php echo $donnees['affiche']; ?> alt=""></a> 

<?php } ?>
    
</body>
</html>






