<?php
$a = 10;
$b = 5;

$hasilIdentik = $a === $b;
echo "Are $a and $b identical? " . ($hasilIdentik ? 'Yes' : 'No') . "<br>";
$hasilTidakIdentik = $a !== $b;
echo "Are $a and $b non-identical? " . ($hasilTidakIdentik ? 'Yes' : 'No') . "<br>";

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil Kurang: {$a} - {$b} = {$hasilKurang} <br>";
echo "Hasil Kali: {$a} * {$b} = {$hasilKali} <br>";
echo "Hasil Bagi: {$a} / {$b} = {$hasilBagi} <br>";
echo "Sisa Bagi: {$a} % {$b} = {$sisaBagi} <br>";
echo "Pangkat: {$a} ** {$b} = {$pangkat} <br>";

echo "Apakah {$a} sama dengan {$b}? " . ($hasilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah {$a} tidak sama dengan {$b}? " . ($hasilTidakSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah {$a} lebih kecil dari {$b}? " . ($hasilLebihKecil ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah {$a} lebih besar dari {$b}? " . ($hasilLebihBesar ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah {$a} lebih kecil atau sama dengan {$b}? " . ($hasilLebihKecilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah {$a} lebih besar atau sama dengan {$b}? " . ($hasilLebihBesarSama ? 'Ya' : 'Tidak') . "<br>";

echo "Hasil AND (a && b): " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR (a || b): " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil NOT a (!a): " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil NOT b (!b): " . ($hasilNotB ? 'true' : 'false') . "<br>";

$a += $b;
echo "After addiction $a += $b : a = $a <br>";
$a -= $b;
echo "After subtraction $a -= $b : a = $a <br>";
$a *= $b;
echo "After multiplication $a *= $b : a = $a <br>";
$a /= $b;
echo "After division $a /= $b : a = $a <br>";
$a %= $b;
echo "After modulus $a %= $b : a = $a <br>";


?>