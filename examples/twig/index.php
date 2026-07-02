<?php
require_once __DIR__ . "/../../vendor/autoload.php";

$loader = new \Twig\Loader\FilesystemLoader(__DIR__);
$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/../.temp',
    'auto_reload' => true,
]);

$parameters = [
    "basePath" => dirname($_SERVER["SCRIPT_NAME"]) . "/../..",

    "webName" => "Booty",
    "color" => "#b00071",
    "description" => "",
    "author" => "hermajan",
    "robots" => "",
    "title" => "Booty",

    "navbarFile" => "navbar.twig",
    "headTag" => "",
    "searchForm" => "",

    "menuFile" => "menu.twig",

    "footerFile" => "footer.twig"
];

echo $twig->render("default.twig", $parameters);
