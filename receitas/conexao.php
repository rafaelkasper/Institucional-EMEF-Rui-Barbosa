<?php
//CONFIGURA A CONEXÃO COM O BD
$servidor = "mysql669.umbler.com";
$usuario_bd = "professorrb";
$senha_bd = "linhadecodigo";
$banco = "ruibarbosa";
$conn = new mysqli($servidor, $usuario_bd, $senha_bd, $banco);
ini_set('display_errors', true);
error_reporting(E_ALL);
mysqli_set_charset($con, "utf8");
?>