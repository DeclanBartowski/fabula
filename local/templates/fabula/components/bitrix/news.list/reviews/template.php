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
$bxajaxid = CAjax::GetComponentID($component->__name, $component->__template->__name,
    $component->arParams['AJAX_OPTION_ADDITIONAL']);
?>

<section class="container-block revievs">
    <div class="revievs__title wow fadeInUp"><?= $arParams['PARAMS_NAME'] ?>
        <span><?= $arParams['PARAMS_SUB_TITLE'] ?></span></div>
    <div class="revievs__subtitle wow fadeInUp"><?= $arParams['PARAMS_TEXT'] ?></div>
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="revievs-client wow fadeInUp contentMore" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="revievs-client__foto">
            <? endif; ?>
            <div class="revievs-client-info">
                <p class="revievs-client-info__paragraph"><?= $arItem['DETAIL_TEXT'] ?></p>
                <span class="revievs-client-info__title"><?= $arItem['NAME'] ?></span>
                <span class="revievs-client-info__subtitle"><?= $arItem['PREVIEW_TEXT'] ?></span>
            </div>
        </div>
    <? endforeach; ?>

    <? if ($arResult["NAV_RESULT"]->nEndPage > 1 && $arResult["NAV_RESULT"]->NavPageNomer < $arResult["NAV_RESULT"]->nEndPage): ?>
        <div class="container-block paginate contentPageMore" id="btn_<?= $bxajaxid ?>">
            <button
                    data-ajax-id="<?= $bxajaxid ?>"
                    data-show-more="<?= $arResult["NAV_RESULT"]->NavNum ?>"
                    data-next-page="<?= ($arResult["NAV_RESULT"]->NavPageNomer + 1) ?>"
                    data-max-page="<?= $arResult["NAV_RESULT"]->nEndPage ?>"
                    class="page--button base-grid-article__button mrgMoreBtn">
                <span><?=\Bitrix\Main\Localization\Loc::getMessage('MORE_BTN')?></span>
            </button>
        </div>
    <? endif ?>

</section>