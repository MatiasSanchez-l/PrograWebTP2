<?php
require_once ("../Ejercicio1/funcionesEjercicio1.php");

function funcionCargarNombreDeImagenesEjercicio2(){
    $dirireccion = '../Ejercicio1/imagenes';
    $archivoExtencion = array(
        'jpg',
        'jpeg',
        'png',
        'gif'
    );
    $dir_contenidos = scandir($dirireccion);

    foreach ($dir_contenidos as $archivo) {
        $tipoDeArchivo = strtolower(pathinfo($archivo,PATHINFO_EXTENSION));
        $nombreDeLaImagen =  funcionSacarExtencion($archivo);

        if (in_array($tipoDeArchivo, $archivoExtencion) == true) {
            echo '<h3 class="w3-center  w3-margin-bottom w3-text-black">
                    <a class="w3-hover-text-blue-gray" target="_blank" href="ejercicio2SoloImagen.php?imagen=' . $archivo .'">'. $nombreDeLaImagen . '</a>
                  </h3>';
        }
    }
}

function funcionCargarImagen(){
    $dirireccion = '../Ejercicio1/imagenes';
    $nombreDeLaImagen =$_GET["imagen"];
    echo "<img class='w3-margin' src='" . $dirireccion . '/' . $nombreDeLaImagen . "' width='300px'>";
}

function funcionCargarTituloNombreImagen(){
    $nombreDeLaImagen =$_GET["imagen"];
    $nombreDeImagenSinExtencion = funcionSacarExtencion($nombreDeLaImagen);
    echo "<h2 class='w3-center'>" . $nombreDeImagenSinExtencion ."</h2>";
}