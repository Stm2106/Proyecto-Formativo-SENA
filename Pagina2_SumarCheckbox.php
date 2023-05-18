<?php
if (isset($_REQUEST['checkbox1'])) {
    $suma=$_REQUEST['valor1']+$_REQUEST['valor2'];
    echo "La suma es: ".$suma."<br>";
}
if (isset($_REQUEST['checkbox2'])) {
    $resta=$_REQUEST['valor1']-$_REQUEST['valor2'];
    echo "La resta es: ".$resta."<br>";
}
?>