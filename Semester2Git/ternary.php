<?php
//studi kasus toko perabotan menaruh barang di gudang
$jumbar = 80; // Menyimpan nilai jumlah barang dalam variabel $jumbar

// Menggunakan ternary operator untuk mengecek apakah nilai lebih besar atau sama dengan 75
// Jika ya, maka $status berisi "Oke, cukup", jika tidak maka berisi "Kurang bro"
$status = ($jumbar >= 75) ? "Oke, cukup" : "Kurang bro";

// Menampilkan hasil status kelulusan
echo $status;
?>