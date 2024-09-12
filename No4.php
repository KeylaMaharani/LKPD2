    <?php
    // buatlah tanda persegi dengan simbol bintang sebanyak 4 baris dengan banyak bintang perbarisnya 
    for ($i=1; $i < 10; $i++) { // $i untuk baris ke bawah
        for ($j=0; $j < 8; $j++ ) {  // $j untuk baris ke samping
            if ($i % 5 == 0) { // pengkondisian $i modulus 5=0 tidak akan muncul apapun, jika tidak = 0 akan muncul 
                echo "";
            } else {
                echo "*";
            }
        }
        echo "<br>";
    }
    ?>