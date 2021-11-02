<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
	"PARAMS_NAME" => Array(
		"NAME" => GetMessage("PARAMS_NAME"),
		"TYPE" => "STRING",
	),
    "PARAMS_SUB_TITLE" => Array(
        "NAME" => GetMessage("PARAMS_SUB_TITLE"),
        "TYPE" => "STRING",
    ),
    "FORM_NAME" => Array(
        "NAME" => GetMessage("FORM_NAME"),
        "TYPE" => "STRING",
    ),
    "DESC_NAME" => Array(
        "NAME" => GetMessage("DESC_NAME"),
        "TYPE" => "STRING",
    ),
    "FILE" => Array(
        "NAME" => GetMessage("FILE"),
        "TYPE" => "FILE",
        "FD_TARGET" => "F",
        "FD_EXT" => '*',
        "FD_UPLOAD" => true,
        "FD_USE_MEDIALIB" => true,
        "FD_MEDIALIB_TYPES" => Array('video', 'sound')
    ),
    "FILE_BACKGROUND" => Array(
        "NAME" => GetMessage("FILE_BACKGROUND"),
        "TYPE" => "FILE",
        "FD_TARGET" => "F",
        "FD_EXT" => '*',
        "FD_UPLOAD" => true,
        "FD_USE_MEDIALIB" => true,
        "FD_MEDIALIB_TYPES" => Array('video', 'sound')
    ),
);



?>
