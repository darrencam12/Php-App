<?php
if (isset($_FILES['file'])) {

    $file = "poster_imgs/poster.*";
    array_map("unlink", glob($file));

    # fix the folder's permissions to allow upload
    chmod('poster_imgs', 0777);
    $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $filename = "poster_imgs/poster.{$ext}";

    if (!move_uploaded_file($_FILES['file']['tmp_name'], $filename)) {
        die("Could not upload the image file.");
    }
}
 ?>
