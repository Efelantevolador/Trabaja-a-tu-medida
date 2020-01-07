<?php
  require_once("conexion.php");
  require_once("Empresa.php");
  class Trabajador
    {
      private $nombre;
      private $apellido_m;
      private $apellido_p;
      private $mail;
      private $pass;
      private $empresa;

      public function __construct()
      {

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

      public function getbyId(){
      $conn=new Conexion();
      $conexion=$conn->conectar();
      $sql="SELECT * FROM trabajador WHERE mail='".$this->mail."'";
      $result = $conexion->query($sql);
      $t=new Trabajador();
      if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $t->setApellido_m($row["apellido_m"]);
            $t->setApellido_p($row["apellido_p"]);
            $t->setNombre($row["nombre"]);
            $t->setMail($row["mail"]);
            $t->setPass($row["pass"]);
            $t->setEmpresa($row["empresa"]);
      }
        return $t;
        $conexion->close();
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
            $t->setNombre($row["nombre"]);
            $t->setMail($row["mail"]);
            $t->setPass($row["pass"]);
            $emp->setRut_empresa($row["empresa"]);
            $t->setEmpresa($emp->getbyId());
        }
        return $t;
        $conexion->close();
      }

      public function create(){
            $conn=new Conexion();
            $conexion=$conn->conectar();
            $sql="INSERT INTO trabajador VALUES('".$this->nombre."','".$this->apellido_m."','".$this->apellido_p."','".$this->mail."','".$this->pass."','".$this->empresa."')";
            if ($conexion->query($sql) === TRUE) {
                  return "exito";
            } 
            else{
                  return $conexion->error;
            }
            $conexion->close();
      }

      public function delete(){
            $conn=new Conexion();
            $conexion=$conn->conectar();
            $sql="DELETE FROM trabajador WHERE mail='".$this->mail."'";
            if ($conexion->query($sql) === TRUE) {
                  return "exito";
            } 
            else{
                  return $conexion->error;
            }
            $conexion->close();
      }

      public function update(){
            $conn=new Conexion();
            $conexion=$conn->conectar();
            $sql="UPDATE trabajador set nombre='".$this->nombre."', apellido_m='".$this->apellido_m."', apellido_p='".$this->apellido_p."', pass='".$this->pass."' WHERE mail='".$this->mail."'";  
            if ($conexion->query($sql) === TRUE) {
                  return "exito";
            } 
            else{
                  return $conexion->error;
            }
            $conexion->close();
      }
  }
?>