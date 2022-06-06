<?php

declare(strict_types=1);

function showNames(array $names): void
{
  foreach ($names as $name) {
    echo "Nome: {$name}" . PHP_EOL;
  }
}

$names = [
  "Luis",
  "Carol",
  "Vini",
  "João",
];

showNames($names);
