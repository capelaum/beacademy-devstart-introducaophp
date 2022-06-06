<form action="" method="post">
  <input type="text" name="name" id="name" placeholder="Digite seu nome">
  <input type="text" name="city" id="city" placeholder="Digite sua cidade">

  <button>Enviar</button>
</form>

<?php
if ($_POST) {
  echo "Olá, {$_POST['name']} da cidade {$_POST['city']}";
}

?>
