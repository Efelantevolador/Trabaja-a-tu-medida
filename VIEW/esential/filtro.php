<?php
require_once("../../MODEL/Postulacion.php");
require_once("../../MODEL/Postulante.php");
require_once("../../MODEL/Discapacidad.php");
require_once("../../MODEL/Empresa.php");
require_once("../../MODEL/Vivienda.php");
require_once("../../MODEL/Area.php");
require_once("../../MODEL/Comuna.php");
session_start();
function filtrar(){
    $post=new Postulacion();
    $lista[]="";
    if(isset($_POST["tipo"])&&isset($_POST["sal"])&&isset($_POST["region"])){
        $tipo=$_POST["tipo"];
        $sal=$_POST["sal"];
        $reg=$_POST["region"];
        $lista=$post->getbyFiltro($tipo,$sal,$reg);
    }
    else{
        $lista=$post->getAll();
    }
    foreach($lista as $p):
        $emp=new Empresa();
        $emp->setRut_empresa($p->getEmpresa());
        $emp=$emp->getbyId();
        $a=new Area();
        $a->setCod_area($p->getArea());
        $viv=new Vivienda();
        $viv->setId($p->getDireccion());
        $viv=$viv->getbyId();
        $a=$a->getbyId();
        $com=new Comuna();
        $com->setCod_comuna($viv->getComuna());
        $com=$com->getbyId();
        $reg="";
        switch ($viv->getRegion()) {
            case '1':
                $reg="Region de Tarapaca";
            break;
            case '2':
                $reg="Region de Antofagasta";
            break;
            case '3':
                $reg="Region de Atacama";
            break;
            case '4':
                $reg="Region de Coquimbo";
            break;
            case '5':
                $reg="Region de Valparaiso";
            break;
            case '6':
                $reg="Region del Libertagor General Bernargo O'Higgins";
            break;
            case '7':
                $reg="Region del Maule";
            break;
            case '8':
                $reg="Region del Biobio";
            break;
            case '9':
                $reg="Region de La Araucania";
            break;
            case '10':
                $reg="Region de Los Lagos";
            break;
            case '11':
                $reg="Region de Aysen del General Carlos Ibañez del Campo";
            break;
            case '12':
                $reg="Region de Magallanes y Antartica Chilena";
            break;
            case '13':
                $reg="Region Metropolitana de Santiago";
            break;
            case '14':
                $reg="Region de Los Rios";
            break;
            case '15':
                $reg="Region de Arica y Parinacota";
            break;
            case '16':
                $reg="Region de Ñuble";
            break;
            default:
                # code...
                break;
        }
        $sueldo="";
        switch ($p->getSalario()) {
            case '0':
                $sueldo="menos de $300.000";
            break;
            case '1':
                $sueldo="entre $300.000 - $400.000";
            break;
            case '2':
                $sueldo="entre $400.000 - $500.000";
            break;
            case '3':
                $sueldo="entre $500.000 - $600.000";
            break;
            case '4':
                $sueldo="entre $600.000 - $700.000";
            break;
            case '5':
                $sueldo="entre $700.000 - $800.000";
            break;
            case '6':
                $sueldo="entre $800.000 - $900.000";
            break;
            case '7':
                $sueldo="entre $900.000 - $1.000.000";
            break;
            case '8':
                $sueldo="más de $1.000.000";
            break;
            default:
                # code...
            break;
        }
        echo '<div class="col-xl-12" style="border:dotted 1px black;;padding:5px;">
                <div class="row">
                    <div class="col-xl-11" style="">
                        <h3>
                            <a href="detalle_postulacion.php?cod='.$p->getId().'" target="_blank" rel="noopener">
                                <span title="NOMBRE">'.$p->getNombre().'</span>
                            </a>
                        </h3>
                    </div>
                    
                    <div class="col-xl-1" style="" id="estrella">
                        <!--ESTRELLA DE RECOMENDADA  SOLO QUITAR LO QUE ESTA DENTRO PARA QUITAR LA ESTRELLA-->
                        '.recomendar($p->getId()).'
                        <!--ESTRELLA DE RECOMENDADA -->
                    </div>
                    
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-4"><strong>Area:</strong>'.$a->getNom_area().'</div>
                            <div class="col-xl-4"><strong>Empresa:</strong> <a href="info_empresa.php?rut='.$emp->getRut_empresa().'" style="color:green;">'.$emp->getNom_empresa().'</a></div>
                            <div class="col-xl-12"><br></div>
                            <div class="col-xl-4"> <strong>Empleo:</strong>'.$p->getProfesion().'</div>
                            <div class="col-xl-4"><strong>Localidad:</strong> '.$viv->getCalle().' '.$viv->getNum_calle().', '.$com->getNom_comuna().', '.$reg.'</div>
                            <div class="col-xl-4"><strong>Salario:</strong> '.$sueldo.'</div>
                            <div class="col-xl-12" style="margin-top:7px;"><strong>Detalle:</strong> '.$p->getDescrip().'</div>

                        </div>
                    </div>
                </div>
            </div>';
    endforeach;
}

function recomendar($p){
    $postu=new Postulante();
    $postu=$_SESSION["Postulante"];
    $dis=new Discapacidad();
    $pos=new Postulacion();
    $pos->setId($p);
    $pos=$pos->getbyId();
    $dis=$dis->getDiscapacidad($postu->getRut());
    foreach($dis as $d):
    switch ($d->getTipo_ayuda()) {
        case '1':
            if($pos->getPre1()=="0"&&$pos->getPre6()=="0"&&($pos->getPre7()=="0"||($pos->getPre7()=="1"&&($pos->getPre8()=="0"||$pos->getPre8()=="1")))){
                return '<img src="../CSS/open-iconic-master/png/star-3x.png" alt="icon name">';
            }
        break;
        case '2':
            if($pos->getPre2()=="1"&&$pos->getPre3()=="1"&&($pos->getPre4()=="1"||$pos->getPre4()=="0")&&$pos->getPre7()=="0"){
                return '<img src="../CSS/open-iconic-master/png/star-3x.png" alt="icon name">';
            }
        break;
        case '5':
            if($pos->getPre1()=="0"&&$pos->getPre6()=="0"&&($pos->getPre7()=="0"||($pos->getPre7()=="1"&&($pos->getPre8()=="0"||$pos->getPre8()=="1")))){
                return '<img src="../CSS/open-iconic-master/png/star-3x.png" alt="icon name">';
            }
        break;
        case '6':
            if($pos->getPre1()=="0"&&$pos->getPre2()=="1"&&$pos->getPre3()=="1"&&$pos->getPre4()=="1"&&$pos->getPre6()=="0"&&$pos->getPre7()=="0"){
                return '<img src="../CSS/open-iconic-master/png/star-3x.png" alt="icon name">';
            }
        break;
        case '7':
            if(($pos->getPre6()=="1"||$pos->getPre6()=="0")&&($pos->getPre8()=="0"||$pos->getPre8()=="1")){
                return '<img src="../CSS/open-iconic-master/png/star-3x.png" alt="icon name">';
            }
        break;
        case '8':
            if($d->getCod_discapacidad()=="10"||$d->getCod_discapacidad()=="11"){
                if($pos->getPre6()=="1"||$pos->getPre6()=="0"){
                    return '<img src="../CSS/open-iconic-master/png/star-3x.png" alt="icon name">';
                }
            }
            else{
                if($pos->getPre7()=="0"||($pos->getPre7()=="1"&&$pos->getPre8()=="0")){
                    return '<img src="../CSS/open-iconic-master/png/star-3x.png" alt="icon name">';
                }
            }
        break;
        case '9':
            if($d->getCod_discapacidad()=="10"||$d->getCod_discapacidad()=="11"){
                if($pos->getPre4()=="0"&&$pos->getPre5()=="0"&&($pos->getPre6()=="0"||$pos->getPre6()=="1")){
                    return '<img src="../CSS/open-iconic-master/png/star-3x.png" alt="icon name">';
                }
            }
            else{
                if($pos->getPre2()=="1"&&$pos->getPre3()=="1"&&($pos->getPre4()=="1"||$pos->getPre4()=="0")&&$pos->getPre7()=="0"){
                    return '<img src="../CSS/open-iconic-master/png/star-3x.png" alt="icon name">';
                }
            }
        break;
        default:
            # code...
        break;
    }
    endforeach;
    
}
echo filtrar();
?>