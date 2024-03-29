<?php

 $db='';
        
//debuguear($db);
//Definición de las constantes para que pueda acceder a la BBDD
define ('DB_DSN','mysql:host=localhost;port=3036;dbname=appsalon');
define ('DB_USER','dwes');
define ('DB_PASSWD','abc123.'); 


//Conectamos a la base de datos:
try {
    $$db = new PDO(DB_DSN, DB_USER, DB_PASSWD, 
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e)
{
    echo "Error BBDD. No se puede continuar. Revisa el valor de las constantes DB_USER y DB_PASSWD en el archivo database.php.";
    exit;
}



/**  $db = mysqli_connect('localhost:3036', 'admintienda', 'admintienda', 'appsalon');


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    //exit;
}

*/