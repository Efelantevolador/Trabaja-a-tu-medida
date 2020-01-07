<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Perfil Empresa</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../CSS/miestilo.css">
        <link rel="stylesheet" href="../CSS/bootstrap-css/bootstrap.min.css">
    </head>
    <body>
    <?php
        require_once("../MODEL/Empresa.php");
        require_once("../MODEL/Vivienda.php");
        session_start();
        $emp=new Empresa();
        if(isset($_SESSION["Empresa"])){
            $emp=$_SESSION["Empresa"];
        }
    ?>
<!-- ********************************************|1 Pagina |*******************************************************************************************************************-->
    <?php require("../VIEW/esential/navbar.php")?>
    <div class="container-fluid" style="margin-top:20px;margin-bottom:10px">
        <div class="row"> <!--row: se utiliza para definir una tabla de posicionamiento donde utilizar despues las clases Col-xs-?  -->
            <div class="col-xl-2">
                <?php require("../VIEW/esential/menu-lateral-empresa.php");?>
            </div>
                <!--*****************|CONTENIDO|**************************************-->
                    <div class="col-xl-10">
                        <div class="container" style="margin-top:30px;">
                            <div class="row align-content-center">
                                <div class="col-xl-1 text-center"></div>
                                <div class="col-xl-10 text-center" style="margin-top:50px;">
                                    <h1>Perfil Empresa</h1>
                                </div>
                                <div class="col-xl-1 text-center"></div>
                                <!--****************************|FORMULARIO INFORMACION EMPRESA|******************************************-->
                                    <div class="col-xl-12" style="border-top:dotted 2px black;padding-top:5px; border-bottom:dotted 2px">
                                        <h3>Información de la empresa </h3>
                                        <form method="post" action="../CONTROLER/ControladorBase.php">
                                            <input type="hidden" name="c" value="Empresa_controller" />
                                            <input type="hidden" name="a" value="update" />
                                            <div class="row">
                                                <div class="col-xl-1">
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Rut empresa:</span>
                                                        </div>
                                                        <input type="text" name="rut" value="<?php echo $emp->getRut_empresa();?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Nombre Empresa:</span>
                                                        </div>
                                                        <input type="text" name="name" value="<?php echo $emp->getNom_empresa();?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-1">
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">@email :</span>
                                                        </div>
                                                        <input type="text" name="email" value="<?php echo $emp->getCorreo();?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-7">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Telefono : +56</span>
                                                        </div>
                                                        <input type="text" name="telefono" value="<?php echo $emp->getTelefono();?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-1">
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Razon social:</span>
                                                        </div>
                                                        <input type="text" name="razon" value="<?php echo $emp->getRazon_social();?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-7">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Numero de empleados:</span>
                                                        </div>
                                                        <input type="text" name="empleados" value="<?php echo $emp->getNum_trab()?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-1">
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Sitio web:</span>
                                                        </div>
                                                        <input type="text" name="sitio" value="<?php echo $emp->getSitio_web();?>">
                                                    </div>
                                                </div>
                                                <!--Fin linea 2 suma (4+8=12)-->
                                                
                                                
                                                <!--Fin linea 5 suma(4+8=12)-->
                                            </div>     
                                            <div class="col-xl-12 mb-3" style="margin-top: 10px;">
                                                <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Guardar Información">
                                            </div>
                                            <!--Fin linea 6 suma(12=12)-->
                                        </form>                    
                                    </div>
                                <!--****************************|FORMULARIO INFORMACION EMPRESA|******************************************-->
                                  
                            </div>
                        </div>
                    </div>        
                <!--*****************|CONTENIDO|**************************************-->  
        </div>
    </div>
    <?php require("../VIEW/esential/footer.php");?>
<!-- *******************************************|1 pagina |*********************************************************************************************************-->    
        <script src="../CSS/bootstrap-js/jquery-3.2.1.slim.min.js"></script>
        <script src="../CSS/bootstrap-js/popper.min.js"></script>
        <script src="../CSS/bootstrap-js/bootstrap.min.js"></script>
    </body>
</html>