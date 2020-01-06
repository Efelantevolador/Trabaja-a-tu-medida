<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro Empresa</title>
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
                <div class="col-xl-3">
                <?php require("../VIEW/esential/menu-lateral-empresa.php")?>
                </div>
                    <!--*****************|2 CONTENIDO INTERNO DE PAG|*****************************************************************-->
                        <div class="col-xl-6" style="margin-top:30px;margin-bottom:30px;"> 
                            <h1 class="text-center" style="margin-top:20px;">Formulario Registro Empresa</h1>
                            <div class="container">
                            <form method="post" action="../CONTROLER/ControladorBase.php"><!---*************FORMULARIO****************-->
                                <input type="hidden" name="c" value="Postulante_controller" />
                                <input type="hidden" name="a" value="crear" />        
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h5>Informacion</h5>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rut :</span>
                                            </div>
                                            <input type="text" name="rut" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">N° Trabajadores :</span>
                                                </div>
                                                <input type="text" name="n-trab" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                    </div>
                                    <div class="col-xl-2"></div>

                                    <div class="col-xl-12"></div>
                                    <div class="col-xl-6">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">@email :</span>
                                            </div>
                                            <input type="text" name="mail" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Contraseña :</span>
                                            </div>
                                            <input type="password" name="pass" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Telefono :</span>
                                            </div>
                                            <input type="text" name="telefono" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-xl-1"></div>
                                    <div class="col-xl-12">
                                        <h5>Informacion precisa</h5>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Razon social :</span>
                                            </div>
                                            <input type="text" name="razon" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Sitio Web :</span>
                                            </div>
                                            <input type="text" name="sitio" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Nombre empresa:</span>
                                            </div>
                                            <input type="text" name="name" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-3" style="margin-top:30px;">
                                        <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Registrarse">
                                    </div>
                                </div>
                            </form>
                            <p>Tengo una cuenta <a href="../VIEW/login.php">Iniciar sesion</a></p> 
                        </div> 
                    <!--*****************|2 FIN CONTENIDO INTERNO DE PAG|**************************************************************--><!--*****************|2 FIN CONTENIDO INTERNO DE PAG|*************************************************************-->
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