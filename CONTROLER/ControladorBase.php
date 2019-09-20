<?php
    class Controlador_Base{
        private $controller;
        private $accion;

        /**
         * Genera un Controlador_Base
         * @access public
         * @param string $c Controlador que se usará
         * @param string $a Accion que se ejecutará
         */
        public function __construct($c,$a) {
            $this->controller=$c;
            $this->accion=$a;
            foreach(glob("*.php") as $file){
                require_once $file;
            }
            foreach(glob("../MODEL/*.php") as $file){
                require_once $file;
            }
            session_start();
        }

        /**
         * Retornar el Controlador
         * @access public
         * @return Controller
         */
        public function getController(){
            return $this->controller;
        }

        /**
         * Retornar la Accion
         * @access public
         * @return Accion
         */
        public function getAccion(){
            return $this->accion;
        }

        /**
         * Ejecuta un metodo especifico de un controller determinado
         * @access public
         * @return Respuesta
         */
        public function Ejecutar(){
            $controller=$this->controller;
            $accion=$this->accion;
            $c=new $controller;
            return $c->$accion();
        }
    }
    $prueba=new Controlador_Base($_POST["c"],$_POST["a"]);
    echo $prueba->Ejecutar();
?>