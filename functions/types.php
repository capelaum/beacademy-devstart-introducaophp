<?php

declare(strict_types=1);

function welcome(string $name): string
{
  return "Welcome {$name}";
}

function sum(float $n1, float $n2): float
{
  return $n1 + $n2;
}

echo sum(100.88, 30);

echo PHP_EOL;

echo welcome("Luis");
