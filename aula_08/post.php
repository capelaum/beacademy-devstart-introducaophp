<form action="" method="POST">
  <input type="text" name="name" placeholder="Digite seu nome">

  <button>Enviar</button>
</form>


<?php

if ($_POST) {
  echo $_POST['name'];
}

?>
