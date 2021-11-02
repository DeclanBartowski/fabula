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
<section class="container-block complex">
    <? if (!empty($arResult['PICTURE'])): ?>
        <img src="<?= CFile::GetPath($arResult['PICTURE']) ?>" class="complex__fon">
    <? endif; ?>
    <div class="complex-slider">
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
                    <div class="image-slider__slide swiper-slide wow fadeInUp"
                         id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                        <div class="image-slider__image">
                            <div class="complex-slider__title ">
                                <?= $arItem['NAME'] ?><br>
                                <span><?= $arItem['PREVIEW_TEXT'] ?></span>
                            </div>
                            <button class="page--button complex-slider-button" data-show-modal>
                                <span><?= Loc::getMessage('COMPLEX_RESOLVE_MODAL') ?></span>
                            </button>
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