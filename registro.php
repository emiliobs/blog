<?php 
 error_reporting(0);
     include_once './app/RepositorioUsuarioInc.php';
    include_once './app/UsuarioInc.php';
    include_once './app/ConexionInc.php';
    include_once './app/VAlidadorRegistros.php';
  
    if (isset($_POST['btnEnviar'])) 
   {
        Conexion ::abrirConexion();
        
        
        
       $validador = new VAlidadorRegistro ($_POST['txtNombre'],$_POST['txtEmail'],$_POST['txtClave1'],$_POST['txtClave2'], 
                                           Conexion :: obtenerConexion()); 
       
        if ($validador -> registroValido())
      {
        $usuario = new Usuario('', $validador->ontenerNombre(), $validador->obtenerEmail(), $validador->obtenerClave(),'','');
        $usuarioInsertado = RepositorioUsuario::insertarUsuario(Conexion::obtenerConexion(), $usuario);
        
        if ($usuarioInsertado)
        {
            //Redirigir a Login:
            
        }
      }
      
      
      Conexion::cerrarConexion();
   }
   
  
    
   $titulo ="Registro.....";
    include_once './plantillas/documentoDlaracionInc.php';
    include_once './plantillas/navBarInc.php';
    
    
   
?>

<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Formulario de Registro.</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        Instrucciones.
                    </h5>
                 </div>
                    <div class="panel-body">
                        <br>
                        <p class="text-justify">
                            Para unirte al Blog Emilio., introduce un nombre de usuario, tu email y una contraseña.
                            El email que escribas debe ser real ya que lo necesitras para gestionar tu cuenta.
                            Te recomendamos que  uses una contraseña que contenga letras minúsculas, mayúsculas, números y símbolos.
                        </p>
                        <br>
                        <a href="#">¿Ya tienes cuneta.?</a>
                        <br>
                        <br>
                        <a href="#">¿Olvidaste tu contraseña.?</a>
                        <br>
                        <br>
                    </div>
              
            </div>
        </div>
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Introduce tus Datos.
                    </h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="<?php print $_SERVER['PHP_SELF']; ?>">                        
                        <?php 
                        if (isset($_POST['btnEnviar']))
                        {
                            include_once './plantillas/RegistroValidadoInc.php';
                        }
                        else
                        {
                           include_once './plantillas/RegistroiVacioInc.php';
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>

<?php 
    include_once './plantillas/documentoCierreInc.php';
?>