<?php

require 'vendor/autoload.php';

Flight::route('/', function(){
    echo 'Hello World!';
});

Flight::route("GET /test", function(){
    echo "Hello Test";
});

Flight::route("GET /alone", function(){
    echo "First code by myself";
});

Flight::start();

?>
