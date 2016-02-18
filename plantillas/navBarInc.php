<?php 
    include_once './app/ConexionInc.php';
    include_once 'app/RepositorioUsuarioInc.php';
    Conexion :: abrirConexion() . "<br/>";                                
    $totalUsuarios = RepositorioUsuario::obtenerNumeroUsuarios(Conexion::obtenerConexion());  
    Conexion :: cerrarConexion(). "<br/>";
?>


<nav class="navbar navbar-default navbar-static-top">
            <div class="container"> 
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Este botón despliega la barra de navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Blog Emilio</a>   
                </div>                       
                <div class="navbar-collapse collapse" id="navbar">
                  <ul class="nav navbar-nav">
                    <li><a href="#"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>Entradas</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Favoritos</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-education" aria-hidden="true"></span>Autores</a></li>                                       
                  </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                <?php 
                                //Llamode forma statica el método AbrirConexion de la clase Conexion:
                                                              
                                print count($totalUsuarios); 
                                
                                ?>
                            </a>
                        </li>
                        
                        <li><a href="#"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>Iniciar Sesión</a></li>
                        <li><a href="registro.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Registro</a></li>
                    </ul>
                </div>
           </div>
        </nav>