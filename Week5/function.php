<?php
function perkenalan ($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("Hamdana","Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);
?>