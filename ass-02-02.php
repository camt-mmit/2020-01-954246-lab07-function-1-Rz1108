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

$input=fopen($_SERVER['argv'][1],'r');
fscanf($input,"%d",$num);
for($i=1;$i<=$num;$i++){
    fscanf($input,"%d %d",$Base[$i],$y[$i]);
    $X[0]=0;
    $X[$i]=power($X[$i-1]-$Base[$i],$y[$i]);
}
printf("%d",$X[$num]);