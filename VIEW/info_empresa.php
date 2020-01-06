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
                <?php require("../VIEW/esential/menu-lateral.php");?>
            </div>
            <!--****************************|Contenido|******************************************-->
                <div class="col-xl-10">
                    <div class="container" style="margin-top:30px;">
                        <div class="row align-content-center">
                            <div class="col-xl-1 text-center"></div>
                            <div class="col-xl-10 text-center">
                                <h1>Perfil Empresa</h1>
                            </div>
                            <div class="col-xl-1 text-center"></div>
                            <!--****************************|Informacion Personal|******************************************-->         
                                <div class="col-xl-12" style="border-top:dotted 2px black;padding-top:5px; border-bottom:dotted 2px; margin-bottom:150px;">
                                    <h3 style="margin-top:10px;">Informacion Personal </h3>
                                    <p>Empresa Rut,Nombre empresa, correo, numero de trabajadores, teléfono (no sé si la razón social) y sitio web</p>
                                    <input type="hidden" name="c" value="Postulante_controller" />
                                    <input type="hidden" name="a" value="update" />
                                    <div class="row" style="margin-top:20px;margin-bottom:30px;">
                                        <div class="col-xl-1"></div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Rut:</span>
                                                </div>
                                                <input type="text" name="rut" value="" disabled style="background:#E9E8E8;">
                                            </div>
                                        </div>
                                        <div class="col-xl-5"></div>

                                        <div class="col-xl-1"></div>
                                        <div class="col-xl-4">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Nombre Empresa:</span>
                                                </div>
                                                <input type="text" name="name" value="" disabled style="background:#E9E8E8;">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">@email:</span>
                                                </div>
                                                <input type="text" name="mail" value="" disabled style="background:#E9E8E8;">
                                            </div>
                                        </div>
                                        <div class="col-xl-3"></div>

                                        <div class="col-xl-1"></div>
                                        <div class="col-xl-4">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">N° Trabajadores:</span>
                                                </div>
                                                <input type="text" name="Nombre" value="" disabled style="background:#E9E8E8;">
                                            </div>
                                        </div>
                                        <div class="col-xl-7">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Razón Social:</span>
                                                </div>
                                                <input type="text" name="razon" value="" disabled style="background:#E9E8E8;">
                                            </div>
                                        </div>
                                        <div class="col-xl-1"></div>
                                        <div class="col-xl-7">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Sitio Web:</span>
                                                </div>
                                                <input type="text" name="sitio" value="" disabled style="background:#E9E8E8;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!--****************************|Agregar Personal|******************************************-->                
                        </div> 
                    </div>
                </div>
            <!--****************************|Contenido|******************************************-->
        </div>     
    </div>
    <?php require("../VIEW/esential/footer.php");?>
<!-- *******************************************|1 TERMINA EL CONTENIDO |*********************************************************************************************************--> 
        <script src="../CSS/bootstrap-js/jquery-3.2.1.slim.min.js"></script>
        <script src="../CSS/bootstrap-js/popper.min.js"></script>
        <script src="../CSS/bootstrap-js/bootstrap.min.js"></script>
        
    </body>
</html>