<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
        $Listtdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

        for ($i = 0; $i < count($Listtdosen); $i++) {
            echo $Listtdosen[$i] . "<br>";
        }
    ?>
</body>
</html>