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
<article class="base-grid-article">
    <div class="base-grid-article__title wow fadeInUp"><?= $arResult['~NAME'] ?></div>
    <div class="base-grid-article__subtitle wow fadeInUp"><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></div>
    <? if (!empty($arResult['DETAIL_PICTURE']['SRC'])): ?>
        <div class="base-grid-article-banner wow fadeInUp">
            <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" class="base-grid-article-banner__image">
            <? if (!empty($arResult['PROPERTIES']['DOP_INFO']['VALUE'])): ?>
                <div class="base-grid-article-banner-info">
                    <div class="base-grid-article-banner-info__title"><?= $arResult['PROPERTIES']['DOP_INFO']['VALUE'] ?></div>
                </div>
            <? endif; ?>
        </div>
    <? endif; ?>
    <div class="base-grid-article__paragraph wow fadeInUp">
        <?= $arResult['DETAIL_TEXT'] ?>
    </div>
    <? if (!empty($arResult['PROPERTIES']['BANNER']['VALUE'])): ?>
        <div class="base-grid-article-banner wow fadeInUp">
            <img src="<?= CFile::GetPath($arResult['PROPERTIES']['BANNER']['VALUE']) ?>"
                 class="base-grid-article-banner__image">
        </div>
    <? endif; ?>
    <? if (!empty($arResult['PROPERTIES']['HTML_DETAIL']['~VALUE']['TEXT'])): ?>
        <div class="base-grid-article__paragraph wow fadeInUp">
            <?= $arResult['PROPERTIES']['HTML_DETAIL']['~VALUE']['TEXT'] ?>
        </div>
    <? endif; ?>
    <div class="base-grid-article__subtitle base-grid-article-subtitle wow fadeInUp">
        <?= $arResult["DISPLAY_ACTIVE_FROM"] ?>
        <div class="base-grid-article-subtitle__icons a2a_kit">
            <a href="javascript:void(0)" class="a2a_button_vk"><img src="<?= SITE_TEMPLATE_PATH ?>/img/vk.svg"></a>
            <a href="javascript:void(0)" class="a2a_button_facebook"><img
                        src="<?= SITE_TEMPLATE_PATH ?>/img/fb.svg"></a>
            <a href="javascript:void(0)" class="a2a_button_telegram"><img
                        src="<?= SITE_TEMPLATE_PATH ?>/img/tg.svg"></a>
            <a href="javascript:void(0)" class="a2a_button_whatsapp"><img
                        src="<?= SITE_TEMPLATE_PATH ?>/img/wts.svg"></a>
        </div>
    </div>
</article>
