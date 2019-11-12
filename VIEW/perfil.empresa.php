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
    
<!-- ********************************************|1 CONTENIDO |*******************************************************************************************************************-->
    <?php require("../VIEW/esential/navbar.php")?>
    <div class="container-fluid" style="margin-top:20px;margin-bottom:20px">
        <div class="row"> <!--row: se utiliza para definir una tabla de posicionamiento donde utilizar despues las clases Col-xs-?  -->
            <div class="col-xl-2">
                <?php require("../VIEW/esential/menu-lateral-empresa.php");?>
            </div>
                <!--*****************|CONTENIDO|**************************************-->
                    <div class="col-xl-10">
                        <div class="container" style="margin-top:30px;">
                            <div class="row align-content-center">
                                <div class="col-xl-1 text-center"></div>
                                <div class="col-xl-10 text-center">
                                    <h1>Perfil Empresa</h1>
                                </div>
                                <div class="col-xl-1 text-center"></div>
                                <!--****************************|FORMULARIO INFORMACION EMPRESA|******************************************-->
                                    <div class="col-xl-12" style="border-top:dotted 2px black;padding-top:5px; border-bottom:dotted 2px">
                                        <h3>Información de la empresa </h3>
                                        <form method="post" action="../CONTROLER/ControladorBase.php">
                                            <input type="hidden" name="c" value="Postulante_controller" />
                                            <input type="hidden" name="a" value="update" />
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Rut empresa:</span>
                                                        </div>
                                                        <input type="text" name="rut" value="" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8"></div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Nombre empresa:</span>
                                                        </div>
                                                        <input type="text" name="name" value="">
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">@email :</span>
                                                        </div>
                                                        <input type="text" name="email" value="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Telefono :</span>
                                                        </div>
                                                        <input type="text" name="telefono" value="">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-6"></div>
                                                <div class="col-xl-12">
                                                    <h5>Dirección</h5>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02">Región :</label>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02">Comuna :</label>
                                                        </div>
                                                        <input type="text" name="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4"></div>
                                                <div class="col-xl-6">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Calle :</span>
                                                        </div>
                                                        <input type="text" name="calle" value="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">N° calle # :</span>
                                                        </div>
                                                        <input type="text" name="ncalle" value="">
                                                    </div>
                                                
                                                

                                            </div>
                                        </form>    
                                    </div>                 
                            </div>









                                    <div class="col-xl-1 text-center"></div>
                                <!--****************************|FORMULARIO DATOS EMPRESA|******************************************-->
                                    <div class="col-xl-12" style="border-top:dotted 2px black;padding-top:5px; border-bottom:dotted 2px">
                                        <h3>Datos de la empresa </h3>
                                        <form method="post" action="../CONTROLER/ControladorBase.php">
                                            <input type="hidden" name="c" value="Postulante_controller" />
                                            <input type="hidden" name="a" value="update" />
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Razon social:</span>
                                                        </div>
                                                        <input type="text" name="rut" value="" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8"></div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Sitio web:</span>
                                                        </div>
                                                        <input type="text" name="name" value="">
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Numero de empleados:</span>
                                                        </div>
                                                        <input type="text" name="Numero de empleados" value="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Numero asensores :</span>
                                                        </div>
                                                        <input type="text" name="numeroAsensores" value="">
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Numero rampas :</span>
                                                        </div>
                                                        <input type="text" name="numeroAsensores" value="">
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Numero de baños aptos:</span>
                                                        </div>
                                                        <input type="text" name="numeroAsensores" value="">
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Numero de estacionamientos aptos:</span>
                                                        </div>
                                                        <input type="text" name="numeroAsensores" value="">
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Numero de puertas amplias:</span>
                                                        </div>
                                                        <input type="text" name="numeroAsensores" value="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 mb-3">
                                                    <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Guardar Información">
                                                </div>
                                                
                                                

                                            </div>
                                        </form>    
                                    </div>

                        </div>
                        
                    </div>    
                <!--*****************|CONTENIDO|**************************************-->  
        </div>
    </div>
    <?php require("../VIEW/esential/footer.php");?>
<!-- *******************************************|1 TERMINA EL CONTENIDO |*********************************************************************************************************-->    
        <script src="../CSS/bootstrap-js/jquery-3.2.1.slim.min.js"></script>
        <script src="../CSS/bootstrap-js/popper.min.js"></script>
        <script src="../CSS/bootstrap-js/bootstrap.min.js"></script>
    </body>
</html>