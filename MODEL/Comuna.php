<?php
require_once("conexion.php");
require_once("Region.php");
class Comuna{
    private $cod_comuna;
    private $nom_comuna;
    private $region;

    public function __construct(){
            
    }

    public function getCod_comuna(){
        return $this->cod_comuna;
    }

    public function setCod_comuna($cod_comuna){
        $this->cod_comuna = $cod_comuna;
    } 

    public function getNom_comuna(){
        return $this->nom_comuna;
    }

    public function setNom_comuna($nom_comuna){
        $this->nom_comuna = $nom_comuna;
    }

    public function getRegion(){
        return $this->region;
    }

    public function setRegion($region){
        $this->region=$region;
    }

    public function listarComuna(){
        $conn=new Conexion();
        $conexion=$conn->conectar();
        $sql="SELECT * FROM comuna WHERE cod_reg='".$this->region."'";
        $result = $conexion->query($sql);
        if ($result->num_rows > 0) {
            $lista=[];
            while($row = $result->fetch_assoc()) {
                $com=new Comuna();
                $com->setCod_comuna($row["cod_comuna"]);
                $com->setNom_comuna($row["nom_comuna"]);
                $lista[]=$com;
            }
        }
        return $lista;
    }
}
?>