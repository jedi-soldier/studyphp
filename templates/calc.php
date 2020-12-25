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
        case "+":
            return add($arg1, $arg2);
        case "-":
            return sub($arg1, $arg2);
        case "*":
            return multip($arg1, $arg2);
        case "/":
            return divis($arg1, $arg2);
        default:
            return "Неправильная операция!";
    }
}
if (!empty($_POST)) {
    $value1 = (float)$_POST['value1'];
    $value2 = (float)$_POST['value2'];
    $operation = $_POST['operation'];
    $result = mathOperation($value1, $value2, $operation);
}

?>

<form action="" method="post">
    <input type="text" name="value1" value="<?=$value1?>">
    <select name="operation">
        <option <?php if ($_POST['operation'] == "+") echo "selected"?> value="+">+</option>
        <option <?php if ($_POST['operation'] == "-") echo "selected"?> value="-">-</option>
        <option <?php if ($_POST['operation'] == "*") echo "selected"?> value="*">*</option>
        <option <?php if ($_POST['operation'] == "/") echo "selected"?> value="/">/</option>
    </select>
    <input type="text" name="value2" value="<?=$value2?>">
    <input type="submit" value="=">
    <input type="text" name="result" value="<?=$result?>" readonly>
</form>
