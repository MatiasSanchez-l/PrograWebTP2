<?php
function funcionCrearUnArray2D($dimensionMatriz){
    $miArray = array_fill(0,$dimensionMatriz,array_fill(0,$dimensionMatriz,0));

    for($i = 0; $i<$dimensionMatriz; $i++){
        for($j = 0; $j<$dimensionMatriz; $j++){
            $miArray[$i][$j] = funcionCrearUnNumeroRandom();
        }
    }
    return $miArray;
}

function funcionCrearUnNumeroRandom(){
    return  rand(0,9);
}

function funcionMostrarDiagonalPrincipal($dimensionMatriz, $miMatriz){
    for($i = 0; $i < $dimensionMatriz; $i++){
        echo $miMatriz[$i][$i] . " ";
    }
}

function funcionMostrarDiagonalSecundaria($dimensionMatriz, $miMatriz){
    $j = -1;
    for($i = $dimensionMatriz-1; $i >= 0; $i--){
        $j += 1;
        echo $miMatriz[$j][$i] . " ";

    }
}

function funcionSumarMatriz($dimensionMatriz, $miMatriz){
    $sumaMatriz = 0;
    for ($i = 0; $i < $dimensionMatriz; $i++){
        for ($j = 0; $j < $dimensionMatriz; $j++){
            $sumaMatriz += $miMatriz[$i][$j];
        }
    }
    return $sumaMatriz;
}

function funcionMostrarMatriz($dimensionMatriz, $miMatriz){
    for ($i = 0; $i < $dimensionMatriz; $i++){
        for ($j = 0; $j < $dimensionMatriz; $j++){
            echo $miMatriz[$i][$j] . " ";
        }
        echo "</br>";
    }
}