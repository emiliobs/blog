<?php 
    include_once './app/config.inc.php';
    include_once './app/ConexionInc.php';
    include_once './app/RepositorioUsuarioInc.php';
    include_once './app/Redireccion.inc.php';
    
    if (isset($_GET["txtNombre"]) && !empty($_GET["txtNombre"]))
    {
        print $_GET["txtNombre"] . "</br>";
    }
    else
    {
        print 'No hay nombre';
    }  
    
    if (isset($_GET["txtId"]) && !empty($_GET["txtId"]))
    {
        print $_GET["txtId"];
    }
    else
    {
        print 'No hay txtId';
    }  
?>