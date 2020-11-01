<?php

function factorial( $num ){
    if( $num == 2 ){
        return 2;
    }
    return $num * factorial( $num-1 );
}

function combinacionesSinRepeticion( $n, $k ){
    return factorial($n) / ( factorial( $k )*factorial( $n - $k ) );
}

function probabilidadSalgaBola( $numTemas, $numBolas, $numTemasEstudiados ){
    $combinacionesPosiblesTotales = combinacionesSinRepeticion( $numTemas, $numBolas );
    $combinacionesPosiblesNoTema = combinacionesSinRepeticion( $numTemas - $numTemasEstudiados, $numBolas );
    $probabilidadNoSalgaTema = $combinacionesPosiblesNoTema / $combinacionesPosiblesTotales;
    return round( (1-$probabilidadNoSalgaTema)*100, 2 );
}

$numTemas = -1;
$numBolas = -1;
$temasEstudiados = -1;

if( isset( $_POST['numero-temas'] ) ){
    $numTemas = intval( $_POST['numero-temas'] );
}

if( isset( $_POST['numero-bolas'] ) ){
    $numBolas = intval( $_POST['numero-bolas'] );
}

if( isset( $_POST['temas-estudiados'] ) ){
    $temasEstudiados = intval( $_POST['temas-estudiados'] );
}

$probabilidad = probabilidadSalgaBola($numTemas, $numBolas, $temasEstudiados);

header( "Location: probabilidad.php?resultado_calculo=" . $probabilidad . "&temas=" . $numTemas . "&bolas=" . $numBolas . "&estudiados=" . $temasEstudiados );