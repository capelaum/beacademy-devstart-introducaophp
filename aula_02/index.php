<form action="" method="post">
  <input type="number" name="n1" id="n1" placeholder="Digite o primeiro numero">
  <input type="number" name="n2" id="n2" placeholder="Digite o segundo numero">

  <br>
  <br>

  <button name="sum">Somar</button>
  <button name="subtract">Subtrair</button>
  <button name="multiply">Multiplicar</button>
  <button name="divide">Dividir</button>
</form>

<?php

if ($_POST) {
  if (isset($_POST['sum'])) {
    echo "SOMA: " . $_POST['n1'] + $_POST["n2"];
  }

  if (isset($_POST['subtract'])) {
    echo "SUBTRAÇÃO: " . $_POST['n1'] - $_POST["n2"];
  }

  if (isset($_POST['multiply'])) {
    echo "MULTIPLICAÇÂO: " . $_POST['n1'] * $_POST["n2"];
  }

  if (isset($_POST['divide'])) {
    echo "DIVISÂO: " . $_POST['n1'] / $_POST["n2"];
  }
}

?>
