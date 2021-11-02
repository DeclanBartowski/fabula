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
?>
<section class="container-block our-work">
    <div class="our-work__title wow fadeInUp"><?= $arParams['PARAMS_SUB_TITLE'] ?>
        <span><?= $arParams['PARAMS_NAME'] ?></span></div>
    <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="our-work-container wow fadeInUp" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="our-work-container__int">
                <?= str_pad(++$key, 2, '0', STR_PAD_LEFT); ?>
            </div>
            <div class="our-work-container-block">
                <div class="our-work-container-block__title"><?= $arItem['NAME'] ?></div>
                <div class="our-work-container-block__text"><?= $arItem['PREVIEW_TEXT'] ?></div>
                <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="our-work-container-block__image">
                <? endif; ?>
            </div>
        </div>
    <? endforeach; ?>
</section>

