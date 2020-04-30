<?php

// object serialization

spl_autoload_register( function ( $class ) {
    include_once "classes/" . $class . ".php";
} );

$pro = new Programming();
$ser = serialize( $pro );

// file_put_contents( "programming.txt", $ser );
// echo $ser;

$getcon = file_get_contents("programming.txt");
$unser = unserialize($getcon);
echo "<pre>";
print_r($unser);
echo "</pre>";

?>