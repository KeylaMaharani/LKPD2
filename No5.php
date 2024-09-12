<?php 
//variabel yang berisikan array
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

// array_merge buat nyatuin array
$merge = array_merge($bil1, $bil2);

// buat hapus yang duplikat
$unique = array_unique($merge);

// terbesar ke terkecil
asort($unique);

echo "Hasil : ";

// menggabungkan array menjadi string dengan pemisah tertentu
echo implode(', ', $unique);
?>
