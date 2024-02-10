<?php
require_once("config.php");

if(isset($_GET['empleado'])){
    require_once("controlador/empleadosControlador.php");
    empleadosController::{$_GET['empleado']}();
}else if (isset($_GET['login'])){
    require_once("controlador/loginControlador.php");
    loginController::{$_GET['login']}();
}else{
    require_once("controlador/loginControlador.php");
    loginController::iniciarSesion();
}
