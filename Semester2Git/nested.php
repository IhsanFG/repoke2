<?php
//studi kasus akang nasi goreng menggunakan nested if
$pembeli = 100; // total pembeli yang ingin dicek

// Cek apakah pembeli kurang dari 10 orang
if ($pembeli < 10) {
    echo "Sedikit ya"; // Jika ya, tampilkan 
} else {
    // Jika tidak, cek apakah pembeli kurang dari 25 orang
    if ($pembeli < 25) {
        echo "Lumayan lah"; // Jika ya, tampilkan 
    } else {
        // Jika tidak, cek apakah pembeli kurang dari dari 50 orang
        if ($pembeli < 50) {
            echo "Banyak nih"; // Jika ya, tampilkan 
         } else {
            // Jika tidak, berarti lebih dari 50 orang
            echo "Alhamdulillah, laris ey hari ini"; // Tampilkan 
}
}
}
?>