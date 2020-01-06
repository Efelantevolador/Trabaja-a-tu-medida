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
        require_once("../MODEL/Estudio.php");
        session_start();
        $p=new Postulante();
        if(isset($_SESSION["Postulante"])){
            $p=$_SESSION["Postulante"];
            $viv=new Vivienda();
            $viv=$p->getVivienda();
            $lista=$p->list_estudio();
            $p->setLista_estudio($lista);
    ?>
<!-- ********************************************|1 CONTENIDO |*******************************************************************************************************************-->
    <?php require("../VIEW/esential/navbar.php")?>
    <div class="container-fluid" style="margin-top:20px;margin-bottom:20px">
        <div class="row"> <!--row: se utiliza para definir una tabla de posicionamiento donde utilizar despues las clases Col-xs-?  -->
            <div class="col-xl-2">
                <?php require("../VIEW/esential/menu-lateral.php");?>
            </div>
                <!--*****************|CONTENIDO|**************************************-->
                    <div class="col-xl-10">
                        <div class="container" style="margin-top:30px;">
                            <div class="row align-content-center">
                                <div class="col-xl-1 text-center"></div>
                                <div class="col-xl-10 text-center">
                                    <h1>Perfil</h1>
                                </div>
                                <div class="col-xl-1 text-center"></div>
                                <!--****************************|FORMULARIO INFORMACION PERSONAL|******************************************-->
                                    <div class="col-xl-12" style="border-top:dotted 2px black;padding-top:5px; border-bottom:dotted 2px">
                                        <h3>Información personal</h3>
                                        <form method="post" action="../CONTROLER/ControladorBase.php">
                                            <input type="hidden" name="c" value="Postulante_controller" />
                                            <input type="hidden" name="a" value="update" />
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Rut :</span>
                                                        </div>
                                                        <input type="text" name="rut" value="<?php echo $p->getRut();?>" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" disabled>
                                                    </div>
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
                                                <div class="col-xl-4"></div>
                                                <div class="col-xl-12">
                                                    <h5>Fecha de nacimiento</h5>
                                                </div>
                                                <div class="col-xl-2">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02">Dia :</label>
                                                        </div>
                                                        <select name="day" class="custom-select" id="inputGroupSelect02">
                                                            <option disabled>-Dia-</option>
                                                            <?php
                                                                for ($i = 1; $i <=31; $i++){
                                                                    if(substr($p->getFecha_nacimiento(),-2)==$i){
                                                                        echo '<option value="'.$i.'" selected>'.$i.'</option>';
                                                                    }else{
                                                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02">Mes :</label>
                                                        </div>
                                                        <select name="month" class="custom-select" id="inputGroupSelect02">
                                                            <option value="" disabled>- Mes -</option>
                                                            <option <?php if(substr($p->getFecha_nacimiento(),-5,-3)==1){echo "selected";}?> value="01">Enero</option>
                                                            <option <?php if(substr($p->getFecha_nacimiento(),-5,-3)==2){echo "selected";}?> value="02">Febrero</option>
                                                            <option <?php if(substr($p->getFecha_nacimiento(),-5,-3)==3){echo "selected";}?> value="03">Marzo</option>
                                                            <option <?php if(substr($p->getFecha_nacimiento(),-5,-3)==4){echo "selected";}?> value="04">Abril</option>
                                                            <option <?php if(substr($p->getFecha_nacimiento(),-5,-3)==5){echo "selected";}?> value="05">Mayo</option>
                                                            <option <?php if(substr($p->getFecha_nacimiento(),-5,-3)==6){echo "selected";}?> value="06">Junio</option>
                                                            <option <?php if(substr($p->getFecha_nacimiento(),-5,-3)==7){echo "selected";}?> value="07">Julio</option>
                                                            <option <?php if(substr($p->getFecha_nacimiento(),-5,-3)==8){echo "selected";}?> value="08">Agosto</option>
                                                            <option <?php if(substr($p->getFecha_nacimiento(),-5,-3)==9){echo "selected";}?> value="09">Septiembre</option>
                                                            <option <?php if(substr($p->getFecha_nacimiento(),-5,-3)==10){echo "selected";}?> value="10">Octubre</option>
                                                            <option <?php if(substr($p->getFecha_nacimiento(),-5,-3)==11){echo "selected";}?> value="11">Noviembre</option>
                                                            <option <?php if(substr($p->getFecha_nacimiento(),-5,-3)==12){echo "selected";}?> value="12">Diciembre</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02">Año :</label>
                                                        </div>
                                                        <select name="year" class="custom-select" id="inputGroupSelect02">
                                                            <option value="" disabled>- Año -</option>
                                                                
                                                                <?php
                                                                    $a=2019;
                                                                    for ($i = 1; $i <=70; $i++){
                                                                        if(substr($p->getFecha_nacimiento(),0,-6)==$a){
                                                                            echo '<option value="'.$a.'" selected>'.$a.'</option>';
                                                                        }
                                                                        else{
                                                                            echo '<option value="'.$a.'">'.$a.'</option>';
                                                                        }
                                                                        $a=$a-1;
                                                                    }
                                                                ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6"></div>
                                                <div class="col-xl-12">
                                                    <h5>Dirección</h5>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02">Región :</label>
                                                        </div>
                                                        <select name="region" class="custom-select" id="region">
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
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02">Comuna :</label>
                                                        </div>
                                                        <select name="comuna" class="custom-select" id="comuna">
                                                    
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4"></div>
                                                <div class="col-xl-6">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Calle :</span>
                                                        </div>
                                                        <input type="text" name="calle" value="<?php echo $viv->getCalle();?>" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">N° calle # :</span>
                                                        </div>
                                                        <input type="text" name="ncalle" value="<?php echo $viv->getNum_calle();?>" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 mb-3">
                                                    <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Guardar Información">
                                                </div>
                                            </div>
                                        </form>    
                                    </div>
                                <!--****************************|FORMULARIO INFORMACION PERSONAL|******************************************-->    
                                <!--****************************|Formulario INFORMACION PROFECIONAL|***************************************-->
                                    <div class="col-xl-12 borde-r" style="border-bottom:dotted 2px black;margin-bottom:15px;margin-top:35px;"> 
                                        <h1>Información Educacional</h1>                            
                                        <form method="post" action="../CONTROLER/ControladorBase.php">
                                        <input type="hidden" name="c" value="Postulante_controller" />
                                        <input type="hidden" name="a" value="agregarEstudio" />
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02">Nivel Educacional:</label>
                                                        </div>
                                                        <select class="custom-select" name="nivel" id="inputGroupSelect02">
                                                            <option value="" selected disabled>- Seleccione -</option>
                                                            <option value="1">Educación básica</option>
                                                            <option value="2">Educación media</option>
                                                            <option value="3">Educación media técnico profecional</option>
                                                            <option value="4">Educación Superior</option>
                                                            <option value="5">Post-grado</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02">Estado:</label>
                                                        </div>
                                                        <select class="custom-select" name="estado" id="inputGroupSelect02">
                                                            <option value="" selected disabled>- Seleccione -</option>
                                                            <option value="0">En curso</option>
                                                            <option value="1">Graduado</option>
                                                            <option value="2">Abandonado</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Institución:</span>
                                                        </div>
                                                        <input type="text" name="institucion" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Titulo Cursado u Obtenido:</span>
                                                        </div>
                                                        <input type="text" name="titulo" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02">Año de inicio:</label>
                                                        </div>
                                                        <select class="custom-select" name="inicio" id="inputGroupSelect02">
                                                            <?php
                                                                $a=2019;
                                                                for ($i = 1; $i <=70; $i++){
                                                                    echo '<option value="'.$a.'">'.$a.'</option>';
                                                                    $a=$a-1;
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2"></div>
                                                <div class="col-xl-4">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02">Año de Termino:</label>
                                                        </div>
                                                        <select class="custom-select" name="fin" id="inputGroupSelect02">
                                                        <?php
                                                                $a=2019;
                                                                for ($i = 1; $i <=70; $i++){
                                                                    echo '<option value="'.$a.'">'.$a.'</option>';
                                                                    $a=$a-1;
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12 mb-3">
                                                    <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Agregar Información">
                                                </div>
                                            </div>
                                        </form>
                                        <table class="table table-bordered table-hover">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">Nivel Educacional</th>
                                                    <th scope="col">Estado</th>
                                                    <th scope="col">Titulos Cursados u Obtenidos</th>
                                                    <th scope="col">Institución</th>
                                                    <th scope="col">Año [inicio - Termino]</th>
                                                    <th scope="col">Eliminar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $listae=$p->getLista_estudio();
                                                    foreach ($listae as $est):?>
                                                        <tr>
                                                            <td><?php 
                                                            if($est->getNivel()==1){
                                                                echo "Eduacion basica";
                                                            }
                                                            elseif($est->getNivel()==2){
                                                                echo "Eduacion media";
                                                            }
                                                            elseif($est->getNivel()==3){
                                                                echo "Eduacion media tecnico profesional";
                                                            }
                                                            elseif($est->getNivel()==4){
                                                                echo "Eduacion Superior";
                                                            }
                                                            elseif($est->getNivel()==5){
                                                                echo "Post-grado";
                                                            }
                                                            else{
                                                                echo "NO RECONOCE";
                                                            }?></td>
                                                            <td><?php if($est->getEstado()==1){echo "En curso";}elseif($est->getEstado()==2){echo "Graduado";}elseif($est->getEstado()==3){echo "Abandonado";}else{echo "error";}?></td>
                                                            <td><?php echo $est->getTitulo()?></td>
                                                            <td><?php echo $est->getInstitucion()?></td>
                                                            <td><?php echo $est->getFecha_inicio()?>-<?php if($est->getFecha_fin()==null){echo "Actualidad";}else{echo $est->getFecha_fin();}?></td>
                                                            <td>
                                                                <a href="../CONTROLER/ControladorBase.php?c=Postulante_controller&a=deleteEstudio&cod=<?php echo $est->getId_list()?>"><img src="../CSS/open-iconic-master/png/delete-3x.png" alt="Eliminar"></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach;?>
                                            </tbody>
                                        </table>
                                    </div>    
                                <!--****************************|Formulario INFORMACION PROFECIONAL|***************************************-->                             
                            </div>
                        </div>
                    </div>    
                <!--*****************|CONTENIDO|**************************************-->  
        </div>
    </div>
    <?php require("../VIEW/esential/footer.php");
    }
    else{
        echo'<script type="text/javascript">
            alert("No tienes permisos para entrar aquí");
            window.location.href="login.php";
        </script>';
    }
    ?>
<!-- *******************************************|1 TERMINA EL CONTENIDO |*********************************************************************************************************-->    
        <script src="../CSS/bootstrap-js/jquery-3.2.1.slim.min.js"></script>
        <script src="../CSS/bootstrap-js/popper.min.js"></script>
        <script src="../CSS/bootstrap-js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                var reg_id=$('#region').val()
                $.ajax({
                    type: 'POST',
                    url: 'esential/get_comunas.php',
                    data: {'reg_id' : reg_id}
                })
                .done(function(lista){
                    $('#comuna').html(lista)
                })
                .fail(function(){
                    alert("FALLO")
                })
            $('#region').on('change' ,function(){
                var reg_id=$('#region').val()
                $.ajax({
                    type: 'POST',
                    url: 'esential/get_comunas.php',
                    data: {'reg_id' : reg_id}
                })
                .done(function(lista){
                    $('#comuna').html(lista)
                })
                .fail(function(){
                    alert("FALLO")
                })
            });
        });
      </script>
    </body>
</html>