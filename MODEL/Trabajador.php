<?php
  require_once("conexion.php");
  require_once("Empresa.php");
  class Trabajador
    {
      private $id_rut;
      private $nombre;
      private $apellido_m;
      private $apellido_p;
      private $mail;
      private $pass;
      private $telefono;
      private $cargo;
      private $empresa;

      public function __construct()
      {

      }

      /**
       * Get the value of id_rut
       */ 
      public function getId_rut()
      {
            return $this->id_rut;
      }

      /**
       * Set the value of id_rut
       *
       * @return  self
       */ 
      public function setId_rut($id_rut)
      {
            $this->id_rut = $id_rut;
      }

      /**
       * Get the value of nombre
       */ 
      public function getNombre()
      {
            return $this->nombre;
      }

      /**
       * Set the value of nombre
       *
       * @return  self
       */ 
      public function setNombre($nombre)
      {
            $this->nombre = $nombre;
      }

      /**
       * Get the value of apellido_m
       */ 
      public function getApellido_m()
      {
            return $this->apellido_m;
      }

      /**
       * Set the value of apellido_m
       *
       * @return  self
       */ 
      public function setApellido_m($apellido_m)
      {
            $this->apellido_m = $apellido_m;
      }

      /**
       * Get the value of mail
       */ 
      public function getMail()
      {
            return $this->mail;
      }

      /**
       * Set the value of mail
       *
       * @return  self
       */ 
      public function setMail($mail)
      {
            $this->mail = $mail;
      }

      /**
       * Get the value of pass
       */ 
      public function getPass()
      {
            return $this->pass;
      }

      /**
       * Set the value of pass
       *
       * @return  self
       */ 
      public function setPass($pass)
      {
            $this->pass = $pass;
      }

      /**
       * Get the value of telefono
       */ 
      public function getTelefono()
      {
            return $this->telefono;
      }

      /**
       * Set the value of telefono
       *
       * @return  self
       */ 
      public function setTelefono($telefono)
      {
            $this->telefono = $telefono;
      }

      /**
       * Get the value of cargo
       */ 
      public function getCargo()
      {
            return $this->cargo;
      }

      /**
       * Set the value of cargo
       *
       * @return  self
       */ 
      public function setCargo($cargo)
      {
            $this->cargo = $cargo;
      }

      /**
       * Get the value of empresa
       */ 
      public function getEmpresa()
      {
            return $this->empresa;
      }

      /**
       * Set the value of empresa
       *
       * @return  self
       */ 
      public function setEmpresa($empresa)
      {
            $this->empresa = $empresa;
      }

      /**
       * Get the value of apellido_p
       */ 
      public function getApellido_p()
      {
            return $this->apellido_p;
      }

      /**
       * Set the value of apellido_p
       *
       * @return  self
       */ 
      public function setApellido_p($apellido_p)
      {
            $this->apellido_p = $apellido_p;
      }

      public function login_trabajador(){
        $conn=new Conexion();
        $conexion=$conn->conectar();
        $sql="SELECT * FROM trabajador WHERE mail='".$this->mail."' AND pass='".$this->pass."'";
        $result = $conexion->query($sql);
        $t=new Trabajador();
        $emp=new Empresa();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $t->setApellido_m($row["apellido_m"]);
            $t->setApellido_p($row["apellido_p"]);
            $t->setId_rut($row["id_rut"]);
            $t->setNombre($row["nombre"]);
            $t->setMail($row["mail"]);
            $t->setPass($row["pass"]);
            $t->setTelefono($row["telefono"]);
            $t->setCargo($row["cargo"]);
            $emp->setRut_empresa($row["empresa"]);
            $t->setEmpresa($emp->getbyId());
        }
        return $t;
        $conexion->close();
      }
  }
?>