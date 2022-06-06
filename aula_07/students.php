<?php

$s1 = [
  "nome" => "Luis",
  "email" => "luis@email.com",
  "telefone" => "71 99202-3993",
  "notas" => [9, 8.9, 7.5, 6]
];

$s2 = [
  "nome" => "Sabrine",
  "email" => "sabrine@email.com",
  "telefone" => "61 99203-3995",
  "notas" => [7, 6.4, 2, 6.4]
];

$s3 = [
  "nome" => "Ze",
  "email" => "ze@email.com",
  "telefone" => "51 81203-3995",
  "notas" => [9.5, 9, 7.5, 8]
];

$s4 = [
  "nome" => "Caio",
  "email" => "caio@email.com",
  "telefone" => "21 81203-3995",
  "notas" => [9.5, 9, 7.5, 8]
];

$students = [$s1, $s2, $s3, $s4];

// var_dump($students);

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">



<div class="container">
  <h1 class="mt-5">Estudantes</h1>
  <hr>
  <table class="table table-hover table-striped mt-5">
    <thead class="table-dark">
      <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Notas</th>
      </tr>
    </thead>
    <tbody>
      <?php


      foreach ($students as $student) {
        $str_grades = implode(" | ", $student['notas']);

        echo "
      <tr>
        <td>{$student['nome']}</td>
        <td>{$student['email']}</td>
        <td>{$student['telefone']}</td>
        <td>{$str_grades}</td>
      </tr>";
      }

      ?>
    </tbody>
  </table>
</div>
