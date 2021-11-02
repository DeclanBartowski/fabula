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
<section class="container-block business">
    <div class="business__title  wow fadeInUp">
        <?= $arResult['NAME'] ?><br>
        <span><?= $arResult['DESCRIPTION'] ?></span>
    </div>
    <div class="business-grid">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="business-grid-elem  wow fadeInUp" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <div class="business-grid-elem__title"><?= $arItem['NAME'] ?></div>
                <div class="business-grid-elem__text">
                    <?= $arItem['PREVIEW_TEXT'] ?>
                </div>
                <button class="page--button business-grid-elem-button" data-show-modal>
                    <span><?= Loc::getMessage('BUSINESS_MODAL') ?></span>
                </button>
            </div>
        <? endforeach; ?>

    </div>
</section>
