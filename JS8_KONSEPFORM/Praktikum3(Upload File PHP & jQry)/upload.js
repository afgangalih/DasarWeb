// $(document).ready(function () {
//     $("#upload_form").on("submit", function (e) {
//         e.preventDefault();
//         var formData = new FormData(this);

//         $.ajax({
//             type: "POST",
//             url: "upload_ajax.php",
//             data: formData,
//             contentType: false,
//             processData: false,
//             success: function (response) {
//                 $("#status").html(response);
//             },
//             error: function (error) {
//                 $("#status").html('Terjadi kesalahan saat mengunggah file');
//             }
//         });
//     });
// })

$(document).ready(function () {
    $('#file').change(function () {
        if (this.files.length > 0) {
            $('#upload-button').prop('disabled', false).css('opacity', 1); // Perbaiki: gunakan ',' bukan '.' dalam css
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    $('#upload-form').submit(function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: "POST",
            url: "upload_ajax.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                $("#status").html(response);
            },
            error: function (error) {
                $("#status").html('Terjadi kesalahan saat mengunggah file');
            } 
        }); 

    });
});

