<?php 

include_once 'index2.html';

if(!empty($_POST)) {
    $action = $_POST['action'];
}

$a = $_POST['a'];
$b = $_POST['b'];

function calculator($oper, $a, $b) {
    if ($oper == 'sum') {
        return $a + $b;
    }
    elseif ($oper == 'subtract') {
        return $a - $b;
    }
    elseif ($oper == 'multiply') {
        return $a * $b;
    }
    elseif ($oper == 'divide') {
        return $b != 0 ? ($a / $b) : 'На ноль делить нельзя!';
    }
}

echo calculator($action, $a, $b);

 ?>