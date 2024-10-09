<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    // Output data yang diinput
    echo "Nama: $nama <br>";
    echo "Email: $email";
}
?>
