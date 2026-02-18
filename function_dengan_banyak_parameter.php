<?php
// function dengan 3 parameter
function biodata($nama, $umur, $kelas) {
    echo "=== BIODATA SISWA ==<br>";
    echo "nama : $nama<br>";
    echo "umur : $umur tahun<br>";
    echo "kelas:  $kelas<br>";
    echo "<hr>";
}

// memanggil dengan 3 perameter
biodata("ahmad wijaya", 17, "x RPL 1");
biodata("siti nurhaliza", 16, "x RPL 2");
biodata("budi santoso", 17, "x RPL 1");
?>