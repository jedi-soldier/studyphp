<h2>Отзывы</h2>


<form action="" method="post">
    Оставьте отзыв: <br>
    <input type="text" name="name" placeholder="Ваше имя" value=""><br>
    <input type="text" name="message" placeholder="Ваш отзыв" value=""><br>
    <input hidden type="text" name="id" value="<?=$row['id']?>"><br>
    <input type="submit" value="Отправить">
</form>

<?foreach ($feedback as $value): ?>
    <div class="feedback">
        <strong><?=$value['name']?></strong>: <?=$value['message']?>

    </div>
<?endforeach;?>