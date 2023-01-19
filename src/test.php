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
    if ($result = $c > $b  ) {
    echo  "Il numero maggiore è : $result ";
    }

    if ($result = $b > $c && $b > $a) {
    echo "Il numero maggiore  è :  $result" ;
    }



?>
