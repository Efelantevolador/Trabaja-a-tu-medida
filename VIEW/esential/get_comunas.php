<?php
require_once("../../MODEL/Comuna.php");
require_once("../../MODEL/Postulante.php");
require_once("../../MODEL/Vivienda.php");
require_once("../../MODEL/Empresa.php");
require_once("../../MODEL/Postulacion.php");
session_start();
function getComuna(){
    if(isset($_SESSION["Postulante"])){
        $vi=new Vivienda();
        $pos=new Postulante();
        $pos=$_SESSION["Postulante"];
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
    elseif(isset($_SESSION["Empresa"])){
        $vi=new Vivienda();
        $pos=new Postulacion();
        $pos->setId($_POST["cod"]);
        $pos=$pos->getbyId();
        $vi->setId($pos->getDireccion());
        $vi=$vi->getbyId();
        $id_region = $_POST["reg_id"];
        $lista='';
        $com=new Comuna();
        if($id_region != ''){
            $com->setRegion($id_region);
            $datos=$com->listarComuna();
            foreach($datos as $c):
                if($c->getCod_comuna()==$vi->getComuna()){
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
        $lista='';
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