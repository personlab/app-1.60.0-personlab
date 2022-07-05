<?php

$rows = 40; // количество строк, tr
$cols = 40; // количество столбцов, td

$table = '<table border="1">';

for ($tr = 1; $tr <= $rows; $tr++){
    $table .= '<tr>';
    for ($td = 1; $td <= $cols; $td++){
        if ($tr === 1 or $td === 1){
            $table .= '<th style="color: white; background-color: black;">'. $tr * $td .'</th>'; // вычислили первую строку и столбец
        }else{
            $table .= '<td>'. $tr * $td .'</td>'; // все ячейки, кроме ячеек из первого столбца и первой строки
        }
    }
    $table .= '</tr>';
}

$table .= '</table>';
print_r($table); // вывод

?>
