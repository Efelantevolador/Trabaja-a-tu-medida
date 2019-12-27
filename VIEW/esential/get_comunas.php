<?php
require_once("../../MODEL/Comuna.php");
function getComuna(){
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
echo getComuna();