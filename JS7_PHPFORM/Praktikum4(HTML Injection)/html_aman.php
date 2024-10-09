<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Aman</title>
</head>
<body>
    <h2>Input Aman</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="input">Masukkan data:</label><br>
        <input type="text" id="input" name="input" required><br>

        <label for="email">Masukkan email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil dan menyanitasi input data
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        // Validasi input data
        if (!empty($input)) {
            echo "<p>data yg diinput: " . $input . "</p>";
        } else {
            echo "<p style='color:red;'>Input tidak boleh kosong!</p>";
        }

        // Cek apakah email ada dalam POST sebelum validasi
        if (isset($_POST['email'])) {
            $email = $_POST['email'];

            // Validasi email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p style='color:red;'>Email tidak valid!</p>";
            } else {
                echo "<p>Email yang valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
            }
        } else {
            echo "<p style='color:red;'>Email tidak boleh kosong!</p>";
        }
    }
    ?>
</body>
</html>
