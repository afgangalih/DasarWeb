<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
</head>
<body>
    <h1>Form Input dengan validasi</h1>
    <form method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html> -->



<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="POST" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
    //langkah 6
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            var nama = $("#nama").val();
            var email = $("#email").val();
            var valid = true;

            // Validasi nama
            if (nama == "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            // Validasi email
            if (email == "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else if (!filter_var(email, FILTER_VALIDATE_EMAIL)) {
                $("#email-error").text("Format email tidak valid.");
                valid = false;
            } else {
                $("#email-error").text("");
            }

            // Jika ada kesalahan, hentikan pengiriman form
            if (!valid) {
                event.preventDefault();
            }
        });
    });
    </script>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="POST" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            var nama = $("#nama").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var valid = true;

            // Validasi nama
            if (nama == "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            // Validasi email
            if (email == "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else if (!filter_var(email, FILTER_VALIDATE_EMAIL)) {
                $("#email-error").text("Format email tidak valid.");
                valid = false;
            } else {
                $("#email-error").text("");
            }

            // Validasi password
            if (password.length < 8) {
                $("#password-error").text("Password harus minimal 8 karakter.");
                valid = false;
            } else {
                $("#password-error").text("");
            }

            // Jika ada kesalahan, hentikan pengiriman form
            if (!valid) {
                event.preventDefault();
            }
        });
    });
    </script>
</body>
</html>






