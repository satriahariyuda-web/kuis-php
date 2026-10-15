<?php
$angka = range(1, 20);
foreach ($angka as $n) {
    if ($n % 3 == 0) {
        echo $n . "<br>";
    }
}
?>