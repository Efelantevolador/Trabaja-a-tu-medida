<?php
  require_once("conexion.php");
  require_once("Vivienda.php");
  require_once("Estudio.php");
    class Postulante
    {
      private $rut;
      private $nombre;
      private $apellido_paterno;
      private $apellido_materno;
      private $correo;
      private $pass;
      private $fecha_nacimiento;
      private $telefono;
      private $vivienda;
      private $lista_discapacidad;
      private $lista_estudio;
    
      public function __construct() {
        
      }
    
      public function setRut($rut)
      {
        $this->rut=$rut;
      }
    
      public function getRut()
      {
        return $this->rut;
      }
    
      public function setNombre($nombre)
      {
        $this->nombre=$nombre;
      }
    
      public function getNombre(){
        return $this->nombre;
      }
    
      public function setApellido_Paterno($apepa){
        $this->apellido_paterno=$apepa;
      }
    
      public function getApellido_Paterno(){
        return $this->apellido_paterno;
      }
    
      public function setApellido_Materno($apema){
        $this->apellido_materno=$apema;
      }
    
      public function getApellido_Materno(){
        return $this->apellido_materno;
      }
    
      public function setCorreo($correo){
        $this->correo=$correo;
      }
    
      public function getCorreo(){
        return $this->correo;
      }
    
      public function setPass($pass){
        $this->pass=$pass;
      }
    
      public function getPass(){
        return $this->pass;
      }
    
      public function setFecha_nacimiento($fecha_nacimiento){
        $this->fecha_nacimiento=$fecha_nacimiento;
      }
    
      public function getFecha_nacimiento(){
        return $this->fecha_nacimiento;
      }
    
      public function setTelefono($telefono){
        $this->telefono=$telefono;
      }
    
      public function getTelefono(){
        return $this->telefono;
      }
    
      public function setVivienda($vivienda){
        $this->vivienda=$vivienda;
      }
    
      public function getVivienda(){
        return $this->vivienda;
      }
    
      public function setLista_discapacidad($lista){
        $this->lista_discapacidad=$lista;
      }
    
      public function getLista_discapacidad(){
        return $this->lista_discapacidad;
      }

      public function setLista_estudio($lista){
        $this->lista_estudio=$lista;
      }

      public function getLista_estudio(){
        return $this->lista_estudio;
      }

      public function login_postulante(){
        $conn=new Conexion();
        $conexion=$conn->conectar();
        $sql = "SELECT * FROM postulante WHERE mail='".$this->correo."' AND pass='".$this->pass."'";
        $result = $conexion->query($sql);
        $p=new Postulante();
        $viv=new Vivienda();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $p->setApellido_Materno($row["apellido_m"]);
            $p->setApellido_Paterno($row["apellido_p"]);
            $p->setRut($row["id_rut"]);
            $p->setNombre($row["nombre"]);
            $p->setCorreo($row["mail"]);
            $p->setPass($row["pass"]);
            $p->setFecha_nacimiento($row["fecha_nacimiento"]);
            $p->setTelefono($row["telefono"]);
            $viv->setId($row["vivienda"]);
            $p->setVivienda($viv->getbyId());
        }
        return $p;
        $conexion->close();
      }

      public function list_estudio(){
        $conn=new Conexion();
        $conexion=$conn->conectar();
        $sql2= "SELECT * FROM lista_estudio WHERE id_postulante='".$this->rut."'";
        $result2=$conexion->query($sql2);
        $lista=[];
        if($result2->num_rows>0){
          while($row2 = $result2->fetch_assoc()) {
            $est=new Estudio();
            $est->setId_list($row2["id_list_est"]);
            $est->setNivel($row2["nivel_est"]);
            $est->setTitulo($row2["titulo_carrera"]);
            $est->setEstado($row2["estado"]);
            $est->setFecha_inicio($row2["fecha_ini"]);
            $est->setFecha_fin($row2["fecha_fin"]);
            $est->setInstitucion($row2["institucion"]);
            $lista[]=$est;
          }
        }
        return $lista;
      }

      public function getbyId($rut){
        $conn=new Conexion();
        $conexion=$conn->conectar();
        $sql="SELECT * FROM postulante WHERE id_rut='".$rut."'";
        $p=new Postulante();
        $result = $conexion->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $p->setApellido_Materno($row["apellido_m"]);
            $p->setApellido_Paterno($row["apellido_p"]);
            $p->setNombre($row["nombre"]);
            $p->setCorreo($row["mail"]);
            $p->setPass($row["pass"]);
            $p->setRut($row["id_rut"]);
            $p->setFecha_nacimiento($row["fecha_nacimiento"]);
            $p->setTelefono($row["telefono"]);
        }
        return $p;
        $conexion->close();
      }

      public function update(){
        $conn=new Conexion();
        $conexion=$conn->conectar();
        $sql="UPDATE postulante set nombre='".$this->nombre."', apellido_m='".$this->apellido_materno."',apellido_p='".$this->apellido_paterno."', mail='".$this->correo."',fecha_nacimiento='".$this->fecha_nacimiento."', telefono='".$this->telefono."' WHERE id_rut='".$this->rut."'";
        if ($conexion->query($sql) === TRUE) {
          return true;
        } else {
          return false;
        }
      }

      public function create_postulante(){
        $conn=new Conexion();
        $conexion=$conn->conectar();
        $sql= "INSERT INTO postulante VALUES ('".$this->rut."','".$this->nombre."','".$this->apellido_materno."','".$this->apellido_paterno."','".$this->correo."','".$this->pass."','".$this->fecha_nacimiento."','".$this->telefono."','".$this->vivienda."')";
        if ($conexion->query($sql) === TRUE) {
            return "exito";
        } 
        else{
            return $conexion->error;
        }
        $conexion->close();
      }

      public function setDiscapacidades($cod){
        $conn=new Conexion();
        $conexion=$conn->conectar();
        $sql= "INSERT INTO lista_discapacidad VALUES ('".$this->rut."','".$cod."')";
        if ($conexion->query($sql) === TRUE) {
            return "exito";
        } 
        else{
            return $conexion->error;
        }
        $conexion->close();
      }

      public function valida_rut($rut)
      {
          if (!preg_match("/^[0-9.]+[-]?+[0-9kK]{1}/", $rut)) {
              return false;
          }
          $rut = preg_replace('/[\.\-]/i', '', $rut);
          $dv = substr($rut, -1);
          $numero = substr($rut, 0, strlen($rut) - 1);
          $i = 2;
          $suma = 0;
          foreach (array_reverse(str_split($numero)) as $v) {
              if ($i == 8)
                  $i = 2;
              $suma += $v * $i;
              ++$i;
          }
          $dvr = 11 - ($suma % 11);
          if ($dvr == 11)
              $dvr = 0;
          if ($dvr == 10)
              $dvr = 'K';
          if ($dvr == strtoupper($dv))
              return true;
          else
              return false;
      }
    }
?>