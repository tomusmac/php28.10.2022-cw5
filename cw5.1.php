<?php
$parzyste=$nieparzyste=0;
$tablica = array(0,1,2,3,4,5,6,7,8,9,10);
    foreach ($tablica as $wartosc) {
        if($wartosc % 2 == 0) {
            $parzyste++;
        } else {
            $nieparzyste++;
        }
}
echo "Parzyste: ".$parzyste." Nieparzyste: ".$nieparzyste;
?>