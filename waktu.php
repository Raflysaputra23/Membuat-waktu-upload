<?php 

$waktuUpload = strtotime("2024-02-17 01:20:00");

$selisihWaktu = time() - ($waktuUpload - 21600); // RUMUS UNTUK TIME DAN WAKTU SEKARANG AKURAT

$jam = floor($selisihWaktu / (60 * 60));
$menit = floor($selisihWaktu / 60);
$detik = floor($selisihWaktu % 60);
$hari = floor($selisihWaktu / (60 * 60 * 24));
$bulan = floor($selisihWaktu / (60 * 60 * 24 * 30));
$tahun = floor($selisihWaktu / (60 * 60 * 24 * 30 *12));

if ($tahun > 0) {
    echo $tahun." tahun yang lalu";
} elseif ($bulan > 0) {
    echo $bulan." bulan yang lalu";
} elseif ($hari > 0) {
    echo $hari." hari yang lalu";
} elseif ($jam > 0) {
    echo $jam." jam yang lalu";
} elseif ($menit > 0) {
    echo $menit." menit yang lalu";
} elseif ($detik > 0) {
    echo $detik." detik yang lalu";
} 

 