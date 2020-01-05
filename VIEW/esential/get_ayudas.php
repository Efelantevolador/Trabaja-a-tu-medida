<?php
require_once("../../MODEL/Discapacidad.php");
session_start();
function get_ayudas(){
    $dis=new Discapacidad();
    $dis->setCod_discapacidad($_POST["cod"]);
    $lista='';
    $datos=$dis->listar_ayuda();
    if($dis->getCod_discapacidad()!=3){
        echo '<div class="row">
        <div class="col-xl-12 text-center" style="margin-bottom:30px;">
            <h5>Seleccione las ayudas que usted utiliza diariamente.</h5>
        </div>';
        if($dis->getCod_discapacidad()==5){
            echo '<div class="col-xl-4" id="">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input name="ayudap[]" value="7" type="checkbox" id="IOrtesis" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <input type="text" value="Ortesis" class="form-control" disabled aria-label="Text input with checkbox">
                    <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02"><img src="../images/Ortesis.png" alt="icon name"></label>
                    </div>
                </div>
            </div>';
        }
        else{
            foreach($datos as $a):
                    $lista .='<div class="col-xl-4" id="'.$a->getNom_ayuda().'">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input name="ayudap[]" type="checkbox" value="'.$a->getCod_ayuda().'" id="I'.$a->getNom_ayuda().'" aria-label="Checkbox for following text input">
                                </div>
                            </div>
                            <input type="text" value="'.$a->getNom_ayuda().'" class="form-control" disabled aria-label="Text input with checkbox">
                            <div class="input-group-append">
                                <label class="input-group-text" for="inputGroupSelect02"><img src="../images/'.$a->getNom_ayuda().'.png" alt="icon name"></label>
                            </div>
                        </div>
                    </div>';
            endforeach;
        }
    }
    return $lista;
}
echo get_ayudas();
?>