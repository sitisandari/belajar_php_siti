<?php
$angka = 17;
$sisa = $angka % 2; // bagi dengan 2, ambil sisanya

echo "<h2> CEK GENAP ATAU GANJIL</h2>";
echo "<hr>";
echo "angka yang dicek: " . $angka . "<br>";
echo "ssia pembagian dengan 2: " . $sisa . "<br>";
echo "<br>";

// logikanya:
// jika sisa bagi dengan 2 = 0, berarti genap
// jika sisa bagi dengan 2 = 1, berarti ganjil

if ($sisa == 0)  {
    echo "<br style='color:green;'>angka ini GENAP </b>";
} else {
    echo "<b style='color:blue;'>angka ini GANJIL</b>";
}

?>