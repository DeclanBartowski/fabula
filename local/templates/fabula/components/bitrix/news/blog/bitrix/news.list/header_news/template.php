<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
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
<? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <? if ($key == 0): ?>
        <div class="base-grid-article-info wow fadeInUp" id="<?= $this->GetEditAreaId($arItem['ID']); ?>" onclick="location.href='<?=$arItem['DETAIL_PAGE_URL']?>'">
            <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="base-grid-article-info__image">
            <? endif; ?>
            <span class="base-grid-article-info__text"><?= $arItem['~NAME'] ?></span>
        </div>
    <? else: ?>
        <div class="base-grid-article-page  wow fadeInUp" id="<?= $this->GetEditAreaId($arItem['ID']); ?>" onclick="location.href='<?=$arItem['DETAIL_PAGE_URL']?>'">
            <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                <div class="base-grid-article-page-image">
                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>">
                </div>
            <? endif; ?>
            <div class="base-grid-article-page-info">
                <div class="base-grid-article-page-info__date"><?= $arItem ["DISPLAY_ACTIVE_FROM"] ?></div>
                <div class="base-grid-article-page-info__text"><?= $arItem['~NAME'] ?></div>

                <div class="base-grid-article-page-info-image">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/ellips_1_30775.png">
                    <span>Александр Миронов</span>
                </div>

            </div>
        </div>

    <? endif; ?>


<? endforeach; ?>
