<?php

function getGoodFeedback($id) {
    $sql = "SELECT * FROM good_feedback WHERE good_id = {$id} ORDER BY id DESC";
    return getAssocResult($sql);
}

function addFeedBackForGood($id) {
    if (!empty($_POST)) {
        $name = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['name'])));
        $message = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['message'])));
        $sql = "INSERT INTO good_feedback (name, message, good_id) VALUES ('{$name}','{$message}', '{$id}')";
        return executeSql($sql);
    }
}