<?php

function getGallery() {
    return getAssocResult("SELECT * FROM gallery WHERE 1 ORDER BY likes DESC");
}

function getOneImage($id) {
    return getAssocResult("SELECT * FROM gallery WHERE id = {$id}")[0];
}

function updateViews($id) {
    return executeSql("UPDATE gallery SET likes = likes + 1 WHERE id = {$id}");
}




