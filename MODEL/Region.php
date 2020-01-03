<?php
require_once("conexion.php");
class Region{
    private $cod_region;
    private $nom_region;

    public function __construct(){
                
    }

    public function getCod_region(){
        return $this->cod_region;
    }

    public function setCod_region($cod_region){
        $this->cod_region = $cod_region;
    } 

    public function getNom_region(){
        return $this->nom_region;
    }

    public function setNom_region($nom_region){
        $this->nom_region=$nom_region;
    }

    public function getbyId(){
        $conn=new Conexion();
        $conexion=$conn->conectar();
        $sql="SELECT * FROM region WHERE cod_region='".$this->cod_region."'";
        $result = $conexion->query($sql);
        $r=new Region();
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $r->setCod_region($row["cod_region"]);
            $r->setNom_region($row["nom_region"]);
        }
        return $r;
    }

    public function listar_regiones(){
        $conn=new Conexion();
        $conexion=$conn->conectar();
        $sql="SELECT * FROM region";
        $result = $conexion->query($sql);
        if ($result->num_rows > 0) {
            $lista=[];
            while($row = $result->fetch_assoc()) {
                $reg=new Region();
                $reg->setCod_region($row["cod_region"]);
                $reg->setNom_region($row["nom_region"]);
                $lista[]=$reg;
            }
        }
        return $lista;
    }
}
?>