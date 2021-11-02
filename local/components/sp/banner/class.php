<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
use \Bitrix\Main\Loader;
use \Bitrix\Iblock\ElementTable;

class BannerComponent extends \CBitrixComponent
{
    public function executeComponent()
    {
       Loader::includeModule('iblock');
        $this->getBanner();
        $this->includeComponentTemplate();
    }

    private function getBanner()
    {
        $this->arResult = ElementTable::getList([
            'filter' => ['IBLOCK_ID' => 21, 'ACTIVE' => 'Y'],
            'select' => ['PREVIEW_PICTURE', 'CODE'],
            'limit' => 1
        ])->fetch();

    }
}
