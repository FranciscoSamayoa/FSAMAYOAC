<?php
class loginModelo{
    private $Modelo;
    private $db;
    private $usuarios;
    private $permisos;
    public function __construct(){
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=localhost;dbname=empleados_examen', "root","");
    }

    public function inicioSesion($condicion){
        $consulta="select * from usuarios where " .$condicion.";";
        $resultado = $this->db->query($consulta);
         while($filas = $resultado->fetchAll(PDO::FETCH_ASSOC)){
            $this->usuarios[]=$filas;
        }
        return $this->usuarios;
    }

    public function mostrarUsuarios($condicion){
        $consulta="select * from usuarios where " .$condicion.";";
        $resultado = $this->db->query($consulta);
         while($filas = $resultado->fetchAll(PDO::FETCH_ASSOC)){
            $this->usuarios[]=$filas;
        }
        return $this->usuarios;
    }

    public function permisos(){
        $rutas = array(
            "nuevoEmpleado", "eliminarEmpleado", "editarEmpleado", "mostrarEmpleados", "guardarEmpleado", "actualizarEmpleado",
            "nuevoUsuario", "eliminarUsuario", "editarUsuario", "mostrarUsuarios", "guardarUsuario", "actualizarUsuario"
        );
        return $this->permisos=$rutas;
    }

    public function insertarUsuario($user,$password,$permisos){
        $consulta = "insert into usuarios values(null, '$user', '$password', '$permisos')";
        $resultado = $this->db->query($consulta);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }

    public function eliminar($condicion){
        $eli="delete from usuarios where ".$condicion;
        $res=$this->db->query($eli);
        if($res){
            return true;
        }else{
            return false;
        }
    }
}