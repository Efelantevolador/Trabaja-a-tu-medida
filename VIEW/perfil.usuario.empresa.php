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
                <?php require("../VIEW/esential/menu-lateral-empresa.php");?>
            </div>
                <!--*****************|CONTENIDO|**************************************-->
                    <div class="col-xl-10">
                        <div class="container" style="margin-top:30px;">
                            <div class="row align-content-center">
                                <div class="col-xl-1 text-center"></div>
                                <div class="col-xl-10 text-center">
                                    <h1>Perfil empresa </h1>
                                </div>
                                <div class="col-xl-1 text-center"></div>
                                <!--****************************|FORMULARIO INFORMACION PERSONAL|******************************************-->
                                    <div class="col-xl-12" style="border-top:dotted 2px black;padding-top:5px; border-bottom:dotted 2px">
                                        <h3>Información personal</h3>
                                        <form method="post" action="../CONTROLER/ControladorBase.php">
                                            <input type="hidden" name="c" value="Postulante_controller" />
                                            <input type="hidden" name="a" value="update" />
                                            <div class="row">
                                                
                                                </div>
                                                <div class="col-xl-8"></div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Nombre :</span>
                                                        </div>
                                                        <input type="text" name="name" value="<?php echo $p->getNombre();?>" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Apellido Paterno :</span>
                                                        </div>
                                                        <input type="text" name="apellidoP" value="<?php echo $p->getApellido_Paterno();?>" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Apellido Materno :</span>
                                                        </div>
                                                        <input type="text" name="apellidoM" value="<?php echo $p->getApellido_Materno();?>" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">@email :</span>
                                                        </div>
                                                        <input type="text" name="email" value="<?php echo $p->getCorreo();?>" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Telefono :</span>
                                                        </div>
                                                        <input type="text" name="telefono" value="<?php echo $p->getTelefono();?>" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            
                                                
                                                      
                                                    </div>
                                                </div>
                                               
                                             </div> 
                         
                                        </div>
                                     </div>
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