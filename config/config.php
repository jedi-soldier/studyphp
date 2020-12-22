<?php
define('ROOT', dirname(__DIR__));
define('TEMPLATES_DIR', ROOT . '/templates/');
define('LAYOUTS_DIR', 'layouts/');
define('BIG_IMG_FOLDER', $_SERVER["DOCUMENT_ROOT"] . '/img/big/');
define('SMALL_IMG_FOLDER', $_SERVER["DOCUMENT_ROOT"] . '/img/small/');

include ROOT . "/engine/functions.php";
include ROOT . "/engine/catalog.php";
include ROOT . "/engine/log.php";
include ROOT . "/engine/menu.php";
include ROOT . "/engine/gallery.php";
include ROOT . "/engine/resizeImages.php";