<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$arSection = CIBlockSection::GetList([], [
    'IBLOCK_ID' => $arParams['IBLOCK_ID'],
    '=ID' => $arParams['PARENT_SECTION'],
], false, [
    'IBLOCK_ID',
    'ID',
    'NAME',
    'PICTURE',
    'UF_DATE',
    'UF_CITY',
]);
while ($arResultSection = $arSection->Fetch()) {
    $arResult['SECTION_INFO'] = [
        'NAME' => $arResultSection['NAME'],
        'CITY' => $arResultSection['UF_DATE'],
        'DATE' => $arResultSection['UF_CITY'],
    ];
    if (!empty($arResultSection['PICTURE'])) {
        $arResult['SECTION_INFO']['PICTURE'] = CFile::GetPath($arResultSection['PICTURE']);
    }
}

$arResult['DETAIL_TRAINING'] = \Bitrix\Iblock\ElementTable::getList([
    'filter' => [
        'CODE' => 'training',
        'IBLOCK_ID' => 5
    ],
    'select' => [
        'NAME',
        'PREVIEW_TEXT',
        'DETAIL_TEXT'
    ]
])->fetch();