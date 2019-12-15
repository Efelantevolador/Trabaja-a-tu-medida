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
        require_once("../MODEL/Empresa.php");
        require_once("../MODEL/Vivienda.php");
        session_start();
        $emp=new Empresa();
        if(isset($_SESSION["Empresa"])){
            $emp=$_SESSION["Empresa"];
            $viv=new Vivienda();
            $viv=$emp->getDireccion();
        }
    ?>
<!-- ********************************************|1 Pagina |*******************************************************************************************************************-->
    <?php require("../VIEW/esential/navbar.php")?>
    <div class="container-fluid" style="margin-top:20px;margin-bottom:20px">
        <div class="row"> <!--row: se utiliza para definir una tabla de posicionamiento donde utilizar despues las clases Col-xs-?  -->
            <div class="col-xl-2">
                <?php require("../VIEW/esential/menu-lateral-empresa.php");?>
            </div>
                <!--*****************|CONTENIDO|**************************************-->
                    <div class="col-xl-10">
                        <div class="container" style="margin-top:30px;">
                            <div class="row align-content-center">
                                <div class="col-xl-1 text-center"></div>
                                <div class="col-xl-10 text-center">
                                    <h1>Perfil Empresa</h1>
                                </div>
                                <div class="col-xl-1 text-center"></div>
                                <!--****************************|FORMULARIO INFORMACION EMPRESA|******************************************-->
                                    <div class="col-xl-12" style="border-top:dotted 2px black;padding-top:5px; border-bottom:dotted 2px">
                                        <h3>Información de la empresa </h3>
                                        <form method="post" action="../CONTROLER/ControladorBase.php">
                                            <input type="hidden" name="c" value="Empresa_controller" />
                                            <input type="hidden" name="a" value="update" />
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Rut empresa:</span>
                                                        </div>
                                                        <input type="text" name="rut" value="<?php echo $emp->getRut_empresa();?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Nombre Empresa:</span>
                                                        </div>
                                                        <input type="text" name="name" value="<?php echo $emp->getNom_empresa();?>">
                                                    </div>
                                                </div>
                                                <!--Fin linea 1 suma(4+8=12)-->
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">@email :</span>
                                                        </div>
                                                        <input type="text" name="email" value="<?php echo $emp->getCorreo();?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-8">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Telefono : +56</span>
                                                        </div>
                                                        <input type="text" name="telefono" value="<?php echo $emp->getTelefono();?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Razon social:</span>
                                                        </div>
                                                        <input type="text" name="razon" value="<?php echo $emp->getRazon_social();?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Numero de empleados:</span>
                                                        </div>
                                                        <input type="text" name="empleados" value="<?php echo $emp->getNum_trab()?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Sitio web:</span>
                                                        </div>
                                                        <input type="text" name="sitio" value="<?php echo $emp->getSitio_web();?>">
                                                    </div>
                                                </div>
                                                <!--Fin linea 2 suma (4+8=12)-->
                                                <div class="col-xl-12">
                                                    <h5>Dirección</h5>
                                                </div>
                                                <!--Fin linea 3  suma (12=12)-->
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02">Región :</label>
                                                        </div>
                                                        <select name="region" class="custom-select" id="inputGroupSelect02">
                                                            <option disabled>- Región -</option>
                                                            <option <?php if($viv->getRegion()==15){echo "selected";}?> value="15">Región de Arica y Parinacota</option>
                                                            <option <?php if($viv->getRegion()==1){echo "selected";}?> value="1">Región de Tarapacá</option>
                                                            <option <?php if($viv->getRegion()==2){echo "selected";}?> value="2">Región de Antofagasta</option>
                                                            <option <?php if($viv->getRegion()==3){echo "selected";}?> value="3">Región de Atacama</option>
                                                            <option <?php if($viv->getRegion()==4){echo "selected";}?> value="4">Región de Coquimbo</option>
                                                            <option <?php if($viv->getRegion()==5){echo "selected";}?> value="5">Región de Valparaíso</option>
                                                            <option <?php if($viv->getRegion()==13){echo "selected";}?> value="13">Región de Metropolitana de Santiago</option>
                                                            <option <?php if($viv->getRegion()==6){echo "selected";}?> value="6">Región de Libertador General Bernardo O'Higgins</option>
                                                            <option <?php if($viv->getRegion()==7){echo "selected";}?> value="7">Región de Maule</option>
                                                            <option <?php if($viv->getRegion()==16){echo "selected";}?> value="16">Región de Ñuble</option>
                                                            <option <?php if($viv->getRegion()==8){echo "selected";}?> value="8">Región de Biobío</option>
                                                            <option <?php if($viv->getRegion()==9){echo "selected";}?> value="9">Región de La Araucanía</option>
                                                            <option <?php if($viv->getRegion()==14){echo "selected";}?> value="14">Región de Los Ríos</option>
                                                            <option <?php if($viv->getRegion()==10){echo "selected";}?> value="10">Región de Los Lagos</option>
                                                            <option <?php if($viv->getRegion()==11){echo "selected";}?> value="11">Región de Aysén del General Carlos Ibáñez del Campo</option>
                                                            <option <?php if($viv->getRegion()==12){echo "selected";}?> value="12">Región de Magallanes y de la Antártica Chilena</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02">Comuna :</label>
                                                        </div>
                                                        <input type="text" name="comuna" value="<?php echo $viv->getComuna();?>">
                                                    </div>
                                                </div>
                                                <!--Fin linea 4 suma(4+8=12)-->
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Calle :</span>
                                                        </div>
                                                        <input type="text" name="calle" value="<?php echo $viv->getCalle();?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-8">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">N° calle # :</span>
                                                        </div>
                                                        <input type="text" name="ncalle" value="<?php echo $viv->getCalle();?>">
                                                    </div>
                                                </div>
                                                
                                                <!--Fin linea 5 suma(4+8=12)-->
                                            </div>     
                                            <div class="col-xl-12 mb-3">
                                                <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Guardar Información">
                                            </div>
                                            <!--Fin linea 6 suma(12=12)-->
                                        </form>                    
                                    </div>
                                <!--****************************|FORMULARIO INFORMACION EMPRESA|******************************************-->
                                             
                                             <!--Medio de pagina / division de formularios-->

                                <!--****************************|FORMULARIO DATOS EMPRESA|******************************************-->
                                    <div class="col-xl-12" style="border-top:dotted 2px black;padding-top:5px; border-bottom:dotted 2px">
                                        <h3>Datos de la empresa </h3>
                                        <form method="post" action="../CONTROLER/ControladorBase.php">
                                            <input type="hidden" name="c" value="Postulante_controller" />
                                            <input type="hidden" name="a" value="update" />
                                            <div class="row">

                                                
                                                <div class="col-xl-8"></div>
                                                <div class="col-xl-5">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Numero asensores :</span>
                                                        </div>
                                                        <input type="text" name="numeroAsensores" value="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-7">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Numero rampas :</span>
                                                        </div>
                                                        <input type="text" name="numeroAsensores" value="">
                                                    </div>
                                                </div>


                                                <div class="col-xl-5">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Numero de baños aptos:</span>
                                                        </div>
                                                        <input type="text" name="numeroAsensores" value="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-7">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Numero de estacionamientos aptos:</span>
                                                        </div>
                                                        <input type="text" name="numeroAsensores" value="">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-6">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Numero de puertas amplias:</span>
                                                        </div>
                                                        <input type="text" name="numeroAsensores" value="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6"></div>

                                                <div class="col-xl-12 mb-3">
                                                    <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Guardar Información">
                                                </div>

                                            </div>
                                        </form>    
                                    </div>
                                <!--****************************|FORMULARIO DATOS EMPRESA|******************************************-->    
                            </div>
                        </div>
                    </div>        
                <!--*****************|CONTENIDO|**************************************-->  
        </div>
    </div>
    <?php require("../VIEW/esential/footer.php");?>
<!-- *******************************************|1 pagina |*********************************************************************************************************-->    
        <script src="../CSS/bootstrap-js/jquery-3.2.1.slim.min.js"></script>
        <script src="../CSS/bootstrap-js/popper.min.js"></script>
        <script src="../CSS/bootstrap-js/bootstrap.min.js"></script>
    </body>
</html>