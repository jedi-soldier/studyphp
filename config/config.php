<?php
define('ROOT', dirname(__DIR__));
define('TEMPLATES_DIR', ROOT . '/templates/');
define('LAYOUTS_DIR', 'layouts/');
define('BIG_IMG_FOLDER', $_SERVER["DOCUMENT_ROOT"] . '/img/big/');
define('SMALL_IMG_FOLDER', $_SERVER["DOCUMENT_ROOT"] . '/img/small/');
define('ALL_IMG_FOLDER', $_SERVER["DOCUMENT_ROOT"] . '/img/');

/* DB config */
define('HOST', 'localhost');
define('USER', 'jedi-soldier');
define('PASS', '1238');
define('DB', 'geek');


include ROOT . "/engine/functions.php";
include ROOT . "/engine/catalog.php";
include ROOT . "/engine/gallery.php";
include ROOT . "/engine/resizeImages.php";
include ROOT . "/engine/db.php";
include ROOT . "/engine/feedback.php";