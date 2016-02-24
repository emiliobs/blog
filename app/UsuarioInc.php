<?php   
    
class  Usuario 
{
    //Atributos:
    private  $Id;
    private  $Nombre;
    private  $Email;
    private  $password;
    private  $FechaRegistro;
    private  $Activo;
            
    //Constructor:
    public function __construct($id,$nombre,$email,$password,$fechaRegistro,$activos) 
    {
        $this->Id            = $id;
        $this->Nombre        = $nombre;
        $this->Email         = $email;
        $this->password     = $password;
        $this->FechaRegistro = $fechaRegistro;
        $this->Activo        = $activos;
    }
    
    //Propiedades:
    
    //Getter
    public function obtenerId()
    {
        return $this->Id;
    }
    
    public function obtenerNombre()
    {
        return $this->Nombre;
    }
    
    public function obtenerEmail()
    {
        return $this->Email;
    }
    
    public function obtenerPassword()
    {
        return $this->password;
    }
    
    public function obtenerFechaRegistro()
    {
        return $this->FechaRegistro;
    }
    
    public function obtenerActivo()
    {
        return $this->Activo;
    }
     
    //Setter
    public function cambiarNombre($nombre)
    { 
        $this->Nombre = $nombre;
    }
    
    public function cambiarEmail($email)
    { 
        $this->Email = $email;
    }
    
    public function cambiarPassword($password)
    { 
        $this->password = $password;
    }       
    
//    public function cambiarFechaRegistro($fechaRegistro)
//    { 
//        $this->FechaRegistro = $fechaRegistro;
//    }       
    
    public function cambiarActivo($activo)
    { 
        $this->Activo = $activo;
    }       

}


    
?>