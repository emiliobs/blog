<?php 

    class VAlidadorRegistro 
    {
        
        private $avisoInicio;
        private $avisoCierre;


        private $nombre;
        private  $email;
        private $clave;


        private  $errorNombre;
        private  $errorEmail;
        private  $errorClave1;
        private  $errorClave2;
        
        
        
        public function  __construct($nombre, $email, $clave1, $clave2)
        {
            $this->avisoInicio = "<br><div class = 'alert alert-danger' role='alert'>";
            $this->avisoCierre = "</div>";
            
            $this->nombre = "";
            $this->email  = "";
            $this->clave = "";
            
            $this->errorNombre = $this->validarNombre($nombre);
            $this->errorEmail  = $this->validarEmail($email);
            $this->errorClave1 =  $this->validarClave1($clave1);
            $this->errorClave2 = $this->validarClave2($clave1,$clave2);
            
            if ($this->errorClave1 === "" && $this->errorClave2 === "")
            {
                $this->clave = $clave1;
            }
        }
        
        
        private function variableIniciada($variable)
        {
            if (isset($variable) && !empty($variable))
            {
                return TRUE;
            }
            else
            {
                FALSE;
            }
        }
        
        private function  validarNombre($nombre)
        {
            if (!$this->variableIniciada($nombre))
            {
                return 'Debes escribir un Nombre de usuario.';
            }
            else
            {
                $this->nombre = $nombre;
            }
              
            if (strlen($nombre) < 6) 
            {
                return "El nombre debe ser más largo que  6 caracteres.";
            }
            if (strlen($nombre) > 25)
             {
                return "El nombre no puede ser más de 24 caracteres.";
            }
            
            return "";
        }
        
        private function validarEmail($email)
        {
            if (!$this->variableIniciada($email))
            {
                return 'Debes proporcionar un Email.';
            }
            else
            {
                $this->email = $email;
                
            }
            
            return "";  
        }
        
        public function validarClave1($clave1) 
        {
            if (!$this->variableIniciada($clave1))
            {
                return 'Debe ingresar una Contraseña.';
            }
            return "";
        }
        
        public function validarClave2($clave1,$clave2) 
        {
            if (!$this->variableIniciada($clave1))
            {
                return 'Primero debes escribir la contrseña.';
            }
            
            if (!$this->variableIniciada($clave2))
            {
                return 'Debe repetir su contraseña.';
            }
            
            if ($clave1 !== $clave2)
            {
                return "Ambas contraseñas deben coincidir.";
            }
            
            return "";
        }
        
       public function ontenerNombre()
        {
            return $this->nombre;
        }
        
        public function  obtenerEmail()
        {
            return $this->email;
        }
        
        public function obtenerClave()
        {
            return $this->clave;
        }
        

        public function obtenerErrorNombre()
        {
            return $this->errorNombre;
        }
        
        public function obtenerErrorEmail()
        {
            return $this->errorEmail;
        }
        
        public function obtenerErrorClave1()
        {
            return $this->errorClave1;
        }
        
        public function obtenerErrorClave2()
        {
            return $this->errorClave2;
        }
        
        public function mostrarNombre()
        {
            if ($this->nombre !== "")
            {
              print 'value = " ' . $this->nombre . ' " '; 
            }
        }
       
        public function mostrarErrorNombre()
        {
            if ($this->errorNombre !== "")
            {
                print $this->avisoInicio . $this->errorNombre . $this->avisoCierre;
            } 
        }
        
         public function mostrarEmail()
        {
            if ($this->email !== "")
            {
              print 'value = " ' . $this->email . ' " '; 
            }
        }
        
        public function mostrarErrorEmail()
        {
            if ($this->errorEmail !== "")
            {
                print $this->avisoInicio . $this->errorEmail . $this->avisoCierre;
            } 
        }        
        
        
        public function mostrarErrorClave1()
        {
            if ($this->errorClave1 !== "")
            {
                print $this->avisoInicio . $this->errorClave1 . $this->avisoCierre;
            } 
        }       
        
        
        public function mostrarErrorClave2()
        {
            if ($this->errorClave2 !== "")
            {
                print $this->avisoInicio . $this->errorClave2 . $this->avisoCierre;
            } 
        }
        
        public function registroValido()
        {
            if ($this->errorNombre === "" &&
                $this->errorEmail  === "" &&
                $this->errorClave1 === "" &&
                $this->errorClave2 === ""
                )
            {
                    return TRUE;                
            }
            else
            {
                return FALSE;
            }
        }
    
    }


?>