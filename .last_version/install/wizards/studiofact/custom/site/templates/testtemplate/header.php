<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="<?=LANGUAGE_ID?>">
<head>
	<?$APPLICATION->ShowHead()?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-1.8.2.min.js");?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/functions.js");?>
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<?$now = getdate();?> 
<?$APPLICATION->ShowPanel()?>
	<div class="wrap">
		<div class="hd_header_area">
			<div class="hd_header">
				<table>
					<tr>
						<td rowspan="2" class="hd_companyname">
							<h1><a href="/" <?if($now["hours"]>=13){?>class="count_companyname"<?}?>><?
$APPLICATION->IncludeFile(
	SITE_DIR."/include/company.php",
	Array(),
	Array()
);
?></a></h1>
						</td>
						<td rowspan="2" class="hd_txarea">
							<span class="tel"><?
$APPLICATION->IncludeFile(
	SITE_DIR."/include/phone.php",
	Array(),
	Array("MODE"=>"html")
);
?></span>	<br/>	
							<?=GetMessage("WORK_TIME")?> <span class="workhours">
							<?
							$APPLICATION->IncludeFile(
								SITE_DIR."/include/grafic_work.php",
								Array(),
								Array("MODE"=>"html")
							);
							?>
							</span>						
						</td>
						<td style="width:232px">
						<?$APPLICATION->IncludeComponent("bitrix:search.form", "top", Array(
	
	),
	false
);?>
						</td>
					</tr>
					<tr>
						<td style="padding-top: 11px;">
							
							<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "top", array(
	"REGISTER_URL" => "/login/index.php?register=yes",
	"FORGOT_PASSWORD_URL" => "/login/index.php?forgot_password=yes",
	"PROFILE_URL" => "/login/profile.php",
	"SHOW_ERRORS" => "N"
	),
	false
);?>
								
						</td>
					</tr>
				</table>
<?$APPLICATION->IncludeComponent("bitrix:menu", "top_multilevel", Array(
	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
	"MENU_CACHE_TYPE" => "A",	// Тип кеширования
	"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
	"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
	"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
	"MAX_LEVEL" => "2",	// Уровень вложенности меню
	"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
	"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	"DELAY" => "N",	// Откладывать выполнение шаблона меню
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
);?>
			</div>
		</div>
		
		<!--- // end header area --->
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", array(
	"START_FROM" => "",
	"PATH" => "",
	"SITE_ID" => "-"
	),
	false
);?>
		<div class="main_container page">
			<div class="mn_container">
				<div class="mn_content">
					<div class="main_post">
						<div class="main_title">
							<h1><?$APPLICATION->ShowTitle(false)?></h1>
						</div>