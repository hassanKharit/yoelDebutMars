<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Docu
    <title>Document</title>
</head>
<body>

<?php

$id=$_GET['id'];

$PDO=new PDO('mysql:host=127.0.0.1;port=3306;dbname=boulangerie', 'root','');
$sql = "SELECT * FROM patisserie where id=$id";

$resultat = $PDO -> query($sql);

$tab = $resultat->fetch();
?> 

<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <a href=index.php?id=<?=$tab['id']?>><?=$tab['titre']?></a>
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text"></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
</div>
  

</body>
</html>


