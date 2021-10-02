<?php
use Latte\Engine;

require_once __DIR__."/../../vendor/autoload.php";

$latte = new Engine;
$latte->setTempDirectory(__DIR__."/../.temp");

$parameters = [
	"basePath" => dirname($_SERVER["SCRIPT_NAME"])."/../..",
	
	"webName" => "Booty",
	"color" => "#b00071",
	"description" => "",
	"author" => "hermajan",
	"robots" => "",
	"title" => "Booty",
	
	"navbarFile" => "#navbar.latte",
	"headTag" => "",
	"searchForm" => "",
	
	"menuFile" => "#menu.latte",
	
	"footerFile" => "#footer.latte"
];

$latte->render("default.latte", $parameters);
