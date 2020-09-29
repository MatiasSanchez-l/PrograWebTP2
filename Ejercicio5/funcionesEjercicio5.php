<?php
function funcionCantidadPedidos($entrada, $platoPrincipal,$acompaniamiento, $postre){
    $cantidadPedidos = 0;
    if($entrada){
        $cantidadPedidos++;
    }
    if($platoPrincipal){
        $cantidadPedidos++;
    }
    if($acompaniamiento){
        $cantidadPedidos++;
    }
    if($postre){
        $cantidadPedidos++;
    }
    return $cantidadPedidos;
}

function funcionMostrarPedidos($cantidadPedidos, $entrada, $platoPrincipal,$acompaniamiento, $postre){
    $arrayMenu = parse_ini_file("menu.ini");
    for ($i=0; $i < $cantidadPedidos ;$i++){
        if($entrada){
            echo $arrayMenu["entrada"] . " ";
            $entrada = null;
        }elseif ($platoPrincipal){
            echo $arrayMenu["plato_principal"] . " ";
            $platoPrincipal = null;
        }elseif ($acompaniamiento){
            echo $arrayMenu["acompañamiento"] . " ";
            $acompaniamiento = null;
        }elseif ($postre){
            echo $arrayMenu["postre"] . " ";
            $postre = null;
        }
    }
}