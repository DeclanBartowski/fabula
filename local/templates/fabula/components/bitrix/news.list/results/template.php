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
<section class="container-block result">
    <div class="result__title wow fadeInUp">
        <span><?=$arParams['PARAMS_NAME']?></span> <?=$arParams['PARAMS_SUB_TITLE']?>
    </div>
    <div class="result__subtitle"><?=$arParams['PARAMS_TEXT']?></div>
    <div class="result-wrap">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
            <div class="result-wrap-block wow fadeInUp" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <div class="result-wrap-block__title"><?=$arItem['NAME']?></div>
                <div class="result-wrap-block__subtitle">
                    <span><?=$arItem['PROPERTIES']["SUB_TITLE_GREEN"]['VALUE']?></span><?=$arItem['PROPERTIES']["SUB_TITLE"]['VALUE']?>
                </div>
                <div class="result-wrap-block__text"><?=$arItem['PREVIEW_TEXT']?></div>
            </div>
        <?endforeach;?>

    </div>
</section>