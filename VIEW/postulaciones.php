<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Postulaciones</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../CSS/miestilo.css">
        <link rel="stylesheet" href="../CSS/bootstrap-css/bootstrap.min.css">
        
    </head>
    <body>
    <?php
        require_once("../MODEL/Postulante.php");
        require_once("../MODEL/Empresa.php");
        require_once("../MODEL/Area.php");
        $p=new Postulante();
        session_start();
        $p=$_SESSION["Postulante"];
        $lista=$p->getPostulaciones();
    ?>
<!-- ********************************************|1 CONTENIDO |*******************************************************************************************************************-->
    
<?php require("../VIEW/esential/navbar.php")?>
    <div class="container-fluid" style="margin-top:20px;margin-bottom:20px">
        <div class="row"> <!--row: se utiliza para definir una tabla de posicionamiento donde utilizar despues las clases Col-xs-?  -->
            <div class="col-xl-2">
                <?php require("../VIEW/esential/menu-lateral.php");?>
            </div>
            <!--*****************|2 CONTENIDO INTERNO DE PAG|*****************************************************************-->
                <div class="col-xl-8">
                    <div class="container" style="margin-top:30px;">
                        <div class="row align-content-center">
                            <div class="col-xl-1 text-center"></div>
                            <div class="col-xl-10 text-center">
                                <h1>Mis Postulaciones</h1>
                            </div>
                            <div class="col-xl-1"></div>
                        </div>

                    <!--*Propuestas*-->
                    <?php
                        foreach($lista as $pst):
                            $pst=$pst->getbyId();
                    ?>
                        <div class="row" style="margin-top:30px;margin-bottom:30px; border: 1px solid gray;padding:5px;">
                            <div class="col-xl-12 text-center" style="margin-bottom:10px;">
                                <h2 class="h2 project-title">
                                    <a href="detalle_postulacion.php?cod=<?php echo $pst->getId();?>" target="_blank" rel="noopener">
                                        <span title="NOMBRE" style="text-decoration:underline;"><?php echo $pst->getNombre();?></span>
                                    </a>
                                </h2>
                            </div>
                            <div class="col-xl-12">
                                <span title="18 Septiembre, 2019 15:33" class="date">
                                    <strong>Empresa: </strong>
                                    <?php
                                        $emp=new Empresa();
                                        $emp->setRut_empresa($pst->getEmpresa());
                                        $emp=$emp->getbyId();
                                        echo $emp->getNom_empresa();
                                    ?>       
                                </span> 
                                <span class="deadline">
                                    <strong>Area :</strong> 
                                    <span class="value"><?php 
                                    $area=new Area();
                                    $area->setCod_area($pst->getArea());
                                    $area=$area->getbyId();
                                    echo $area->getNom_area();
                                    ?></span>
                                </span> 
                                <span class="bids">
                                    <strong>Sueldo : </strong>
                                    <?php 
                                        switch ($pst->getSalario()) {
                                            case 0:
                                                echo "menos de $300.000";
                                            break;
                                            case 1:
                                                echo "entre $300.000 - $400.000";
                                            break;
                                            case 2:
                                                echo "entre $400.000 - $500.000";
                                            break;
                                            case 3:
                                                echo "entre $500.000 - $600.000";
                                            break;
                                            case 4:
                                                echo "entre $600.000 - $700.000";
                                            break;
                                            case 5:
                                                echo "entre $700.000 - $800.000";
                                            break;
                                            case 6:
                                                echo "entre $800.000 - $900.000";
                                            break;
                                            case 7:
                                                echo "entre $900.000 - $1.000.000";
                                            break;
                                            case 8:
                                                echo "más de $1.000.000";
                                            break;
                                            default:
                                                echo "ERROR";
                                            break;
                                        }
                                    ?>       
                                </span>
                            </div>
                            <div class="col-xl-12">
                                <div class="html-desc project-details">
                                    <div>
                                        <?php
                                        echo $pst->getDescrip();
                                        ?> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12" style="margin-top:15px;">   
                                <div class="btn-group" style="margin-left:auto;">
                                    <a href="detalle_postulacion.php?cod=<?php echo $pst->getId();?>" class="btn btn-primary" data-id="">Ver Postulacion</a>
                                </div>
                            </div>         
                        </div>
                    <!--*Propuestas*-->
                    <?php endforeach;
                    if(count($lista)==0){
                        echo "<h1>No haz postulado a ninguna oferta laboral</h1>";
                    }?>
                    </div>        
                </div>    
            <!--*****************|CONTENIDO|**************************************-->   
            <div class="col-xl-2"></div>
        </div>
    </div>
    <?php require("../VIEW/esential/footer.php");?>
<!-- *******************************************|1 TERMINA EL CONTENIDO |*********************************************************************************************************-->    
        <script src="../CSS/bootstrap-js/jquery-3.2.1.slim.min.js"></script>
        <script src="../CSS/bootstrap-js/popper.min.js"></script>
        <script src="../CSS/bootstrap-js/bootstrap.min.js"></script>
    </body>
</html>