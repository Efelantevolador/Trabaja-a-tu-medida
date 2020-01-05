<?php
require_once("conexion.php");
class Vivienda{
    private $id_vivienda;
    private $region;
    private $comuna;
    private $calle;
    private $num_calle;

    public function __construct() {
        
    }

    public function setId($id){
        $this->id_vivienda=$id;
    }

    public function getId(){
        return $this->id_vivienda;
    }

    public function setRegion($r){
        $this->region=$r;
    }

    public function getRegion(){
        return $this->region;
    }

    public function setComuna($c){
        $this->comuna=$c;
    }

    public function getComuna(){
        return $this->comuna;
    }

    public function setCalle($c){
        $this->calle=$c;
    }

    public function getCalle(){
        return $this->calle;
    }

    public function setNum_calle($c){
        $this->num_calle=$c;
    }

    public function getNum_calle(){
        return $this->num_calle;
    }

    public function create_vivienda(){
        $conn=new Conexion();
        $conexion=$conn ->conectar();
        $sql="INSERT INTO vivienda VALUES('',".$this->region.",'".$this->comuna."','".$this->calle."',".$this->num_calle.")";
        if ($conexion->query($sql) === TRUE) {
            return "exito";
        } 
        else{
            return $conexion->error;
        }
        $conexion->close();
    }

    public function retornar_id(){
        $conn=new Conexion();
        $conexion=$conn ->conectar();
        $sql="SELECT * FROM vivienda WHERE region=".$this->region." AND calle='".$this->calle."'AND comuna='".$this->comuna."' AND num_calle=".$this->num_calle."";
        $result = $conexion->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row["id_vivienda"];
        }
        $conexion->close();
    }

    public function getbyId(){
        $conn=new Conexion();
        $conexion=$conn ->conectar();
        $sql="SELECT * FROM vivienda WHERE id_vivienda=".$this->id_vivienda."";
        $result = $conexion->query($sql);
        $viv=new Vivienda();
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $viv->setCalle($row["calle"]);
            $viv->setRegion($row["region"]);
            $viv->setComuna($row["comuna"]);
            $viv->setNum_calle($row["num_calle"]);
            $viv->setId($row["id_vivienda"]);
        }
        return $viv;
    }

    public function update_vivienda(){
        $conn=new Conexion();
        $conexion=$conn ->conectar();
        $sql="UPDATE vivienda SET region='".$this->region."',comuna='".$this->comuna."',calle='".$this->calle."',num_calle='".$this->num_calle."' WHERE id_vivienda=".$this->id_vivienda."";
        if ($conexion->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}
?>