<?php
    class Estudio_controller Extends Controlador_Base{
        public function __construct() {
            
        } 

        public function listar_byRut(){
            $est=new Estudio();
            $lista=$est->listar_byRut();
            return $lista;
        }
    }
?>