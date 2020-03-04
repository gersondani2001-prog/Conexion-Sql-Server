<!-- Declaracion de PHP para inicializar la conexion a la base de datos sql server -->
<?php
    // nombre de servidos
    $serverName = "localhost\SQLEXPRESS";
    // variables que utilizaremos
    // database nombre de la base de datos
    // uid nombre de usuario
    // pwd contraseña del usuario
    // characterset caracteres especiales colocados
    $connectionInfo = array(  "Database" => "TELEFONIA", "UID" => "dbWeb", "PWD" => "12345", "CharacterSet" => "UTF-8" );
    // declaracion de variable de sql coneccion
    // funcion sqlsrv_connect() para la conexion 
    // enlazar servidor y datos especiales
    $conn_sis = sqlsrv_connect($serverName, $connectionInfo);

    // decidir el servidor local si o no entra o enlaza la base de datos
    // declaracion de sentenia
    // decir si hay conexion
    if($conn_sis){
        // lanzar mensaje exitosa
        echo "Conexion exitosa";
    }
    // lanzar mensaje de error de enlaze
    else{
        echo "Fallo en la conexion";
        // mostrar error porque existe ese error
        die( print_r(sqlsrv_errors(), true) );
    }
?>