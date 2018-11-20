<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercise</title>
  </head>
  <body>
    <p>Créer 3 variables.
      Dans la première mettre le résultat de l'opération 3 + 4.
      Dans la deuxième mettre le résultat de l'opération 5 * 20.
      Dans la troisième mettre le résultat de l'opération 45 / 5.
      Afficher le contenu des variables.
    </p>
    <?php
    $result1 = 3 + 4;
    $result2 = 5 * 20;
    $result3 = 45 / 5;
    ?>
    <p>Le résultat de l'opération 3 + 4 est <?php echo $result1; ?>.</p>
    <p>Le résultat le résultat de l'opération 5 * 20 est <?php echo $result2; ?>.</p>
    <p>Le le résultat de l'opération 45 / 5 est <?php echo $result3; ?>.</p>
  </body>
</html>
