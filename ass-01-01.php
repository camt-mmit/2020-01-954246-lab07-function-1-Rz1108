<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
/**
 * It seem OK but I cannot find the benefit
 * of the 2-following function.
 */
function power0($start0,$end0,$add){
$cel0=$start0;
for($i=$start0;$i<$end0;$i=$i+$add)
$cel0 += $add;
return $cel0;
}

function power1($start0,$end0,$add){
    $cel0=$start0;
    for($i=$start0;$i<$end0;$i=$i+$add)
    $cel0 += $add;
    $fah0=$cel0*(9/5)+32;
 return $fah0;
    }

if ($argc<4) printf("Please input right number!");
else{
$start=(int)$argv[1];
$end=(int)$argv[2];
$step=(float)$argv[3];
printf("Celsius Fahrenheit\n");
for($j=$start;$j<=$end;$j=$j+$step){
    $Cel=power0($start,$j,$step);
    $Fah=power1($start,$j,$step);
    printf("%7.2f %10.2f\n",$Cel,$Fah);
}}
