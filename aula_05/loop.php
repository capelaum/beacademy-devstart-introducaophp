<?php
$year = date("Y");
// echo gettype($year);
?>

<select>
  <option value=""> -- Selecione o ano -- </option>
  <?php

  for ($year = date("Y"); $year >= 1900; $year--) {
    echo "<option>{$year}</option>";
  }

  // while ($year >= 1900) {
  //   echo "<option>{$year}</option>";
  //   $year--;
  // }

  ?>
</select>
