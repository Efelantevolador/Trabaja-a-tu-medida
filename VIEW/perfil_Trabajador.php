<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Perfil trabajador</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../CSS/miestilo.css">
        <link rel="stylesheet" href="../CSS/bootstrap-css/bootstrap.min.css">
    </head>
    <body>
    <?php
    require_once("../MODEL/Empresa.php");
    require_once("../MODEL/Trabajador.php");
    session_start();
    if(isset($_SESSION["Trabajador"])){
        $trab=new Trabajador();
        $trab=$_SESSION["Trabajador"];
        $emp=new Empresa();
        $emp=$trab->getEmpresa();
    }
    else{

    }
    ?>
<!-- ********************************************|1 CONTENIDO |*******************************************************************************************************************-->
    
    <?php require("../VIEW/esential/navbar.php")?>

    <div class="container-fluid" style="margin-top:20px;margin-bottom:20px">
            <div class="row"> <!--row: se utiliza para definir una tabla de posicionamiento donde utilizar despues las clases Col-xs-?  -->
                <div class="col-xl-2">
                    <?php require("../VIEW/esential/menu-lateral-trabajador.php")?>
                </div>
                    <!--*****************|2 CONTENIDO INTERNO DE PAG|*****************************************************************-->
                    <div class="col-xl-10">
                        <div class="container" style="margin-top:30px;">
                            <div class="row align-content-center">
                                <div class="col-xl-1 text-center"></div>
                                <div class="col-xl-10 text-center">
                                    <h1>Perfil Trabajador</h1>
                                </div>
                                <div class="col-xl-1 text-center"></div>
                                <!--****************************|Informacion Personal|******************************************-->         
                                    <div class="col-xl-12" style="border-top:dotted 2px black;padding-top:5px; border-bottom:dotted 2px; margin-bottom:150px;">
                                        <h3 style="margin-top:10px;">Informacion Personal </h3>
                                        <input type="hidden" name="c" value="Postulante_controller" />
                                        <input type="hidden" name="a" value="update" />
                                        <div class="row" style="margin-top:20px;margin-bottom:30px;">

                                            <div class="col-xl-1"></div>
                                            <div class="col-xl-4">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Nombre:</span>
                                                    </div>
                                                    <input type="text" name="name" value="<?php echo $trab->getNombre()?>" disabled style="background:#E9E8E8;">
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Apellido Paterno:</span>
                                                    </div>
                                                    <input type="text" name="ApellidoP" value="<?php echo $trab->getApellido_p()?>" disabled style="background:#E9E8E8;">
                                                </div>
                                            </div>
                                            <div class="col-xl-3"></div>
                                            <div class="col-xl-1"></div>
                                            <div class="col-xl-4">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Apellido Materno:</span>
                                                    </div>
                                                    <input type="text" name="Apellido M" value="<?php echo $trab->getApellido_m()?>" disabled style="background:#E9E8E8;">
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">@email:</span>
                                                    </div>
                                                    <input type="text" name="mail" value="<?php echo $trab->getMail()?>" disabled style="background:#E9E8E8;">
                                                </div>
                                            </div>
                                            <div class="col-xl-3"></div>
                                            <div class="col-xl-1"></div>
                                            <div class="col-xl-4">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Empresa:</span>
                                                    </div>
                                                    <input type="text" name="empresa" value="<?php echo $emp->getNom_empresa()?>" disabled style="background:#E9E8E8;">
                                                </div>
                                            </div>
                                            <div class="col-xl-3"></div>
                                        </div>
                                    </div>
                                <!--****************************|Agregar Personal|******************************************-->                
                            </div> 
                        </div>
                    </div>    
                    <!--*****************|2 FIN CONTENIDO INTERNO DE PAG|*************************************************************-->
                <div class="col-xl-3"></div>
            </div>    
        </div>
    </div>    
    
    <?php require("../VIEW/esential/footer.php");?>
<!-- *******************************************|1 TERMINA EL CONTENIDO |*********************************************************************************************************-->    
        <script src="../CSS/bootstrap-js/jquery-3.2.1.slim.min.js"></script>
        <script src="../CSS/bootstrap-js/popper.min.js"></script>
        <script src="../CSS/bootstrap-js/bootstrap.min.js"></script>
        
    </body>
</html>