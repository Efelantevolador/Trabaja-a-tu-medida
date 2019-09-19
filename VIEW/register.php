<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../CSS/bootstrap-css/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/miestilo.css">
        
        
    </head>
    <body>
<!-- ********************************************|1 CONTENIDO |*******************************************************************************************************************-->
    <!--1.1 Barra Navegacion -->
        <header>
            <nav class="navbar navbar-expand-lg navbar navbar-dark colorNav">
                <div class="container">
                    <a class="navbar-brand" href="../VIEW/Base-pag.php">Trabaja a tu medida</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Info</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Desplegable
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Opción</a>
                                <a class="dropdown-item" href="#">Otra opción</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Ultima Opción separada</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Déshabilitado</a>
                            </li>
                        </ul>
                        <a class="nav-link" href="../VIEW/login.php" style="color:white;">
                            <img src="../CSS/open-iconic-master/png/account-login-3x.png" alt="icon name">  <!--|  Entrar  |--->
                            Iniciar Sesión
                        </a>
                        <!-- *************** BUSCADOR
                        <form class="form-inline my-2 my-lg-0 disabled">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        -->
                    </div>
                </div> 
            </nav> 
        </header>           
    <!--1.1 Fin Barra Navegacion -->  
        <!--Contenido interno pagina-->
            <div class="container-fluid" style="margin-top:30px;margin-bottom:30px;">
                <div class="row"> <!--row: se utiliza para definir una tabla de posicionamiento donde utilizar despues las clases Col-xs-?  -->
                        <div class="col-xl-3"></div><!--Izquierda de pagina-->
                    <!--*****************|2 CONTENIDO INTERNO DE PAG|*****************************************************************-->
                        <div class="col-xl-6"> 
                            <h1 class="text-center" style="margin-top:20px;">Formulario Registro</h1>
                            <div class="container">
                            <form action="">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h5>Informacion</h5>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rut :</span>
                                            </div>
                                            <input type="text" value="" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Nombre :</span>
                                                </div>
                                                <input type="text" value="" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                    </div>
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-6">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Apellido Paterno :</span>
                                            </div>
                                            <input type="text" value="" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Apellido Materno :</span>
                                            </div>
                                            <input type="text" value="" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-xl-12"></div>
                                    <div class="col-xl-6">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">@email :</span>
                                            </div>
                                            <input type="text" value="" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
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
                                                <?php  for($i=1990;$i<=2020;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
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
                                                <option value="15">Región de Arica y Parinacota</option>
                                                <option value="1">Región de Tarapacá</option>
                                                <option value="2">Región de Antofagasta</option>
                                                <option value="3">Región de Atacama</option>
                                                <option value="4">Región de Coquimbo</option>
                                                <option value="5">Región de Valparaíso</option>
                                                <option value="13">Región de Metropolitana de Santiago</option>
                                                <option value="6">Región de Libertador General Bernardo O'Higgins</option>
                                                <option value="7">Región de Maule</option>
                                                <option value="16">Región de Ñuble</option>
                                                <option value="8">Región de Biobío</option>
                                                <option value="9">Región de La Araucanía</option>
                                                <option value="14">Región de Los Ríos</option>
                                                <option value="10">Región de Los Lagos</option>
                                                <option value="11">Región de Aysén del General Carlos Ibáñez del Campo</option>
                                                <option value="12">Región de Magallanes y de la Antártica Chilena</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="input-group mb-2">
                                            <div class="input-group-append">
                                                <label class="input-group-text" for="inputGroupSelect02">Comuna :</label>
                                            </div>
                                            <input type="text" name="comuna" value="" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
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
                        <div class="col-xl-3"></div><!--Derecha de pagina-->
                </div>
            </div>    
    <!--1.2 Parte baja de pagina-->
        <footer>
            <div class="container-footer-all">
                <div class="container-body">
                    <div class="colum1">
                        <h1>Informacion empresa</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam vel doloribus necessitatibus harum eos totam a quisquam, natus dicta consectetur!</p>
                        <h3>Mision</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique quibusdam, voluptate deleniti quae iure voluptas saepe molestiae dignissimos laboriosam doloremque, porro, ullam error magnam odit!</p>
                        <h3>Vision</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In rem sunt saepe aspernatur odio aliquam sequi exercitationem fuga, aut dolorem.</p>
                    </div>
                    <div class="colum2">
                        <h1>Redes Sociales</h1>
                        <div class="rowf1">
                            <img src="../images/icon/facebook.png">
                            <label>Siguenos en Facebook</label> 
                        </div>
                        <div class="rowf1">
                            <img src="../images/icon/twitter.png">
                            <label>Siguenos en Twitter</label> 
                        </div>
                        <div class="rowf1">
                            <img src="../images/icon/instagram.png">
                            <label>Siguenos en Instagram</label> 
                        </div>
                        <div class="rowf1">
                            <img src="../images/icon/google-plus.png">
                            <label>Siguenos en Google plus</label> 
                        </div>
                        <div class="rowf1">
                            <img src="../images/icon/pinterest.png">
                            <label>Siguenos en Pinteres</label> 
                        </div>
                    </div>
                    <div class="colum3">
                        <h1>Informacion Contactos</h1>
                        <div class="rowf2">
                            <img src="../images/icon/house.png">
                            <label>Santiago de Chile, Maipu Av.Pajarito #1566</label>
                        </div>
                        <div class="rowf2">
                            <img src="../images/icon/contact.png">
                            <label>contactoTATM@gmail.com</label>
                        </div>
                        <div class="rowf2">
                            <img src="../images/icon/smartphone.png">
                            <label>+569 300 900 86</label>
                        </div>
                    </div>
                </div> 
            </div>  
        </footer>    
    <!--1.2 parte baja de pagina-->  
            
        <!--Contenido interno pagina-->        
<!-- *******************************************|1 TERMINA EL CONTENIDO |*********************************************************************************************************-->    
        <script src="../CSS/bootstrap-js/jquery-3.2.1.slim.min.js"></script>
        <script src="../CSS/bootstrap-js/popper.min.js"></script>
        <script src="../CSS/bootstrap-js/bootstrap.min.js"></script>
        
    </body>
</html>