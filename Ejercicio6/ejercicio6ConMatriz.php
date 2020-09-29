<?php
include("../Ejercicio0/header.php");
require_once("funcionesEjercicio6.php");
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
        <a href="../Ejercicio5/ejercicio5.php" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">ConociendINIs</a>
    </div>
</div>
<h3 class="w3-center w3-wide w3-margin">Soluci&oacute;n Ejercicio 6: La Matrix… digo, Matriz</h3>
<section>
    <?php
    $dimensionMatriz = $_POST["dimensionMatriz"];

    $miMatriz = funcionCrearUnArray2D($dimensionMatriz);
    ?>
    <div class="w3-container w3-center">
        <p class="w3-xxlarge"><?php
            funcionMostrarMatriz($dimensionMatriz, $miMatriz);
            ?></p>
    </div>
    <div class="w3-container">
        <p class="w3-xlarge w3-center">La diagonal principal tiene:
            <?php
            echo funcionMostrarDiagonalPrincipal($dimensionMatriz, $miMatriz);
            ?></p>
    </div>
    <div class="w3-container">
        <p class="w3-xlarge w3-center">La diagonal secundaria tiene:
            <?php
            echo funcionMostrarDiagonalSecundaria($dimensionMatriz, $miMatriz);
            ?></p>
    </div>
    <div class="w3-container">
        <p class="w3-xlarge w3-center">La suma de la matriz es:
            <?php
            $sumaMatriz = funcionSumarMatriz($dimensionMatriz, $miMatriz);
            echo $sumaMatriz;
            ?></p>
    </div>
</section>
<?php
include("../Ejercicio0/footer.php");
?>
