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
$params = [
    'management-gid-elem wow fadeInUp',
    'management-gid-elem management-gid-elem-small wow fadeInUp',
    'management-gid-elem management-gid-elem-little wow fadeInUp',
    'management-gid-elem management-gid-elem-big wow fadeInUp',
    'management-gid-elem management-gid-elem-little wow fadeInUp'
];
?>
<section class="container-block management">
    <div class="management__title wow fadeInUp"><?= $arParams['PARAMS_NAME'] ?><br>
        <span><?= $arParams['PARAMS_SUB_TITLE'] ?></span>
    </div>
    <div class="management__subtitle wow fadeInUp"><?= $arParams['PARAMS_TEXT'] ?></div>
    <div class="management-gid">
        <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="<?= $params[$key] ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <div class="management-gid-elem__title"><?= $arItem['NAME'] ?>
                    <span><?= $arItem['PREVIEW_TEXT'] ?></span></div>
                <div class="management-gid-elem__text"><?= $arItem['DETAIL_TEXT'] ?></div>
            </div>
        <? endforeach; ?>
    </div>
</section>
