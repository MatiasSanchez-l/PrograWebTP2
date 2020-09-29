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
        <a href="../Ejercicio5/ejercicio5.php" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">ConociendINIs</a>
    </div>
</div>
<h3 class="w3-center w3-wide w3-margin">Ejercicio 6: La Matrix… digo, Matriz</h3>
<section>
    <div class="w3-container w3-flat-wet-asphalt">
        <div class="w3-col w3-margin" style="width:50px"><i class="w3-xlarge fab fa-buromobelexperte"></i></div>
        <h5>Matriz</h5>
    </div>
    <form class="w3-container w3-margin" method="POST" ENCTYPE="multipart/form-data" action="ejercicio6ConMatriz.php">
        <label class="w3-margin-top w3-margin-left"><b>Indique la dimensi&oacute;n de la matriz:</b></label>
        <input class="w3-input w3-border w3-margin" type="number" name="dimensionMatriz">
        <button class="w3-btn w3-flat-wet-asphalt w3-margin w3-right" type="submit" name = "">Enviar</button>
    </form>
</section>
<?php
include("../Ejercicio0/footer.php");
?>
