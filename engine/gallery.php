<?php
$gallery = getGallery();

function getImages() {
    $images = scandir("img/big/");
    return array_splice($images, 2);
}

function getGallery()
{
    $gallery = getImages();
    $result = "<div class=\"gallery\">";
    foreach ($gallery as $img) {
       $result .= "<a rel=\"gallery\" class=\"photo\" href=\"img/big/{$img}\"><img alt='img' src=\"img/small/{$img}\"></a>";
    }
    return $result . "</div>"; 
}