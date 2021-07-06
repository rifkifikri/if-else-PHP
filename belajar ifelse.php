<?php
//belajar if else di php
$nilai1 =50;
$nilai2 = 10;

$hasil=$nilai1%$nilai2;
$hasil2=$nilai1/$nilai2;
if ($hasil==0){
    echo "nilainya bulat yaitu ",$hasil2;
    echo "<br/>";
}else{
    echo "nilai berupa desimal yaitu";
    echo "<br/>";
}
 
?>