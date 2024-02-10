<?php
require_once("modelo/loginModelo.php");
require_once("modelo/empleadosModelo.php");
class loginController
{
    private $conexion;
    public function __construct()
    {
        $this->conexion = new loginModelo();
    }

    static function iniciarSesion()
    {
        require_once("vista/login.php");
    }

    static function procesarInicio()
    {
        $user = $_REQUEST['user'];
        $password = $_REQUEST['password'];
        $usuarios = new loginModelo();
        $datos = $usuarios->inicioSesion("user='".$user."'");
        if (!empty($datos)) {
            foreach ($datos as $registro) {
                foreach($registro as $users){
                    if (($users['user'] == "adminUsuario" && $users['user'] == $user) && $users['password'] == $password){
                        $loginModelo = new loginModelo();
                        $allUsuarios = $loginModelo->mostrarUsuarios("1");
                        require_once("vista/usuarios.php");
                    } else if (($users['user'] == $user) && $users['password'] == $password) {
                        $empleados = new empleadosModelo();
                        $datos = $empleados->mostrar("1");
                        require_once("vista/empleados.php");
                    } else {
                        echo "Usuario no valido";
                    }
                }
            }
        } else {
            echo "No se encontraron registros";
        }  
    }

    static function nuevoUsuario(){
        $loginModelo = new loginModelo();
        $permisos = $loginModelo->permisos();
        require_once("vista/nuevoUsuario.php");
    }

    static function mostrarUsuarios(){
        $loginModelo = new loginModelo();
        $allUsuarios = $loginModelo->mostrarUsuarios("1");
        /*
        foreach ($permisos as $permiso) {
            echo $permiso . "<br>";
        }
        */
        require_once("vista/usuarios.php");
    }

    static function guardarUsuario(){
        $user = $_REQUEST['user'];
        $password = $_REQUEST['password'];
        $permisos = $_REQUEST['etiquetas'];
        $loginModelo = new loginModelo();
        $datos = $loginModelo->insertarUsuario($user,$password,$permisos);
        $permisos = $loginModelo->permisos();
        require_once("vista/nuevoUsuario.php");
    }

      //Eliminar un usuario
      static function eliminarUsuario()
      {
          $id = $_REQUEST['id'];
          $loginModelo = new loginModelo();
          $datos = $loginModelo->eliminar("id=" .$id);
          $allUsuarios = $loginModelo->mostrarUsuarios("1");
          require_once("vista/usuarios.php");
      }

      static function editarUsuario(){
        $id = $_REQUEST['id'];
        $loginModelo = new loginModelo();
        $permisos = $loginModelo->permisos();
        $datos = $loginModelo->mostrarUsuarios("id=".$id);
        require_once("vista/editarUsuario.php");
      }
    
}
