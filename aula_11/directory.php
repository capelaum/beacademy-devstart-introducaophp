<?php

mkdir('test');
mkdir('test/photos');

$year = date('Y');
mkdir('test/photos/' . $year);
