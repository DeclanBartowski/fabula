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
$keyClasses = [
    'philosophy-grid-elem wow fadeInUp',
    'philosophy-grid-elem wow fadeInUp',
    'philosophy-grid-elem wow fadeInUp',
    'philosophy-grid-elem philosophy-grid-elem-big',
    'philosophy-grid-elem philosophy-grid-elem-big'
]
?>
<section class="container-block philosophy">
    <div class="philosophy__title wow fadeInUp"><?= $arParams['PARAMS_NAME'] ?>
        <span><?= $arParams['PARAMS_SUB_TITLE'] ?></span></div>
    <div class="philosophy-grid">
        <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="<?= $keyClasses[$key] ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="philosophy-grid-elem__image">
                <? endif; ?>
                <div class="philosophy-grid-elem__title"><?= $arItem['~NAME'] ?></div>
                <div class="philosophy-grid-elem__text"><?= $arItem['PREVIEW_TEXT'] ?>
                </div>
            </div>

        <? endforeach; ?>
    </div>
</section>
