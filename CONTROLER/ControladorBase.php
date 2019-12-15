<?php
    class Controlador_Base{
        private $controller;
        private $accion;
        private $cod;

        /**
         * Genera un Controlador_Base
         * @access public
         * @param string $c Controlador que se usará
         * @param string $a Accion que se ejecutará
         */
        public function __construct($c,$a,$cod) {
            $this->controller=$c;
            $this->accion=$a;
            $this->cod=$cod;
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
            $cod=$this->cod;
            $c=new $controller;
            if($cod!=null){
                return $c->$accion($cod);
            }
            else{
                return $c->$accion();
            }
        }
    }
    if(isset($_GET["cod"])&&isset($_GET["c"])){
        $prueba=new Controlador_Base($_GET["c"],$_GET["a"],$_GET["cod"]);
    }
    else{
        $prueba=new Controlador_Base($_POST["c"],$_POST["a"],"");
    }
    echo $prueba->Ejecutar();
?>