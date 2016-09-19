<?php

$students = [
    "Emmanuel" => 42,
    "Thierry" => 51,
    "Pascal" => 45,
    "Eric" => 48,
    "Nicolas" =>19
];

$nbstudents = count($students);
$moyenne = array_sum($students)/$nbstudents;

foreach ($students as $key=> $value){
    echo 'Prénom : '.$key.' '.'Age : '.$value.'<br />';
}

echo 'La moyenne d\'âge est : '.$moyenne;
?>