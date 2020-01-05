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
                                                    <option value="" selected disabled>-Seleccionar-</option>
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
                                        <div class="col-xl-4">
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="comboboxP">Tipo de trabajo :</label>
                                                </div>
                                                <select class="custom-select">
                                                    <option value="" selected disabled>-Seleccionar-</option>
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
                                <div class="row" id="ofertas">

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $.ajax({
                    type: 'POST',
                    url: 'esential/filtro.php',
                    //data: {'reg_id' : reg_id, 'cod' : cod}
                })
                .done(function(lista){
                    $('#ofertas').html(lista)
                })
                .fail(function(){
                    alert("FALLO")
                })
        });
        </script>
        
    </body>
</html>