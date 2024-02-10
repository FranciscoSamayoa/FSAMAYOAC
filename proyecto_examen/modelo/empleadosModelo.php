<?php
class empleadosModelo{
    private $Modelo;
    private $db;
    private $empleados;
    public function __construct(){
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=localhost;dbname=empleados_examen', "root","");
    }

    public function insertar($clave_empleado,$nombre,$edad,$fecha_nacimiento,$genero,$sueldo_base){
        $consulta="insert into empleados values(null, '$clave_empleado', '$nombre', $edad, '$fecha_nacimiento', '$genero', $sueldo_base)";
        $resultado=$this->db->query($consulta);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }

    public function mostrar($condicion){
        $consul="select * from empleados where ".$condicion.";";
        $resu=$this->db->query($consul);
        while($filas = $resu->fetchAll(PDO::FETCH_ASSOC)){
            $this->empleados[]=$filas;
        }
        return $this->empleados;
    }

    public function actualizar($data, $condicion){
        $consulta="update empleados set ". $data ." where ".$condicion;
        $resultado=$this->db->query($consulta);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }

    public function eliminar($condicion){
        $eli="delete from empleados where ".$condicion;
        $res=$this->db->query($eli);
        if($res){
            return true;
        }else{
            return false;
        }
    }
}