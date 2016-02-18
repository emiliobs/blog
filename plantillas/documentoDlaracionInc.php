<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>     
        <meta http-equiv="X-UA-Compactible" content="IE=edge"/>
        <?php 
        if (!isset($titulo) || empty($titulo))
        {
            print "<title>".$titulo = 'Blog de Emilio.....'."</title>";
        }
        else
        {
            print "<title>$titulo</title>";
        }
            
        ?>        
        <link rel="icon" href="img/icon-72x72.png" type="image/png" sizes="72x72"/>    
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> 
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>