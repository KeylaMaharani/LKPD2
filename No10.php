<?php

function checkJawaban($nama, ...$arrJawaban) {
    $jawaban = ['A', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'E'];
    $arrBenar = [];// untuk menyimpan hasil penilaian jawaban
     
    // mengecek jawaban yang diberikan dengan jawaban yang benar
    // perulangan foreach untuk memproses setiap elemen dalam $jawaban
    // $key adalah index dari check jawaban
    // $value adalah nilai asli
    foreach ($jawaban as $key => $value) { 
        // meriksa jawaban di index yang sama/cocok
        if ($arrJawaban[$key] == $value) {
            $arrBenar[$key] = 1; // jika jawaban benar
        } else {
            $arrBenar[$key] = 0; // jika jawaban salah
        }
    }

    // menampilkan hasil
    echo "Nama : $nama <br>";
    echo "Jumlah Jawaban Benar : <b>" . count(array_keys($arrBenar, 1)) . "</b></br>"; // menghitung benar
    echo "Jumlah Jawaban Salah : <b>" . count(array_keys($arrBenar, 0)) . "</b></br>"; // menghitung salah
}
   
checkJawaban("Putri", 'A', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'Z', 'A');
  // count penjumlhn element
  // fungsi array_keys() buat ngembaliin array yang berisi kunci 
?>