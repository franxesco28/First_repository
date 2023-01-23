PRIMA PROVA
- Scrivere un programma che trovi il maggiore tra 3 numeri
<br>
<?php

 $a = 12;
 $b = 21;
 $c = 18;
?>

a = 12 <br>
b = 21 <br>
c = 18 <br>
<br>
<?php

    if ( $a > $c && $c > $b && $b > $a ){
    echo  "Il numero maggiore  è il: " . $c ;
}
    elseif ( $c > $b && $b > $a && $c < $a ) {
    echo   "Il numero maggiore  è il: " . $a ;
}
    if (  $b > $c && $b > $a && $c > $a) {
    echo  "Il numero maggiore  è il: " . $b  ;
}

/*
$a = 1;
$b = 10;
$c =100;

$result = null;

if ($a > $b) {

    $result = ($a > $c) ? $a : $c ;

}   else {

    $result = ($b > $c) ? $b : $c;

}
echo "il maggio dei 3 tra {$a}, {$b}, {$c} è: $result" ;
*/ // prova del docente

?>
<br>
<br>

SECONDA PROVA
- Scrivere un programma per trovare numeri pari o dispari
<br>
<?php
$x = 7;

if ($x % 2) {

    echo "{$x} è dispari";
} else {

    echo "{$x} è pari";
}
/*
$a= 10;

echo $a . " è ";

echo ($a %2) == 0 ? "PARI" : "DISPARI" ;
*/ //ESERCIZIO PIU CORRETTO
?>

<br>
<br>
TERZA PROVA
- Creare uno script per stampare la riga 1-2-3-4-5-6-7-8-9-10 attraverso i loop...
<br>
<?php
for ($i = 1; $i <= 10 ; $i++) {

    echo $i;
    if ($i > 9) {
        continue;
    }
    echo "-";
}
?>
<br>
<br>
QUARTA PROVA
- Creare uno script per sommare tutti gli interi tra 0 e 30 e infine mostrare il risultato
<br>
<br>
<?php

$result= 0;

for ($c = 0; $c <= 30; $c++){
  $result+=$c;
}
echo "il totale dei numeri interi è " . $result;
?>
<br>
<br>
Creare uno script che costruisca il seguente pattern
<br>
<br>
<?php
for ($il = 0; $il <= 4; $il++) {

    for ($l = 0; $l <= $il; $l++) {

        for ($l= 0; $l <= $il; $l++)

        echo " *";
    }

    echo PHP_EOL;
}
?>
Esercizi Lezione 15
<br>
<br>
<?php
$color1 = array('white','green', 'red', 'blue', 'black');

echo "The memory of that scene for me is like a frame of film forever frozen at that
moment: the {$color1[2]} carpet, the {$color1[1]} lawn, the {$color1[0]} house, the leaden sky. 
The new president and his first lady. - Richard M. Nixon";
?>
<br>
<br>
<?php
$colors = array('white','green', 'red', 'blue', 'black');

echo  "colors in-line: ";

foreach ($colors as $key => $color) {

    if ($key > 0) echo ", ";

    echo $color;

}
echo PHP_EOL;
echo PHP_EOL;


echo "colors in-column: ";

foreach ($colors as $key => $color) {

    if ($key > 0) echo PHP_EOL;

    echo $color;
}
?>
<br>
<br>
Per ciascuna chiave stampare lo statement The capital of …. is … usando chiave e valori contenuti nell;array
<?php
$capitals = array("Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw"
);

foreach ($capitals as $key => $value) {

    echo "The capital of {$key} is {$value}";

    echo PHP_EOL;

}