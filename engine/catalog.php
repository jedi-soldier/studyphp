<?php
function getCatalog() {
    $sql = "SELECT * FROM goods ORDER BY id DESC";
    return getAssocResult($sql);
}

function getGoodGallery($goodGallery) {
    $images = scandir('/img/' . $goodGallery);
    return array_splice($images, 2);
}