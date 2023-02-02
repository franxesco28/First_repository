<?php

function getPrimeNumbersInRange(int $startNumber, int $count = 10 ) :array {

    $endNumber = $startNumber + $count;

    $primeNumbers = array();

    for ($i=$startNumber; $i<= $endNumber; $i++ ){

        if ( $i != 0 &&primeNumber($i))
            $primeNumbers [] = $i;
    }
    return $primeNumbers;
}

    $primeNumbers = getPrimeNumbersInRange(0,10);

    echo implode("-", $primeNumbers);

?>
