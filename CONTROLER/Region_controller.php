<?php
require_once "../MODEL/Region.php";
require_once "../MODEL/Comuna.php";
    class Region_controller {
        public function __construct() {
            
        } 

        public function listar(){
            $region=new Region();
            $lista=$region->listar_regiones();
            //$dato['listar']=$lista;
            return $lista;
        }

        public function listac(){
            $comuna=new Comuna();
            $lista=$comuna->listar_Comuna();
            //$dato['listar']=$lista;
            return $lista;
        }
    }
?>