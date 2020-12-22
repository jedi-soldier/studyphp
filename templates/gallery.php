<?php
if (!empty($_FILES)) {
    $path = "img/big/" . $_FILES["myfile"]["name"];
    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $path)) {
        echo "OK!";
    } else {
        echo "ERROR!";
    }
}
?>

<?=$gallery?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="myfile">
    <input type="submit" value="Load">
</form>