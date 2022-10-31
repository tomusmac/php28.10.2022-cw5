<?php
$znaki=["A" => "Ą","a" => "ą","C" => "Ć","c" => "ć","E" => "Ę","e" => "ę","L" => "Ł","l" => "ł","N" => "Ń","n" => "ń","O" => "Ó","o" => "ó","S" => "Ś","s" => "ś","Z" => "Ź","z" => "ź","Z" => "Ż","z" => "ż"];
$slowo=["zażółć","gęślą","jąkać","półciężkość","Wąż"];
function zamien($znaki,$slowo) {
    return str_replace(array_values($znaki), array_keys($znaki), $slowo);}
print_r($slowo);
echo "<br>";
print_r(zamien($znaki,$slowo));
?>