<?php

require_once "vendor/autoload.php";

use Diego\DigitalCep\Search;

$busca = new Search();

$resultado = $busca->getAddressFromZipcode('76829892');

print_r($resultado);

