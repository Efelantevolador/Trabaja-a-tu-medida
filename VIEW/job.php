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
                
                <!--*****************|2 CONTENIDO INTERNO DE PAG|*****************************************************************-->
                    <div class="col-xl-9" style="border-left:1px dotted black;border-right:1px dotted black;">
                        <h2>Propuestas laborales</h2>
                        <div class="container">
                            <!-- DOGE AQUI ESTA EL FILTRO DE SALARIO Y HORARIO-->
                                <form method="post" action="#">
                                    <div class="row">                              
                                        <div class="col-xl-4">
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="comboboxP">Salario Estimado :</label>
                                                </div>
                                                <select class="custom-select">
                                                    <option selected disabled id="combotortuga" value="0">-Seleccionar-</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="comboboxP">Tipo de trabajo :</label>
                                                </div>
                                                <select class="custom-select">
                                                    <option selected disabled id="combotortuga" value="0">-Seleccionar-</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Filtrar">
                                        </div>
                                    </div> 
                                </form>
                            <!-- DOGE AQUI ESTA EL FILTRO DE SALARIO Y HORARIO-->
                            <div class="row">
                                <div class="col-xl-4"> 
                                    <p>Las Ofertas laborales recomendadas para ti tendran una Estrella como esta:</p> 
                                </div>
                                <div class="col-xl-4"> 
                                    <img src="../CSS/open-iconic-master/png/star-3x.png" alt="icon name">
                                </div>
                            </div>
                            <!-- DOGE AQUI ESTA LA OFERTA DE TRABAJO  -->
                                <div class="row">
                                    <div class="col-xl-12" style="border:dotted 1px black;;padding:5px;">
                                        <div class="row">
                                            <div class="col-xl-11" style="">
                                                <h3>
                                                    <a href="detalle_postulacion.php" target="_blank" rel="noopener">
                                                        <span title="NOMBRE">Nombre de Oferta</span>
                                                    </a>
                                                </h3>
                                            </div>
                                            
                                            <div class="col-xl-1" style="">
                                                <!--ESTRELLA DE RECOMENDADA  SOLO QUITAR LO QUE ESTA DENTRO PARA QUITAR LA ESTRELLA-->
                                                <img src="../CSS/open-iconic-master/png/star-3x.png" alt="icon name">
                                                <!--ESTRELLA DE RECOMENDADA -->
                                            </div>
                                            
                                            <div class="col-xl-12">
                                                <div class="row">
                                                    <div class="col-xl-4"><strong>Publicado:</strong> hace 2 dias</div>
                                                    <div class="col-xl-4"><strong>Plazo:</strong> 2 dias mas de postulacion</div>
                                                    <div class="col-xl-4"><strong>Empresa:</strong> <a href="info_empresa.php" style="color:green;">Nombre empresa</a></div>
                                                    <div class="col-xl-12"><br></div>
                                                    <div class="col-xl-4"> <strong>Empleo:</strong> Vedetto.</div>
                                                    <div class="col-xl-4"><strong>Localidad:</strong> Alessandri 230, Viña del Mar, Valparaíso</div>
                                                    <div class="col-xl-4"><strong>Salario:</strong> Entre $900.000 y $1.000.000</div>
                                                    <div class="col-xl-12" style="margin-top:7px;"><strong>Detalle:</strong> Se busca Vedetto sin una pierna para
                                                    hacer el helicoptero sin una elise, que no cobre caro y que sea carismatico simpatico y bueno pa la talla. A 
                                                    gusto de Diego Oyanedel y rodrigo martinez Lorem ipsum dolor sit amet consectetur, adipisicing elit. At minima 
                                                    illum quam consectetur distinctio! Perferendis aut ullam quisquam nam.</div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- DOGE AQUI ESTA LA OFERTA DE TRABAJO  -->






                        </div>
                    </div>    
                <!--*****************|2 FIN CONTENIDO INTERNO DE PAG|*************************************************************-->
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