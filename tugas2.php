<?php
    // Inisialisasi data kerucut
    $jari_jari = 7;           // Nilai r
    $garis_pelukis = 15;      // Nilai s
    $phi = 3.14;              // Nilasi konstanta pi

    // 1. Menghitung Luas Alas (pi * r * r)
    $area_alas = $phi * $jari_jari * $jari_jari;

    // 2. Menghitung Luas Selimut (pi * r * s)
    $area_selimut = $phi * $jari_jari * $garis_pelukis;

    // 3. Menghitung Luas Permukaan Total (Luas Alas + Luas Selimut)
    $total_luas_permukaan = $area_alas + $area_selimut;

    // Menampilkan hasil ke layar
    echo "<b>Hasil Perhitungan Kerucut:</b><br>";
    echo "Jari-jari: $jari_jari cm<br>";
    echo "Garis Pelukis: $garis_pelukis cm<br>";
    echo "====================================<br>";
    echo "Luas Alas Kerucut : " . $area_alas . " cm2<br>";
    echo "Luas Permukaan : " . $total_luas_permukaan . " cm2";
?>