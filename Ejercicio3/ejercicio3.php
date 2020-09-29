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
        <a href="../Ejercicio4/ejercicio4.php" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">Contador
            visitas</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray"
           style="width:33%">ConociendINIs</a>
        <a href="../Ejercicio6/ejercicio6.php" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">La Matrix</a>
    </div>
</div>
<h3 class="w3-center w3-wide w3-margin ">Soluci&oacute;n Ejercicio 3: Lanzar dados</h3>
<section class="w3-container">
    <form class="w3-container" method="GET"  action="ejercicio3DadosLanzados.php">
        <label class="w3-margin-top w3-margin-left"><b>Ingrese cantidad de dados que desea tirar:</b></label>
        <select class="w3-select w3-margin" name="cantidadDados">
            <option value="" disabled selected>Elegir cantidad dados</option>
            <option value="1">1 dado</option>
            <option value="2">2 dados</option>
            <option value="3">3 dados</option>
            <option value="4">4 dados</option>
        </select></br>
        <button class="w3-btn w3-flat-wet-asphalt w3-margin w3-right" type="submit">Enviar</button>
    </form>
</section>

<?php
include("../Ejercicio0/footer.php");
?>
