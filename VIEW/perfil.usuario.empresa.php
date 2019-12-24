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
    <?php
        session_start();
    ?>
<!-- ********************************************|1 CONTENIDO |*******************************************************************************************************************-->
    <?php require("../VIEW/esential/navbar.php")?>
    <div class="container-fluid" style="margin-top:20px;margin-bottom:20px">
        <div class="row"> <!--row: se utiliza para definir una tabla de posicionamiento donde utilizar despues las clases Col-xs-?  -->
            <div class="col-xl-2">
                <?php require("../VIEW/esential/menu-lateral-empresa.php");?>
            </div>
            <!--****************************|Contenido|******************************************-->
                <div class="col-xl-10">
                    <div class="container" style="margin-top:30px;">
                        <div class="row align-content-center">
                            <div class="col-xl-1 text-center"></div>
                            <div class="col-xl-10 text-center">
                                <h1>Perfil reprecentante de Empresa</h1>
                            </div>
                            <div class="col-xl-1 text-center"></div>
                            <!--****************************|FORMULARIO INFORMACION PERSONAL|******************************************-->
                                <div class="col-xl-12" style="border-top:dotted 2px black;padding-top:5px; border-bottom:dotted 2px">
                                        <h3>Informacion de Gerente, Administrador de cuenta o reprecentante de Empresa. </h3>
                                        <form method="post" action="../CONTROLER/ControladorBase.php" style="margin-top:30px;">
                                            <input type="hidden" name="c" value="Postulante_controller" />
                                            <input type="hidden" name="a" value="update" />
                                            <div class="row">
                                                <div class="col-xl-1"></div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Nombre:</span>
                                                        </div>
                                                        <input type="text" name="rut" value="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-7"></div>

                                                <div class="col-xl-1"></div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Apellido Paterno:</span>
                                                        </div>
                                                        <input type="text" name="name" value="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-7">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Apellido Materno:</span>
                                                        </div>
                                                        <input type="text" name="Numero de empleados" value="">
                                                    </div>
                                                </div>

                                                <div class="col-xl-1"></div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text B-color" id="basic-addon1">@Email:</span>
                                                        </div>
                                                        <input type="text" name="numeroAsensores" value="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-7">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Telefono</span>
                                                        </div>
                                                        <input type="text" name="numeroAsensores" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mb-3" style="margin-top:30px;">
                                                <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Guardar Información">
                                            </div>
                                        </form>    
                                    </div>
                            <!--****************************|FORMULARIO INFORMACION PERSONAL|******************************************-->

                                                        <!--Seccion Intermedia de pagina // Mitad de pagina // separacion -->

                            <!--****************************|Agregar Personal|******************************************-->         
                                <div class="col-xl-12" style="border-top:dotted 2px black;padding-top:5px; border-bottom:dotted 2px">
                                    <h3>Agregar Personal </h3>
                                    <form method="post" action="../CONTROLER/ControladorBase.php">
                                        <input type="hidden" name="c" value="Postulante_controller" />
                                        <input type="hidden" name="a" value="update" />
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-xl-1"></div>
                                            <div class="col-xl-6">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Nombre:</span>
                                                    </div>
                                                    <input type="text" name="Nombre" value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-5">
                                            </div>
                                            <div class="col-xl-1"></div>
                                            <div class="col-xl-4">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Apellido Paterno:</span>
                                                    </div>
                                                    <input type="text" name="Nombre" value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Apellido Materno:</span>
                                                    </div>
                                                    <input type="text" name="Nombre" value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-1"></div>
                                            <div class="col-xl-4">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Telefono:</span>
                                                    </div>
                                                    <input type="text" name="Nombre" value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Email:</span>
                                                    </div>
                                                    <input type="text" name="Nombre" value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-1"></div>
                                            <div class="col-xl-7">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Password:</span>
                                                    </div>
                                                    <input type="text" name="Nombre" value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-4"></div>

                                            <div class="col-xl-12 mb-3" style="margin-top:20px;">
                                                <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Guardar Información">
                                            </div>

                                        </div>
                                    </form>
                                        <table class="table table-bordered table-hover">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Apellido</th>
                                                    <th scope="col">@Email</th>
                                                    <th scope="col">Contraseña  <img src="../CSS/open-iconic-master/png/lock-locked-3x.png" alt="Eliminar"></th>
                                                    <th scope="col">Telefono +56</th>
                                                    <th scope="col">Modificar</th>
                                                    <th scope="col">Eliminar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Juanito </td>
                                                    <td>Perez Muñoz</td>
                                                    <td>JPerezMuñoz69@gmail.com</td>
                                                    <td>***********</td>
                                                    <td><span style="color:red;">+56</span> 930090086</td>
                                                    <td class="text-center">
                                                        <a href="#"><img src="../CSS/open-iconic-master/png/book-3x.png" alt="Eliminar"></a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#"><img src="../CSS/open-iconic-master/png/circle-x-3x.png" alt="Eliminar"></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>    
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