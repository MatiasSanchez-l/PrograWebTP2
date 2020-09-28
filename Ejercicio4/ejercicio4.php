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
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray"
           style="width:33%">ConociendINIs</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">La Matrix</a>
    </div>
</div>
<h3 class="w3-center w3-wide w3-margin">Soluci&oacute;n Ejercicio 4: Contador de visitas… extraterrestres</h3>
<section>
    <div class="w3-container w3-flat-wet-asphalt">
        <div class="w3-col w3-margin" style="width:50px"><i class="w3-xlarge fab fa-optin-monster"></i></div>
        <h5>Formulario de datos para el ingreso al Planeta Tierra</h5>
    </div>
    <form class="w3-container w3-margin" method="GET" ENCTYPE="" action="ejercicio4ListaVisitantes.php">
        <label class="w3-margin-top w3-margin-left"><b>Nombre</b></label>
        <input class="w3-input w3-border w3-margin" type="text" name="nombreVisitante">
        <label class="w3-margin-top w3-margin-left"><b>Planeta</b></label>
        <select class="w3-select w3-margin" name="planetaElegido">
            <option value="" disabled selected>Elegir planeta</option>
            <option value="Planeta A">Planeta A</option>
            <option value="Planeta B">Planeta B</option>
            <option value="Planeta C">Planeta C</option>
            <option value="Planeta D">Planeta D</option>
            <option value="Planeta Tierra">Planeta Tierra</option>
            <option value="Planeta X">Planeta X</option>
        </select></br>
        <button class="w3-btn w3-flat-wet-asphalt w3-margin w3-right" type="submit" name = "submitBtn1">Enviar</button>
    </form>
</section>
<?php
include("../Ejercicio0/footer.php");
?>
