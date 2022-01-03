<?php
  require_once "Personnage.php";
  $newPerso = new Personnage("Bob", 10, 2, 15, "invisibility", ["Epée", "gourde"]);

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
  <?php
    var_dump($newPerso);

    $newPerso->displayStats();
  ?>
</body>
</html>