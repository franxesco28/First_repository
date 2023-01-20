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

    if ( $a > $c && $c > $b ){
    echo "Il numero maggiore è :  " . $c ;
}
    elseif ( $c > $b && $b < $a ) {
    echo  "Il numero maggiore è : " . $a ;
}
    if ( $b > $c && $b > $a) {
    echo "Il numero maggiore  è : " . $b ;
}



?>
<br>
<br>

SECONDA PROVA
- Scrivere un programma per trovare numeri pari o dispari
<br>
<?php
$x = 0;
do {
  echo "Numeri Pari: $x <br>";
  $x+=2;
} while ($x <= 30);
?>

<?php
$x=1;

do {
  echo "<br> Numeri Dispari: $x ";
   $x+=2;
} while ($x < 30);
?>
<br>
<br>
TERZA PROVA
- Creare uno script per stampare la riga 1-2-3-4-5-6-7-8-9-10 attraverso i loop...
<br>
<?php  $i =1 ?>
<?php
for ($i = 1; ($i <= 10); $i++){
    echo $i ," " ;
}
?>
<br>
<br>
QUARTA PROVA
- Creare uno script per sommare tutti gli interi tra 0 e 30 e infine mostrare il risultato
<br>
<br>
<?php


$totPari = (2+4+6+8+10+12+14+16+18+20+22+24+26+28+30);
$totDisp = (1+3+5+7+9+11+13+15+17+19+21+23+25+27+29);

    if ($totPari >= 230) {
        echo  "Totale dei numeri pari : " . $totPari;
    }
    elseif ($totDisp >= 225) {
        echo "Totale dei numeri dispari : " . $totDisp;
    }
?>
<br>
<br>
QUINTA PROVA
- Creare uno script che costruisca il seguente pattern...
<br>
<br>
<?php

?>
