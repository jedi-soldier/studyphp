<?php

function getAllFeedback() {
    $sql = "SELECT * FROM sitefeedback ORDER BY id DESC";
    return getAssocResult($sql);
}

function getGoodFeedback($id) {
    $sql = "SELECT * FROM good_feedback WHERE good_id = {$id} ORDER BY id DESC";
    return getAssocResult($sql);
}

function addFeedBack() {
    if (!empty($_POST)) {
        $name = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['name'])));
        $message = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['message'])));
        $sql = "INSERT INTO sitefeedback(name, message) VALUES ('{$name}','{$message}')";
        return executeSql($sql);
    }
}

function doFeedbackAction($action, $sql) {
    switch ($action) {
        case 'add':
            $name = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['name'])));
            $message = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['message'])));
            $sql = "INSERT INTO sitefeedback(name, message) VALUES ('{$name}','{$message}')";

            break;
        case 'edit':
            break;
        case 'save':
            break;
        case 'delete':
            break;
    }

    if ($action == 'add') {
        addFeedBack();
    }
    if ($action == 'edit') {
        addFeedBack();
    }
}