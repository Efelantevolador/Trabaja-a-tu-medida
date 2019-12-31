<?php
    class Postulacion_controller Extends Controlador_Base{

        public function __construct() {
            
        }

        public function createPostulacion(){
            $p=new Postulacion();
            $viv=new Vivienda();
            $emp=new Empresa();
            $emp=$_SESSION["Empresa"];
            $viv->setRegion($_POST["region"]);
            $viv->setComuna($_POST["comuna"]);
            $viv->setCalle($_POST["calle"]);
            $viv->setNum_calle($_POST["n_calle"]);
            $p->setN_ascensor($_POST["ascensores"]);
            $p->setN_pisos($_POST["pisos"]);
            $p->setN_banos($_POST["banos"]);
            $p->setSalario($_POST["sueldo"]);
            $p->setTipo_trabajo($_POST["tipo_trab"]);
            $p->setArea($_POST["area"]);
            $p->setProfesion($_POST["profesion"]);
            $p->setEspacio_trabajo($_POST["espacio"]);
            $p->setDescrip($_POST["actividades"]);
            $p->setEmpresa($emp->getRut_empresa());
            $p->setPregunta1($_POST["extremidad"]);
            $p->setPregunta2($_POST["rampa"]);
            $p->setPregunta3($_POST["puerta"]);
            $p->setPregunta4($_POST["manuales"]);
            $p->setPregunta5($_POST["coordinacion"]);
            $p->setPregunta6($_POST["fuerza"]);
            $p->setPregunta7($_POST["pie"]);
            if($p->getPre7()==1){
                $p->setPregunta8($_POST["tiempo_pie"]);
                echo "SI";
            }
            else{
                $p->setPregunta8(null);
                echo "NO";
            }
            $viv->create_vivienda();
            $p->setDireccion($viv->retornar_id());
            /*if($p->create()=="exito"){
                echo'<script type="text/javascript">
                    alert("La postulacion fue creada exitosamente");
                    window.location.href="../VIEW/crearOferta.php";
                </script>';
            }
            else{
                echo'<script type="text/javascript">
                    alert("No tienes permisos para entrar aquí");
                    window.location.href="../VIEW/crearOferta.php";
                </script>';
            }*/
        }
    }
?>