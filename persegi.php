<?php
// menghitung luas bangun datar

// data persegi panjang
$panjang = 10;
$lebar = 5;

// rumus
$luas = $panjang * $lebar;
$keliling = 2 * ($panjang + $lebar);

// tampilan
echo "<h2> MENGHITUNG PERSEGI PANJANG</h2>";
echo "<hr>";
echo "<b>Data:</b><br>";
echo "panjang = " . $panjang . " cm<br>";
echo "lebar = " . $lebar . " cm<br>";
echo "<br>";
echo "<b>Hasil perhitunguan:</br><br>";
echo "luas = " . $luas . " cm2<br>";
echo "keliling = " . $keliling . " cm<br>";
echo "<br>";
echo "<i>rumus luas: panjang x lebar</i><br>";
echo "<i>rumus keliling: 2 x (panjang + lebar)</i>";

?>