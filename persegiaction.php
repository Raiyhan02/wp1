<?php

$sisi=$_POST['sisi'];
$luas=$sisi * $sisi;
$keliling = 4 * $sisi;

echo "Luas persegi = $luas";
echo "<br>";
echo "keliling persegi = $keliling";
echo "<br>";
echo "<a href='persegi.php'>kembali</a>";