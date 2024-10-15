$(document).ready(function() {
    $('#image-upload-form').on('submit', function(event) {
        event.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: 'upload.php',
            type: 'POST',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                $('#gallery').html(data);
                alert('Images uploaded successfully!');
            }
        });
    });
});