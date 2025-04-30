<?php
// Fungsi kalkulator, masukin 2 angka dan operatornya
function kalkulator($angka1, $angka2, $operator) {
    // Daftar operator yang bisa dipake
    $operasi = array('+', '-', '*', '/');

    // Cek dulu operatornya valid atau nggak
    if (in_array($operator, $operasi)) {
        // ini Kalo operatornya tambah
        if ($operator == '+') {
            return $angka1 + $angka2;
        }
        // ini Kalo operatornya kurang
        elseif ($operator == '-') {
            return $angka1 - $angka2;
        }
        // ini Kalo operatornya kali
        elseif ($operator == '*') {
            return $angka1 * $angka2;
        }
        // ini Kalo operatornya bagi
        elseif ($operator == '/') {
            // klo diBagi 0 nggak booleh, nanti nya bakalan error 
            if ($angka2 != 0) {
                return $angka1 / $angka2;
            } else {
                return "Error: Nggak bisa bagi sama 0!";
            }
        }
    } else {
        return "Operator nggak valid.";
    }
}


$operasiList = array(
    array(5, 5, '+'),
    array(10, 3, '-'),
    array(4, 6, '*'),
    array(9, 3, '/'),
    array(5, 0, '/')
);

foreach ($operasiList as $operasi) {
    $angka1 = $operasi[0];
    $angka2 = $operasi[1];
    $operator = $operasi[2];

    echo "$angka1 $operator $angka2 = " . kalkulator($angka1, $angka2, $operator) . "<br>";
}
?>
