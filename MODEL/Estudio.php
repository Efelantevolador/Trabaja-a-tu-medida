<?php
    require_once("conexion.php");
    class Estudio{
        private $id_list;
        private $nivel;
        private $titulo;
        private $estado;
        private $fecha_inicio;
        private $fecha_fin;
        private $institucion;
        private $rut;

        public function __construct(){
                
        }

        public function getNivel(){
            return $this->nivel;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function getEstado(){
            return $this->estado;
        }

        public function getFecha_inicio(){
            return $this->fecha_inicio;
        }

        public function getFecha_fin(){
            return $this->fecha_fin;
        }

        public function getInstitucion(){
            return $this->institucion;
        }

        public function getId_list(){
            return $this->id_list;
        }

        public function getRut(){
            return $this->rut;
        }

        public function setRut($rut){
            $this->rut=$rut;
        }

        public function setId_list($id){
            $this->id_list=$id;
        }

        public function setNivel($nivel){
            $this->nivel = $nivel;
        }

        public function setTitulo($titulo){
            $this->titulo =$titulo;
        }

        public function setEstado($estado){
            $this->estado=$estado;
        }

        public function setFecha_inicio($fecha){
            $this->fecha_inicio=$fecha;
        }

        public function setFecha_fin($fecha){
            $this->fecha_fin=$fecha;
        }

        public function setInstitucion($inst){
            $this->institucion=$inst;
        }

        public function list_byRut($rut){
            $conn=new Conexion();
            $conexion=$conn->conectar();
            $sql = "SELECT * FROM lista_estudio WHERE id_postulante='".$rut."'";
            $result = $conexion->query($sql);
            if ($result->num_rows > 0) {
                $lista=[];
                while($row = $result->fetch_assoc()) {
                    $est=new Estudio();
                    $est->setId_list($row["id_list_est"]);
                    $est->setNivel($row["nivel_est"]);
                    $est->setTitulo($row["titulo_carrera"]);
                    $est->setEstado($row["estado"]);
                    $est->setFecha_inicio($row["fecha_ini"]);
                    $est->setFecha_fin($row["fecha_fin"]);
                    $est->setInstitucion($row["institucion"]);
                    $lista[]=$est;
                }
            }
            $conexion->close();
        }

        public function delete_estudio(){
            $conn=new Conexion();
            $conexion=$conn->conectar();
            $sql= "DELETE FROM lista_estudio WHERE id_list_est=$this->id_list AND id_postulante='".$this->rut."'";
            if ($conexion->query($sql) === TRUE) {
                return 1;
            } else {
                return 0;
            }
            $conexion->close();
        }

        public function create_estudio(){
            $conn=new Conexion();
            $conexion=$conn->conectar();
            $sql= "INSERT INTO lista_estudio VALUES('','".$this->rut."','".$this->titulo."','.$this->nivel.','".$this->estado."','$this->fecha_inicio','$this->fecha_fin','".$this->institucion."')";
            if ($conexion->query($sql) === TRUE) {
                return "exito";
            } 
            else{
                return $conexion->error;
            }
            $conexion->close();
        }
    }
?>