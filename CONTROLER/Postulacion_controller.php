<?php
    class Postulacion_controller Extends Controlador_Base{

        public function __construct() {
            
        }

        public function updatePostulacion(){
            $p=new Postulacion();
            $viv=new Vivienda();
            $emp=new Empresa();
            $emp=$_SESSION["Empresa"];
            $p->setId($_GET["cod"]);
            $p=$p->getbyId();
            $viv->setId($p->getDireccion());
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
            if($_POST["pie"]==1){
                $p->setPregunta8($_POST["tiempo_pie"]);
            }
            else{
                $p->setPregunta8(null);
            }
            if($p->update()=="exito"){
                $viv->update_vivienda();
                echo'<script type="text/javascript">
                    alert("La postulacion fue modificada exitosamente");
                    window.location.href="../VIEW/detalle_postulacion.php?cod='.$p->getId().'";
                </script>';
            }
            else{
                echo'<script type="text/javascript">
                    alert("No tienes permisos para entrar aquí");
                    window.location.href="../VIEW/detalle_postulacion.php?cod='.$p->getId().'"";
                </script>';
            }
        }

        public function deletePostulacion(){
            $p=new Postulacion();
            $p->setId($_GET["cod"]);
            if($p->delete()=="exito"){
                echo'<script type="text/javascript">
                    alert("La postulacion fue eliminada exitosamente");
                    window.location.href="../VIEW/perfil.empresa.php";
                </script>';
            }
            else{
                echo'<script type="text/javascript">
                    alert("'.$p->delete().'");
                    window.location.href="../VIEW/perfil.empresa.php";
                </script>';
            }
        }

        public function createPostulacion(){
            $p=new Postulacion();
            $viv=new Vivienda();
            $emp=new Empresa();
            $emp=$_SESSION["Empresa"];
            $p->setNombre($_POST["nombre"]);
            $viv->setRegion($_POST["region"]);
            $viv->setComuna($_POST["comuna"]);
            $viv->setCalle($_POST["calle"]);
            $viv->setNum_calle($_POST["n_calle"]);
            if($viv->create_vivienda()=="exito"){
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
                $p->setDireccion($viv->retornar_id());
                if($p->getPre7()==1){
                    $p->setPregunta8($_POST["tiempo_pie"]);
                }
                else{
                    $p->setPregunta8(null);
                }
                if($p->create()=="exito"){
                    echo'<script type="text/javascript">
                        alert("La postulacion fue creada exitosamente");
                        window.location.href="../VIEW/crearOferta.php";
                    </script>';
                }
                else{echo'<script type="text/javascript">
                        alert("No tienes permisos para entrar aquí");
                        window.location.href="../VIEW/crearOferta.php";
                    </script>';
                }
            }
        }
    }
?>