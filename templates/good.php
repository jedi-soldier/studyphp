<div class="good">
    <div class="good_leftside">
        <h1><?=$good['name']?></h1>
        <p>Цена: <?=$good['price']?> рублей</p>
        <img alt='img' src="/img/big/<?=$good['main_image']?>">
    </div>
    <div class="good_rightside">
        <p><?=$good['description']?></p>
    </div>
</div>

<div class="good_gallery">
    <?foreach ($goodGallery as $item): ?>
        <img src="/img/<?=$good['good_gallery']?><?=$item?>" alt="photo" width="400" height="400">
    <?endforeach;?>
</div>

<h2>Отзывы</h2>

<form action="" method="post">
    Оставьте отзыв: <br>
    <input type="text" name="name" placeholder="Ваше имя" value=""><br>
    <input type="text" name="message" placeholder="Ваш отзыв" value=""><br>
    <input hidden type="text" name="id" value="<?=$row['id']?>"><br>
    <input type="submit" value="Отправить">
</form>

<?foreach ($allFeedback as $value): ?>
    <div class="feedback">
        <strong><?=$value['name']?></strong>: <?=$value['message']?>
    </div>
<?endforeach;?>



