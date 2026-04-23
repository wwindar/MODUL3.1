<?php
    $saldoAwal = 2000000; 
    $bunga = 0.03;       
    $bulan = 11;         

    // Perhitungan saldo akhir
    $saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);

    // Menampilkan hasil (Pastikan penulisan $saldoAkhir sama besar kecilnya)
    echo "Saldo awal: Rp. " . number_format($saldoAwal, 0, ',', '.') . "<br>";
    echo "Saldo akhir setelah " . $bulan . " bulan adalah : Rp. " . number_format($saldoAkhir, 0, ',', '.') . ",-";
?>