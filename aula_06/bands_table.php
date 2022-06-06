<?php

$bands = [
  ["Iron Maiden", 1975],
  ["Black Sabbath", 1968],
  ["Audioslave", 2001],
  ["Rolling Stones", 1962]
];

?>

<h1>Bandas</h1>

<table border="1" cellspacing="1" cellpadding="10">
  <thead>
    <th>Nome</th>
    <th>Data de criação</th>
  </thead>
  <tbody>
    <?php

    foreach ($bands as $band) {
      echo "
      <tr>
        <td>{$band[0]}</td>
        <td>{$band[1]}</td>
      </tr>";
    }

    ?>

  </tbody>
</table>
