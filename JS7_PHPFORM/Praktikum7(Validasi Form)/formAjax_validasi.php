<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi Ajax</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi Ajax</h1>
    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <div id="result"></div> <!-- Untuk menampilkan hasil validasi -->

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); // Mencegah form dari pengiriman default

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
            } else if (!validateEmail(email)) {
                $("#email-error").text("Format email tidak valid.");
                valid = false;
            } else {
                $("#email-error").text("");
            }

            // Jika semua validasi berhasil
            if (valid) {
                // Mengirim data ke server menggunakan AJAX
                $.ajax({
                    url: 'prosesAjax_validasi.php', // Ganti dengan nama file PHP yang benar
                    type: 'POST',
                    data: {
                        nama: nama,
                        email: email
                    },
                    success: function(response) {
                        $("#result").html(response); // Menampilkan hasil dari server
                    }
                });
            }
        });

        // Fungsi untuk validasi format email
        function validateEmail(email) {
            var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(String(email).toLowerCase());
        }
    });
    </script>
</body>
</html>
