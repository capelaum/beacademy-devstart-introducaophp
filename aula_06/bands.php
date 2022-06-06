<?php

$bands = [
  "Iron Maiden",
  "Black Sabbath",
  "Audioslave",
  "Rolling Stones"
];

$bands[100] = "Nirvana";

?>
<h1>Bandas</h1>
<ul>
  <?php

  foreach ($bands as $band) {
    echo "<li>$band</li>";
  }

  ?>
</ul>
