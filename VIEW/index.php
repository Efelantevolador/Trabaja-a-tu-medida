<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Index</title>
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
                <div class="col-xl-3"></div>
                    <!--*****************|2 CONTENIDO INTERNO DE PAG|*****************************************************************-->
                    <div class="col-xl-6" style="border:0px solid black;">
                        <div class="container" style="margin-top:30px;">
                            <div class="row align-content-center">
                                <div class="col-xl-1 text-center"></div>
                                <div class="col-xl-10 text-center" style="height:500px;">
                                    <h1>Bienvenido </h1>
                                    <h3>Eres nuevo, Postulante o Empresa.</h3>
                                    <div style="margin-top:100px;">
                                        <a class="btn btn-success btn-lg" href='#' role="button">
                                            Registro Empresa &raquo;
                                        </a>
                                        <h1>o</h1>
                                        <a class="btn btn-primary btn-lg" href='#2' role="button">
                                            Registro Postulante &raquo;
                                        </a>
                                    </div>
                                        
                                </div>
                                <div class="col-xl-1 text-center"></div>            
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