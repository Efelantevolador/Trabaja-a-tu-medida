<script>
    function login_p(){
        alert("Bienvenido");
        window.location="../view/perfil.php";
    }
    function login_e(){
        alert("Bienvenido");
        window.location="../view/perfil.empresa.php";
    }
    function login_t(){
        alert("Bienvenido");
        window.location="../view/perfil_Trabajador.php";
    }
    function login_f(){
        alert("Este usuario no se encuentra registrado");
        window.location="../view/login.php";
    }
    function inicio(){
        window.location="../view/index.php";
    }
</script>
<?php
class Usuario_controller Extends Controlador_Base{
    public function __construct() {
            
    }

    public function login(){
       $pos=new Postulante();
        $pos->setCorreo($_POST["email"]);
        $pos->setPass($_POST["password"]);
        $pos=$pos->login_postulante();
        $trab=new Trabajador();
        $trab->setMail($_POST["email"]);
        $trab->setPass($_POST["password"]);
        $trab=$trab->login_trabajador();
        $emp=new Empresa();
        $emp->setCorreo($_POST["email"]);
        $emp->setPass($_POST["password"]);
        $emp=$emp->login();
        if($pos->getNombre()!=null){
            $_SESSION["Postulante"]=$pos;
            return "<script>login_p()</script>";
        }
        elseif($trab->getNombre()!=null){
            $_SESSION["Trabajador"]=$trab;
            return "<script>login_t()</script>";
        }
        elseif($emp->getNom_empresa()!=null){
            $_SESSION["Empresa"]=$emp;
            return "<script>login_e()</script>";
        }
        else{
            return "<script>login_f()</script>";
        }
    }

    public function cerrar(){
        if(isset($_SESSION["Postulante"])){
            unset($_SESSION["Postulante"]);
        }
        else{
            unset($_SESSION["Trabajador"]);
        }
        return "<script>inicio()</script>";
    }
}
?>