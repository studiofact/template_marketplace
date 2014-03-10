<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
					</div>
				</div>
				<div class="sb_sidebar">
					<div class="sb_nav">
						<?$APPLICATION->IncludeComponent("bitrix:menu", "menu_left", array(
	"ROOT_MENU_TYPE" => "left",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "2",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "Y",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
					</div>

					<div class="sb_reviewed">
<?
$APPLICATION->IncludeComponent("bitrix:news.list", "reviews", array(
	"IBLOCK_TYPE" => "news",
	"IBLOCK_ID" => #NEWS_IBLOCK_ID#,
	"NEWS_COUNT" => "1",
	"SORT_BY1" => "ACTIVE_FROM",
	"SORT_ORDER1" => "DESC",
	"SORT_BY2" => "SORT",
	"SORT_ORDER2" => "ASC",
	"FILTER_NAME" => "",
	"FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "",
		1 => "POSITION",
		2 => "COMPANY",
		3 => "FIO",
		4 => "",
	),
	"CHECK_DATES" => "Y",
	"DETAIL_URL" => "",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"PREVIEW_TRUNCATE_LEN" => "",
	"ACTIVE_DATE_FORMAT" => "d.m.Y",
	"SET_TITLE" => "N",
	"SET_STATUS_404" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"ADD_SECTIONS_CHAIN" => "N",
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",
	"PARENT_SECTION" => "",
	"PARENT_SECTION_CODE" => "",
	"INCLUDE_SUBSECTIONS" => "Y",
	"PAGER_TEMPLATE" => ".default",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"PAGER_TITLE" => "Новости",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"DISPLAY_DATE" => "Y",
	"DISPLAY_NAME" => "Y",
	"DISPLAY_PICTURE" => "Y",
	"DISPLAY_PREVIEW_TEXT" => "Y",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);
?>
							
					</div>
				</div>
				<div class="clearboth"></div>
			</div>
		</div>

		<div class="ft_footer">
			<div class="ft_container">
				<div class="ft_about">
<?$APPLICATION->IncludeComponent("bitrix:menu", "about", array(
	"ROOT_MENU_TYPE" => "top",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "1",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "N",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N",
	"TITLE" => GetMessage("ABOUT_SHOP")
	),
	false
);?>
					
				</div>
				 <div class="ft_catalog">
										<?$APPLICATION->IncludeFile(
										SITE_DIR."/include/menu_bottom.php",
										Array(),
										Array()
										);
										?>			
				</div> 
				<div class="ft_contacts">
					<h4><?=GetMessage("CONTACT_INFO")?></h4>
					<!-- vCard        http://help.yandex.ru/webmaster/hcard.pdf      -->
					<p class="vcard">
						<span class="adr">
							<span class="street-address">
										<?$APPLICATION->IncludeFile(
										SITE_DIR."/include/adress.php",
										Array(),
										Array()
										);
										?>
							</span>
						</span>
						<span class="tel"><?
										$APPLICATION->IncludeFile(
										SITE_DIR."/include/phone.php",
										Array(),
										Array()
										);
										?>
						</span>
						<strong><?=GetMessage("WORKTIME")?></strong> <br/> <span class="workhours">
																<?$APPLICATION->IncludeFile(
										SITE_DIR."/include/raspisanie.php",
										Array(),
										Array()
										);
										?>
						</span><br/>
					</p>
					<ul class="ft_solcial">
						<li><a href="" class="fb"></a></li>
						<li><a href="" class="tw"></a></li>
						<li><a href="" class="ok"></a></li>
						<li><a href="" class="vk"></a></li>
					</ul>
					<div class="ft_copyright">
					<?$APPLICATION->IncludeFile(
												SITE_DIR."/include/copyright_bottom.php",
												Array(),
												Array()
												);
					?>
					</div>
					
					
				</div>
				
				<div class="clearboth"></div>
			</div>
		</div>
	</div>
</body>
</html>