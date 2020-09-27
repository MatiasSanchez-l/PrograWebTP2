<?php

function funcionLanzarDados($cantidadDados, $sumaNumeros){
    for($i = 0; $i <$cantidadDados; $i++){
        $numeroAlAzar = rand(1,6);

        $sumaNumeros += $numeroAlAzar;

        switch ($numeroAlAzar){
            case 1:
                echo '<div class="w3-col w3-margin w3-center"><i class="w3-jumbo fas fa-dice-one w3-margin" style="font-size:24px"></i></div>';
                break;
            case 2:
                echo '<div class="w3-col w3-margin w3-center"><i class="w3-jumbo fas fa-dice-two w3-margin" style="font-size:24px"></i></div>';
                break;
            case 3:
                echo '<div class="w3-col w3-margin w3-center"><i class="w3-jumbo fas fa-dice-three w3-margin" style="font-size:24px"></i></div>';
                break;
            case 4:
                echo '<div class="w3-col w3-margin w3-center"><i class="w3-jumbo fas fa-dice-four w3-margin" style="font-size:24px"></i></div>';
                break;
            case 5:
                echo '<div class="w3-col w3-margin w3-center"><i class="w3-jumbo fas fa-dice-five w3-margin" style="font-size:24px"></i></div>';
                break;
            case 6:
                echo '<div class="w3-col w3-margin w3-center"><i class="w3-jumbo fas fa-dice-six w3-margin" style="font-size:24px"></i></div>';
                break;
        }
    }
    return $sumaNumeros;
}