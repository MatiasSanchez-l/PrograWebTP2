<?php
include("../Ejercicio0/header.php");
require_once ("funcionesEjercicio3.php");
?>

<h1 class="w3-center w3-xxxlarge">Sanchez Matias</h1>

<div class="w3-bar w3-flat-wet-asphalt">
    <div class="w3-half ">
        <a href="../index.php" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">Punto
            de partida</a>
        <a href="../Ejercicio1/ejercicio1.php" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">Insta-gramo</a>
        <a href="../Ejercicio2/ejercicio2.php" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">Insta-reciclado</a>
    </div>
    <div class="w3-half">
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">Contador
            visitas</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray"
           style="width:33%">ConociendINIs</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">La Matrix</a>
    </div>
</div>
<h3 class="w3-center w3-wide w3-margin ">Soluci&oacute;n Ejercicio 3: Lanzar dados</h3>
<section class="w3-container">
    <?php
    $cantidadDados = $_GET["cantidadDados"];
    $sumaNumeros =0;
    $sumaNumeros = funcionLanzarDados($cantidadDados, $sumaNumeros);
    echo "<h2 class='w3-center'>La suma de los dados es: " . $sumaNumeros ."</h2>";
    ?>
    <button class="w3-btn w3-flat-wet-asphalt w3-margin w3-right" type="submit"><a href="ejercicio3.php">Volver a elegir cantidad de dados</a></button>
</section>

<?php
include("../Ejercicio0/footer.php");
?>
