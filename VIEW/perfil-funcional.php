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
        require_once("../MODEL/Postulante.php");
        require_once("../MODEL/Vivienda.php");
        session_start();
        $p=new Postulante();
        if(isset($_SESSION["Postulante"])){
            $p=$_SESSION["Postulante"];
            $viv=new Vivienda();
            $viv=$p->getVivienda();
        }
    ?>
<!-- ********************************************|1 CONTENIDO |*******************************************************************************************************************-->
    <?php require("../VIEW/esential/navbar.php")?>
    <div class="container-fluid" style="margin-top:20px;margin-bottom:20px">
        <div class="row"> <!--row: se utiliza para definir una tabla de posicionamiento donde utilizar despues las clases Col-xs-?  -->
            <div class="col-xl-2">
                <?php require("../VIEW/esential/menu-lateral.php");?>
            </div>
                <!--*****************|CONTENIDO|**************************************-->
                    <div class="col-xl-8">
                        <div class="container" style="margin-top:30px;">
                            <div class="row align-content-center">
                                <div class="col-xl-1 text-center"></div>
                                <div class="col-xl-10 text-center">
                                    <h1>Perfil Funcional</h1>
                                </div>
                                <div class="col-xl-1"></div>
                                <div class="col-xl-12" style="padding-top:5px;">
                                    <h3>Información Funcional</h3>
                                    <!--****************************|FORMULARIO INFORMACION FUNCIONAL|******************************************-->
                                        <form id="miform" action="">
                                            <div class="row align-content-center" style="border:1px solid black">



                                            <div class="col-xl-12 text-center" style="margin-top:35px;">
                                                    <h5>¿Tiene ausencia de alguna extremidad?</h5>
                                                </div>
                                                <div class="col-xl-6 text-right">
                                                    <label for="">
                                                        <input type="radio" name="yes" id="si">
                                                        <p>Si</p>
                                                    </label>
                                                </div>    
                                                <div class="col-xl-6 text-left">
                                                    <label for="">
                                                        <input type="radio" name="no" id="no">
                                                        <p>no</p>
                                                    </label>
                                                </div>
 


                                                <div class="col-xl-2"></div>
                                                <div class="col-xl-8 text-center">
                                                    <label for="BI" class="checkeable">
                                                        <img src="../images/brazo izquierdo.png" style="width:70px;"/>
                                                        <input type="checkbox" name="BrazoIzquierdo" id="BI">
                                                        <p class="co">Brazo Izquierdo</p> 
                                                    </label>
                                                
                                                    <label for="BD" class="checkeable">
                                                        <img class="volteo" src="../images/brazo izquierdo.png" style="width:70px;"/>
                                                        <input type="checkbox" name="BrazoDerecho" id="BD">
                                                        <p class="co">Brazo Derecho</p> 
                                                    </label>
                                                </div>
                                                <div class="col-xl-2"></div>
                                                
                                                 
                                                <div class="col-xl-2"></div>
                                                <div class="col-xl-8 text-center">       
                                                    <label for="PI" class="checkeable">
                                                        <img src="../images/pierna izquierda.png"style="width:70px;"/>
                                                        <input type="checkbox" name="PiernaIzquierda" id="PI">
                                                        <p class="co">Pierna Izquierda</p> 
                                                    </label>
                                                
                                                    <label for="PD" class="checkeable">
                                                        <img class="volteo"src="../images/pierna izquierda.png" style="width:70px;"/>
                                                        <input type="checkbox" name="PiernaDerecha" id="PD">
                                                        <p class="co">Pierna Derecha</p> 
                                                    </label>  
                                                </div>
                                                <div class="col-xl-2"></div>


                                                <div class="col-xl-12" style="border-top:dotted 1px black;"></div>


                                                
                                                <div class="col-xl-12 text-center" style="margin-top:35px;">
                                                    <h5>¿Usted utiliza protesis para su vida diaria ?</h5>
                                                </div>
                                                <div class="col-xl-6 text-right">
                                                    <label for="">
                                                        <input type="radio" name="yes" id="si">
                                                        <p>Si</p>
                                                    </label>
                                                </div>    
                                                <div class="col-xl-6 text-left">
                                                    <label for="">
                                                        <input type="radio" name="no" id="no">
                                                        <p>no</p>
                                                    </label>
                                                </div>


                                                <div class="col-xl-6" id="BIzquierdo">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input name="ayudap" type="checkbox" id="BIzquierdoch" aria-label="Checkbox for following text input">
                                                            </div>
                                                        </div>
                                                        <input type="text" value="Brazo Izquierdo" class="form-control" disabled aria-label="Text input with checkbox">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02"><img src="../images/protesis mano.png" alt="icon name"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6" id="BDerecho">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input name="ayudap" type="checkbox" id="BDerechoch" aria-label="Checkbox for following text input">
                                                            </div>
                                                        </div>
                                                        <input type="text" value="Brazo Derecho" class="form-control" disabled aria-label="Text input with checkbox">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02"><img src="../images/protesis mano.png" alt="icon name"></label>
                                                        </div>
                                                    </div>
                                                </div><div class="col-xl-6" id="PIzquierdo">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input name="ayudap" type="checkbox" id="PIzquierdoch" aria-label="Checkbox for following text input">
                                                            </div>
                                                        </div>
                                                        <input type="text" value="Pie Izquierdo" class="form-control" disabled aria-label="Text input with checkbox">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02"><img src="../images/protesis.png" alt="icon name"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6" id="PDerecho">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input name="ayudap" type="checkbox" id="PDerechoch" aria-label="Checkbox for following text input">
                                                            </div>
                                                        </div>
                                                        <input type="text" value="Pie Derecho" class="form-control" disabled aria-label="Text input with checkbox">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02"><img src="../images/protesis.png" alt="icon name"></label>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-xl-12 text-center" style="margin-top:35px;">
                                                    <h5>¿Presenta alguna paralisis?</h5>
                                                </div>
                                                <div class="col-xl-6 text-right">
                                                    <label for="">
                                                        <input type="radio" name="yes" id="si">
                                                        <p>Si</p>
                                                    </label>
                                                </div>    
                                                <div class="col-xl-6 text-left">
                                                    <label for="">
                                                        <input type="radio" name="no" id="no">
                                                        <p>no</p>
                                                    </label>
                                                </div>


                                                <div class="col-xl-4"></div>
                                                <div class="col-xl-4">
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="comboboxP">Tipo :</label>
                                                        </div>
                                                        <select class="custom-select">
                                                        <option selected disabled id="combotortuga" value="0">-Paralisis-</option>
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4"></div>

                                                <div class="col-xl-12" style="margin-top:20px;margin-bottom:20px;"></div>


                                                <div class="col-xl-12 text-center" style="margin-bottom:30px;">
                                                    <h5>Seleccione las ayudas que usted utiliza diariamente.</h5>
                                                </div>
                                                
                                                <div class="col-xl-4"id="muleta">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input name="ayudap" type="checkbox" id="Imuleta" aria-label="Checkbox for following text input">
                                                            </div>
                                                        </div>
                                                        <input type="text" value="Muletas" class="form-control" disabled aria-label="Text input with checkbox">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02"><img src="../images/muleta.png" alt="icon name"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4" id="Baston">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input name="ayudap" type="checkbox" id="Ibaston" aria-label="Checkbox for following text input">
                                                            </div>
                                                        </div>
                                                        <input type="text" value="Baston" class="form-control" disabled aria-label="Text input with checkbox">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02"><img src="../images/baston.png" alt="icon name"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4" id="Silla">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input name="ayudap" type="checkbox" id="Imuleta" aria-label="Checkbox for following text input">
                                                            </div>
                                                        </div>
                                                        <input type="text" value="Silla de Ruedas" class="form-control" disabled aria-label="Text input with checkbox">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02"><img src="../images/sillaRueda.jpeg" alt="icon name"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4" id="Ortesis">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input name="ayudap" type="checkbox" id="Imuleta" aria-label="Checkbox for following text input">
                                                            </div>
                                                        </div>
                                                        <input type="text" value="Ortesis" class="form-control" disabled aria-label="Text input with checkbox">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02"><img src="../images/ortesis.png" alt="icon name"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4" id="Burrito">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input name="ayudap" type="checkbox" id="Imuleta" aria-label="Checkbox for following text input">
                                                            </div>
                                                        </div>
                                                        <input type="text" value="Burrito" class="form-control" disabled aria-label="Text input with checkbox">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02"><img src="../images/burrito.png" alt="icon name"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                
                                            </div>
                                        </form>
                                    <!--****************************|FORMULARIO INFORMACION FUNCIONAL|******************************************-->
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="col-xl-2"></div>
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