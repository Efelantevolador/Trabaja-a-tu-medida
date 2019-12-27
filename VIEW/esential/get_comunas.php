<?php
require_once("../../MODEL/Comuna.php");
$com=new Comuna();
$id_region = filter_input(INPUT_POST, 'region_id');

if($id_region != ''){
    $com->setRegion($id_region);
    $datos=$com->listarComuna();
}
$com->setRegion(13);
$datos=$com->listarComuna();
  ?>
  <option value="">- Seleccione -</option>
  <?php foreach($datos as $op):?>
  <option value="<?= $op->getCod_comuna() ?>"><?= $op->getNom_comuna() ?></option>
  <?php endforeach; ?>
?>