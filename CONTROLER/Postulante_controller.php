<script>
    function create_v(){
        alert("Registrado correctamente");
        window.location="../view/index.php";
    }
    function create_f(){
        alert("Este usuario ya está registrado");
        window.location="../view/registrarU.php";
    }
    function create_null(){
        alert("Complete todos los campos");
        window.location="../view/registrarU.php";
    }
    function update_v(){
        alert("Los datos fueron guardados exitosamente");
        window.location="../view/perfil.php";
    }
    function update_f(){
        alert("Error al modificar los datos");
        window.location="../view/perfil.php";
    }
    function error_fecha(){
        alert("La fecha de inicio de estudio no puede ser mayor a la fecha de fin");
        window.location="../view/perfil.php";
    }
    function error_delest(){
        alert("Error al eliminar el estudio");
        window.location="../view/perfil.php";
    }
    function perfil(){
        window.location="../view/perfil.php";
    }

</script>
<?php
    class Postulante_controller Extends Controlador_Base{

        public function __construct() {
            
        }

        public function update(){
            $p=new Postulante();
            $viv=new Vivienda();
            $p=$_SESSION["Postulante"];
            $viv=$p->getVivienda();
            $p->setCorreo($_POST["email"]);
            $p->setTelefono($_POST["telefono"]);
            $p->setNombre($_POST["name"]);
            $p->setApellido_Paterno($_POST["apellidoP"]);
            $p->setApellido_Materno($_POST["apellidoM"]);
            $p->setFecha_nacimiento($_POST["year"]."-".$_POST["month"]."-".$_POST["day"]);
            $viv->setCalle($_POST["calle"]);
            $viv->setComuna($_POST["comuna"]);
            $viv->setNum_calle($_POST["ncalle"]);
            $viv->setRegion($_POST["region"]);
            if($p->update()&&$viv->update_vivienda()){
                $p->setVivienda($viv);
                $_SESSION["Postulante"]=$p;
                echo "<script>update_v()</script>";
            }
            else{
                echo "<script>update_f()</script>";
            }
        }

        public function crear(){
            $p=new Postulante();
            if($p->valida_rut($_POST["rut"])==1){
                $p=$p->getbyId($_POST["rut"]);
                if($p->getRut()==null&&trim($_POST["email"])!=''&&trim($_POST["password"])!=''
                &&trim($_POST["name"])!=''&&trim($_POST["apellidoP"])!=''&&trim($_POST["apellidoM"])!=''
                &&trim($_POST["calle"])!=''&&trim($_POST["ciudad"])!=''&&trim($_POST["comuna"])!=''&&trim($_POST["ncalle"])!=''){
                    $p->setRut($_POST["rut"]);
                    $p->setCorreo($_POST["email"]);
                    $p->setPass($_POST["password"]);
                    $p->setNombre($_POST["name"]);
                    $p->setApellido_Paterno($_POST["apellidoP"]);
                    $p->setApellido_Materno($_POST["apellidoM"]);
                    $p->setFecha_nacimiento($_POST["year"]."-".$_POST["month"]."-".$_POST["day"]);
                    $v=new Vivienda();
                    $v->setCalle($_POST["calle"]);
                    $v->setComuna($_POST["comuna"]);
                    $v->setNum_calle($_POST["ncalle"]);
                    $v->setRegion($_POST["region"]);
                    $v->create_vivienda();
                    $p->setVivienda($v->retornar_id());
                    if($p->create_postulante()=="exito"){
                        echo "<script>create_v()</script>";
                    }
                    else{
                        echo "<script>create_f()</script>";
                    }
                     
                }
                else{
                    echo "<script>create_null()</script>";
                }
            }
        }

        public function setDiscapacidades(){
            
        }

        public function deleteEstudio($cod){
            $est=new Estudio();
            $pos=new Postulante();
            $pos=$_SESSION["Postulante"];
            $est->setRut($pos->getRut());
            $est->setId_list($cod);
            if($est->delete_estudio()==1){
                echo "<script>perfil()</script>";
            }
            else{
                echo "<script>error_delest()</script>";
            }

        
        }

        public function agregarEstudio(){
            $est=new Estudio();
            $est->setFecha_inicio($_POST["inicio"]);
            $est->setNivel($_POST["nivel"]);
            $est->setTitulo($_POST["titulo"]);
            $est->setEstado($_POST["estado"]);
            $est->setFecha_fin($_POST["fin"]);
            $est->setInstitucion($_POST["institucion"]);
            $pos=$_SESSION["Postulante"];
            $est->setRut($pos->getRut());
            if($est->getFecha_fin()!=null&&$est->getFecha_fin()>=$est->getFecha_inicio()){
                $est->create_estudio();
            }
            else{
                echo "<script>error_fecha()</script>";
            }
        }
    }

?>