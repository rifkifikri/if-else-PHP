<?php
//belajar if else di php
$nilai1 =50;
$nilai2 = 10;

$hasil=$nilai1%$nilai2;//operasi aritmatika hampir  sama dengan c++
$hasil2=$nilai1/$nilai2;

echo "Nilai pertama :",$nilai1,"<br/>";//operasi modulus sama dengan c++
echo  "Nilai kedua :",$nilai2,"<br/>";

echo "Hasil dari Pembagian kedua nilai adalah ","<br/>";
if ($hasil==0){
    echo "nilainya bulat yaitu ",$hasil2;
    echo "<br/>";
}else{
    echo "nilai berupa desimal yaitu",$hasil2;
    echo "<br/>";
}
 
?>