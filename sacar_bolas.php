<?php

$numTemas = intval( $_POST['numero-temas'] );
$numBolas = intval( $_POST['numero-bolas'] );

$bolas = [];

while( count( $bolas ) < $numBolas ){
    $bola = rand( 1, $numTemas );
    if( !in_array( $bola, $bolas ) ){
        array_push( $bolas, $bola );
    }
}

//echo "<pre>" . print_r($bolas, true) . "</pre>";

header( "Location: bolas.php?resultadoBolas=" . json_encode($bolas) . "&temas=" . $numTemas . "&bolas=" . $numBolas );