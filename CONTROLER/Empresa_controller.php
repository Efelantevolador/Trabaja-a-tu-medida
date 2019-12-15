<script>
    function perfil(){
        window.location="../view/perfil.empresa.php";
    }
    function update_emp_v(){
        alert("Modificado correctamente");
        window.location="../view/perfil.empresa.php";
    }
    function update_emp_f(){
        alert("Error al actualizar");
        window.location="../view/perfil.empresa.php";
    }
</script>
<?php
    class Empresa_controller Extends Controlador_Base{

        public function __construct() {
            
        }

        public function update(){
            $emp=new Empresa();
            $viv=new Vivienda();
            $emp=$_SESSION["Empresa"];
            $viv=$emp->getDireccion();
            $emp->setNom_empresa($_POST["name"]);
            $emp->setCorreo($_POST["email"]);
            $emp->setTelefono($_POST["telefono"]);
            $emp->setNum_trab($_POST["empleados"]);
            $emp->setSitio_web($_POST["sitio"]);
            $viv->setCalle($_POST["calle"]);
            $viv->setComuna($_POST["comuna"]);
            $viv->setNum_calle($_POST["ncalle"]);
            $viv->setRegion($_POST["region"]);
            if($emp->update()&&$viv->update_vivienda()){
                $emp->setDireccion($viv);
                $_SESSION["Postulante"]=$emp;
                echo "<script>update_emp_v()</script>";
            }
            else{
                echo "<script>update_emp_f()</script>";
            }
        }
    }
?>