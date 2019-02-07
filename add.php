<?php
$a=1;
$b="Mehrob";
$c="true";
$f=1.1;
$arr = [];
$object=new stdclass;

for($i=0;$i<10; $i+=2){
    $arr[]=$i*2;
}
foreach($arr as $key=>$value){
    
    if($key>0  && $key%2 == 0){
        echo '$key['. $key .'] = value[' .$value .']<br/>';
    }
}


while($k < 10) 
{
  echo "<br/>mehrob";
  $k++;
}
$a=103;
echo "<br/>";
switch($a){
    case $a<10;
        break;
    case $a < 2;
        break;
    case $a < 12;
        echo '$a =' . $a;
        break;
    default:
        echo "Нет";    
}
echo "<br/>";
$name='Mehrob';
$name1='Sshabnam';
echo "$name $name1";


$fullname="$name $name1";
echo $fullname;
$fullname='$name $name1';
echo $fullname;

MEHROBBBBBBBBBBBBBBBBBBBBBBBBBBBBB