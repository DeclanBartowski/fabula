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
$bxajaxid = CAjax::GetComponentID($component->__name, $component->__template->__name,
    $component->arParams['AJAX_OPTION_ADDITIONAL']);
$arraysNews = array_chunk($arResult['ITEMS'], 4);

?>

<?php

if ($arResult["NAV_RESULT"]->NavPageNomer == 1):
    ?>
    <section class="container-block base">
        <div class="base__title wow fadeInUp">База знаний</div>
        <div class="base-grid">
            <article class="base-grid-article">
                <div class="base-grid-article__title wow fadeInUp">Материалы о бизнесе и систематизации</div>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:search.form",
                        "flat",
                        array(
                            "PAGE" => '/blog/search/'
                        ),
                        false
                    ); ?>


                <? foreach ($arraysNews[0] as $key => $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>

                    <? if ($key == 0): ?>
                        <div class="base-grid-article-info wow fadeInUp"
                             id="<?= $this->GetEditAreaId($arItem['ID']); ?>"
                             onclick="location.href='<?= $arItem['DETAIL_PAGE_URL'] ?>'">
                            <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                                     class="base-grid-article-info__image">
                            <? endif; ?>
                            <span class="base-grid-article-info__text"><?= $arItem['~NAME'] ?></span>
                        </div>
                    <? else: ?>
                        <div class="base-grid-article-page  wow fadeInUp"
                             id="<?= $this->GetEditAreaId($arItem['ID']); ?>"
                             onclick="location.href='<?= $arItem['DETAIL_PAGE_URL'] ?>'">
                            <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                                <div class="base-grid-article-page-image">
                                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>">
                                </div>
                            <? endif; ?>
                            <div class="base-grid-article-page-info">
                                <div class="base-grid-article-page-info__date"><?= $arItem ["DISPLAY_ACTIVE_FROM"] ?></div>
                                <div class="base-grid-article-page-info__text"><?= $arItem['~NAME'] ?></div>

                                <div class="base-grid-article-page-info-image">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/ellips_1_30775.png">
                                    <span>Александр Миронов</span>
                                </div>

                            </div>
                        </div>

                    <? endif; ?>


                <? endforeach; ?>


            </article>
            <aside class="base-grid-aside">
                <? $APPLICATION->IncludeComponent(
                    "sp:iblock.form",
                    "subscribe",
                    array(
                        "IBLOCK_ID" => "20",
                        "EMAIL_ID" => "14",
                    ),
                    false
                ); ?>

                <? $APPLICATION->IncludeComponent(
                    "sp:banner",
                    "",
                    [],
                    false
                ); ?>

                <? $APPLICATION->IncludeComponent(
                    "sp:popular.news",
                    "",
                    [],
                    false
                ); ?>


            </aside>
        </div>
    </section>

    <? $APPLICATION->IncludeComponent(
    "sp:iblock.form",
    "subscribe-news",
    array(
        "IBLOCK_ID" => "20",
        "EMAIL_ID" => "14",
    ),
    false
); ?>


    <section class="container-block base">
        <div class="base-grid">
            <article class="base-grid-article">
                <? foreach ($arraysNews[1] as $key => $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <? if ($key == 3): ?>
                        <div class="base-grid-article-info wow fadeInUp"
                             id="<?= $this->GetEditAreaId($arItem['ID']); ?>"
                             onclick="location.href='<?= $arItem['DETAIL_PAGE_URL'] ?>'">
                            <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                                     class="base-grid-article-info__image">
                            <? endif; ?>
                            <span class="base-grid-article-info__text"><?= $arItem['~NAME'] ?></span>
                        </div>
                    <? else: ?>
                        <div class="base-grid-article-page  wow fadeInUp"
                             id="<?= $this->GetEditAreaId($arItem['ID']); ?>"
                             onclick="location.href='<?= $arItem['DETAIL_PAGE_URL'] ?>'">
                            <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                                <div class="base-grid-article-page-image">
                                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>">
                                </div>
                            <? endif; ?>
                            <div class="base-grid-article-page-info">
                                <div class="base-grid-article-page-info__date"><?= $arItem ["DISPLAY_ACTIVE_FROM"] ?></div>
                                <div class="base-grid-article-page-info__text"><?= $arItem['~NAME'] ?></div>

                                <div class="base-grid-article-page-info-image">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/ellips_1_30775.png">
                                    <span>Александр Миронов</span>
                                </div>

                            </div>
                        </div>

                    <? endif; ?>
                <? endforeach; ?>

                <? if ($arResult["NAV_RESULT"]->nEndPage > 1 && $arResult["NAV_RESULT"]->NavPageNomer < $arResult["NAV_RESULT"]->nEndPage): ?>
                    <div class="container-block paginate contentPageMoreNews">
                        <button
                                data-ajax-id="<?= $bxajaxid ?>"
                                data-show-more-news="<?= $arResult["NAV_RESULT"]->NavNum ?>"
                                data-next-page="<?= ($arResult["NAV_RESULT"]->NavPageNomer + 1) ?>"
                                data-max-page="<?= $arResult["NAV_RESULT"]->nEndPage ?>"
                                class="page--button base-grid-article__button mrgMoreBtn">
                            <span>Показать больше материалов</span>
                        </button>
                    </div>

                <? endif ?>

            </article>
        </div>
    </section>

<?php
else:
    ?>
    <? $APPLICATION->IncludeComponent(
    "sp:iblock.form",
    "subscribe-news",
    array(
        "IBLOCK_ID" => "20",
        "EMAIL_ID" => "14",
    ),
    false
); ?>
    <section class="container-block base">
        <div class="base-grid">
            <article class="base-grid-article">
                <? foreach ($arResult['ITEMS'] as $key => $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>

                    <? if ($key == 0 || $key == 5): ?>
                        <div class="base-grid-article-info wow fadeInUp"
                             id="<?= $this->GetEditAreaId($arItem['ID']); ?>"
                             onclick="location.href='<?= $arItem['DETAIL_PAGE_URL'] ?>'">
                            <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                                     class="base-grid-article-info__image">
                            <? endif; ?>
                            <span class="base-grid-article-info__text"><?= $arItem['~NAME'] ?></span>
                        </div>
                    <? else: ?>
                        <div class="base-grid-article-page  wow fadeInUp"
                             id="<?= $this->GetEditAreaId($arItem['ID']); ?>"
                             onclick="location.href='<?= $arItem['DETAIL_PAGE_URL'] ?>'">
                            <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                                <div class="base-grid-article-page-image">
                                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>">
                                </div>
                            <? endif; ?>
                            <div class="base-grid-article-page-info">
                                <div class="base-grid-article-page-info__date"><?= $arItem ["DISPLAY_ACTIVE_FROM"] ?></div>
                                <div class="base-grid-article-page-info__text"><?= $arItem['~NAME'] ?></div>

                                <div class="base-grid-article-page-info-image">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/ellips_1_30775.png">
                                    <span>Александр Миронов</span>
                                </div>

                            </div>
                        </div>

                    <? endif; ?>

                <? endforeach; ?>
                <? if ($arResult["NAV_RESULT"]->nEndPage > 1 && $arResult["NAV_RESULT"]->NavPageNomer < $arResult["NAV_RESULT"]->nEndPage): ?>
                    <div class="container-block paginate contentPageMoreNews">
                        <button
                                data-ajax-id="<?= $bxajaxid ?>"
                                data-show-more-news="<?= $arResult["NAV_RESULT"]->NavNum ?>"
                                data-next-page="<?= ($arResult["NAV_RESULT"]->NavPageNomer + 1) ?>"
                                data-max-page="<?= $arResult["NAV_RESULT"]->nEndPage ?>"
                                class="page--button base-grid-article__button mrgMoreBtn">
                            <span>Показать больше материалов</span>
                        </button>
                    </div>

                <? endif ?>

            </article>
        </div>
    </section>

<?php
endif;
?>



