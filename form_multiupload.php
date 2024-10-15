<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multi-upload Images</title>
</head>
<body>
    <h2>Upload Images</h2>
    <form action="process_image_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="images[]" multiple="multiple" accept=".jpg, .jpeg, .png, .gif" />
        <input type="submit" value="Upload" />
    </form>
</body>
</html>