<?
require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/install/wizard_sol/wizard.php");

class SelectSiteStep extends CSelectSiteWizardStep
{
	function InitStep()
	{
		parent::InitStep();

		$wizard =& $this->GetWizard();
		$wizard->solutionName = "custom";
	}
}

	
class SelectTemplateStep extends CSelectTemplateWizardStep
{
	function InitStep()
	{
		$this->SetStepID("select_template");
		$this->SetTitle(GetMessage("SELECT_TEMPLATE_TITLE"));
		$this->SetSubTitle(GetMessage("SELECT_TEMPLATE_SUBTITLE"));
		if (!defined("WIZARD_DEFAULT_SITE_ID"))
		{
			$this->SetPrevStep("select_site");
			$this->SetPrevCaption(GetMessage("PREVIOUS_BUTTON"));
		}
		else
		{
			$wizard =& $this->GetWizard(); 
			$wizard->SetVar("siteID", WIZARD_DEFAULT_SITE_ID); 
		}

		$this->SetNextStep("site_settings");
		$this->SetNextCaption(GetMessage("NEXT_BUTTON"));
	}
}


class SiteSettingsStep extends CSiteSettingsWizardStep
{
	function InitStep()
	{
		$wizard =& $this->GetWizard();
		$wizard->solutionName = "testtemplate";
		parent::InitStep();

		$templateID = $wizard->GetVar("templateID");
		$themeID = $wizard->GetVar($templateID."_themeID");

		$siteLogo = $this->GetFileContentImgSrc(WIZARD_SITE_PATH."include/company_name.php", "/bitrix/wizards/studiofact/custom/site/templates/testtemplate/themes/".$themeID."/lang/".LANGUAGE_ID."/logo.gif");
		
		$wizard->SetDefaultVars(
			Array(
				"siteLogo" => $siteLogo,
				"siteSlogan" => $this->GetFileContent(WIZARD_SITE_PATH."include/company_slogan.php", GetMessage("WIZ_COMPANY_SLOGAN_DEF")),
				"siteCopy" => $this->GetFileContent(WIZARD_SITE_PATH."include/copyright.php", GetMessage("WIZ_COMPANY_COPY_DEF")),
			)
		);	
	}

	function ShowStep()
	{
		$wizard =& $this->GetWizard();
				
		$siteLogo = $wizard->GetVar("siteLogo", true);

		$this->content .= '<table width="100%" cellspacing="0" cellpadding="0">';
		$this->content .= '<tr><td>';
		$this->content .= '<label for="site-logo">'.GetMessage("WIZ_COMPANY_LOGO").'</label><br />';
		$this->content .= CFile::ShowImage($siteLogo, 209, 61, "border=0 vspace=15");
		$this->content .= "<br />".$this->ShowFileField("siteLogo", Array("show_file_info" => "N", "id" => "site-logo"));
		$this->content .= '</tr></td>';

		$this->content .= '<tr><td><br /><br /><br /></td></tr>';
		

		
		$this->content .= '<tr><td>';
		$this->content .= '<label for="site-slogan">'.GetMessage("WIZ_COMPANY_SLOGAN").'</label><br />';
		$this->content .= $this->ShowInputField("textarea", "siteSlogan", Array("id" => "site-slogan", "style" => "width:100%", "rows"=>"3"));
		$this->content .= '</tr></td>';

		$this->content .= '<tr><td><br /></td></tr>';

		
		$this->content .= '<tr><td>';
		$this->content .= '<label for="site-copy">'.GetMessage("WIZ_COMPANY_COPY").'</label><br />';
		$this->content .= $this->ShowInputField("textarea", "siteCopy", Array("id" => "site-copy", "style" => "width:100%", "rows"=>"3"));
		$this->content .= '</tr></td>';

		$this->content .= '<tr><td><br /></td></tr>';


		
		$this->content .= '<tr><td style="padding-bottom:3px;">';
		$this->content .= $this->ShowCheckboxField("installDemoData", "Y", 
			(array("id" => "install-demo-data") + ($_SERVER["PHP_SELF"] == "/index.php" && empty($siteLogo) ? array() : array("checked" => false))));
		$this->content .= '<label for="install-demo-data">'.GetMessage("wiz_structure_data").'</label><br />';
		$this->content .= '</td></tr>';
		
		$this->content .= '<tr><td>&nbsp;</td></tr>';
		
		$this->content .= '</table>';

		$formName = $wizard->GetFormName();
		$installCaption = $this->GetNextCaption();
		$nextCaption = GetMessage("NEXT_BUTTON");
	}

	function OnPostForm()
	{
		$wizard =& $this->GetWizard();
		$res = $this->SaveFile("siteLogo", Array("extensions" => "gif,jpg,jpeg,png", "max_height" => 210, "max_width" => 60, "make_preview" => "Y"));
//		COption::SetOptionString("main", "wizard_site_logo", $res, "", $wizard->GetVar("siteID")); 
	}
}

class DataInstallStep extends CDataInstallWizardStep
{
	function CorrectServices(&$arServices)
	{
		$wizard =& $this->GetWizard();
		if($wizard->GetVar("installDemoData") != "Y")
		{
		}
	}
}

class FinishStep extends CFinishWizardStep
{
}
?>