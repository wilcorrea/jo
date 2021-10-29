<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

$description = $_POST['description'] ?? 'Não veio';
// salvei coisa no banco
// consultei API de terceiros
// mandei email pra minha tia
echo 'sucesso: ', $description;
