<?php
require_once ("../Ejercicio1/funcionesEjercicio1.php");

function funcionCargarNombreDeImagenesEjercicio2(){
    $dirireccion = '../Ejercicio1/imagenes';
    $archivoExtencion = array(/*este array me permitira saber si lo que
                             esta en la carpeta es un archivo de estos formatos o no
                                en teoria no es nesesario porque solo vamos a subir imagenes*/
        'jpg',
        'jpeg',
        'png',
        'gif'
    );
    $dir_contenidos = scandir($dirireccion);//scanea la carpeta donde estan las imagenes

    foreach ($dir_contenidos as $archivo) { //foreach por cada archivo dentro de carpeta
        $tipoDeArchivo = strtolower(pathinfo($archivo,PATHINFO_EXTENSION));//aca le saco la extencion del archivo ej:.png .jpg etc
        $nombreDeLaImagen =  funcionSacarExtencion($archivo);  //aca guardo el nombre del archivo ej: archivo1.jpg

        if (in_array($tipoDeArchivo, $archivoExtencion) == true) { //verifico que el archivo sea una imagen
            echo '<h3 class="w3-center  w3-margin-bottom w3-text-black">
                    <a class="w3-hover-text-blue-gray" target="_blank" href="ejercicio2SoloImagen.php?imagen=' . $archivo .'">'. $nombreDeLaImagen . '</a>
                  </h3>';
            /*subo el nombre del archivo que se podra clickear y direccionar a la pag donde se vera solo la imagen.
            href="ejercicio2SoloImagen.php?imagen=' . $archivo .'"> mediante ese codigo que me redireccionara a esa pag y por la URL setea GET imagen = nombre de archivo.
            Ej: href="ejercicio2SoloImagen.php?imagen=nombreImagen1.jpg">*/

        }
    }
}

function funcionCargarImagen(){
    $dirireccion = '../Ejercicio1/imagenes';
    $nombreDeLaImagen =$_GET["imagen"]; //agarro el GET que le pase por la URL que seria el nombre de la imagen
    echo  "<img src='" . $dirireccion . '/' . $nombreDeLaImagen . "' width='200px'>"; //muestro la imagen
}