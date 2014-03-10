<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="review-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="review-text">
		<div class="review-block-title"><span class="review-block-name"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["DISPLAY_PROPERTIES"]["FIO"]["DISPLAY_VALUE"]?></a></span><span class="review-block-description"><?=$arItem["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]?> <?=$arItem["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"]?></span></div>
								
								<div class="review-text-cont">
									<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
										<?=$arItem["PREVIEW_TEXT"];?>
									<?endif;?>
								</div>
							</div>
							<div class="review-img-wrap"><a href="#"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="img"></a></div>
	</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>