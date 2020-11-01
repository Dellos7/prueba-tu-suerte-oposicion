<?php

include "html/header.html";

echo <<<EOT
<header class="header">
    <h2>Probabilidades temas oposición</h2>
</header>
<main>
EOT;

include "html/tabla_calculo_probabilidad.html";

if( isset( $_GET['resultado_calculo'] ) ){
    $resultadoCalculo = $_GET['resultado_calculo'];
    $resultadoCalculoInt = intval( $resultadoCalculo );
    $claseCssProbabilidad = $resultadoCalculoInt < 70 ? 'fracaso' : ( $resultadoCalculoInt < 90 ? 'peligro' : 'exito' );
    $textoPrediccion = $resultadoCalculoInt < 70 ? 'Tienes altas probabilidades de fracasar. Deberías estudiar más' : ( $resultadoCalculoInt < 90 ? 'Estás en peligro; todo dependerá de la suerte que tengas' : 'Tienes altas probabilidades de que te salga bola. Sigue así' );
    echo <<<EOT
<div class="resultado-calculo">
    <div class="resultado-calculo__texto">La probabilidad de que te salga bola es:</div>
    <div class="resultado-calculo__probabilidad $claseCssProbabilidad">$resultadoCalculo%</div>
    <div class="resultado-calculo__prediccion $claseCssProbabilidad">$textoPrediccion</div>
</div>
EOT;
}

if( isset( $_GET['temas'] ) ){
    echo <<<EOT
<script defer type="text/javascript" src="js/setTemas.js"></script>
EOT;
}
if( isset( $_GET['bolas'] ) ){
    echo <<<EOT
<script defer type="text/javascript" src="js/setBolas.js"></script>
EOT;
}
if( isset( $_GET['estudiados'] ) ){
    echo <<<EOT
<script defer type="text/javascript" src="js/setTemasEstudiados.js"></script>
EOT;
}

include "html/footer.html";