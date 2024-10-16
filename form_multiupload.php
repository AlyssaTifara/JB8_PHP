<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiupload Images</title>
</head>
<body>
    <h2>Unggah Dokumen</h2>
    <form action="process_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="images[]" multiple="multiple" accept=".jpg, .jpeg, .png" />
        <input type="submit" value="Unggah" />
    </form>
</body>
</html>