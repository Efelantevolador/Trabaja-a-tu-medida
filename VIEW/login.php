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
    <div class="container-fluid" style="margin-top:20px;margin-bottom:20px">
            <div class="row"> <!--row: se utiliza para definir una tabla de posicionamiento donde utilizar despues las clases Col-xs-?  -->
                <div class="col-xl-3"></div>
                    <!--*****************|2 CONTENIDO INTERNO DE PAG|*****************************************************************-->
                        <div class="col-xl-9">
                            <div class="container"> 
                                <div class="row align-content-center">
                                <div class="col-xl-1 text-center"></div>
                                <div class="col-xl-10 text-center">
                                    <h1 style="color:white;"></h1>
                                </div>
                                <div class="col-xl-1 text-center"></div>
                                <div class="col-xl-6"style="margin:80px;">
                                    <h1 class="text-center">Inicio de Sesion</h1>
                                    <!-- 2.1 Formulario inicio-->
                                        <form method="post" action="../CONTROLER/ControladorBase.php">
                                        <input type="hidden" name="c" value="Usuario_controller" />
                                        <input type="hidden" name="a" value="login" />
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">@ Gmail</span>
                                                </div>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="" aria-label="email" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Password</span>
                                                </div>
                                                <input type="password" name="password" id="password" class="form-control" placeholder="" aria-label="password" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="col-xl-12 mb-3" >
                                                <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Iniciar Sesión" class="special"/>
                                            </div>  
                                        </form>
                                    <!-- 2.1 Fin Formulario inicio-->
                                    <p>no tienes cuenta <a href="../VIEW/register.php">ir al Registro</a></p>
                                </div>
                            </div>
                        </div>    
                    <!--*****************|2 FIN CONTENIDO INTERNO DE PAG|*************************************************************-->
                <div class="col-xl-3"></div>
            </div>    
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
<!-- *******************************************|1 TERMINA EL CONTENIDO |*********************************************************************************************************-->    
        <script src="../CSS/bootstrap-js/jquery-3.2.1.slim.min.js"></script>
        <script src="../CSS/bootstrap-js/popper.min.js"></script>
        <script src="../CSS/bootstrap-js/bootstrap.min.js"></script>
        
    </body>
</html>