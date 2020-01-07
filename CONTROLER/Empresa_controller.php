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

        public function update_trabajador($cod){
            $trab=new Trabajador();
            $trab->setNombre($_POST["name"]);
            $trab->setApellido_p($_POST["apellidoP"]);
            $trab->setApellido_m($_POST["apellidoM"]);
            $trab->setMail($cod);
            $trab->setPass($_POST["pass"]);
            if($trab->update()=="exito"){
                echo'<script type="text/javascript">
                alert("Modificado exitosamente");
                window.location.href="../VIEW/crear_Trabajador.php";
                </script>';
            }
            else{
                echo'<script type="text/javascript">
                alert("Error al modificar");
                window.location.href="../VIEW/crear_Trabajador.php";
                </script>'; 
            }
        }

        public function delete_trabajador($cod){
            $trab=new Trabajador();
            $trab->setMail($cod);
            if($trab->delete()=="exito"){
                echo'<script type="text/javascript">
                    alert("Eliminado exitosamente");
                    window.location.href="../VIEW/crear_Trabajador.php";
                </script>';
            }
            else{
                echo'<script type="text/javascript">
                    alert("Error al eliminar");
                    window.location.href="../VIEW/crear_Trabajador.php";
                </script>';
            }
        }

        public function create(){
            $emp=new Empresa();
            $emp->setRut_empresa($_POST["rut"]);
            $emp->setNum_trab($_POST["n_trab"]);
        }

        public function update(){
            $emp=new Empresa();
            $emp=$_SESSION["Empresa"];
            $viv=$emp->getDireccion();
            $emp->setNom_empresa($_POST["name"]);
            $emp->setCorreo($_POST["email"]);
            $emp->setTelefono($_POST["telefono"]);
            $emp->setNum_trab($_POST["empleados"]);
            $emp->setSitio_web($_POST["sitio"]);
            if($emp->update()){
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