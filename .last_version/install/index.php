<?
IncludeModuleLangFile(__FILE__);
Class citfact_edutemplate extends CModule
{
    const MODULE_ID = 'citfact.edutemplate';
    var $MODULE_ID = 'citfact.edutemplate';
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;
    var $strError = '';

    function __construct()
    {
        $arModuleVersion = array();
        include(dirname(__FILE__)."/version.php");
        $this->MODULE_VERSION = $arModuleVersion["VERSION"];
        $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        $this->MODULE_NAME = GetMessage("citfact.register_user_MODULE_NAME");
        $this->MODULE_DESCRIPTION = GetMessage("citfact.register_user_MODULE_DESC");

        $this->PARTNER_NAME = GetMessage("citfact.register_user_PARTNER_NAME");
        $this->PARTNER_URI = GetMessage("citfact.register_user_PARTNER_URI");
    }

    function InstallFiles()
    {
        if(CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/citfact.edutemplate/install/wizards", $_SERVER["DOCUMENT_ROOT"]."/bitrix/wizards", true, true))
            return true;
        if(CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/citfact.edutemplate/wizards", $_SERVER["DOCUMENT_ROOT"]."/bitrix/wizards", true, true))
            return true;
    }

    function UnInstallFiles()
    {
        if(DeleteDirFilesEx($_SERVER["DOCUMENT_ROOT"]."/bitrix/wizards/studiofact/custom"))
        return true;
    }

    function InstallDB()
    {
        return true;
    }

    function DoInstall()
    {
        global $APPLICATION;
        $this->InstallDB();
        $this->InstallFiles();
        RegisterModule(self::MODULE_ID);
    }

    function DoUninstall()
    {
        global $APPLICATION;
        UnRegisterModule(self::MODULE_ID);
        $this->UnInstallFiles();
    }
}
?>
