<?php
include("../Ejercicio0/header.php");
require_once("funcionesEjercicio4.php");
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
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray"
           style="width:33%">ConociendINIs</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">La Matrix</a>
    </div>
</div>
<h3 class="w3-center w3-wide w3-margin">Soluci&oacute;n Ejercicio 4: Contador de visitas… extraterrestres</h3>
<section>
    <?php
      $nombreVisitante = $_GET["nombreVisitante"];
      $nombrePlaneta = $_GET["planetaElegido"];
      $cantidadVisitantes = 0;
      funcionAgregarVisitante($nombreVisitante, $nombrePlaneta);

      $cantidadVisitantes =funcionContarVisitantes($nombrePlaneta, $cantidadVisitantes);

      funcionMostrarVisitantes();

      echo "La cantidad de visitantes que no pertenecen al planeta tierra es: " . $cantidadVisitantes . ".";


    ?>
</section>
<?php
include("../Ejercicio0/footer.php");
?>
