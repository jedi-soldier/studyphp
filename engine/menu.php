<?php
function getMenu() {
    $menu = [
        [
            "title" => "Главная",
            "href" => "/",
        ],
        [
            "title" => "О нас",
            "href" => "/?page=about",
        ],
        [
            "title" => "Галлерея",
            "href" => "/?page=gallery",
        ],       
    ];

    $result = "<ul>";
    foreach ($menu as $list) {
        if (isset($list["items"])) {
            $result .= "<li><a href=\"{$list["href"]}\">{$list["title"]}</a>";
            $result .= renderMenu($list["items"]);
            $result .= "</li>";
        } else {
            $result .= "<li><a href=\"{$list["href"]}\">{$list["title"]}</a></li>";
        }                
    }
    return $result . "</ul>"; 
}