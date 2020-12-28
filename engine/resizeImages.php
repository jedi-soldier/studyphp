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
//    $image->resize(120, 300);
//    $image->save(SMALL_IMG_FOLDER . $img);
//}
