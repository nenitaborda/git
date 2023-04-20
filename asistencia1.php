<?php
//Ejercicio uno asistencia
include 'asistencia.html';

    $nota = null;
    $asis = null;
    //$total_clases = 30;
    const CLASES=30;

    if (isset($_POST['operador'])) {
        $nota = $_POST ['nota'];
        $asis = $_POST ['asis'];
        
        if ($nota >=1 && $asis >= (CLASES*0.8)) {
            echo 'APROBÓ';
        }
        else {
            echo 'NO APROBO';
        } 
     }
        
?>