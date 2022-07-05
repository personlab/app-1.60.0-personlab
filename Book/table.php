<?php

$rows = 40; // количество строк, tr
$cols = 40; // количество столбцов, td

$table = '<table border="1">';

for ($tr = 1; $tr <= $rows; $tr++){
    $table .= '<tr>';
    for ($td = 1; $td <= $cols; $td++){
        if ($tr === 1 or $td === 1){
            $table .= '<th style="color: white; background-color: #85adea;">'. $tr * $td .'</th>'; // вычислили первую строку и столбец
        }else{
            $table .= '<td>'. $tr * $td .'</td>'; // все ячейки, кроме ячеек из первого столбца и первой строки
        }
    }
    $table .= '</tr>';
}

$table .= '</table>';
print_r($table); // вывод
  //////
print_r("<br><br>");


echo "<table><tr>".implode("</tr><tr>", array_map(function($item) {
    return "<td>".implode("</td><td>", range(1*$item,20*$item,$item))."<td>".PHP_EOL; }, range(1,20)))."</tr></table>";

?>
