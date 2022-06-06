<?php

$gradesA = [10, 9, 9.5, 7, 2];
$gradesB = [10, 5, 3.5, 8, 7];

function averageGrade(array $grades): float
{
  return array_sum($grades) / sizeof($grades);
}

echo averageGrade($gradesA) . PHP_EOL;
echo averageGrade($gradesB) . PHP_EOL;
