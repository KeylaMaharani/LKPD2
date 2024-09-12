<?php
$teks = "selamat ulang tahun yang ke-17!";

// untuk mencari simbol (karakter yang bukan atau angka)
preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches);
//('/[^a-zA-Z0-9\s]/') string pattern (pola pettern = reguler expression) = rejek

//fungsi count  menghitung jumlah element dalam array
if (count($matches[0]) > 0) {
    
    $uniqueSymbols = array_unique($matches[0]);  //array_unique buat ngilangin simbol yg duplikat
    echo "Karakter yang terdapat pada kalimat :" . implode(',', $uniqueSymbols); 
                                        // fungsi implode untuk menggabungkan element" array menjadi sebuah string dengan pemisah tertentu
} else {
    echo "Tidak terdapat simbol pada kalimat.";
}
?> 