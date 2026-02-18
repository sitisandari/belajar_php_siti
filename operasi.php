<?php
// function operasi matematika
function tambah($a, $b) {
    return $a + $b;
}

function kurang($a, $b) {
    return $a - $b;
}

function kali($a, $b) {
    return $a * $b;
}

function bagi($a, $b) {
    if($b ==0) {
        return "error: tidak bisa bagi 0!";
    }
    return $a / $b;
}

//  program utama
$angka1 = 20;
$angka2 = 5;
?>

<h2>KALKULATOR SEDERHANA</h2>
<table border="1" callpadding="10">
    <tr bgcolor="0066cc" style="color:white">
        <th>oprasi</th>
        <th>hasil</th>
</tr>
<tr>
    <td><?php echo "$angka1 + $angka2"; ?></td>
    <td><b><?php echo tambah($angka1, $angka2); ?></b></td>
</tr>
<tr>
    <td><?php echo "$angka1 + $angka2"; ?></td>
    <td><b><?php echo kali($angka1, $angka2); ?></b></td>
</tr>
<tr>
    <td><?php echo "$angka1 + $angka2"; ?></td>
    <td><b><?php echo bagi($angka1, $angka2); ?></b></td>
</tr>
</table>

     
