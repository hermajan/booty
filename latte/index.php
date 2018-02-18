<?php
require_once __DIR__."/../vendor/autoload.php";

$latte = new \Latte\Engine;
$latte->setTempDirectory(__DIR__."/../.temp");

$parameters = [
	"weburl" => "/github/booty",
	"webName" => "Booty",
	
	"description" => "",
	"author" => "hermajan",
	"title" => "Booty",
	
	"headerFile" => "_header.latte",
	"headTag" => "",
	"searchForm" => "",

	"menuExists" => true,
	"menuFile" => "_menu.latte",

	"footerFile" => "_footer.latte",
	"footerContent" => ""
];

$latte->render("default.latte", $parameters);
