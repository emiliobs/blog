<?php 
    include_once './app/ConexionInc.php';
    include_once 'app/RepositorioUsuarioInc.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>     
        <meta http-equiv="X-UA-Compactible" content="IE=edge"/>
        <title>Blog Emilio Barrera..</title>
        <link rel="icon" href="img/icon-72x72.png" type="image/png" sizes="72x72"/>    
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> 
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container"> 
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Este botón despliega la barra de navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Blog Emilio</a>   
                </div>                       
                <div class="navbar-collapse collapse" id="navbar">
                  <ul class="nav navbar-nav">
                    <li><a href="#">Entradas</a></li>
                    <li><a href="#">Favoritos</a></li>
                    <li><a href="#">Autores</a></li>                                       
                  </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Iniciar</a></li>
                        <li><a href="#">Registro</a></li>
                    </ul>
                </div>
           </div>
        </nav>
        
        <div class="container">
            <div class="jumbotron">
                <h1>Blog de Emilio Barrera.!!</h1>
                <p>Blog dedicado a Emilio Barrera......</p>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5>
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Búsqueda
                                    </h5>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="search" class="form-control" placeholder="¿Qué Buscas.?"/>
                                    </div>
                                    <button class="form-control">Buscar.</button> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>
                            <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtro
                            </h5>
                        </div>
                        <div class="panel-body">
                            Aquí va el filtro...
                        </div>
                    </div>
                </div>
            </div>
                            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>
                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Archivo
                            </h5>
                        </div>
                        <div class="panel-body">
                            Aquíva archivo...
                        </div>
                    </div>
                </div>
            </div>
                </div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h5>
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>  Ültimas entradas
                          </h5>
                        </div>
                        <div class="panel-body">
                            <?php 
                                                               
                                //Llamode forma statica el método AbrirConexion de la clase Conexion:
                                Conexion :: abrirConexion() . "<br/>";
                                
                              
                                $usuarios = RepositorioUsuario::obtenerTodos(Conexion::obtenerConexion());
                                
                                print count($usuarios);
                                
                                
                                Conexion :: cerrarConexion(). "<br/>";
                            ?>
                            <p>Todavia no hay entradas que mostrar.......</p> 
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>        
    </body>
</html>