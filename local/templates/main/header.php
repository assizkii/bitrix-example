<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
use Bitrix\Main\Page\Asset;
global $isMainPage,$thisPage, $asset;
$asset = Asset::getInstance();
$curPage = $APPLICATION->GetCurPage();
$isMainPage = preg_match('/^\/$/', $curPage);
$thisPage = explode("/" , $curPage);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle();?></title>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Oranienbaum|Playfair+Display:400,700&amp;amp;subset=cyrillic" rel="stylesheet">
	<?
	$asset->addCss(SITE_TEMPLATE_PATH."/css/styles.css");
	$asset->addJs("https://code.jquery.com/jquery-2.2.2.min.js");
	?>
</head>
	<body>
	<div id="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "file",
			"AREA_FILE_SUFFIX" => "inc",
			"COMPONENT_TEMPLATE" => ".default",
			"EDIT_TEMPLATE" => "",
			"PATH" => SITE_DIR."include/header.php"
		)
	);?>
		
						