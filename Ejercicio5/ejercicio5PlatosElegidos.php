<?php
include("../Ejercicio0/header.php");
require_once ("funcionesEjercicio5.php");
?>
<div class="w3-bar w3-flat-wet-asphalt">
    <div class="w3-half ">
        <a href="../index.php" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">Punto
            de partida</a>
        <a href="../Ejercicio1/ejercicio1.php" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">Insta-gramo</a>
        <a href="../Ejercicio2/ejercicio2.php" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">Insta-reciclado</a>
    </div>
    <div class="w3-half">
        <a href="../Ejercicio3/ejercicio3.php" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">Lanzar
            dados</a>
        <a href="../Ejercicio4/ejercicio4.php" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray"
           style="width:33%">Contador visitas</a>
        <a href="../Ejercicio6/ejercicio6.php" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">La Matrix</a>
    </div>
</div>
<h3 class="w3-center w3-wide w3-margin">Ejercicio 5: ConociendINIs con el Menú no saludable</h3>
<section>
    <?php
    $entrada = isset($_GET["entrada"]);
    $platoPrincipal = isset($_GET["platoPrincipal"]);
    $acompaniamiento = isset($_GET["acompaniamiento"]);
    $postre = isset($_GET["postre"]);

    $cantidadPedidos = funcionCantidadPedidos($entrada, $platoPrincipal,$acompaniamiento, $postre);

    funcionMostrarPedidos($cantidadPedidos, $entrada, $platoPrincipal,$acompaniamiento, $postre);

    ?>
</section>
<?php
include("../Ejercicio0/footer.php");
?>
