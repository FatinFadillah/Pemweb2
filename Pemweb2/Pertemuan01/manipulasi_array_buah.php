<?php
$arrayBuah = ["Semangka","Manggis","Durian","Rambutan"];

sort($arrayBuah);

array_pop($arrayBuah);

unset($arrayBuah[1]);

array_push($arrayBuah,"Apel");

array_shift($arrayBuah);

array_unshift($arrayBuah, "Mangga");

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}