<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if($arResult["FORM_TYPE"] == "login"):?>
<span class="hd_singin"><a id="hd_singin_but_open" href=""><?=GetMessage("SIGN_IN_PASSWORD")?></a>
							<div class="hd_loginform">
<span class="hd_title_loginform"><?=GetMessage("SIGN_IN_PASSWORD")?></span>
	<form name="system_auth_form<?=$arResult["RND"]?>" method="post" action="<?=$arResult["AUTH_URL"]?>">
		<?if($arResult["BACKURL"] <> ''):?>
			<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
		<?endif?>
		<?foreach ($arResult["POST"] as $key => $value):?>
			<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
		<?endforeach?>
		<input type="hidden" name="AUTH_FORM" value="Y" />
		<input type="hidden" name="TYPE" value="AUTH" />
									<input placeholder="Логин" name="USER_LOGIN"  type="text">
									<input  placeholder="Пароль" name="USER_PASSWORD" type="password">			
									<a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" class="hd_forgotpassword"><?=GetMessage("FORGOT_PASSWORD")?></a>
									
									<div class="head_remember_me" style="margin-top: 10px">
										<input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">
										<label for="USER_REMEMBER_frm" title="Запомнить меня на этом компьютере"><?=GetMessage("SAVE_PASSWORD")?></label>
									</div>				
									<input value="Войти" name="Login" style="margin-top: 20px;" type="submit">
									</form>
								<span class="hd_close_loginform"><?=GetMessage("CLOSE_PASSWORD")?></span>
							</div>
							</span><br>
							<a href="/login/" class="hd_signup"><?=GetMessage("REGISTR_PASSWORD")?></a>

<?
//if($arResult["FORM_TYPE"] == "login")
else:
?>
<span class="hd_sing">
								<?=$arResult["USER_NAME"]?> [<a href="<?=$arResult["PROFILE_URL"]?>"><?=$arResult["USER_LOGIN"]?></a>]
							</span>
							<a href="?logout=yes" class="hd_signup"><?=GetMessage("OUT_PASSWORD")?></a>	
							<br>
							&nbsp;&nbsp;&nbsp;	
<?endif?>