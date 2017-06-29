<?php
include 'task_15.html';
$a = $_POST['a'];
$b = $_POST['b'];
$operator = $_POST['operator'];

if ($b==0 and $operator=='/'){
    echo "на 0 делить нельзя";
}
elseif ($operator == '+') {
    $result = $a + $b;
}
elseif ($operator == '*') {
    $result = $a * $b;
}
elseif ($operator == '/') {
    $result = $a / $b;
}
elseif ($operator == '-') {
    $result = $a - $b;
}
echo 'Результат: '. '$result';