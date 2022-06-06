<?php

$file = fopen('products.csv', 'a+');

fwrite($file, "Chinelo;30.25\n");
fwrite($file, "Café;20.50\n");

fclose($file);
