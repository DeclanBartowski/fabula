<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
use \Bitrix\Main\Loader;
use \Bitrix\Iblock\ElementTable;

class PopularNewsComponent extends \CBitrixComponent
{
    public function executeComponent()
    {
       Loader::includeModule('iblock');
        $this->getPopularNews();
        $this->includeComponentTemplate();
    }

    private function getPopularNews()
    {

        $arSelect = Array("ID", "NAME",'PROPERTY_POPULAR_TITLE', 'PROPERTY_POPULAR_IMG', 'PREVIEW_PICTURE', 'DETAIL_PAGE_URL', 'IBLOCK_ID');
        $arFilter = Array("IBLOCK_ID"=> 18, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", '!PROPERTY_POPULAR' => false);
        $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
        while($ob = $res->GetNext())
        {
            $picID = (!empty($ob['PROPERTY_POPULAR_IMG_VALUE'])) ? $ob['PROPERTY_POPULAR_IMG_VALUE'] : $ob['PREVIEW_PICTURE'];
            $this->arResult['NAME'] = (!empty($ob['PROPERTY_POPULAR_TITLE_VALUE'])) ? $ob['PROPERTY_POPULAR_TITLE_VALUE'] : $ob['NAME'];
            $this->arResult['URL'] = $ob['DETAIL_PAGE_URL'];
            if(!empty($picID)) {
                $this->arResult['IMG'] = CFile::GetPath($picID);
            }
        }


    }
}
