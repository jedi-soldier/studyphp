<?foreach ($gallery as $item):?>

    <div>
        <a rel="gallery" class="photo" href="/galleryOne/?id=<?=$item['id']?>"><img alt='img' src="img/small/<?=$item['name']?>"></a>
        <p>LIKES: <?=$item['likes']?></p>
    </div>

<?php endforeach;?>