<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
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
                <div class="col-xl-8" style="height:500px;">
                    <div class="container" style="margin-top:30px;">
                        <div class="row align-content-center">
                            <div class="col-xl-1 text-center"></div>
                            <div class="col-xl-10 text-center">
                                <h1>Mis Postulaciones Creadas</h1>
                            </div>
                            <div class="col-xl-1"></div>
                        </div>

                    <!--*Propuestas*-->
                        <div class="row" style="margin-top:30px;margin-bottom:30px; border: 1px solid gray;padding:5px;">
                            <div class="col-xl-12 text-center" style="margin-bottom:10px;">
                                <h2 class="h2 project-title">
                                    <a href="detalle_postulacion.php" target="_blank" rel="noopener">
                                        <span title="NOMBRE" style="text-decoration:underline;"></span>
                                    </a>
                                </h2>
                            </div>
                            <div class="col-xl-12">
                                <span title="18 Septiembre, 2019 15:33" class="date">
                                    <strong>Empresa: </strong>
                                        
                                </span> 
                                <span class="deadline">
                                    <strong>Area :</strong> 
                                    <span class="value">
                                    </span>
                                </span> 
                                <span class="bids">
                                    <strong>Sueldo : </strong>
                                         
                                </span>
                            </div>
                            <div class="col-xl-12">
                                <div class="html-desc project-details">
                                    <div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12" style="margin-top:15px;">   
                                <div class="btn-group" style="margin-left:auto;">
                                    <a href="detalle_postulacion.php" class="btn btn-primary" data-id="">Ver Postulacion</a>
                                </div>
                            </div>         
                        </div>
                    <!--*Propuestas*-->
                    
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