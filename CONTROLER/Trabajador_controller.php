<?php
class Trabajador_controller Extends Controlador_Base{
    public function __construct() {
            
    }

    public function create(){
        $trab=new Trabajador();
        $emp=new Empresa();
        $emp=$_SESSION["Empresa"];
        if(trim($_POST["name"])!=''&&trim($_POST["email"])!=''&&trim($_POST["apellidoP"])!=''&&trim($_POST["apellidoM"])!=''&&trim($_POST["password"])!=''){
            $trab->setNombre($_POST["name"]);
            $trab->setMail($_POST["email"]);
            $trab->setPass($_POST["password"]);
            $trab->setApellido_m($_POST["apellidoM"]);
            $trab->setApellido_p($_POST["apellidoP"]);
            $trab->setEmpresa($emp->getRut_empresa());
            if($trab->create()=="exito"){
                echo'<script type="text/javascript">
                    alert("Trabajador creado exitosamente");
                    window.location.href="../VIEW/";
                </script>';
            }
            else{
                echo'<script type="text/javascript">
                    alert("Error al crear al trabajador");
                    window.location.href="../VIEW/";
                </script>';
            }
        }
    }
}
?>