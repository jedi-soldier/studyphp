<?php
function getCatalog() {
    $sql = "SELECT * FROM goods ORDER BY id DESC";
    return getAssocResult($sql);
}

function getOneGood($id) {
    return getAssocResult("SELECT * FROM goods WHERE id = {$id}")[0];
}

function getGoodGallery($id) {
    $images = scandir(ALL_IMG_FOLDER . 'good' . $id . "/");
    return array_splice($images, 2);
}