<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

global $APPLICATION;
$cp = $this->__component;
if (is_object($cp)) {
    $news = array_filter(array_column($arResult['ITEMS'], 'ID'));
    $cp->arResult['NEWS'] = $news;
    $cp->SetResultCacheKeys(array('NEWS'));
}