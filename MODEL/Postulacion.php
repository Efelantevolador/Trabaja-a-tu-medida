<?php
  require_once("conexion.php");
  class Postulacion
    {
        private $id;
        private $direccion;
        private $n_ascensores;
        private $n_pisos;
        private $n_banos;
        private $salario;
        private $tipo_trabajo;
        private $area;
        private $profesion;
        private $espacio_trabajo;
        private $descrip;
        private $empresa;
        private $pre1;//Extremidades superiores
        private $pre2;//Rampas
        private $pre3;//Puertas anchas
        private $pre4;//Trabajo manuales
        private $pre5;//Coordinacion
        private $pre6;//Fuerza
        private $pre7;//De pie
        private $pre8;//Tiempo de pie

        public function __construct(){
            
        }

        public function setPregunta8($pre8){
            $this->pre8=$pre8;
        }

        public function setPregunta7($pre7){
            $this->pre7=$pre7;
        }

        public function setN_pisos($n){
            $this->n_pisos=$n;
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

        public function setTipo_trabajo($tipo){
            $this->tipo_trabajo = $tipo;
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

        public function getPre7(){
            return $this->pre7;
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

        public function getTipo_trabajo(){
            return $this->tipo_trabajo;
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

        public function create(){
            $conn=new Conexion();
            $conexion=$conn ->conectar();
            $sql="INSERT INTO postulacion VALUES ('','".$this->area."','".$this->descrip."','".$this->empresa."','".$this->n_pisos."','".$this->n_ascensores."','".$this->n_banos."','".$this->salario."','".$this->direccion."','".$this->tipo_trabajo."','".$this->profesion."','".$this->espacio_trabajo."','".$this->pre1."','".$this->pre2."','".$this->pre3."','".$this->pre4."','".$this->pre5."','".$this->pre6."','".$this->pre7."','".$this->pre8."')";
            if ($conexion->query($sql) === TRUE) {
                return "exito";
            } 
            else{
                return $conexion->error;
            }
            $conexion->close();
        }
    }