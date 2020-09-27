<?php
include("../Ejercicio0/header.php");
require_once ("funcionesEjercicio2.php");
?>

<h1 class="w3-center w3-xxxlarge">Sanchez Matias</h1>

<div class="w3-bar w3-flat-wet-asphalt">
    <div class="w3-half ">
        <a href="../index.php" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">Punto
            de partida</a>
        <a href="../Ejercicio1/ejercicio1.php" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">Insta-gramo</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">Lanzar
            dados</a>
    </div>
    <div class="w3-half">
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">Contador
            visitas</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray"
           style="width:33%">ConociendINIs</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">La Matrix</a>
    </div>
</div>
<section class="w3-container">
    <?php
    funcionCargarImagen(); //llamo a la funcion de cargar solo la imagen
    ?>
</section>

<?php
include("../Ejercicio0/footer.php");
?>
