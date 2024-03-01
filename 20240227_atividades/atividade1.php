<?php 
function calcularMedia($num1, $num2) {
   
    $media = ($num1 + $num2) / 2;
    
    
    $aprovado = $media >= 6 ? true : false;
    
    
    return array(
        'media' => $media,
        'aprovado' => $aprovado
    );
}
 
$resultado = calcularMedia(7, 8);
echo "Média: " . $resultado['media'] . "<br>";
echo "Aprovado: " . ($resultado['aprovado'] ? 'Sim' : 'Não');


?>