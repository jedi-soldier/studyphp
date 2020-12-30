<div class="container">
    <h1>Каталог</h1>
    <div class="goods">
        <?foreach ($catalog as $item):?>

            <div class="goods_item">
                <h2><?=$item['name']?></h2>
                <a rel="gallery" class="photo" href="/good/?id=<?=$item['id']?>">
                    <img src="<?="img/small/" . $item['main_image']?>" alt="main_img">
                </a>
                <p>Цена: <?=$item['price']?> рублей.</p>
                <button>Купить</button>
            </div>

        <?php endforeach;?>
    </div>
</div>

