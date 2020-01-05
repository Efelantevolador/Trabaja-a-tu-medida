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
            $pos=new Postulante();
            $pos=$_SESSION["Postulante"];
            $dis=new Discapacidad();
            if(isset($_POST["extremidad"])&&$_POST["extremidad"]=="si"){
                $datos=$_POST["no_ex"];
                var_dump($datos);
                if(count($datos)!=1){
                    $pro=$_POST["prote"];
                    for($i=0; $i < count($datos); $i++){
                        $disca=new Discapacidad();
                        if($datos[$i]=="BrazoDerecho"){
                            $dis->setCod_discapacidad(11);
                            $comp=0;
                            for($i=0; $i <count($pro); $i++){
                                if($pro[$i]=="BD"){
                                    $comp=1;
                                }
                            }
                            if($comp==1){
                                $dis->setTipo_ayuda(8);
                            }
                            else{
                                $dis->setTipo_ayuda(9);
                            }
                            $disca=$dis->getbyAyuda();
                            if($disca->setDiscapacidad($pos->getRut())=="copia"){
                                echo'<script type="text/javascript">
                                alert("Estas discapacidades ya fueron asignadas");
                                window.location.href="../VIEW/perfil-funcional.php";
                                </script>';
                            }
                        }
                        elseif($datos[$i]=="BrazoIzquierdo"){
                            $dis->setCod_discapacidad(10);
                            $comp=0;
                            for($i=0; $i <count($pro); $i++){
                                if($pro[$i]=="BI"){
                                    $comp=1;
                                }
                            }
                            if($comp==1){
                                $dis->setTipo_ayuda(8);
                            }
                            else{
                                $dis->setTipo_ayuda(9);
                            }
                            $disca=$dis->getbyAyuda();
                            if($disca->setDiscapacidad($pos->getRut())=="copia"){
                                echo'<script type="text/javascript">
                                alert("Estas discapacidades ya fueron asignadas");
                                window.location.href="../VIEW/perfil-funcional.php";
                                </script>';
                            }
                        }
                        elseif($datos[$i]=="PiernaIzquierda"){
                            $dis->setCod_discapacidad(12);
                            $comp=0;
                            for($i=0; $i <count($pro); $i++){
                                if($pro[$i]=="PI"){
                                    $comp=1;
                                }
                            }
                            if($comp==1){
                                $dis->setTipo_ayuda(8);
                            }
                            else{
                                $dis->setTipo_ayuda(9);
                            }
                            $disca=$dis->getbyAyuda();
                            if($disca->setDiscapacidad($pos->getRut())=="copia"){
                                echo'<script type="text/javascript">
                                alert("Estas discapacidades ya fueron asignadas");
                                window.location.href="../VIEW/perfil-funcional.php";
                                </script>';
                            }
                        }
                        elseif($datos[$i]=="PiernaDerecha"){
                            $dis->setCod_discapacidad(13);
                            $comp=0;
                            for($i=0; $i <count($pro); $i++){
                                if($pro[$i]=="PD"){
                                    $comp=1;
                                }
                            }
                            if($comp==1){
                                $dis->setTipo_ayuda(8);
                            }
                            else{
                                $dis->setTipo_ayuda(9);
                            }
                            $disca=$dis->getbyAyuda();
                            if($disca->setDiscapacidad($pos->getRut())=="copia"){
                                echo'<script type="text/javascript">
                                alert("Estas discapacidades ya fueron asignadas");
                                window.location.href="../VIEW/perfil-funcional.php";
                                </script>';
                            }
                        }
                    }
                }
                else{
                    if($datos[0]=="BrazoDerecho"){
                        $dis->setCod_discapacidad(11);
                        $comp=0;
                        if($_POST["protesis"]=="si"){
                            $comp=1;
                        }
                        if($comp==1){
                            $dis->setTipo_ayuda(8);
                        }
                        else{
                            $dis->setTipo_ayuda(9);
                        }
                        $disca=$dis->getbyAyuda();
                        if($disca->setDiscapacidad($pos->getRut())=="copia"){
                            echo'<script type="text/javascript">
                            alert("Estas discapacidades ya fueron asignadas");
                            window.location.href="../VIEW/perfil-funcional.php";
                            </script>';
                        }
                    }
                    elseif($datos[0]=="BrazoIzquierdo"){
                        $dis->setCod_discapacidad(10);
                        $comp=0;
                        if($_POST["protesis"]=="si"){
                            $comp=1;
                        }
                        if($comp==1){
                            $dis->setTipo_ayuda(8);
                        }
                        else{
                            $dis->setTipo_ayuda(9);
                        }
                        $disca=$dis->getbyAyuda();
                        if($disca->setDiscapacidad($pos->getRut())=="copia"){
                            echo'<script type="text/javascript">
                            alert("Estas discapacidades ya fueron asignadas");
                            window.location.href="../VIEW/perfil-funcional.php";
                            </script>';
                        }
                    }
                    elseif($datos[0]=="PiernaIzquierda"){
                        $dis->setCod_discapacidad(12);
                        $comp=0;
                        if($_POST["protesis"]=="si"){
                            $comp=1;
                        }
                        if($comp==1){
                            $dis->setTipo_ayuda(8);
                        }
                        else{
                            $dis->setTipo_ayuda(9);
                        }
                        $disca=$dis->getbyAyuda();
                        if($disca->setDiscapacidad($pos->getRut())=="copia"){
                            echo'<script type="text/javascript">
                            alert("Estas discapacidades ya fueron asignadas");
                            window.location.href="../VIEW/perfil-funcional.php";
                            </script>';
                        }
                    }
                    elseif($datos[0]=="PiernaDerecha"){
                        $dis->setCod_discapacidad(13);
                        $comp=0;
                        if($_POST["protesis"]=="si"){
                            $comp=1;
                        }
                        if($comp==1){
                            $dis->setTipo_ayuda(8);
                        }
                        else{
                            $dis->setTipo_ayuda(9);
                        }
                        $disca=$dis->getbyAyuda();
                        if($disca->setDiscapacidad($pos->getRut())=="copia"){
                            echo'<script type="text/javascript">
                            alert("Estas discapacidades ya fueron asignadas");
                            window.location.href="../VIEW/perfil-funcional.php";
                            </script>';
                        }
                    }
                }
            }
            elseif(isset($_POST["paralisis"])&&$_POST["paralisis"]=="si"){
                $dis->setCod_discapacidad($_POST["para"]);
                if($_POST["para"]==3){
                    $disca=new Discapacidad();
                    $dis->setTipo_ayuda(2);
                    $disca=$dis->getbyAyuda();
                    if($disca->setDiscapacidad($pos->getRut())=="copia"){
                        echo'<script type="text/javascript">
                        alert("Estas discapacidades ya fueron asignadas");
                        window.location.href="../VIEW/perfil-funcional.php";
                        </script>';
                    }
                }
                else{
                    $datos=$_POST["ayudap"];
                    for($i=0; $i < count($datos); $i++){
                        $disca=new Discapacidad();
                        $dis->setTipo_ayuda($datos[$i]);
                        $disca=$dis->getbyAyuda();
                        if($disca->setDiscapacidad($pos->getRut())=="copia"){
                            echo'<script type="text/javascript">
                            alert("Estas discapacidades ya fueron asignadas");
                            window.location.href="../VIEW/perfil-funcional.php";
                            </script>';
                        }
                    }
                }
            }
            else{
                echo'<script type="text/javascript">
                alert("Complete los datos");
                window.location.href="../VIEW/perfil-funcional.php";
                </script>';
            }
        }

        public function postular(){
            $pos=new Postulante();
            $pos=$_SESSION["Postulante"];
            if($pos->postular($_GET["cod"])=="exito"){
                echo'<script type="text/javascript">
                alert("Postulacion exitosa");
                window.location.href="../VIEW/detalle_postulacion.php?cod='.$_GET["cod"].'";
            </script>';
            }
            else{
                echo'<script type="text/javascript">
                alert("Error al postular");
                window.location.href="../VIEW/detalle_postulacion.php?cod='.$_GET["cod"].'";
            </script>';
            }
        }

        public function despostular(){
            $pos=new Postulante();
            $pos=$_SESSION["Postulante"];
            if($pos->despostular($_GET["cod"])=="exito"){
                echo'<script type="text/javascript">
                alert("Postulacion eliminada");
                window.location.href="../VIEW/detalle_postulacion.php?cod='.$_GET["cod"].'";
            </script>';
            }
            else{
                echo'<script type="text/javascript">
                alert("Error al postular");
                window.location.href="../VIEW/detalle_postulacion.php?cod='.$_GET["cod"].'";
            </script>';
            }
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

        public function getPostulaciones(){
            $p=new Postulante();
            $p=$_SESSION["Postulante"];
            $lista=[];
            $lista=$p->getPostulaciones();
            return $lista;
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
                echo "<script>perfil()</script>";
            }
            else{
                echo "<script>error_fecha()</script>";
            }
        }
    }

?>