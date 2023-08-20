<?php
session_start();

include 'class-autoload.inc.php';
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

$calc = new Calc($num1, $num2, $operator);

function getOperatorSymbol($operator)
{
    if ($operator == 'add') {
        return "+";
    }
    if ($operator == 'sub') {
        return "-";
    }
    if ($operator == 'multiply') {
        return "*";
    }
    if ($operator == 'divide') {
        return "/";
    }
    return "";
}

try {
    $_SESSION['calculator'] = [
        'num_1' => $num1,
        'num_2' => $num2,
        'operator' => getOperatorSymbol($operator),
        'result' => $calc->calculator(),
    ];
    header("Location: http://localhost/calculator_oop_php/index.php");
    die();

} catch (TypeError $e) {
    echo "Error!:" . $e->getMessage();
}






?>