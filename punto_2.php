<?php
include 'punto_2.html';
$correctas = null;
$incorrectas = null;
$blanco = null;
$total = null;

if (isset($_POST['operador'])) {
    $correctas = $_POST['correctas'];
    $incorrectas = $_POST['incorrectas'];
    $blanco = $_POST['blanco'];


    //Operación Multiplicar x 4
    $total_correctas = $correctas*4;
    //Operación restar
    $total = $total_correctas - $incorrectas;
        echo 'La Cantidad de puntos es:' .$total;
    }
?>