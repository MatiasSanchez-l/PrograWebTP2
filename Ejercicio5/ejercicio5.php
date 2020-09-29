<?php
include("../Ejercicio0/header.php");
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
    <div class="w3-container w3-flat-wet-asphalt">
        <div class="w3-col w3-margin" style="width:50px"><i class="w3-xlarge fas fa-align-left"></i></div>
        <h5>Elija que desea en su menu de hoy</h5>
    </div>
    <form class="w3-container w3-margin" method="GET" ENCTYPE="" action="ejercicio5PlatosElegidos.php">
        <label class=""><b>Menu</b></label>
        <p><input class="w3-check" type="checkbox" name="entrada">
            <label>Entrada</label></p>

        <p><input class="w3-check" type="checkbox" name="platoPrincipal">
            <label>Plato principal</label></p>

        <p><input class="w3-check" type="checkbox" name="acompaniamiento">
            <label>Acompañamiento</label></p>

        <p><input class="w3-check" type="checkbox" name="postre">
            <label>Postre</label></p>
        <button class="w3-btn w3-flat-wet-asphalt w3-margin w3-right" type="submit" name = "submitBtn1">Enviar</button>
    </form>
</section>
<?php
include("../Ejercicio0/footer.php");
?>
