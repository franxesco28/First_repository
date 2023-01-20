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

//SECONDA PROVA
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

</body>
</html>
?>

