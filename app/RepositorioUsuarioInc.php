<?php 
  
    class RepositorioUsuario
    {
        public static function obtenerTodos($conexion)
        {
            $usuarios = array();
                        
            if (isset($conexion))
            {
                try 
                {
                    include_once 'UsuarioInc.php';
                    
                    $sql = 'SELECT * FROM usuarios';
                    
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();                    
                    $resulrado = $sentencia->fetchAll();
                    
                    if (count($resulrado))
                    {
                        foreach ($resulrado as $fila) 
                        {
                            $usuarios[] = new Usuario(
                             //`Id`, `Nombre`, `Email`, `Password`, `FechaRegistro`, `Activo`       
                                    $fila['Id'],
                                    $fila['Nombre'],
                                    $fila['Email'],
                                    $fila['Password'],
                                    $fila['FechaRegistro'],
                                    $fila['Activo']
                                    
                                    );
                        }
                    }
                    else
                    {
                        print 'NO hay Usuarios......';
                    }
                } 
                catch (PDOException $ex) 
                {
                    print 'ERROR: ' .$ex->getMessage();
                }
            }
            
            return $usuarios;
        }
        
        public static function obtenerNumeroUsuarios($conexion)
        {
            $totalUsuarios= null;
            
            if (isset($conexion))
            {
                try 
                {
                    $sql = "select count(*) as total from usuarios";
                    
                    $sentencia = $conexion->prepare($sql);
                    $sentencia-> execute();
                    $resultado = $sentencia->fetch();
                    
                    $totalUsuarios = $resultado['total'];
                } 
                catch (PDOException $ex) 
                {
                    print 'ERROR: ' . $ex->getMessage();
                }
            }
            
            return $totalUsuarios;
        }
        
        //insertar usuarios:
        public static function insertarusuario($conexion, $usuario)
        {
            $usuarioInsertado = FALSE;
            
            if (isset($conexion))
            {
                try 
                {
                    $aql = "insert into usuarios(Nombre, Email, Password, FechaRegistro,Activo) Values (:nombre,:email,:password,NOW(),0)";
                    
                    $sentencia = $conexion -> prepare($aql);
                    
                    $sentencia  -> bindParam(':nombre',   $usuario -> obtenerNombre(),   PDO::PARAM_STR);
                    $sentencia  -> bindParam(':email',    $usuario -> obtenerEmail(),    PDO::PARAM_STR);
                    $sentencia  -> bindParam(':password', $usuario -> obtenerPassword(), PDO::PARAM_STR);
                    
                   $usuarioInsertado = $sentencia-> execute(); 
                    
                } 
                catch (PDOException $ex)
                {
                    print 'ERROR: '. $ex->getMessage();
                }
            }
            
            return $usuarioInsertado;
        }
        
        
        public static function nombreExiste($conexion, $nombre)
        {
            $nombreExiste = TRUE;
            
            if (isset($conexion))
            {
                try 
                {
                    $sql = "select *  from usuarios where nombre=:nombre";
                    
                    $sentencia = $conexion -> prepare($sql);
                    
                    $sentencia -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
                    
                    $sentencia -> execute();
                    
                    $resultado = $sentencia -> fetchAll();
                    
                    //comprobar cuando registro hay de acuerdo al parametro $nombre:
                    if (count($resultado))
                    {
                        $nombreExiste = TRUE;
                    }
                    else
                    {
                        $nombreExiste = FALSE;
                    }
                }
                catch (PDOException $ex) 
                {
                    print 'ERROR: '. $ex->getMessage();
                }
            }
            
            return $nombreExiste;
        }
        
        public static function emailExiste($conexion, $email)
        {
            $emailExiste = TRUE;
            
            if (isset($conexion))
            {
                try 
                {
                    $sql = "select * from usuarios where email=:email";
                    
                    $sentencia = $conexion -> prepare($sql);
                    
                    $sentencia -> bindParam(':email', $email, PDO::PARAM_STR);
                    
                    $sentencia -> execute();
                    
                    $resultado = $sentencia -> fetchAll();
                    
                    //comprobar cuando registro hay de acuerdo al parametro $nombre:
                    if (count($resultado))
                    {
                        $emailExiste = TRUE;
                    }
                    else
                    {
                        $emailExiste = FALSE;
                    }
                }
                catch (PDOException $ex) 
                {
                    print 'ERROR: '. $ex->getMessage();
                }
            }
            
            return $emailExiste;
        }
        
    }

?>