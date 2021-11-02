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

<section class="container-block materials">
    <div class="materials__useful wow fadeInUp"><?= $arParams['PARAMS_NAME'] ?></div>
    <div class="materials__title wow fadeInUp"><?= $arParams['PARAMS_SUB_TITLE'] ?></div>
    <div class="materials__subtitle wow fadeInUp"><?= $arParams['PARAMS_TEXT'] ?></div>
    <div class="materials-temes">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="materials-temes-topic wow fadeInUp" id="<?= $this->GetEditAreaId($arItem['ID']); ?>" onclick="location.href='<?=$arItem['DETAIL_PAGE_URL']?>'">
            <?if(!empty($arItem['PREVIEW_PICTURE']['SRC'])):?>
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" class="materials-temes-topic__image">
            <?endif;?>
            <span class="materials-temes-topic__text"><?=$arItem['NAME']?></span>
        </div>
        <? endforeach; ?>
    </div>
    <div class=" wow fadeInUp materials-botton"  onclick="location.href='<?=$arResult['LIST_PAGE_URL']?>'">
        <button class="page--button">
            <span>Вернуться к списку материалов</span>
        </button>
    </div>
</section>
