<?php
require_once("../../MODEL/Comuna.php");
require_once("../../MODEL/Postulante.php");
require_once("../../MODEL/Vivienda.php");
session_start();
function getComuna(){
    if(isset($_SESSION["Postulante"])){
        $pos=new Postulante();
        $pos=$_SESSION["Postulante"];
        $vi=new Vivienda();
        $vi=$pos->getVivienda();
        $comu=new Comuna();
        $comu=$vi->getComuna();
        $com=new Comuna();
        $id_region = $_POST["reg_id"];
        $lista='';
        if($id_region != ''){
            $com->setRegion($id_region);
            $datos=$com->listarComuna();
            foreach($datos as $c):
                if($c->getCod_comuna()==$comu){
                    $lista .="<option value='".$c->getCod_comuna()."' selected>".$c->getNom_comuna()."</option>";
                }
                else{
                    $lista .="<option value='".$c->getCod_comuna()."'>".$c->getNom_comuna()."</option>";
                }
            endforeach;
            return $lista;
        }
    }
    else{
        $com=new Comuna();
        $id_region = $_POST["reg_id"];
        if($id_region != ''){
            $com->setRegion($id_region);
            $datos=$com->listarComuna();
            foreach($datos as $c):
                $lista .="<option value='".$c->getCod_comuna()."'>".$c->getNom_comuna()."</option>";
            endforeach;
            return $lista;
        }
    }
}
echo getComuna();