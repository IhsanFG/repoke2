<?php
function kalkulator($a, $b, $operator) {
    if ($operator == '+') {
        return $a + $b;
    } else if ($operator == '-') {
        return $a - $b;
    } else if ($operator == '*') {
        return $a * $b;
    } else if ($operator == '/') {
        if ($b == 0) {
            return "Error";
        }
        return $a / $b;
    } else {
        return "Operator tidak cocok";
    }
}

$angkapertama = [10, 20, 30, 40];
$angkakedua = [2, 4, 8, 0];
$operators = ['+', '-', '*', '/'];

foreach ($angkapertama as $index => $a) {
    $b = $angkakedua[$index];
    $op = $operators[$index];

    $hasil = kalkulator($a, $b, $op);
    echo "Penjumlahan ke " . ($index + 1) . ": $a $op $b = $hasil<br>";
}
?>

<?php
/*
function addition($a, $b) {
    return $a + $b;
}

function subtraction($a, $b) {
    return $a - $b;
}

function multiplication($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        return "Error";
    }
    return $a / $b;
}


$angkapertama = [10, 20, 30, 80];
$angkakedua = [8, 4, 2, 0]; 

foreach ($angkapertama as $index => $a) {
    $b = $angkakedua[$index];

    echo "Penjumlahan ke " . ($index + 1) . ":<br>";
    echo "$a + $b = " . addition($a, $b) . "<br>";
    echo "$a - $b = " . subtraction($a, $b) . "<br>";
    echo "$a x $b = " . multiplication($a, $b) . "<br>";
    echo "$a ÷ $b = " . division($a, $b) . "<br><br>";
}
*/?>
