<?php
  require_once("conexion.php");
  require_once("Tipo_ayuda.php");
  class Discapacidad
    {
        private $cod_discapacidad;
        private $nombre_dis;
        private $tipo_dis;
        private $tipo_ayuda;

        public function __construct()
        {
            
        }

        public function getCod_discapacidad(){
            return $this->cod_discapacidad;
        }

        public function getNombre_dis(){
            return $this->nombre_dis;
        }

        public function getTipo_dis(){
            return $this->tipo_dis;
        }

        public function getTipo_ayuda(){
            return $this->tipo_ayuda;
        }

        public function setCod_discapacidad($cod_discapacidad)
        {
            $this->cod_discapacidad = $cod_discapacidad;
        }

        public function setNombre_dis($nombre_dis)
        {
            $this->nombre_dis = $nombre_dis;
        }

        public function setTipo_dis($tipo_dis)
        {
            $this->tipo_dis = $tipo_dis;
        }

        public function setTipo_ayuda($ayuda)
        {
            $this->tipo_ayuda = $ayuda;
        }

        public function listar_dis(){
            $conn=new Conexion();
            $conexion=$conn->conectar();
            $sql="SELECT * FROM discapacidad WHERE tipo_dis='".$this->tipo_dis."'";
            $result = $conexion->query($sql);
            if ($result->num_rows > 0) {
                $lista=[];
                while($row = $result->fetch_assoc()) {
                    $dis=new Discapacidad();
                    $dis->setCod_discapacidad($row["cod_discapacidad"]);
                    $dis->setNombre_dis($row["nombre_dis"]);
                    $dis->setTipo_dis($row["tipo_dis"]);
                    $lista[]=$dis;
                }
            }
            return $lista;
        }

        public function getbyAyuda(){
            $conn=new Conexion();
            $conexion=$conn->conectar();
            $sql="SELECT * FROM lista_ayuda WHERE cod_ayu_lista='".$this->tipo_ayuda."' AND cod_disc_lista='".$this->cod_discapacidad."'";
            $result = $conexion->query($sql);
            $dis=new Discapacidad();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $dis->setCod_discapacidad($row["cod_list_ayu"]);
                $dis->setTipo_ayuda($row["cod_ayu_lista"]);
                $dis->setNombre_dis($row["cod_disc_lista"]);
            }
            return $dis;
        }

        public function listar_ayuda(){
            $conn=new Conexion();
            $conexion=$conn->conectar();
            $sql="SELECT * FROM ((lista_ayuda
            INNER JOIN discapacidad ON lista_ayuda.cod_disc_lista= discapacidad.cod_discapacidad)
            INNER JOIN ayuda_discapacidad ON lista_ayuda.cod_ayu_lista = ayuda_discapacidad.cod_ayuda) WHERE cod_disc_lista='".$this->cod_discapacidad."'";
            $result = $conexion->query($sql);
            if ($result->num_rows > 0) {
                $lista=[];
                while($row = $result->fetch_assoc()) {
                    $ayuda=new Tipo_ayuda();
                    $ayuda->setCod_ayuda($row["cod_ayuda"]);
                    $ayuda->setNom_ayuda($row["nombre_ayuda"]);
                    $lista[]=$ayuda;
                }
                return $lista;
            }
        }

        public function setDiscapacidad($rut){
            $conn=new Conexion();
            $conexion=$conn->conectar();
            $sql="SELECT * FROM lista_discapacidad WHERE rut_lista='".$rut."' AND id_disc='".$this->cod_discapacidad."'";
            $result = $conexion->query($sql);
            if ($result->num_rows == 0) {
                $sql= "INSERT INTO lista_discapacidad VALUES ('','".$rut."','".$this->cod_discapacidad."')";
                if ($conexion->query($sql) === TRUE) {
                    return "exito";
                } 
                else{
                    return $conexion->error;
                }
            }
            else{
                return "copia";
            }
            $conexion->close();
        }
    }
?>