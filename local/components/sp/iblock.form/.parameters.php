<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arComponentParameters = array(
	"PARAMETERS" => array(
		"IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => Loc::getMessage("IBLOCK_ID_TITLE"),
			"TYPE" => "STRING",
		),
        "EMAIL_ID" => array(
            "PARENT" => "BASE",
            "NAME" => Loc::getMessage("EMAIL_ID_TITLE"),
            "TYPE" => "STRING",
        ),
	),
);