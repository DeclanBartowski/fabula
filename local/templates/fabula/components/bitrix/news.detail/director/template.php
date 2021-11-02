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
<? if (!empty($arResult['PROPERTIES']['BACKGROUND']['VALUE'])): ?>
    <img src="<?= CFile::GetPath($arResult['PROPERTIES']['BACKGROUND']['VALUE']) ?>" class="general-fon">
<? endif; ?>
<div class="general-director">
    <? if (!empty($arResult['PREVIEW_PICTURE']['SRC'])): ?>
        <img src="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>" class="general-director__image">
    <? endif; ?>
    <button class="page--button general-director-button  wow fadeInUp">
        <span><?= $arResult['NAME'] ?></span>
    </button>
    <div class="general-director-fabula">
        <div class="general-director-fabula__text  wow fadeInUp"><?= $arResult['PREVIEW_TEXT'] ?>
        </div>
        <? if (!empty($arResult["DETAIL_PICTURE"]['SRC'])): ?>
            <div class="general-director-fabula__icon  wow fadeInUp">
                <img src="<?= $arResult["DETAIL_PICTURE"]['SRC'] ?>">
            </div>
        <? endif; ?>
    </div>
</div>
