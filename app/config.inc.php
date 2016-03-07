<?php   
//    $nombreServidor  = 'localhost';
//    $nombreUsuario   = 'root';
//    $password        = 'Emilio55';
//    $nombreBaseDatos = 'blog';

//info de la base de datos:

    define('NOMBRE_SERVIDOR', 'localhost');
    define('NOMBRE_USUARIO', 'root');
    define('PASSWORD', 'Emilio55');
    define('NOMBRE_BD', 'blog');
    
    //rutas de la web;
    define("SERVIDOR", "http:localhost:8090/blog");
    define("RUTA_REGISTRO", SERVIDOR."/registro.php");
    define("RUTA_REGISTRO_CORRECTO", SERVIDOR."/registro-correcto.php");
    define("RUTA_LOGIN", SERVIDOR."/login.php");
    
?>