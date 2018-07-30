<?php
  $firstNumber = 0;
  $secondNumber = 11;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2/3</title>
  </head>
  <body>
    <p>
      <?php
        while ($firstNumber < 20) {
          echo $firstNumber * $secondNumber;
          $firstNumber++;
      }
      ?>
    </p>
  </body>
</html>
