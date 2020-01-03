<?php
require_once("conexion.php");
class Area{
    private $cod_area;
    private $nom_area;

    public function __construct(){
                
    }

    public function getCod_area(){
        return $this->cod_area;
    }

    public function setCod_area($cod){
        $this->cod_area = $cod;
    } 

    public function getNom_area(){
        return $this->nom_area;
    }

    public function setNom_area($nom){
        $this->nom_area=$nom;
    }

    public function listar_areas(){
        $conn=new Conexion();
        $conexion=$conn->conectar();
        $sql="SELECT * FROM area";
        $result = $conexion->query($sql);
        if ($result->num_rows > 0) {
            $lista=[];
            while($row = $result->fetch_assoc()) {
                $are=new Area();
                $are->setCod_area($row["id_area"]);
                $are->setNom_area($row["nom_area"]);
                $lista[]=$are;
            }
        }
        return $lista;
    }

    public function getbyId(){
        $conn=new Conexion();
        $conexion=$conn->conectar();
        $sql="SELECT * FROM area WHERE id_area='".$this->cod_area."'";
        $result = $conexion->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $are=new Area();
            $are->setCod_area($row["id_area"]);
            $are->setNom_area($row["nom_area"]);
        }
        return $are;
    }
}
?>