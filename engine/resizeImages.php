<?php
include "classSimpleImage.php";
$images = getImages();
foreach ($images as $img) {
    $image = new SimpleImage();
    $image->load(BIG_IMG_FOLDER . $img);
    $image->resizeToWidth(200);
    $image->save(SMALL_IMG_FOLDER . $img);
}
