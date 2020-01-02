<?php
  require_once("conexion.php");
  class Empresa
    {
        private $rut_empresa;
        private $nom_empresa;
        private $correo_empresa;
        private $telefono;
        private $razon_social;
        private $sitio_web;
        private $num_trabajadores;
        private $pass;
        private $direccion;

        public function __construct()
        {
            
        }

        /**
         * Get the value of rut_empresa
         */ 
        public function getRut_empresa()
        {
                return $this->rut_empresa;
        }

        /**
         * Set the value of rut_empresa
         *
         * @return  self
         */ 
        public function setRut_empresa($rut_empresa)
        {
                $this->rut_empresa = $rut_empresa;
        }

        public function getCorreo(){
            return $this->correo_empresa;
        }

        public function getPass(){
            return $this->pass;
        }

        public function getNom_empresa(){
            return $this->nom_empresa;
        }

        public function getNum_trab(){
            return $this->num_trabajadores;
        }

        public function getRazon_social(){
            return $this->razon_social;
        }

        public function getTelefono(){
            return $this->telefono;
        }

        public function getSitio_web(){
            return $this->sitio_web;
        }

        public function setSitio_web($web){
            $this->sitio_web=$web;
        }

        public function setRazon_social($razon){
            $this->razon_social=$razon;
        }

        public function setCorreo($correo){
            $this->correo_empresa = $correo;
        }

        public function setTelefono($tel){
            $this->telefono=$tel;
        }

        public function setNom_empresa($nom){
            $this->nom_empresa=$nom;
        }

        public function setPass($pass){
            $this->pass=$pass;
        }

        public function setNum_trab($num){
            $this->num_trabajadores=$num;
        }

        /**
         * Get the value of direccion
         */ 
        public function getDireccion()
        {
                return $this->direccion;
        }

        /**
         * Set the value of direccion
         *
         * @return  self
         */ 
        public function setDireccion($direccion)
        {
            $this->direccion = $direccion;
        }

        public function getbyId(){
            $conn=new Conexion();
            $conexion=$conn->conectar();
            $sql="SELECT * FROM empresa WHERE rut_empresa='".$this->rut_empresa."'";
            $emp=new Empresa();
            $viv=new Vivienda();
            $result = $conexion->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $emp->setRut_empresa($row["rut_empresa"]);
                $emp->setNum_trab($row["num_trabajadores"]);
                $emp->setCorreo($row["correo_empresa"]);
                $emp->setNom_empresa($row["nom_empresa"]);
                $emp->setTelefono($row["telefono"]);
                $emp->setRazon_social($row["razon_social"]);
                $emp->setSitio_web($row["sitio_web"]);
                $viv->setId($row["direccion"]);
                $emp->setDireccion($viv->getbyId());
            }
            return $emp;
        }

        public function update(){
            $conn=new Conexion();
            $conexion=$conn->conectar();
            $sql="UPDATE empresa set num_trabajadores='".$this->num_trabajadores."', nom_empresa='".$this->nom_empresa."',telefono='".$this->telefono."', sitio_web='".$this->sitio_web."' WHERE rut_empresa='".$this->rut_empresa."'";
            if ($conexion->query($sql) === TRUE) {
                return true;
            } 
            else{
                return false;
            }
        }

        public function login(){
            $conn=new Conexion();
            $conexion=$conn->conectar();
            $sql="SELECT * FROM empresa WHERE correo_empresa='".$this->correo_empresa."' AND pass='".$this->pass."'";
            $result = $conexion->query($sql);
            $emp=new Empresa();
            $viv=new Vivienda();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $emp->setRut_empresa($row["rut_empresa"]);
                $emp->setNum_trab($row["num_trabajadores"]);
                $emp->setCorreo($row["correo_empresa"]);
                $emp->setPass($row["pass"]);
                $emp->setNom_empresa($row["nom_empresa"]);
                $emp->setTelefono($row["telefono"]);
                $emp->setRazon_social($row["razon_social"]);
                $emp->setSitio_web($row["sitio_web"]);
                $viv->setId($row["direccion"]);
                $emp->setDireccion($viv->getbyId());
            }
            return $emp;
        }
    }
?>