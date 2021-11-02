<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$params = [
    'history-container-elem wow fadeInUp',
    'history-container-elem history-container-elem-ml wow fadeInUp',
    'history-container-elem history-container-elem-ml wow fadeInUp',
    'history-container-elem wow fadeInUp'
];
?>
<section class="container-block history">
    <div class="history__title wow fadeInUp"><?= $arParams['PARAMS_NAME'] ?><span><?= $arParams['PARAMS_SUB_TITLE'] ?></span></div>
    <div class="history-container">
        <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="<?= $params[$key] ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <div class="history-container-elem__title"><?= $arItem['NAME'] ?></div>
                <div class="history-container-elem__text"><?= $arItem['PREVIEW_TEXT'] ?></div>
                <div class="history-container-elem-image">
                    <div class="history-container-elem-image-line line-<?= ++$key ?>">
                        <div class="history-container-elem-image-line__boll"></div>
                    </div>
                    <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                        <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="history-container-elem-image__icon">
                    <? endif ?>
                </div>
            </div>
        <? endforeach; ?>
        <? if (!empty($arResult['PICTURE'])): ?>
            <img src="<?= CFile::GetPath($arResult['PICTURE']) ?>" class="history-container__logo">
        <? endif; ?>
    </div>
</section>
