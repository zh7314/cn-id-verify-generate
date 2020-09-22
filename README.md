# cn-id-verify-generate

#### 介绍
身份证号验证和生成器，生成器仅用于测试

#### 验证身份证号
```
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
```
#### 生成随机身份证
```
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
```