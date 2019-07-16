<?php 

include_once 'index.html';

define("Celsius", 0.55);
define("Fahrenheit", 1.8);

if(!empty($_POST)) {
    $action = $_POST['action'];
}

$degrees = $_POST['degrees'];

function convert($converts, $degrees) {
    if ($converts == "C") {
        return ($degrees - 32) * Celsius;
    }
    else if($converts == "F") {
        return ($degrees * Fahrenheit) + 32;
    }
}

echo convert($action, $degrees);

?>