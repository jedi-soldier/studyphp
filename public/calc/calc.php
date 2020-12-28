<?php

function add ($i, $n) {
    return $i + $n;
}
function sub ($i, $n) {
    return $i - $n;
}
function multip ($i, $n) {
    return $i * $n;
}
function divis ($i, $n) {
    if($n == 0) return "Делить на 0 нельзя!";
    return $i / $n;
}
function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case 1:
            return add($arg1, $arg2);
        case 2:
            return sub($arg1, $arg2);
        case 3:
            return multip($arg1, $arg2);
        case 4:
            return divis($arg1, $arg2);
        default:
            return "Неправильная операция!";
    }
}
if (!empty($_POST)) {
    $arg1 = (float)$_POST['arg1'];
    $arg2 = (float)$_POST['arg2'];
    $operation = (float)$_POST['operation'];

    $response = mathOperation($arg1, $arg2, $operation);

    header("Content-type: application/json");
    echo json_encode($response);
}


