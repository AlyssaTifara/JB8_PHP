<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/";
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxFileSixe = 5 * 1024 * 1024;
    
    if (in_array($fileType, $allowedExtensions) && $_FILES ["myfile"]["size"] <= $maxFileSixe) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            echo "File berhasil diunggah";
            
            $image = null;
            switch ($fileType) {
                case 'jpg':
                case 'jpeg':
                    $image = imagecreatefromjpeg($targetfile);
                    break;
                case 'png':
                    $image = imagecreatefrompng($targetfile);
                    break;
                case 'gif':
                    $image = imagecreatefromgif($targetfile);
                    break;
            }
            
            if ($image) {
                $width = imagesx($image);
                $height = imagesy($image);
                $new_width = 200;
                $new_height = round(($height / $width) * $new_width);
                
                $thumb = imagecreatetruecolor(round($new_width), round($new_height));
                imagecopyresampled($thumb, $image, 0, 0, 0, 0, round($new_width), round($new_height), $width, $height);
                
                $thumbnail_path = 'uploads/thumbnail_' . basename($targetfile);
                switch ($fileType) {
                    case 'jpg':
                    case 'jpeg':
                        imagejpeg($thumb, $thumbnail_path);
                        break;
                    case 'png':
                        imagepng($thumb, $thumbnail_path);
                        break;
                    case 'gif':
                        imagegif($thumb, $thumbnail_path);
                        break;
                }
                
                imagedestroy($image);
                imagedestroy($thumb);
                
                echo '<br><img src="' . $thumbnail_path . '" alt="Thumbnail">';
            }
        } else {
            echo "Gagal mengunggah file";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>