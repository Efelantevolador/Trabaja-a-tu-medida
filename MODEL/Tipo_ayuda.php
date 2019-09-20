<?php
  require_once("conexion.php");
  class Tipo_ayuda
    {
        private $cod_ayuda;
        private $nom_ayuda;

        public function __construct()
        {
            
        }

        public function getCod_ayuda(){
            return $this->cod_ayuda;
        }

        public function getNom_ayuda(){
            return $this->nom_ayuda;
        }

        public function setCod_ayuda($cod)
        {
            $this->cod_ayuda = $cod;
        }

        public function setNom_ayuda($nom)
        {
            $this->nom_ayuda = $nom;
        }
    }
?>