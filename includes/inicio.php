<?php 

require 'funciones.php';
require 'database.php';
require __DIR__ . '/../vendor/autoload.php';

// Conectarnos a la base de datos
use Modelos\Registros;
Registros::setDB($db);