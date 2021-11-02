<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\Localization\Loc;

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
<section class="container-block our-task">
    <? if (!empty($arResult['PREVIEW_PICTURE']['SRC'])): ?>
        <img src="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>" class="our-task__fon">
    <? endif; ?>
    <div class="our-task-block">
        <div class="our-task-block__title wow fadeInUp"><?= $arResult['NAME'] ?></div>
        <div class="our-task-block__subtitle wow fadeInUp"><?= $arResult['PREVIEW_TEXT'] ?></div>
        <div class="wow fadeInUp">
            <button class="page--button our-task-block-button ">
                <span><?= Loc::getMessage('BTN_MODAL') ?></span>
            </button>
        </div>
        <a href="javascript:void(0);" class="our-task-block__link">&darr;</a>
    </div>
</section>
