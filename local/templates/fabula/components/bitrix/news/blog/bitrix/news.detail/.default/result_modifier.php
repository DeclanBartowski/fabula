<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

global $APPLICATION;
$cp = $this->__component;
if (is_object($cp)) {
    $cp->arResult['LINKED_POST'] = $arResult['PROPERTIES']['LIKE']['VALUE'];
    $cp->SetResultCacheKeys(array('LINKED_POST'));
}