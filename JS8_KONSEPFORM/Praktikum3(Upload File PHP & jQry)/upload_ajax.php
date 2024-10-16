<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    @$file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
    $extensions = array("pdf", "doc", "docx", "txt");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
    }

    if ($file_size > 2097152) {
        $errors[] = "Ukuran file tidak boleh lebih dari 2 MB.";
    }

    if (empty($errors) === true) {
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah.";
    } else {
        echo implode(" ", $errors);
    }
}
?>

<!-- <?php
// if (isset($_FILES['file'])) {
//     $errors = array();
//     $extensions = array("jpeg", "jpg", "png", "gif");
//     $total_files = count($_FILES['file']['name']);

//     for ($i = 0; $i < $total_files; $i++) {
//         $file_name = $_FILES['file']['name'][$i];
//         $file_size = $_FILES['file']['size'][$i];
//         $file_tmp = $_FILES['file']['tmp_name'][$i];
//         $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

//         // Periksa ekstensi file
//         if (in_array($file_ext, $extensions) === false) {
//             $errors[] = "$file_name - Ekstensi yang diizinkan hanya JPEG, JPG, PNG, atau GIF.";
//         }

//         // Periksa ukuran file
//         if ($file_size > 2097152) {
//             $errors[] = "$file_name - Ukuran file tidak boleh lebih dari 2 MB.";
//         }

//         // Jika tidak ada error, unggah file
//         if (empty($errors)) {
//             if (!file_exists('images')) {
//                 mkdir('images', 0777, true);
//             }

//             $new_file_name = uniqid() . '.' . $file_ext;
//             move_uploaded_file($file_tmp, "images/" . $new_file_name);
//             echo "$file_name berhasil diunggah.<br>";
//         } else {
//             echo implode(" ", $errors) . "<br>";
//         }
//     }
// }
?> -->

