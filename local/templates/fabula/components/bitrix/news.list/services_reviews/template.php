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

<section class="container-block partners">
    <div class="partners__title wow fadeInUp"><?= $arParams['PARAMS_NAME'] ?>
        <span><?= $arParams['PARAMS_SUB_TITLE'] ?></span></div>
    <div class="partners__subtitle wow fadeInUp"><?= $arParams['PARAMS_TEXT'] ?></div>
    <div class="partners-slider wow fadeInUp">
        <div class="image-slider swiper-container">
            <div class="image-slider__wrapper swiper-wrapper">
                <? foreach ($arResult["ITEMS"] as $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div class="image-slider__slide swiper-slide">
                        <div class="revievs-client partners-slider-revievs"
                             id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="revievs-client__foto">
                            <? endif; ?>
                            <div class="revievs-client-info">
                                <p class="revievs-client-info__paragraph"><?= $arItem['DETAIL_TEXT'] ?></p>
                                <span class="revievs-client-info__title"><?= $arItem['NAME'] ?></span>
                                <span class="revievs-client-info__subtitle"><?= $arItem['PREVIEW_TEXT'] ?></span>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
