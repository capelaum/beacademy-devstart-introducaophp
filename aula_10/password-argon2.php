<?php

// Mais forte -> demanda mais processamento

$password = '123456';
echo password_hash($password, PASSWORD_ARGON2I) . PHP_EOL;
