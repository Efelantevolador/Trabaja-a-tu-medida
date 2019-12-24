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
            <!--*****************|2 CONTENIDO INTERNO DE PAG|*****************************************************************-->
                <div class="col-xl-8">
                    <div class="container" style="margin-top:30px;">
                        <div class="row align-content-center">
                            <div class="col-xl-1 text-center"></div>
                            <div class="col-xl-10 text-center">
                                <h1>Mis Postulaciones</h1>
                            </div>
                            <div class="col-xl-1"></div>
                        </div>
                        <form action="">
                            <!--*Formulario de Propuesta*-->
                                <h3>Ubicacion de Sucursal</h3>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="id">Region :</label>
                                                </div>
                                                <select name="month" class="custom-select" id="id">
                                                    <option value="1"></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="id">Comuna :</label>
                                                </div>
                                                <select name="month" class="custom-select" id="id">
                                                    <option value="1"></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Calle:</span>
                                                </div>
                                                <input type="text" name="rut" value="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">N° Calle:</span>
                                                </div>
                                                <input type="text" name="rut" value="">
                                            </div>
                                        </div>
                                    </div>
                                <h3>Datos de infraestructura sucursal</h3>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="id">N° Asensores :</label>
                                                </div>
                                                <select name="month" class="custom-select" id="id">
                                                    <option value="1"></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="id">N° Empleados :</label>
                                                </div>
                                                <select name="month" class="custom-select" id="id">
                                                    <option value="1"></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="id">N° Rampas :</label>
                                                </div>
                                                <select name="month" class="custom-select" id="id">
                                                    <option value="1"></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="id">N° Baños aptos :</label>
                                                </div>
                                                <select name="month" class="custom-select" id="id">
                                                    <option value="1"></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="id">N° Puertas aptas :</label>
                                                </div>
                                                <select name="month" class="custom-select" id="id">
                                                    <option value="1"></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="id">N° Puertas amplias :</label>
                                                </div>
                                                <select name="month" class="custom-select" id="id">
                                                    <option value="1"></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <h3>Datos de puesto laboral</h3>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Salario:</span>
                                                </div>
                                                <input type="text" name="rut" value="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="id">Tipo de Horario :</label>
                                                </div>
                                                <select name="month" class="custom-select" id="id">
                                                    <option value="1"></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Area :</span>
                                                </div>
                                                <input type="text" name="rut" value="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Profesion u oficio :</span>
                                                </div>
                                                <input type="text" name="rut" value="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Espacio de trabajo :</span>
                                                </div>
                                                <input type="text" name="rut" value="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Espacio de trabajo :</span>
                                                </div>
                                                <select name="month" class="custom-select" id="id">
                                                    <option value="1"></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <h3>Preguntas necesarias para trabajo a realizar</h3>
                                    <div class="row" style="background:yellow;padding:15px;margin:2px;">
                                        <div class="col-xl-8">
                                            <p>¿Requiere de usar ambas extremidades superiores?</p>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="row">
                                                <input type="radio" name="extremidad" id=""> 
                                                    <p style="margin-left:5px;">Si</p>
                                                <input style="margin-left:10px;"type="radio" name="extremidad" id=""> 
                                                    <p style="margin-left:5px;">No</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-8">
                                            <p>¿Requiere realizar trabajos manuales?</p>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="row">
                                                <input type="radio" name="manuales" id=""> 
                                                    <p style="margin-left:5px;">Si</p>
                                                <input style="margin-left:10px;"type="radio" name="manuales" id=""> 
                                                    <p style="margin-left:5px;">No</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-8">
                                            <p>¿Requiere coordinacion de ambas manos?</p>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="row">
                                                <input type="radio" name="coordinacion" id=""> 
                                                    <p style="margin-left:5px;">Si</p>
                                                <input style="margin-left:10px;"type="radio" name="coordinacion" id=""> 
                                                    <p style="margin-left:5px;">No</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="background:yellow;padding:15px;border:solid 0px black; margin:2px;">
                                        <div class="col-xl-8">
                                            <p>¿uso de fuerza?</p>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Espacio de trabajo :</span>
                                                </div>
                                                <select name="month" class="custom-select" id="id">
                                                    <option value="Seleccione opcion"></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="background:yellow;padding:15px;border:solid 0px black; margin:2px;">
                                        <div class="col-xl-8">
                                            <p>¿Debe estar de pie para poder trabajar?</p>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="row">
                                                <input type="radio" name="pie" id=""> 
                                                    <p style="margin-left:5px;">Si</p>
                                                <input style="margin-left:10px;"type="radio" name="pie" id=""> 
                                                    <p style="margin-left:5px;">No</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-8">
                                            <p>¿Cuanto tiempo requerie estar de pie?</p>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Tiempo de pie :</span>
                                                </div>
                                                <select name="month" class="custom-select" id="id">
                                                    <option value="Seleccione opcion"></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                            <!--*Formulario de Propuesta*-->
                            <div class="col-xl-12 mb-3" style="margin-top:20px;">
                                <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Guardar Información">
                            </div>
                        </form>
                    </div>        
                </div>    
            <!--*****************|CONTENIDO|**************************************-->   
            <div class="col-xl-2"></div>
        </div>
    </div>
    <?php require("../VIEW/esential/footer.php");?>
<!-- *******************************************|1 TERMINA EL CONTENIDO |*********************************************************************************************************-->    
        <script src="../CSS/bootstrap-js/jquery-3.2.1.slim.min.js"></script>
        <script src="../CSS/bootstrap-js/popper.min.js"></script>
        <script src="../CSS/bootstrap-js/bootstrap.min.js"></script>
    </body>
</html>