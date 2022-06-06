<?php

$url = $_SERVER['REQUEST_URI'];

const BASE_URL = "/DevStart/Sprints/Sprint_5_PHP/modulo_01/aula_09";

include 'views/head.php';
include 'views/menu.php';
include 'actions.php';

match ($url) {
  BASE_URL . "/" => home(),
  BASE_URL . "/login" => login(),
  BASE_URL . "/cadastro" => register(),
  BASE_URL . "/lista" => listing(),
  BASE_URL . "/relatorios" => reports(),
  default => error404(),
};

include 'views/footer.php';
