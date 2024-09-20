<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <= 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik <= 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;



while ($jarakSaatIni < $jarakTarget ) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<br><br>Jarak saat ini : $jarakSaatIni <br>";
echo "Jarak Target Atlet : $jarakTarget <br>";
echo "Peningkatan Atlet : $peningkatanHarian <br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer. ";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <=$jumlahLahan ; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "<br><br>Jumlah lahan : $jumlahLahan <br>";
echo "Tanaman per lahan : $tanamanPerlahan <br>";
echo "Buah per tanaman : $buahPerTanaman <br>";
echo "Jumlah Buah : $jumlahBuah <br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br>";


$skorUjian = [85,92,78,96,88];
$totalSkor = 0;
$index=0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
    $index++;
    echo "Skor ujian ke-" . ($index ) . " : $skor <br>";
}
echo "Total skor ujian adalah : $totalSkor";

echo "<br>";
echo "<br>";

$nilaiSiswa = [85,92,58,64,90,55,88,79,70,96];
$indexx=0;
foreach ($nilaiSiswa as $nilai){
    $indexx++;
    if ($nilai < 60 ) {
    echo "Nilai Mhs $indexx : $nilai (tidak lulus) <br>";
    continue;
    }
    echo "Nilai Mhs $indexx : $nilai (lulus) <br>";
}

?>