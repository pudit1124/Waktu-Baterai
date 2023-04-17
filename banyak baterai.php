<?php
$persen_sisa_baterai = 7; //Persen % 
$daya_charger = 10; // Watt
$kapasitas_baterai = 5000; // mAh
//operasi
$sisa_baterai = $kapasitas_baterai * $persen_sisa_baterai / 100;
$waktu = ($kapasitas_baterai - $sisa_baterai) / ($daya_charger * 1000 / 60);

echo "Waktu yang dibutuhkan untuk mengisi baterai ponsel anda yang semulanya  " . $persen_sisa_baterai . "% untuk mencapai 100% adalah " . round($waktu, 2) . " menit atau sekitar " . round($waktu/60, 2) . " jam.";