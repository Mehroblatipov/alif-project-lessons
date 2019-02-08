<?php
$s=0;
for ($i=1; $i<=112; $i+=3){
   $s=$s+$i;
}
    echo $s;
    echo "<p></p>"
?>

<?php
for ($i=0; $i<100; $i++){
   $arr[]=$i;
}
$a=array_rand($arr);
$b=array_rand($arr);
$c=array_rand($arr);
 if($a!=$b && $a!=$b && $b!=$c )
    echo "$a $b $c";
    echo "<p></p>";


?>

<?php
$n=100;
for ($i=2; $i<=$n; $i++){
    if ($i%2==0){
        $arr[$i]=0;
    }
    else
        $arr[$i]=1;
}
print_r($arr);
echo "<p></p>";

?>

<?php
$array=[1, 0, 6, 9, 4, 5, 2, 3, 8, 7] ; 

for ($j = 0; $j < count($array) - 1; $j++){
    for ($i = 0; $i < count($array) - $j - 1; $i++){
        if ($array[$i] > $array[$i + 1]){
           $tmp = $array[$i + 1];
            $array[$i + 1] = $array[$i];
            $array[$i] = $tmp;
        }
    }
}
var_dump($array)
?>
<?php
$arraynew1=[];
$array=[1, 0, 6, 9, 4, 5, 2, 3, 8, 7] ; 
unset($array[3]);
print_r($array);
 foreach($array as $arraynew){
$arraynew1[]=$arraynew;}
print_r($arraynew1);

?>
