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
                    <?php require("../VIEW/esential/menu-lateral.php")?>
                </div>
                    <!--*****************|2 CONTENIDO INTERNO DE PAG|*****************************************************************-->
                            <div class="col-xl-10">
                        <div class="container" style="margin-top:30px;">
                            <div class="row align-content-center">
                                <div class="col-xl-1 text-center"></div>
                                <div class="col-xl-10 text-center">
                                    <h1>Crear Trabajador</h1>
                                </div>
                                <div class="col-xl-1 text-center"></div>
                                <!--****************************|Informacion Personal|******************************************-->         
                                    <div class="col-xl-12" style="border-top:dotted 2px black;padding-top:5px; border-bottom:dotted 2px; margin-bottom:150px;">
                                        <h3 style="margin-top:10px;">Informacion Personal </h3>
                                        <p>Rut, Nombre completo, email, Fecha nacimiento y Telefono</p>
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
                                                        <span class="input-group-text" id="basic-addon1">Nombre:</span>
                                                    </div>
                                                    <input type="text" name="name" value="" disabled style="background:#E9E8E8;">
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Apellido Paterno:</span>
                                                    </div>
                                                    <input type="text" name="ApellidoP" value="" disabled style="background:#E9E8E8;">
                                                </div>
                                            </div>
                                            <div class="col-xl-3"></div>
                                            <div class="col-xl-1"></div>
                                            <div class="col-xl-4">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Apellido Materno:</span>
                                                    </div>
                                                    <input type="text" name="Apellido M" value="" disabled style="background:#E9E8E8;">
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
                                            <div class="col-xl-7">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Telefono:</span>
                                                    </div>
                                                    <input type="text" name="telefono" value="" disabled style="background:#E9E8E8;">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <h5>Fecha de nacimiento</h5>
                                            </div>
                                            <div class="col-xl-1"></div>
                                            <div class="col-xl-3">
                                                <div class="input-group mb-4">
                                                    <div class="input-group-append">
                                                        <label class="input-group-text" for="inputGroupSelect02">Dia :</label>
                                                    </div>
                                                    <select class="custom-select" name="day" id="inputGroupSelect02" disabled style="background:#E9E8E8;">
                                                        <option selected disabled>-Dia-</option>
                                                        <?php  for($i=1;$i<=31;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-xl-3">
                                                <div class="input-group mb-4">
                                                    <div class="input-group-append">
                                                        <label class="input-group-text" for="inputGroupSelect02">Mes :</label>
                                                    </div>
                                                    <select name="month" class="custom-select" id="inputGroupSelect02" disabled style="background:#E9E8E8;">
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
                                            <div class="col-xl-2">
                                                <div class="input-group mb-4">
                                                    <div class="input-group-append">
                                                        <label class="input-group-text" for="inputGroupSelect02">Año :</label>
                                                    </div>
                                                    <select name="year" class="custom-select" id="inputGroupSelect02"  disabled style="background:#E9E8E8;">
                                                        <option value="" selected disabled>- Año -</option>
                                                        <?php  for($i=2002;$i>=1942;$i--) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-3"></div>
                                        </div>
                                    </div>
                                <!--****************************|Agregar Personal|******************************************-->                
                            </div> 
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