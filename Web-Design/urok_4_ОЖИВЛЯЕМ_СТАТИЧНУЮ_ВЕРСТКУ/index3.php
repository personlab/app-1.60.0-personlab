<?php

echo "<p><b>Пример 4. Буфер внутри буфера внутри буфера...</b></p>";
echo ob_get_level() . "<br>"; //  ob_get_level показывает уровень вложенности
ob_start();
    echo ob_get_level() . "<br>";
    ob_start();
        echo ob_get_level() . "<br>";
        ob_start();
            echo ob_get_level() . "<br>";
        ob_end_flush();
    ob_end_flush();
ob_end_flush();

 ?>
