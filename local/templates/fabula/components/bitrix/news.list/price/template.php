<?

use Bitrix\Main\Localization\Loc;

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
<section class="container-block price">
    <div class="price__title wow fadeInUp"><?= $arParams['PARAMS_NAME'] ?>
        <span><?= $arParams['PARAMS_SUB_TITLE'] ?></span></div>
    <div class="price-grid">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="price-grid-elem wow fadeInUp" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <div class="price-grid-elem-fon">
                    <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                        <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="price-grid-elem-fon__image">
                    <? endif; ?>
                    <div class="price-grid-elem-fon__title"><?= $arItem['NAME'] ?></div>
                </div>
                <div class="price-grid-elem-text">
                    <div class="price-grid-elem-text__title"><?= $arItem['PREVIEW_TEXT'] ?>
                        <span><?= $arItem['DETAIL_TEXT'] ?></span></div>
                    <button class="page--button price-grid-elem-text-button" data-show-modal>
                        <span><?= Loc::getMessage('BTN_MODAL_TEXT') ?></span>
                    </button>
                </div>
            </div>
        <? endforeach; ?>
    </div>
    <div class="price__individually wow fadeInUp"><?= Loc::getMessage('RULES_TEXT') ?></div>
</section>



