<?php
$a=1;
$b="Mehrob";
$c="true";
$f=1.1;
$arr = [];
$object=new stdclass;

for($i=0;$i<100; $i+=2){
    $arr[]=$i*2;
}
echo '<pre>';
print_r($arr);
echo '</pre>';