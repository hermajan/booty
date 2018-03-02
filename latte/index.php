<?php
require_once __DIR__."/../vendor/autoload.php";

$latte = new \Latte\Engine;
$latte->setTempDirectory(__DIR__."/../.temp");

$parameters = [
	"basePath" => dirname($_SERVER["SCRIPT_NAME"])."/..",
	
	"webName" => "Booty",
	"color" => "#b00071",
	"description" => "",
	"author" => "hermajan",
	"robots" => "",
	"title" => "Booty",
	
	"headerFile" => "#header.latte",
	"headTag" => "",
	"searchForm" => "",
	
	"menuExists" => true,
	"menuFile" => "#menu.latte",
	
	"footerFile" => "#footer.latte",
	"footerContent" => ""
];

$latte->render("default.latte", $parameters);
