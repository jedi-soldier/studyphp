<?php
include "classSimpleImage.php";
function getImages()
{
    $images = scandir("img/big/");
    return array_splice($images, 2);
}

//foreach (getImages() as $img) {
//    $image = new SimpleImage();
//    $image->load(BIG_IMG_FOLDER . $img);
//    $image->resizeToWidth(200);
//    $image->save(SMALL_IMG_FOLDER . $img);
//}
