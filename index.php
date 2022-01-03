<?php
  require_once "Personnage.php";
  
  $bob = new Personnage("Bob", 10, 2, 15, "invisibility", ["Epée", "gourde"]);

  $hercule = new Personnage("Hercule", 200, 158, 300, "Ultra-force", ["Poireau", "Ménir"]);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personnages</title>
</head>
<body>
  <h1>Fabrique de personnages</h1>

  <div>
    <h2> 1. Bob l'éponge le valeureux:</h2>

  <?php
    $bob->addItem("Allumettes");
    $bob->removeItem("gourde");
    $bob->displayStats();
    echo $bob->searchItem("epée");
    
  ?>
  </div>

  <div>
    <h2> 2. Hercule dit "la poutrelle":</h2>

  <?php
    $hercule->addItem("Boussole");
    // $hercule->removeItem("Boussole");
    $hercule->displayStats();
    echo $hercule->searchItem("Boussole");
    
  ?>
  </div>
</body>
</html>