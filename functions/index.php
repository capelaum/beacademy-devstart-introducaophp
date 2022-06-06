<?php

declare(strict_types=1);

function sum(float $n1, float $n2): float
{
  return $n1 + $n2;
}

echo sum(10, 20);

echo PHP_EOL . "-------------" . PHP_EOL;

echo sum(100.88, 30);
