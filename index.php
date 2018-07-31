<?php
  $firstNumber = 0;
  $secondNumber = rand(0,100);
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
          echo $firstNumber * $secondNumber . ' ';
          $firstNumber++;
      }
/*Autre possibilité : la boucle for
      for ($firstNumber = 0; $firstNumber < 20; $firstNumber++) {
          echo $firstNumber * $secondNumber . ' ';
      }
*/
      ?>
    </p>
  </body>
</html>
