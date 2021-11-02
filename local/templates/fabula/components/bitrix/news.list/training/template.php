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
<section class="container-block training">
    <div class="training__title wow fadeInUp"><?= $arParams['PARAMS_NAME'] ?>
        <span><?= $arParams['PARAMS_SUB_TITLE'] ?></span></div>
    <div class="training-block">
        <div class="training-workshop wow fadeInUp">
            <div class="training-workshop__title">
                <?= $arResult['DETAIL_TRAINING']['NAME'] ?><br>
                <span><?= $arResult['DETAIL_TRAINING']['PREVIEW_TEXT'] ?></span>
            </div>
            <div class="training-workshop__subtitle"><?= $arResult['DETAIL_TRAINING']['DETAIL_TEXT'] ?></div>
            <div class="training-workshop-image">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/shadow_11998.png" class="training-workshop-image__shadow">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/macbook_laptop_12000.png"
                     class="training-workshop-image__laptop">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/macbook_screen__12001.png"
                     class="training-workshop-image__screen">
            </div>
        </div>
        <div class="training-development wow fadeInUp">
            <div class="training-development-title">
                <div class="training-development-title__text"><?= $arResult['SECTION_INFO']['NAME'] ?>
                </div>
            </div>
            <ul class="training-development-ul">
                <? foreach ($arResult['ITEMS'] as $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <li id="<?= $this->GetEditAreaId($arItem['ID']); ?>"><?= $arItem['NAME'] ?></li>
                <? endforeach; ?>
            </ul>
            <div class="training-development-calendar">
                <? if (!empty($arResult['SECTION_INFO']['PICTURE'])): ?>
                    <img src="<?= $arResult['SECTION_INFO']['PICTURE'] ?>"
                         class="training-development-calendar__image">
                <? endif; ?>
                <div class="training-development-calendar__text"><?= $arResult['SECTION_INFO']['DATE'] ?>
                    <br><span><?= $arResult['SECTION_INFO']['CITY'] ?></span></div>
            </div>
            <button class="page--button training-development-button" data-show-modal>
                <span><?= \Bitrix\Main\Localization\Loc::getMessage('DETAIL_BTN_FORM') ?></span>
            </button>
        </div>
    </div>
</section>

