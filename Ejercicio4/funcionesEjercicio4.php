<?php
function funcionAgregarVisitante($nombreVisitante, $nombrePlaneta){
    $miArchivo = fopen("visitantes.txt", "a");
    $visitanteConPlaneta ="NOMBRE: " . $nombreVisitante . "  PLANETA: " . $nombrePlaneta . ".</br> ";
    fwrite($miArchivo,$visitanteConPlaneta);
    fclose($miArchivo);
}

function funcionMostrarVisitantes(){
    $miArchivo = fopen("visitantes.txt", "r");
    echo "<p>Visitantes en planeta tierra: </br>" .  fread($miArchivo,filesize("visitantes.txt")) . "</p>";
    fclose($miArchivo);
}

function funcionContarVisitantes($nombrePlaneta, $cantidadVisitantes){
    $miArchivo = fopen("cantidadVisitantes.txt", "a");
    fclose($miArchivo);
    If($nombrePlaneta != "Planeta Tierra"){
     $cantidadVisitantes++;


     $miArchivo = fopen("cantidadVisitantes.txt", "r+");
     $cantidadVisitantesPasados = fread($miArchivo,1);
     fclose($miArchivo);

     if($cantidadVisitantesPasados == ""){
         $miArchivo = fopen("cantidadVisitantes.txt", "w");
         fwrite($miArchivo,$cantidadVisitantes);
         fclose($miArchivo);

         $miArchivo = fopen("cantidadVisitantes.txt", "r");
         $cantidadVisitantes = fread($miArchivo,filesize("cantidadVisitantes.txt"));
         fclose($miArchivo);
     }else{
         $cantidadVisitantes += $cantidadVisitantesPasados;
         $miArchivo = fopen("cantidadVisitantes.txt", "w");
         fwrite($miArchivo,$cantidadVisitantes);
         fclose($miArchivo);
     }

     return $cantidadVisitantes;

 }else{
     $miArchivo = fopen("cantidadVisitantes.txt", "r+");
     $cantidadVisitantesPasados = fread($miArchivo,1);
     fclose($miArchivo);

     if($cantidadVisitantesPasados == ""){
         $miArchivo = fopen("cantidadVisitantes.txt", "w");
         fwrite($miArchivo,$cantidadVisitantes);
         fclose($miArchivo);

         $miArchivo = fopen("cantidadVisitantes.txt", "r");
         $cantidadVisitantes = fread($miArchivo,filesize("cantidadVisitantes.txt"));
         fclose($miArchivo);
     }else{
         $cantidadVisitantes += $cantidadVisitantesPasados;
         $miArchivo = fopen("cantidadVisitantes.txt", "w");
         fwrite($miArchivo,$cantidadVisitantes);
         fclose($miArchivo);
     }

     return $cantidadVisitantes;
 }
}