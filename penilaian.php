<?php
$nilai = 85;

echo "<h3> SISTEM PENILAIAN</h3>";
echo "<hr>";
echo "nama: ahmad santoso<br>";
echo "nilai: " . $nilai . "<br><br>";

echo "<b>Hasil:</b><b>";

if($nilai >= 90) {
    $grade = "A";
    $predikat = "sangat baik";
    $warna = "blue";
} elseif($nilai >= 80) {
    $grade = "B";
    $predikat = "Baik";
    $warna = "light green";
} elseif($nilai >= 70) {
    $grade = "C";
    $predikat = "cukup";
    $warna = "orange";
} elseif($nilai >= 60) {
    $grade = "D";
    $predikat = "kurang";
    $warna = "red";
} else {
    $grade = "E";
    $predikat = "singkat kurang";
    $warna = "darkred";
}

echo "<div style='background:#f0f0f0; padding:10px; border-radius:5px;'>";
echo "<span setyle='font-size:24px; color:" . $warna . "; font-weight:bold;'>";
echo "grade: " . $grade;
echo "</span><br>";
echo "predikat: " . $predikat;
echo "</div>";
?>