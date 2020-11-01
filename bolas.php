<?php

include "html/header.html";

echo <<<EOT
<header class="header">
    <h2>Sacar bolas oposición</h2>
</header>
<main>
EOT;

include "html/tabla_calculo_bolas.html";

if( isset( $_GET['resultadoBolas'] ) ){
    $bolas = json_decode( $_GET['resultadoBolas'] );
    echo '<div class="resultado-bolas">';
    foreach( $bolas as $bola ){
        echo '<div class="resultado-bolas__bola">' . $bola . '</div>';
    }
    echo '</div>';
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