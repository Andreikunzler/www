<?php 
function calcularMediaPonderada($notas_pesos) {
    $soma_notas_ponderadas = 0;
    $soma_pesos = 0;

    foreach ($notas_pesos as $nota => $peso) {
        $soma_notas_ponderadas += $nota * $peso;
        $soma_pesos += $peso;
    }

    $media_ponderada = $soma_notas_ponderadas / $soma_pesos;

    return $media_ponderada;
}


$notas_pesos = array(
    7 => 2,  
    8 => 3   
);

$media = calcularMediaPonderada($notas_pesos);
echo "Média ponderada: " . $media;

?>