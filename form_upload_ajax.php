<!DOCTYPE html>
<html lang="en">
<head>
    <title>Unggah File Dokumen</title>
</head>
<body>
    <form id="image-upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>

    <script src="https://code.jquery-3.6.0.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>