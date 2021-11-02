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
<section class="container-block pharmacy-chain">
    <? if (!empty($arResult['PREVIEW_PICTURE']['SRC'])): ?>
        <img src="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>" class="pharmacy-chain__fon">
    <? endif; ?>
    <a href="/" class="pharmacy-chain__link">
        <img src="<?= SITE_TEMPLATE_PATH ?>/img/next_11384.png"><?=Loc::getMessage('URL_MAIN')?>
    </a>
    <div class="pharmacy-chain-block">
        <div class="pharmacy-chain-block__title wow fadeInUp"><?= $arResult['NAME'] ?></div>
        <div class="pharmacy-chain-block__subtitle wow fadeInUp"><?= $arResult['PREVIEW_TEXT'] ?></div>
        <button class="page--button pharmacy-chain-block-button" data-show-modal>
            <span><?=Loc::getMessage('BTN_TEXT_MODAL')?></span>
        </button>
    </div>
</section>