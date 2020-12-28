<h2>Отзывы</h2>


<form action="/?action=" method="post">
    Оставьте отзыв: <br>
    <input type="text" name="name" placeholder="Ваше имя" value="<?=$row['name']?>"><br>
    <input type="text" name="message" placeholder="Ваш отзыв" value="<?=$row['message']?>"><br>
    <input hidden type="text" name="id" value="<?=$row['id']?>"><br>
    <input type="submit" value="<?=$buttonText?>">
</form>

<?foreach ($feedback as $value): ?>
    <div>
        <strong><?=$value['name']?></strong>: <?=$value['message']?>
        <a href="/?action=edit&id=<?=$value['id']?>">[EDIT]</a>
        <a href="/?action=delete&id=<?=$value['id']?>">[X]</a>
    </div>
<?endforeach;?>