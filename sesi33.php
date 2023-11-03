NOMOR 1<br>
<?php
$array = array("satu", "dua", "tiga", "empat", "lima");

$reversed_array = array_reverse($array);
foreach ($reversed_array as $item) {
    echo $item . "<br>";
}
?><br><br>


NOMOR 2<br>
<?php
$array = array("apel", "nanas", "mangga", "jeruk");

$count = count($array);
echo "terdapat " . $count . " buah";
?><br><br>


NOMOR 3<br>
<?php
$array = array(7, 3, 4, 9);

$total = array_sum($array);
echo "total adalah " . $total;
?><br><br>


NOMOR 4<br>
<?php
for ($i = 1; $i <= 10; $i++) {
    echo "1x" . $i . "=" . (1 * $i) . "<br>";
}
?><br>
