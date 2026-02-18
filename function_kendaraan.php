<?php
function kendaraan($merk, $warna, $tahun,) {
    echo "=== DATA KENDARAAN === <br>";
    echo "merk : $merk <br>";
    echo "warna : $warna <br>";
    echo "tahun : $tahun<br>";
    echo "<hr>";
}

// mamnggil dengan 3 perameter
kendaraan(merk: "vario",warna: "merah",tahun: "2027");
kendaraan(merk: "scoppy", warna: "hijau",tahun: "2016");

?>