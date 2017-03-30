<?php

$arreglo  = array ('cadena', 1234, 3.1416, true, false, 'otro');
sort($arreglo);
for ($i = 0; $i < count($arreglo); $i++){
    echo $arreglo[$i] ."<br>";
}

rsort($arreglo);
echo"<ul>";
foreach($arreglo as $elemento){
    echo "<li>".$elemento. '</li>';
}
echo("</ul>");

?>