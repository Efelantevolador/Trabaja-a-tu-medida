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
    /*ESTA WEA LA PUSE YO DOGE REVISAR. (La copie y pege para que funcionara el funcionario con php)*/
    /*ESTA WEA LA PUSE YO DOGE REVISAR. (La copie y pege para que funcionara el funcionario con php)*/
    /*ESTA WEA LA PUSE YO DOGE REVISAR. (La copie y pege para que funcionara el funcionario con php)*/
    /*TIENES QUE HACER QUE SE MUESTRE LA INFORMACION DE LA POSTULACION SELECCIONADA  los campos estan en disabled*/

        require_once("../MODEL/Empresa.php");
        require_once("../CONTROLER/Region_controller.php");
        require_once("../MODEL/Area.php");
        session_start();
        $emp=new Empresa();
        $ar=new Area();
        if(isset($_SESSION["Empresa"])){
            $emp=$_SESSION["Empresa"];
        }
    ?>
<!-- ********************************************|1 CONTENIDO |*******************************************************************************************************************-->
    
    <?php require("../VIEW/esential/navbar.php")?>

    <div class="container-fluid" style="margin-top:20px;margin-bottom:20px">
        <div class="row"> <!--row: se utiliza para definir una tabla de posicionamiento donde utilizar despues las clases Col-xs-?  -->
            <div class="col-xl-2">
                <?php require("../VIEW/esential/menu-lateral.php");?>
            </div>
            <div class="container">
                <div class="row align-content-center">
                    <div class="col-xl-10 text-center">
                        <h1>Crear Postulacion</h1>
                    </div>
                    <div class="col-xl-2"></div> 
                    <!--*****************|Postulante|*************************************************************-->
                        <div class="col-xl-10" style="height:100%;border-top:dotted 1px black;">
                            <h2 style="color:red;">Vista de Postulante</h2> <!--QUITAR-->
                            <h3 style="margin-top:10px;">Ubicacion de Sucursal</h3>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="input-group mb-4">
                                        <div class="input-group-append">
                                            <label class="input-group-text" style="border:0px;" for="id">Region :</label>
                                        </div>
                                        <select name="region" class="custom-select" id="cbxregion" disabled style="background:#E9E8E8;">
                                            <option selected disabled value="">- Región -</option>
                                            <?php
                                                $r=new Region_controller;
                                                $listar=$r->listar();
                                                foreach ($listar as $r):
                                            ?>
                                                <option value="<?php echo $r->getCod_region()?>"><?php echo $r->getNom_region()?></option>
                                            <?php 
                                                endforeach;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input-group mb-4">
                                        <div class="input-group-append" >
                                            <label class="input-group-text" style="border:0px;" for="id">Comuna :</label>
                                        </div>
                                        <select name="comuna" class="custom-select" id="comuna" disabled style="background:#E9E8E8;">
                                            <option selected disabled value="">- Comuna -</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="border:0px;" id="basic-addon1">Calle:</span>
                                        </div>
                                        <input type="text" name="calle"  class="custom-select" value="TEXTO DE Calle" disabled style="background:#E9E8E8;">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"  style="border:0px;" id="basic-addon1">N° Calle:</span>
                                        </div>
                                        <input type="text" name="n_calle" class="custom-select" value="TEXTO NUMERO CALLE" disabled style="background:#E9E8E8;">
                                    </div>
                                </div>
                            </div>
                            <h3>Datos de infraestructura sucursal</h3>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="input-group mb-4">
                                        <div class="input-group-append">
                                            <label class="input-group-text" style="border:0px;" for="id">N° de pisos :</label>
                                        </div>
                                        <select name="pisos" class="custom-select" id="pisos" disabled style="background:#E9E8E8;">
                                            <option selected disabled value="">- Pisos -</option>
                                            <?php  for($i=1;$i<=10;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                                            <option value="11">más de 10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6" id="div-ascensor">
                                    <div class="input-group mb-4">
                                        <div class="input-group-append">
                                            <label class="input-group-text" style="border:0px;" for="id">N° Ascensores :</label>
                                        </div>
                                        <select name="ascensores" class="custom-select" id="ascensores" disabled style="background:#E9E8E8;">
                                            <option selected disabled value="">- Ascensores -</option>
                                            <?php  for($i=0;$i<=10;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input-group mb-4">
                                        <div class="input-group-append">
                                            <label class="input-group-text" style="border:0px;" for="id">N° Baños aptos :</label>
                                        </div>
                                        <select name="banos" class="custom-select" id="id" disabled style="background:#E9E8E8;">
                                            <option selected disabled value="">- Baños -</option>
                                            <?php  for($i=0;$i<=10;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <h3>Datos de puesto laboral</h3>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="input-group mb-4">
                                        <div class="input-group-append">
                                            <label class="input-group-text" style="border:0px;" for="id">Tipo de trabajo:</label>
                                        </div>
                                        <select name="tipo_trab" class="custom-select" id="tipo_trab" disabled style="background:#E9E8E8;">
                                            <option selected disabled value="">- Tipo de trabajo -</option>
                                            <option value="1">Part-time</option>
                                            <option value="2">Full-time</option>
                                            <option value="3">Temporario</option>
                                            <option value="4">Pasantia</option>
                                            <option value="5">Por Contrato</option>
                                            <option value="6">Voluntario</option>
                                            <option value="7">Por Horas</option>
                                            <option value="8">Fines de Semana</option>
                                            <option value="9">Teletrabajo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="border:0px;" id="basic-addon1">Salario:</span>
                                        </div>
                                        <select name="sueldo" class="custom-select" id="sueldo" disabled style="background:#E9E8E8;">
                                            <option selected  disabled value="">- Sueldo -</option>
                                            <option value="0">menos de $300.000</option>     
                                            <option value="1">entre $300.000 - $400.000</option>  
                                            <option value="2">entre $400.000 - $500.000</option>  
                                            <option value="3">entre $500.000 - $600.000</option>  
                                            <option value="4">entre $600.000 - $700.000</option>  
                                            <option value="5">entre $700.000 - $800.000</option>  
                                            <option value="6">entre $800.000 - $900.000</option>  
                                            <option value="7">entre $900.000 - $1.000.000</option>  
                                            <option value="8">más de $1.000.000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="border:0px;" id="basic-addon1">Area :</span>
                                        </div>
                                        <select name="area" class="custom-select" id="id" disabled style="background:#E9E8E8;">
                                            <option selected disabled value="">- Area -</option>
                                            <?php 
                                                $lista=$ar->listar_areas();
                                                foreach ($lista as $ar):
                                            ?>
                                            <option value="<?php echo $ar->getCod_area();?>"><?php echo $ar->getNom_area();?></option>
                                            <?php
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="border:0px;" id="basic-addon1">Profesion u oficio :</span>
                                        </div>
                                        <input type="text" name="profesion" class="custom-select" value="PROFECION" disabled style="background:#E9E8E8;">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="border:0px;" id="basic-addon1">Espacio de trabajo :</span>
                                        </div>
                                        <input type="text" name="espacio" class="custom-select" value="ESPACIO TRABAJO" disabled style="background:#E9E8E8;">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="border:0px;" id="basic-addon1">Actividades a realizar :</span>
                                        </div>
                                        <textarea disabled name="actividades" style="width:100%;height:150px;background:#E9E8E8;">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia minima molestiae molestias 
                                        nulla eligendi? Distinctio doloremque voluptates vel at facilis, inventore quaerat accusamus 
                                        ratione dolorum maxime aut, obcaecati modi iste repellendus aliquam quae eaque id aliquid laborum! 
                                        Cupiditate magni impedit ex? Molestias harum optio sit architecto amet commodi quis illo?
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <h3>Puntos a considerar:</h3>
                                    <p> <strong>-</strong> Se requiere de ambas extremidades superiores.</p>
                                    <p> <strong>-</strong> El establecimiento cumple con rampas en todos los escalones.</p>
                                    <p> <strong>-</strong> Todas las puertas cumplen con un tamaño necesario para sillas de ruedas.</p>
                                    <p> <strong>-</strong> El trabajo requiere realizar, trabajos manuales.</p>
                                    <p> <strong>-</strong> El trabajo requiere coordinacion de manos.</p>
                                    <p> <strong>-</strong> El trabajo requiere un uso de fuerza Nulo/Bajo/Medio/Alto.</p>
                                    <p> <strong>-</strong> Se requiere estar de pie para trabajar.</p>
                                    <p> <strong>-</strong> Requiere estar de pie: Meno de 30 min / 1 a 2 Horas / 2 a 3 Horas / Mas de 3 Horas .</p>
                                </div> 
                                
                                <!--BOTON POSTULAR-->                    
                                    <div class="container">
                                        <div class="row">
                                        <div class="col-xl-3"></div>
                                        <div class="col-xl-6" style="margin-top: 10px;">
                                            <form action="#" method="post">
                                                <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Postular">
                                            </form>
                                        </div>   
                                        <div class="col-xl-3"></div>
                                        </div>
                                    </div>
                                <!--BOTON POSTULAR-->  

                                <!--BOTON QUITAR POSTULACION-->                 
                                    <div class="container">
                                        <div class="row">
                                        <div class="col-xl-3"></div>
                                        <div class="col-xl-6" style="margin-top: 10px;">
                                            <form action="#" method="post">
                                                <input type="submit" class="btn btn-outline-danger btn-lg btn-block" value="Quitar Postulacion">
                                            </form>
                                        </div>   
                                        <div class="col-xl-3"></div>
                                        </div>
                                    </div> 
                                <!--BOTON QUITAR POSTULACION-->  

                            </div>
                        </div>
                        <div class="col-xl-2"></div>

                    <!--*****************|Postulante|*************************************************************-->
                    
                    <!--*****************|Empresa|*************************************************************-->
                        <div class="col-xl-10" style="margin-top:50px; height:100%;border-top:dotted 1px black;">
                            <h2 style="color:red;">Vista de Empresa</h2><!--QUITAR-->
                            <form action="#" method="post">    
                                    <h3 style="margin-top:10px;">Ubicacion de Sucursal</h3>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" style="border:0px;" for="id">Region :</label>
                                                </div>
                                                <select name="region" class="custom-select" id="cbxregion">
                                                    <option selected disabled value="">- Región -</option>
                                                    <?php
                                                        $r=new Region_controller;
                                                        $listar=$r->listar();
                                                        foreach ($listar as $r):
                                                    ?>
                                                        <option value="<?php echo $r->getCod_region()?>"><?php echo $r->getNom_region()?></option>
                                                    <?php 
                                                        endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append" >
                                                    <label class="input-group-text" style="border:0px;" for="id">Comuna :</label>
                                                </div>
                                                <select name="comuna" class="custom-select" id="comuna">
                                                    <option selected disabled value="">- Comuna -</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="border:0px;" id="basic-addon1">Calle:</span>
                                                </div>
                                                <input type="text" name="calle" value="TEXTO DE Calle">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"  style="border:0px;" id="basic-addon1">N° Calle:</span>
                                                </div>
                                                <input type="text" name="n_calle" value="TEXTO NUMERO CALLE">
                                            </div>
                                        </div>
                                    </div>
                                    <h3>Datos de infraestructura sucursal</h3>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" style="border:0px;" for="id">N° de pisos :</label>
                                                </div>
                                                <select name="pisos" class="custom-select" id="pisos">
                                                    <option selected disabled value="">- Pisos -</option>
                                                    <?php  for($i=1;$i<=10;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                                                    <option value="11">más de 10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6" id="div-ascensor">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" style="border:0px;" for="id">N° Ascensores :</label>
                                                </div>
                                                <select name="ascensores" class="custom-select" id="ascensores">
                                                    <option selected disabled value="">- Ascensores -</option>
                                                    <?php  for($i=0;$i<=10;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" style="border:0px;" for="id">N° Baños aptos :</label>
                                                </div>
                                                <select name="banos" class="custom-select" id="id">
                                                    <option selected disabled value="">- Baños -</option>
                                                    <?php  for($i=0;$i<=10;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <h3>Datos de puesto laboral</h3>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" style="border:0px;" for="id">Tipo de trabajo:</label>
                                                </div>
                                                <select name="tipo_trab" class="custom-select" id="tipo_trab">
                                                    <option selected disabled value="">- Tipo de trabajo -</option>
                                                    <option value="1">Part-time</option>
                                                    <option value="2">Full-time</option>
                                                    <option value="3">Temporario</option>
                                                    <option value="4">Pasantia</option>
                                                    <option value="5">Por Contrato</option>
                                                    <option value="6">Voluntario</option>
                                                    <option value="7">Por Horas</option>
                                                    <option value="8">Fines de Semana</option>
                                                    <option value="9">Teletrabajo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="border:0px;" id="basic-addon1">Salario:</span>
                                                </div>
                                                <select name="sueldo" class="custom-select" id="sueldo">
                                                    <option selected  disabled value="">- Sueldo -</option>
                                                    <option value="0">menos de $300.000</option>     
                                                    <option value="1">entre $300.000 - $400.000</option>  
                                                    <option value="2">entre $400.000 - $500.000</option>  
                                                    <option value="3">entre $500.000 - $600.000</option>  
                                                    <option value="4">entre $600.000 - $700.000</option>  
                                                    <option value="5">entre $700.000 - $800.000</option>  
                                                    <option value="6">entre $800.000 - $900.000</option>  
                                                    <option value="7">entre $900.000 - $1.000.000</option>  
                                                    <option value="8">más de $1.000.000</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="border:0px;" id="basic-addon1">Area :</span>
                                                </div>
                                                <select name="area" class="custom-select" id="id">
                                                    <option selected disabled value="">- Area -</option>
                                                    <?php 
                                                        $lista=$ar->listar_areas();
                                                        foreach ($lista as $ar):
                                                    ?>
                                                    <option value="<?php echo $ar->getCod_area();?>"><?php echo $ar->getNom_area();?></option>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="border:0px;" id="basic-addon1">Profesion u oficio :</span>
                                                </div>
                                                <input type="text" name="profesion"  value="PROFECION">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="border:0px;" id="basic-addon1">Espacio de trabajo :</span>
                                                </div>
                                                <input type="text" name="espacio"  value="ESPACIO TRABAJO" >
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="border:0px;" id="basic-addon1">Actividades a realizar :</span>
                                                </div>
                                                <textarea name="actividades" style="width:100%;height:150px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis veritatis deleniti reprehenderit, tempore a dicta repellendus iusto recusandae. Saepe, et? Aut nisi commodi reiciendis nesciunt maiores autem ex aperiam, quae accusamus quasi itaque reprehenderit placeat blanditiis. Unde, deleniti vel voluptates eius, adipisci aperiam quia porro similique error, ullam labore provident.</textarea>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xl-8">
                                                    <p>¿Requiere usar ambas extremidades superiores?</p>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="row">
                                                        <input type="radio" name="extremidad" id="" value="1"> 
                                                            <p style="margin-left:5px;">Si</p>
                                                        <input style="margin-left:10px;"type="radio" name="extremidad" id="" value="0"> 
                                                            <p style="margin-left:5px;">No</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8">
                                                    <p>¿El establecimiento cuenta con rampas en todas las escalones?</p>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="row">
                                                        <input type="radio" name="rampa" id="" value="1"> 
                                                            <p style="margin-left:5px;">Si</p>
                                                        <input style="margin-left:10px;"type="radio" name="rampa" id="" value="0"> 
                                                            <p style="margin-left:5px;">No</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8">
                                                    <p>¿Las puertas del lugar de trabajo cumple con X medida de ancho?</p>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="row">
                                                        <input type="radio" name="puerta" id="" value="1"> 
                                                            <p style="margin-left:5px;">Si</p>
                                                        <input style="margin-left:10px;"type="radio" name="puerta" id="" value="0"> 
                                                            <p style="margin-left:5px;">No</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8">
                                                    <p>¿Requiere realizar trabajos manuales?</p>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="row">
                                                        <input type="radio" name="manuales" id="" value="1"> 
                                                            <p style="margin-left:5px;">Si</p>
                                                        <input style="margin-left:10px;"type="radio" name="manuales" id="" value="0"> 
                                                            <p style="margin-left:5px;">No</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8">
                                                    <p>¿Requiere coordinacion de ambas manos?</p>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="row">
                                                        <input type="radio" name="coordinacion" id="" value="1"> 
                                                            <p style="margin-left:5px;">Si</p>
                                                        <input style="margin-left:10px;"type="radio" name="coordinacion" id="" value="0"> 
                                                            <p style="margin-left:5px;">No</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row"">
                                                <div class="col-xl-8">
                                                    <p>¿uso de fuerza?</p>
                                                </div>
                                                <div class="col-xl-">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Uso de fuerza :</span>
                                                        </div>
                                                        <select name="fuerza" class="custom-select" id="id">
                                                            <option value="0">Nulo</option>
                                                            <option value="1">Bajo</option>
                                                            <option value="2">Medio</option>
                                                            <option value="3">Alto</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-8">
                                                    <p>¿Debe estar de pie para poder trabajar?</p>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="row">
                                                        <input type="radio" name="pie" id="" value="1"> 
                                                            <p style="margin-left:5px;">Si</p>
                                                        <input style="margin-left:10px;"type="radio" name="pie" id="" value="0"> 
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
                                                        <select name="tiempo_pie" class="custom-select" id="id">
                                                            <option value="1">menos de 30 minutos</option>
                                                            <option value="2">entre 30 minutos a 1 hora</option>
                                                            <option value="3">entre 1 a 2 horas</option>
                                                            <option value="4">entre 2 a 3 horas</option>
                                                            <option value="5">más de 3 horas</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Modificar">
                            </form> 
                            <form action="#" method="post">
                                <input type="submit" class="btn btn-outline-danger btn-lg btn-block" value="Eliminar Postulacion">
                            </form>
                            <!--PERSONAS POSTULANDO-->
                            <h3 style="margin-top:40px;">Postulantes interesados:</h3>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-5" style="border:solid 1px black;margin-top:5px;">
                                            <h4><a href="info_postulante.php">Nombre del Postulante</a></h4>
                                            <h4>Rut: 19.529.387-2</h4>
                                        </div>
                                        <div class="col-xl-1"></div>
                                        <div class="col-xl-5" style="border:solid 1px black;margin-top:5px;">
                                            <h4><a href="info_postulante.php">Nombre del Postulante</a></h4>
                                            <h4>Rut: 19.529.387-2</h4>
                                        </div>
                                        <div class="col-xl-1"></div>
                                        <div class="col-xl-5" style="border:solid 1px black;margin-top:5px;">
                                            <h4><a href="info_postulante.php">Nombre del Postulante</a></h4>
                                            <h4>Rut: 19.529.387-2</h4>
                                        </div>
                                        <div class="col-xl-1"></div>
                                    </div>
                                </div>
                            <!--PERSONAS POSTULANDO-->
                        </div>
                        <div class="col-xl-2"></div>
                    <!--*****************|Empresa|*************************************************************-->
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