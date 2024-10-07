<?php

require_once(__DIR__ . "/../modelos/conexion.php");
$con = new Conexion();
$usuarios = $con->getUsers();
require_once(__DIR__ . "/../vistas/v_ver_usuarios.php");



