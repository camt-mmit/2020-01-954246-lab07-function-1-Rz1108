<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
/**
 * I think this function is useless
 * because it does the same thing as pow().
 */
function power($base,$n){
    $x=pow($base,$n);
    return $x;
}

$a=(int)$argv[1];
$b=(int)$argv[2];
$c=(int)$argv[3];
$d=(int)$argv[4];
$p=(int)$argv[5];
$q=(int)$argv[6];
$r=(int)$argv[7];

$X=power(power($a+$b,$p)+power($c+$d,$q),$r);
printf("%d",$X);