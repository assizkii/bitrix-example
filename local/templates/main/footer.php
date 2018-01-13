<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "file",
			"AREA_FILE_SUFFIX" => "inc",
			"COMPONENT_TEMPLATE" => ".default",
			"EDIT_TEMPLATE" => "",
			"PATH" => SITE_DIR."include/footer.php"
		)
	);?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "file",
			"AREA_FILE_SUFFIX" => "inc",
			"COMPONENT_TEMPLATE" => ".default",
			"EDIT_TEMPLATE" => "",
			"PATH" => SITE_DIR."include/modals.php"
		)
	);?>
	</body>
</html>