<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<form action="<?=$arResult["FORM_ACTION"]?>">
	<div class="hd_search_form" style="float:right;">
<?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
				"bitrix:search.suggest.input",
				"",
				array(
					"NAME" => "q",
					"VALUE" => "",
					"INPUT_SIZE" => 15,
					"DROPDOWN_SIZE" => 10,
				),
				$component, array("HIDE_ICONS" => "Y")
			);?>
<?else:?>
<input type="text" name="q" value="" placeholder="Поиск" /><?endif;?>
<input name="s" type="submit" value="&nbsp;" />
</div>
</form>