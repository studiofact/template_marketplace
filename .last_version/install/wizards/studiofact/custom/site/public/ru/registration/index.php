<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?>
<?$APPLICATION->IncludeComponent("bitrix:main.register", "evgenyjam", array(
	"SHOW_FIELDS" => array(
		0 => "NAME",
		1 => "LAST_NAME",
		2 => "PERSONAL_PHONE",
	),
	"REQUIRED_FIELDS" => array(
		0 => "NAME",
		1 => "LAST_NAME",
	),
	"AUTH" => "Y",
	"USE_BACKURL" => "Y",
	"SUCCESS_PAGE" => "/registration/success.php",
	"SET_TITLE" => "Y",
	"USER_PROPERTY" => array(
		0 => "UF_DISCOUNT",
	),
	"USER_PROPERTY_NAME" => ""
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>