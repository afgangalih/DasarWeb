<?php
//lokasi penyimpanan file yang diunggah
$targetDirectory = "documents/";

//periksa direktori penyimpanan, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory,0777, true);
}

if ($_FILES["files"]["name"][0]) {
    $totalFiles = count($_FILES["files"]["name"]);

    //loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES["files"]["name"][$i];
        $targetFile = $targetDirectory . $fileName;

        //memindahkan file ke direktori tujuan
        if (move_uploaded_file($_FILES["files"]["tmp_name"][$i], $targetFile)) {
            echo "File " . $fileName . " berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah file " . $fileName . ".<br>";
        }
    }
} else {
    echo"tidak ada file yang diunggah";
}