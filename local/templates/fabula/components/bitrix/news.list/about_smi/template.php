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
<?if($arResult['ITEMS']){?>
    <section class="container-block article">
        <div class="article__title wow fadeInUp"><?= $arParams['PARAMS_NAME'] ?>
            <span><?= $arParams['PARAMS_SUB_TITLE'] ?></span></div>
        <div class="article__subtitle wow fadeInUp"><?= $arParams['PARAMS_TEXT'] ?></div>
        <div class="article-grid">
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                    array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                $name = (!empty($arItem['PROPERTIES']['TITLE_SMI']['VALUE'])) ? $arItem['PROPERTIES']['TITLE_SMI']['VALUE'] : $arItem['NAME'];
                $picture = (!empty($arItem['PROPERTIES']['FILE']['VALUE'])) ? CFile::GetPath($arItem['PROPERTIES']['FILE']['VALUE']) : $arItem['PREVIEW_PICTURE']['SRC'];
                $subTitle = ($arItem['PROPERTIES']['SUB_TITLE_SMI']['VALUE'])?:$arItem['PREVIEW_TEXT'];
                $url = $arItem['PROPERTIES']['LINK']['VALUE'];
                ?>
                <div class="article-grid-elem wow fadeInUp" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <? if (!empty($picture)): ?>
                        <img src="<?= $picture ?>" class="article-grid-elem__image">
                    <? endif; ?>
                    <div class="article-grid-elem-block">
                        <div class="article-grid-elem-block__text">
                            <?= $name ?>
                            <? if (!empty($subTitle)): ?>
                                <br>
                                <span><?= $subTitle ?></span>
                            <? endif; ?>
                        </div>
                        <? if ($url) { ?>
                            <button class="page--button article-grid-elem-block-button"
                                    onclick="location.href='<?= $url ?>'">
                                <span><?= \Bitrix\Main\Localization\Loc::getMessage('DETAIL_BTN') ?></span>
                            </button>
                        <? } ?>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </section>
<?}?>