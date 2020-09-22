<?php

include_once './../src/Id/GenerateIdCard.php';
include_once './../src/Id/Idcard.php';
include_once './../src/Id/IdCardData.php';
include_once './Function.php';

use ZX\Id\Idcard;

//15
$idNumber = '632123820927051';
//18
//$idNumber = '130203192009217969';
////wrong
//$idNumber = '130203192009217979';

p($idNumber);

$Idcard = new Idcard($idNumber);
p($Idcard->getIdNumber());
$tt = $Idcard->isIdNumberValid();
if ($tt) {
    echo 'ok';
} else {
    echo 'no';
}


