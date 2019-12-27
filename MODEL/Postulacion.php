<?php
  require_once("conexion.php");
  class Postulacion
    {
        private $id;
        private $direccion;
        private $n_ascensores;
        private $n_banos;
        private $salario;
        private $tipo_horario;
        private $area;
        private $profesion;
        private $espacio_trabajo;
        private $descrip;
        private $empresa;
        private $pre1;
        private $pre2;
        private $pre3;
        private $pre4;
        private $pre5;
        private $pre6;

        public function __construct(){
            
        }

        public function setDescrip($des){
            $this->descrip=$des;
        }

        public function setEmpresa($emp){
            $this->empresa=$emp;
        }

        public function setPregunta6($pre6){
            $this->pre6= $pre6;
        }

        public function setPregunta5($pre5){
            $this->pre5= $pre5;
        }

        public function setPregunta4($pre4){
            $this->pre4= $pre4;
        }

        public function setPregunta3($pre3){
            $this->pre3= $pre3;
        }

        public function setPregunta2($pre2){
            $this->pre2= $pre2;
        }

        public function setPregunta1($pre1){
            $this->pre1= $pre1;
        }

        public function setEspacio_trabajo($espacio){
            $this->espacio_trabajo= $espacio;
        }

        public function setProfesion($prof){
            $this->profesion= $prof;
        }

        public function setArea($area){
            $this->area= $area;
        }

        public function setTipo_horario($tipo){
            $this->tipo_horario = $tipo;
        }

        public function setSalario($sal){
            $this->salario = $sal;
        }

        public function setN_banos($n){
            $this->n_banos = $n;
        }

        public function setN_rampas($n){
            $this->n_rampas= $n;
        }

        public function setN_empleados($n){
            $this->n_empleados = $n;
        }

        public function setN_ascensor($n){
            $this->n_ascensores = $n;
        }

        public function setDireccion($dic){
            $this->direccion = $dic;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getDescrip(){
            return $this->descrip;
        }

        public function getEmpresa(){
            return $this->empresa;
        }

        public function getPre6(){
            return $this->pre6;
        }

        public function getPre5(){
            return $this->pre5;
        }

        public function getPre4(){
            return $this->pre4;
        }

        public function getPre3(){
            return $this->pre3;
        }

        public function getPre2(){
            return $this->pre2;
        }

        public function getPre1(){
            return $this->pre1;
        }

        public function getEspacio_trabajo(){
            return $this->espacio_trabajo;
        }

        public function getProfesion(){
            return $this->profesion;
        }

        public function getArea(){
            return $this->area;
        }

        public function getTipo_horario(){
            return $this->tipo_horario;
        }

        public function getSalario(){
            return $this->salario;
        }

        public function getN_banos(){
            return $this->n_banos;
        }

        public function getN_rampa(){
            return $this->n_rampas;
        }

        public function getN_empleados(){
            return $this->n_empleados;
        }

        public function getN_ascensor(){
            return $this->n_ascensores;
        }

        public function getDireccion(){
            return $this->direccion;
        }

        public function getId(){
            return $this->id;
        }
    }