<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?=$arResult["PREVIEW_TEXT"];?>
		</div>
		<div style="float: right; font-style: italic;">
			<?=$arResult["DISPLAY_PROPERTIES"]["FIO"]["VALUE"]?>
		</div>
	</div>
	<div style="clear: both;" class="review-img-wrap"><img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" alt="img"></div>
</div>
	<a href="" class="ps_backnewslist"> &larr; <?=GetMessage("BACK")?></a>
