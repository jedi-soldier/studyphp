<?php
//Первым делом подключим файл с константами настроек
include $_SERVER["DOCUMENT_ROOT"] . "/../config/config.php";

$url_array = explode('/', $_SERVER['REQUEST_URI']);

if ($url_array[1] == "") {
    $page = 'index';
} else {
    $page = $url_array[1];
}

//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
$params = [];
switch ($page) {
    case 'index':
        $params['name'] = 'admin';
        break;

    case 'gallery':
        $params['gallery'] = getGallery();
        break;

    case 'galleryOne':
        $id = (int)$_GET['id'];
        $params['errorUpdate'] = updateViews($id);
        $params['image'] = getOneImage($id);
        break;

    case 'catalog':
        $params['catalog'] = getCatalog();
        break;
    case 'good':
        $id = (int)$_GET['id'];
        $params['good'] = getOneGood($id);
        $params['goodGallery'] = getGoodGallery($id);
        $params['allFeedback'] = getGoodFeedback($id);
        $params['addFeedback'] = addFeedBackForGood($id);
        break;
    case 'feedback':
        $params['feedback'] = getAllFeedback();
        $params['addfeedback'] = addFeedBack();
        break;
}
echo render($page, $params);
