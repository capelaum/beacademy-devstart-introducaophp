<?php

$name = "luis"; // Luis
$lastName = "CAPELLETTO"; // Capelletto

$name2 = "chico dA silva"; // Chico Da Silva

function formatName(string $name): string
{
  return ucwords(strtolower($name));
}

echo formatName($name) . PHP_EOL;
echo formatName($lastName) . PHP_EOL;
echo formatName($name2) . PHP_EOL;
