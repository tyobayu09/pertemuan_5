<?php
// Mendefinisikan variabel
$pemasukan = 50000000;
$hutang_a = 16500000;
$bunga_a = 0.05; // 5%
$hutang_b = 9500000;
$bunga_b = 0.045; // 4.5%

// Menghitung jumlah total bunga hutang
$total_bunga = ($hutang_a * $bunga_a) + ($hutang_b * $bunga_b);

// Menghitung jumlah total hutang
$total_hutang = $hutang_a + $hutang_b;

// Menghitung sisa uang
$sisa_uang = $pemasukan - $total_hutang - $total_bunga;

// Menampilkan hasil
echo "Sisa uang: " . number_format($sisa_uang) . " Rupiah";
echo "<br>";
echo "Jumlah total bunga hutang: " . number_format($total_bunga) . " Rupiah";
echo "<br>";
echo "Jumlah total hutang: " . number_format($total_hutang) . " Rupiah";
?>