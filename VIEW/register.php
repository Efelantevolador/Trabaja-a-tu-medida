<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro</title>
        <meta name="description" content="">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../CSS/bootstrap-css/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/miestilo.css">
        
        
    </head>
    <body>
<!-- ********************************************|1 CONTENIDO |*******************************************************************************************************************-->
        <?php require("../VIEW/esential/navbar.php");
        require_once("../CONTROLER/Region_controller.php");?>
            <div class="container-fluid">
                <div class="row"> <!--row: se utiliza para definir una tabla de posicionamiento donde utilizar despues las clases Col-xs-?  -->
                        <div class="col-xl-3" style="border:0px black solid;"></div><!--Izquierda de pagina-->
        <!--*****************|2 CONTENIDO INTERNO DE PAG|*****************************************************************-->
                        <div class="col-xl-6" style="margin-top:30px;margin-bottom:30px;"> 
                            <h1 class="text-center" style="margin-top:20px;">Formulario Registro</h1>
                            <div class="container">
                            <form method="post" action="../CONTROLER/.php"><!---*************FORMULARIO****************-->
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h5>Informacion</h5>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rut :</span>
                                            </div>
                                            <input type="text" value="rut" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Nombre :</span>
                                                </div>
                                                <input type="text" value="name" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                    </div>
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-6">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Apellido Paterno :</span>
                                            </div>
                                            <input type="text" value="apellidoP" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Apellido Materno :</span>
                                            </div>
                                            <input type="text" value="apellidoM" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-xl-12"></div>
                                    <div class="col-xl-6">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">@email :</span>
                                            </div>
                                            <input type="text" value="email" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Telefono :</span>
                                            </div>
                                            <input type="text" value="" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-xl-1"></div>
                                    <div class="col-xl-12">
                                        <h5>Fecha de nacimiento</h5>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="input-group mb-4">
                                            <div class="input-group-append">
                                                <label class="input-group-text" for="inputGroupSelect02">Dia :</label>
                                            </div>
                                            <select class="custom-select" id="inputGroupSelect02">
                                                <option selected disabled>-Dia-</option>
                                                <?php  for($i=1;$i<=31;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="input-group mb-4">
                                            <div class="input-group-append">
                                                <label class="input-group-text" for="inputGroupSelect02">Mes :</label>
                                            </div>
                                            <select class="custom-select" id="inputGroupSelect02">
                                                <option value="" selected disabled>- Mes -</option>
                                                <option value="01">Enero</option>
                                                <option value="02">Febrero</option>
                                                <option value="03">Marzo</option>
                                                <option value="04">Abril</option>
                                                <option value="05">Mayo</option>
                                                <option value="06">Junio</option>
                                                <option value="07">Julio</option>
                                                <option value="08">Agosto</option>
                                                <option value="09">Septiembre</option>
                                                <option value="10">Octubre</option>
                                                <option value="11">Noviembre</option>
                                                <option value="12">Diciembre</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="input-group mb-4">
                                            <div class="input-group-append">
                                                <label class="input-group-text" for="inputGroupSelect02">Año :</label>
                                            </div>
                                            <select class="custom-select" id="inputGroupSelect02">
                                                <option value="" selected disabled>- Año -</option>
                                                <?php  for($i=1950;$i<=2001;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-1"></div>
                                    <div class="col-xl-12">
                                        <h5>Dirección</h5>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="input-group mb-2">
                                            <div class="input-group-append">
                                                <label class="input-group-text" for="inputGroupSelect02">Región :</label>
                                            </div>
                                            <select class="custom-select" id="inputGroupSelect02">
                                                <option selected disabled>- Región -</option>
                                                <?php
                                                $r=new Region_controller;
                                                $listar=$r->listar();
                                                foreach ($listar as $r):?>
                                                    <option value="<?php echo $r->getCod_region()?>"><?php echo $r->getNom_region()?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="input-group mb-2">
                                            <div class="input-group-append">
                                                <label class="input-group-text" for="inputGroupSelect02">Comuna :</label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-6">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Calle :</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">N° Calle #:</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-xl-1"></div>
                                    <div class="col-xl-12 mb-3" style="margin-top:30px;">
                                        <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Registrarse">
                                    </div>
                                </div>
                            </form>
                            <p>Tengo una cuenta <a href="../VIEW/login.php">Iniciar sesion</a></p>
                            </div>    
                        </div> 
        <!--*****************|2 FIN CONTENIDO INTERNO DE PAG|**************************************************************-->
                        <div class="col-xl-3" style="border:0px black solid;"></div><!--Derecha de pagina-->
                </div>
            </div>
        <?php require("../VIEW/esential/footer.php");?>  
<!-- *******************************************|1 TERMINA EL CONTENIDO |*********************************************************************************************************-->    
        <script src="../CSS/bootstrap-js/jquery-3.2.1.slim.min.js"></script>
        <script src="../CSS/bootstrap-js/popper.min.js"></script>
        <script src="../CSS/bootstrap-js/bootstrap.min.js"></script>
        
    </body>
</html>