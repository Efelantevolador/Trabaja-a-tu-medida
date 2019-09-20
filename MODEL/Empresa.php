<?php
  require_once("conexion.php");
  class Empresa
    {
        private $rut_empresa;
        private $num_trabajadores;
        private $num_pisos;
        private $num_ascensores;
        private $num_rampas;
        private $num_banosdis;
        private $num_puertasanchas;
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

        /**
         * Get the value of num_trabajadores
         */ 
        public function getNum_trabajadores()
        {
                return $this->num_trabajadores;
        }

        /**
         * Set the value of num_trabajadores
         *
         * @return  self
         */ 
        public function setNum_trabajadores($num_trabajadores)
        {
                $this->num_trabajadores = $num_trabajadores;
        }

        /**
         * Get the value of num_pisos
         */ 
        public function getNum_pisos()
        {
                return $this->num_pisos;
        }

        /**
         * Set the value of num_pisos
         *
         * @return  self
         */ 
        public function setNum_pisos($num_pisos)
        {
                $this->num_pisos = $num_pisos;
        }

        /**
         * Get the value of num_ascensores
         */ 
        public function getNum_ascensores()
        {
                return $this->num_ascensores;
        }

        /**
         * Set the value of num_ascensores
         *
         * @return  self
         */ 
        public function setNum_ascensores($num_ascensores)
        {
                $this->num_ascensores = $num_ascensores;
        }

        /**
         * Get the value of num_rampas
         */ 
        public function getNum_rampas()
        {
                return $this->num_rampas;
        }

        /**
         * Set the value of num_rampas
         *
         * @return  self
         */ 
        public function setNum_rampas($num_rampas)
        {
                $this->num_rampas = $num_rampas;
        }

        /**
         * Get the value of num_banosdis
         */ 
        public function getNum_banosdis()
        {
                return $this->num_banosdis;
        }

        /**
         * Set the value of num_banosdis
         *
         * @return  self
         */ 
        public function setNum_banosdis($num_banosdis)
        {
                $this->num_banosdis = $num_banosdis;
        }

        /**
         * Get the value of num_puertasanchas
         */ 
        public function getNum_puertasanchas()
        {
                return $this->num_puertasanchas;
        }

        /**
         * Set the value of num_puertasanchas
         *
         * @return  self
         */ 
        public function setNum_puertasanchas($num_puertasanchas)
        {
                $this->num_puertasanchas = $num_puertasanchas;
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
            $result = $conexion->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $emp->setNum_trabajadores($row["num_trabajadores"]);
                $emp->setNum_pisos($row["num_pisos"]);
                $emp->setNum_ascensores($row["num_ascensores"]);
                $emp->setNum_rampas($row["num_rampas"]);
                $emp->setNum_banosdis($row["num_banosdis"]);
                $emp->setNum_puertasanchas($row["num_puertasanchas"]);
                $emp->setDireccion($row["direccion"]);
            }
            return $emp;
        }
    }
?>