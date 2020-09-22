<?php

include_once './../src/Id/GenerateIdCard.php';
include_once './../src/Id/Idcard.php';
include_once './../src/Id/IdCardData.php';
include_once './Function.php';

use ZX\Id\GenerateIdCard;
use ZX\Id\Idcard;
use ZX\Id\IdCardData;

$rt = GenerateIdCard::generateID15(5);
p($rt);

$r = GenerateIdCard::generateID(5);
p($r);

foreach ($r as $k => $v) {
    $Idcard = new Idcard($v);

    $t = $Idcard->isIdNumberValid();
    if ($t) {
        p(1);
    } else {
        p(11111);
    }
}














