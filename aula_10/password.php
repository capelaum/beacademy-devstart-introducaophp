<?php

// Base64 - Da para reverter

$password = '123456';
$code = 'MTIzNDU2';

echo base64_encode($password) . PHP_EOL;
echo base64_decode($code) . PHP_EOL;
