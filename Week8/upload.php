<?php
if (isset($_POST["submit"])) {
    $targetdir = "Uploads/";
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $filetype = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    $maxsize = 3*1024*1024;

    if (in_array($filetype, $allowedExtensions) && $_FILES["myfile"]["size"]<=$maxsize) 
    {
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            echo "file berhasil diunggah.";
            echo "<img src='$targetfile' width='200' style='height: auto;
            '><br>";
        }
        else {
            echo "Gagal menggunggah file.";
        }
    }else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>