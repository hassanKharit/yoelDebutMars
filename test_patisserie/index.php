<!-- ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<?php

$PDO=new PDO('mysql:host=127.0.0.1;port=3306;dbname=boulangerie', 'root','');


$sql = "SELECT * FROM patisserie";

$resultat = $PDO -> query($sql);

$tab = $resultat->fetchAll();

//autre facon d'ecrire fetchall
// $tab = [];
// foreach($resultat->fetch() as $line) {
//     $tab[] = $line;
// }



?>
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <?php foreach ($tab as $patisserie) { ?>
        
        <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <a href="unepatisserie.php"><?=$patisserie['id']?></a>
        <h5 class="card-title"><?=$patisserie['titre']?></h5>
        
        <p class="card-text"><?=$patisserie['prix']?></p>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>