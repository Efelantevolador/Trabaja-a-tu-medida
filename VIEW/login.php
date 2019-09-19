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
    <div class="container-fluid">
        <div class="row"> <!--row: se utiliza para definir una tabla de posicionamiento donde utilizar despues las clases Col-xs-?  -->
            <div class="col-xl-3" style="border:solid black 0px"></div>
                <!--*****************|2 CONTENIDO INTERNO DE PAG|*****************************************************************-->
                    <div class="col-xl-6" style="margin-top:50px;margin-bottom:120px;">
                        <div class="container"> 
                            <div class="row">
                                <div class="col-xl-6" style="margin:auto;border:0px solid black;">
                                    <h1 class="text-center" style="font-size:35px;">Inicio de Sesion</h1>
                                    <!-- 2.1 Formulario inicio-->
                                        <form method="post" action="../CONTROLER/ControladorBase.php">
                                            <input type="hidden" name="c" value="Usuario_controller" />
                                            <input type="hidden" name="a" value="login" />
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">@ Gmail</span>
                                                </div>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="" aria-label="email" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Password</span>
                                                </div>
                                                <input type="password" name="password" id="password" class="form-control" placeholder="" aria-label="password" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="col-xl-12 mb-3" >
                                                <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Iniciar Sesión" class="special"/>
                                            </div>  
                                        </form>
                                    <!-- 2.1 Fin Formulario inicio-->
                                    <p>no tienes cuenta <a href="../VIEW/register.php">ir al Registro</a></p>
                                </div>
                            </div>
                        </div>
                    </div>                           
                <!--*****************|2 FIN CONTENIDO INTERNO DE PAG|*************************************************************-->  
            <div class="col-xl-3" style="border:solid black 0px"></div>
        </div>
    </div>
    <?php require("../VIEW/esential/footer.php");?>
<!-- *******************************************|1 TERMINA EL CONTENIDO |*********************************************************************************************************-->    
        <script src="../CSS/bootstrap-js/jquery-3.2.1.slim.min.js"></script>
        <script src="../CSS/bootstrap-js/popper.min.js"></script>
        <script src="../CSS/bootstrap-js/bootstrap.min.js"></script>
        
    </body>
</html>