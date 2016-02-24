<?php 
    
class Conexion 
{
    //Solo pude ser utilizada en esta clase:
    private static $conexion;
    
    public static function abrirConexion()
    {
        if (!isset(self::$conexion))
        {
            try 
            {
                include_once 'config.inc.php';
                
                //mysqli-solo trabjasa para myqly y mas rapidp:
                //pdo-trabja con 20Db, más lento(más versatilidad):
                self::$conexion = new PDO('mysql:host='. NOMBRE_SERVIDOR .'; dbname='. NOMBRE_BD ,NOMBRE_USUARIO,PASSWORD);
                self::$conexion->SetAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
                self::$conexion->exec("SET CHARACTER SET utf8");
                
//                //PRUEBA DE CONEXIÓN:
//                print 'CONEXIÓN ABIERTA....<br/>';
            }
            catch (PDOException $ex)
            {
                print 'ERROR: ' .$ex->getMessage() . '<br>' ;
                die();
            }
        }
    }
    
    public static function cerrarConexion()
    {
        
        if (isset(self::$conexion))
        {
            self::$conexion=NULL;
//            //PRUEBA DE CONEXIÓN.
//            print 'CONEXIÓN CERRADA......';
        }
        
    }
    
    public static function obtenerConexion()
    {
        return self::$conexion;
    }

}

?>