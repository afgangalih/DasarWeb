<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/"; //direktori tujuan menyimpan file
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxFileSizes = 5 * 1024 * 1024;


    // if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    //     echo"File berhasil diunggah";
    // } else {
    //     echo "Gagal mengunggah file";
    // }

    if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSizes) {
        if (move_uploaded_file(($_FILES["fileToUpload"]["tmp_name"]), $targetFile)) {
            echo"Dokumen berhasil diunggah";
            echo "<img src='$targetFile' width='300' height='200'>";
        } else {
            echo "Gagal mengunggah file";
        }
    } else {
        echo"File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
