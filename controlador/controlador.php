<?php
require_once "modelo/modelo.php";

// Check if the keys are set in the $_POST array
$num = isset($_POST['numero']) ? $_POST['numero'] : '';
$num2 = isset($_POST['numero2']) ? $_POST['numero2'] : '';
$num3 = isset($_POST['numero3']) ? $_POST['numero3'] : '';
$opcionL = isset($_POST['long']) ? $_POST['long'] : '';
$opcionV = isset($_POST['vol']) ? $_POST['vol'] : '';
$opcionM = isset($_POST['masa']) ? $_POST['masa'] : '';
$datos = "";
$datosV = "";
$datosM = "";

$objConversor = new conversor();
$objConversor->setDatos($num, $num2, $num3, $opcionL, $opcionV, $opcionM);

if ($num) {
    $datos = $objConversor->_longitud();
    $datosV = "";
    $datosM = "";
}
else if ($num2) {
    $datosV = $objConversor->_volumen();
    $datos = "";
    $datosM = "";
}
else if ($num3) {
    $datosM = $objConversor->_masa();
    $datos = "";
    $datosV = "";
}

require_once 'vista/vista.php';
?>
