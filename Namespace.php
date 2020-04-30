<?php



spl_autoload_register( function ( $class ) {
    include_once "classes/Namespace/" . $class . ".php";
} );
include "Classes/Namespace/Java.php";
include "Classes/Namespace/Php.php";
include "Classes/Namespace/Css.php";
include "Classes/Namespace/Ruby.php";


use name\sub as ru;


new name\Java();
new name\Php();
new name\Css();
new ru\Ruby();

?>