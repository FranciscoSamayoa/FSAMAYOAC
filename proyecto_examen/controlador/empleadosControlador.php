<?php
require_once("modelo/empleadosModelo.php");
class empleadosController
{
    private $conexion;
    public function __construct()
    {
        $this->conexion = new empleadosModelo();
    }

    //muestra todos los empleados
    static function mostrarEmpleados()
    {
        $empleados = new empleadosModelo();
        $datos = $empleados->mostrar("1");
        //var_dump($datos); // Verifica los datos obtenidos
        require_once("vista/empleados.php");
    }

    //Agregar nuevo empleado
    static function guardarEmpleado()
    {
        $clave_empleado = $_REQUEST['clave_empleado'];
        $nombre = $_REQUEST['nombre'];
        $edad = $_REQUEST['edad'];
        $fecha_nacimiento = $_REQUEST['fecha_nacimiento'];
        $genero = $_REQUEST['genero'];
        $sueldo_base = $_REQUEST['sueldo_base'];

        $empleados = new empleadosModelo();
        $datos = $empleados->insertar($clave_empleado, $nombre, $edad, $fecha_nacimiento, $genero, $sueldo_base);
        echo '<script>alert("¡Empleado guardado con éxito!");</script>';
        require_once("vista/nuevoEmpleado.php");
    }

    //direcciona a la vista del formulario
    static function editarEmpleado()
    {
        $id = $_REQUEST['id'];
        $empleados = new empleadosModelo();
        $datos = $empleados->mostrar("id=" . $id);
        require_once("vista/editarEmpleado.php");
    }

    //Editar datos empleado
    static function actualizarEmpleado()
    {
        $id = $_REQUEST['id'];
        $clave_empleado = $_REQUEST['clave_empleado'];
        $nombre = $_REQUEST['nombre'];
        $edad = $_REQUEST['edad'];
        $fecha_nacimiento = $_REQUEST['fecha_nacimiento'];
        $genero = $_REQUEST['genero'];
        $sueldo_base = $_REQUEST['sueldo_base'];
        $data = "clave_empleado='" . $clave_empleado . "', nombre='" . $nombre . "', edad=" . $edad . ", fecha_nacimiento='" . $fecha_nacimiento . "', genero='" . $genero . "', sueldo_base=" . $sueldo_base . "";
        $empleados = new empleadosModelo();
        $datos1 = $empleados->actualizar($data, "id=" .$id);
        $datos = $empleados->mostrar("1");
        require_once("vista/empleados.php");
        echo '<script>alert("¡Empleado guardado con éxito!");</script>';
    }

    //Eliminar un empleado
    static function eliminarEmpleado()
    {
        $id = $_REQUEST['id'];
        $empleados = new empleadosModelo();
        $datos1 = $empleados->eliminar("id=" .$id);
        $datos = $empleados->mostrar("1");
        require_once("vista/empleados.php");
    }

    //direcciona a la vista del formulario
    static function nuevoEmpleado()
    {
        require_once("vista/nuevoEmpleado.php");
    }

    static function regresar()
    {
        $empleados = new empleadosModelo();
        $datos = $empleados->mostrar("1");
        require_once("vista/empleados.php");
    }
}
