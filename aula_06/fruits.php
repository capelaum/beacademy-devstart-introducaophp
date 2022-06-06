<?php

$fruits = [
  "Laranja",
  "Banana",
  "Abacaxi"
];

$fruits[] = "Maçã";

$fruits[10] = "Melância";
$fruits[7] = "Morango";

$fruits[] = "Tangerina";
$fruits[] = "Uva";

var_dump($fruits);

?>

<ul>
  <?php

  foreach ($fruits as $fruit) {
    echo "<li>{$fruit}</li>";
  }

  ?>
</ul>
