<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Unggah File Dokumen</title>
    </head>
    <body>
        <form  id="upload_form" action="upload_ajax.php" method="post" enctype="multipart/form-data" >
         <input type="file" name="file" id="file"> -->
         <!-- <input type="file" name="file[]" id="file" multiple accept="image/*">
        <input type="submit" name="submit" value="Unggah">
        </form>
        <div id="status"></div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="upload.js"></script>
        
    </body>
</html> --> 

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="upload.css">
    <title>Unggah File Dokumen</title>
</head>
<body>
    <div class="upload-form-container">
        <h2>Unggah File Dokumen</h2>
        <form id="upload_form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <div class="file-input-container">
                <input type="file" name="file" id="file" class="file-input" required>
                <label for="file" class="file-label">Pilih File</label>
            </div>
            <button type="submit" name="submit" class="upload-button"disabled>Unggah</button>
        </form>
        <div id="status" class="upload-status"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>

