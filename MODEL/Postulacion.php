<?php
  require_once("conexion.php");
  require_once("Postulante.php");
  class Postulacion
    {
        private $id;
        private $nombre;
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

        public function setNombre($nom){
            $this->nombre=$nom;
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

        public function getNombre(){
            return $this->nombre;
        }

        public function getDescrip(){
            return $this->descrip;
        }

        public function getEmpresa(){
            return $this->empresa;
        }

        public function getPre8(){
            return $this->pre8;
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

        public function getN_pisos(){
            return $this->n_pisos;
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

        public function getAll(){
            $conn=new Conexion();
            $conexion=$conn ->conectar();
            $sql="SELECT * FROM postulacion";
            $result = $conexion->query($sql);
            $lista=[];
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $pos=new Postulacion();
                    $pos->setNombre($row["nom_postulacion"]);
                    $pos->setId($row["cod_postulacion"]);
                    $pos->setArea($row["area"]);
                    $pos->setDescrip($row["descrip"]);
                    $pos->setEmpresa($row["empresa"]);
                    $pos->setN_pisos($row["num_pisos"]);
                    $pos->setN_ascensor($row["num_ascensores"]);
                    $pos->setN_banos($row["num_banosdis"]);
                    $pos->setSalario($row["sueldo_postu"]);
                    $pos->setDireccion($row["direccion"]);
                    $pos->setTipo_trabajo($row["tipo_trabajo"]);
                    $pos->setProfesion($row["profesion"]);
                    $pos->setEspacio_trabajo($row["espacio_trabajo"]);
                    $pos->setPregunta1($row["pregunta_1"]);
                    $pos->setPregunta2($row["pregunta_2"]);
                    $pos->setPregunta3($row["pregunta_3"]);
                    $pos->setPregunta4($row["pregunta_4"]);
                    $pos->setPregunta5($row["pregunta_5"]);
                    $pos->setPregunta6($row["pregunta_6"]);
                    $pos->setPregunta7($row["pregunta_7"]);
                    $pos->setPregunta8($row["pregunta_8"]);
                    $lista[]=$pos;
                }
            }
            return $lista;
            $conexion->close();
        }

        public function getbyFiltro($tipo,$sal,$reg){
            $conn=new Conexion();
            $conexion=$conn ->conectar();
            $sql="SELECT * FROM postulacion INNER JOIN vivienda ON postulacion.direccion=vivienda.id_vivienda WHERE tipo_trabajo='".$tipo."' AND sueldo_postu='".$sal."' AND region='".$reg."'";
            $result = $conexion->query($sql);
            $lista=[];
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $pos=new Postulacion();
                    $pos->setNombre($row["nom_postulacion"]);
                    $pos->setId($row["cod_postulacion"]);
                    $pos->setArea($row["area"]);
                    $pos->setDescrip($row["descrip"]);
                    $pos->setEmpresa($row["empresa"]);
                    $pos->setN_pisos($row["num_pisos"]);
                    $pos->setN_ascensor($row["num_ascensores"]);
                    $pos->setN_banos($row["num_banosdis"]);
                    $pos->setSalario($row["sueldo_postu"]);
                    $pos->setDireccion($row["direccion"]);
                    $pos->setTipo_trabajo($row["tipo_trabajo"]);
                    $pos->setProfesion($row["profesion"]);
                    $pos->setEspacio_trabajo($row["espacio_trabajo"]);
                    $pos->setPregunta1($row["pregunta_1"]);
                    $pos->setPregunta2($row["pregunta_2"]);
                    $pos->setPregunta3($row["pregunta_3"]);
                    $pos->setPregunta4($row["pregunta_4"]);
                    $pos->setPregunta5($row["pregunta_5"]);
                    $pos->setPregunta6($row["pregunta_6"]);
                    $pos->setPregunta7($row["pregunta_7"]);
                    $pos->setPregunta8($row["pregunta_8"]);
                    $lista[]=$pos;
                }
            }
            return $lista;
            $conexion->close();
        }

        public function getPostulantes(){
            $conn=new Conexion();
            $conexion=$conn ->conectar();
            $sql="SELECT * FROM lista_postulacion WHERE cod_post='".$this->id."'";
            $result = $conexion->query($sql);
            $lista=[];
            $post=new Postulante();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $post->setRut($row["cod_rut"]);
                    $lista[]=$post;
                }
            }
            return $lista;
            $conexion->close();
        }

        public function delete(){
            $conn=new Conexion();
            $conexion=$conn ->conectar();
            $sql="DELETE FROM postulacion WHERE cod_postulacion='".$this->id."'";
            if ($conexion->query($sql) === TRUE) {
                return "exito";
            } 
            else{
                return $conexion->error;
            }
            $conexion->close();
        }

        public function create(){
            $conn=new Conexion();
            $conexion=$conn ->conectar();
            $sql="INSERT INTO postulacion VALUES ('','".$this->nombre."','".$this->area."','".$this->descrip."','".$this->empresa."','".$this->n_pisos."','".$this->n_ascensores."','".$this->n_banos."','".$this->salario."','".$this->direccion."','".$this->tipo_trabajo."','".$this->profesion."','".$this->espacio_trabajo."','".$this->pre1."','".$this->pre2."','".$this->pre3."','".$this->pre4."','".$this->pre5."','".$this->pre6."','".$this->pre7."','".$this->pre8."')";
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
            $conexion=$conn ->conectar();
            $sql="UPDATE postulacion set area='".$this->area."', descrip='".$this->descrip."', empresa='".$this->empresa."', num_pisos='".$this->n_pisos."', num_ascensores='".$this->n_ascensores."', num_banosdis='".$this->n_banos."', sueldo_postu='".$this->salario."', direccion='".$this->direccion."', tipo_trabajo='".$this->tipo_trabajo."', profesion='".$this->profesion."', espacio_trabajo='".$this->espacio_trabajo."', pregunta_1='".$this->pre1."', pregunta_2='".$this->pre2."', pregunta_3='".$this->pre3."', pregunta_4='".$this->pre4."', pregunta_5='".$this->pre5."', pregunta_6='".$this->pre6."', pregunta_7='".$this->pre7."', pregunta_8='".$this->pre8."' WHERE cod_postulacion='".$this->id."'";
            if ($conexion->query($sql) === TRUE) {
                return true;
            } else {
                return false;
            }
        }

        public function getbyId(){
            $conn=new Conexion();
            $conexion=$conn ->conectar();
            $sql="SELECT * FROM postulacion WHERE cod_postulacion='".$this->id."'";
            $pos=new Postulacion();
            $result = $conexion->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $pos->setNombre($row["nom_postulacion"]);
                $pos->setId($row["cod_postulacion"]);
                $pos->setArea($row["area"]);
                $pos->setDescrip($row["descrip"]);
                $pos->setEmpresa($row["empresa"]);
                $pos->setN_pisos($row["num_pisos"]);
                $pos->setN_ascensor($row["num_ascensores"]);
                $pos->setN_banos($row["num_banosdis"]);
                $pos->setSalario($row["sueldo_postu"]);
                $pos->setDireccion($row["direccion"]);
                $pos->setTipo_trabajo($row["tipo_trabajo"]);
                $pos->setProfesion($row["profesion"]);
                $pos->setEspacio_trabajo($row["espacio_trabajo"]);
                $pos->setPregunta1($row["pregunta_1"]);
                $pos->setPregunta2($row["pregunta_2"]);
                $pos->setPregunta3($row["pregunta_3"]);
                $pos->setPregunta4($row["pregunta_4"]);
                $pos->setPregunta5($row["pregunta_5"]);
                $pos->setPregunta6($row["pregunta_6"]);
                $pos->setPregunta7($row["pregunta_7"]);
                $pos->setPregunta8($row["pregunta_8"]);
            }
            return $pos;
        }
    }