<?php
function sortowanie($tablica) {
    foreach ($tablica as $wartosc) {
        if($wartosc % 3 == 0) {
            $podzielne[]=$wartosc;
        } else {
            $niepodzielne[]=$wartosc;
        }
}
arsort($podzielne);
asort($niepodzielne);
return array_merge($podzielne,$niepodzielne);
}
$tab = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
$tab=sortowanie($tab);
foreach($tab as $wartosc) {
    echo "$wartosc <br>";
}
?>
