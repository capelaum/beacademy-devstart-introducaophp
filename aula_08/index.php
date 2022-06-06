<?php

$url = $_SERVER['REQUEST_URI'];

$result = match ($url) {
  '/' => "<h1>Página inicial</h1>",
  '/login' => "<h1>Página de Login</h1>",
  '/cadastro' => "<h1>Página de Cadastro</h1>",
  default => "<h1>Página não encontrada</h1>",
};

echo $result;
