<?php

 $a = 12;
 $b = 21;
 $c = 18;
 $result = $b > $c  ;
?>

a = 12 <br>
b = 21 <br>
c = 18 <br>
<br>
<?php
    if ( $a > $c ){
    echo "Il numero maggiore è : $result ";
}
    if ($result = $c > $b  ) { // if ($result = $c > $b  ) ->  NO! NON FUNZIONA - non puoi assegnare all'interno di un espressione condizionale.. controlla (=)
    echo  "Il numero maggiore è : $result ";
    }

    if ($result = $b > $c && $b > $a) { // COME SOPRA
    echo "Il numero maggiore  è :  $result" ; // ESCI QUA.. MA $result è un BOOLEAN .. quindi il risultato è 1..
    }

    // UN PO' DI COSE DA RIVEDERE


?>
