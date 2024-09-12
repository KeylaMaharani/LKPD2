<?php

// mendefinisikan fungsi array
function createArray(...$jurusan) {
    $arr = [];
    foreach ($jurusan as $value) {
        // mengubah nama jurusan menjadi huruf kapital dan memeriksa apakah sudah kapital
        if (in_array(strtoupper($value), $arr) == false) { // meriksa ada atau ngga nya array
            array_push($arr, strtoupper($value)); // untuk menaru hasil yg uda di proses ke $arr
        }
    }

    return $arr;
}

print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));
?>