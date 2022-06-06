<?php

$data = [
  "nome" => "Luis",
  "sobrenome" => "Capelletto",
  "cidade" => "Brasilia",
  "idade" => 28,
  "ano_formatura" => 2011,
  "cor" => "Azul"
];

var_dump($data);

echo "Nome:" . $data["nome"] . "<br>";
echo "Sobrenome:" . $data["sobrenome"] . "<br>";
echo "Cidade:" . $data["cidade"] . "<br>";
echo "Idade:" . $data["idade"] . "<br>";
echo "Ano de Formatura:" . $data["ano_formatura"] . "<br>";
echo "Cor:" . $data["cor"] . "<br>";
