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
<section class="container-block advantages">
    <div class="advantages__title wow fadeInUp">
        <?= $arParams['PARAMS_NAME'] ?>
        <span><?= $arParams['PARAMS_SUB_TITLE'] ?></span>
    </div>
    <div class="advantages__subtitle wow fadeInUp"><?= $arParams['PARAMS_TEXT'] ?></div>
    <div class="advantages-grid">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="advantages-grid-elem wow fadeInUp" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="advantages-grid-elem__image">
                <? endif; ?>
                <span class="advantages-grid-elem__title"><?= $arItem['~NAME'] ?></span>
                <span class="advantages-grid-elem__text"><?= $arItem['PREVIEW_TEXT'] ?>
				</span>
            </div>
        <? endforeach; ?>
    </div>
</section>


