<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Config\Option;
use Bitrix\Main\Page\Asset;

?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <?php
    $APPLICATION->ShowHead();
    Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/fonts/stylesheet.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/source/animate.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/source/jquery.fancybox.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/source/jquery.fancybox.custom.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/swiper.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/frontend-style.css');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/source/jquery-3.5.0.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/source/jquery.fancybox.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/source/jquery.fancybox.custom.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/source/wow.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/mobile-modal.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/swiper.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/slider.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/custom.js');
    if ($USER->isAdmin()) {
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/file-dialog.css');
    }
    ?>
</head>
<body>
<?php
$APPLICATION->ShowPanel();
?>

<!-- Шапка докумета -->
<header class="container-block header animated fadeInDown">
    <a href="/">
        <img src="<?= SITE_TEMPLATE_PATH ?><?= Option::get('sp.tools', 'tq_module_param_obshchie_nastroyki_logo') ?>"
             class="header__logo">
    </a>

    <? $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "menu",
        array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(0 => "",),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "N",
            'CLASS_MENU' => 'header-nav',
            'CLASS_ITEM' => 'header-nav__item',
        )
    ); ?>

    <div class="header-link">
        <a href="tel:<?= Option::get('sp.tools', 'tq_module_param_obshchie_nastroyki_phone_call') ?>"
           class="header-link__tel">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/phone-icon.png"><?= Option::get('sp.tools',
                'tq_module_param_obshchie_nastroyki_phone') ?>
        </a>
        <a href="mailto:<?= Option::get('sp.tools', 'tq_module_param_obshchie_nastroyki_email') ?>"
           class="header-link__mail"><?= Option::get('sp.tools', 'tq_module_param_obshchie_nastroyki_email') ?></a>
    </div>
    <div class="header-burger">
        <span id="burger">&#9776;</span>
    </div>
</header>

<!-- Мобильное меню -->
<div class="mobile-modal">
    <header class="mobile-modal-head">
        <a href="/"><img src="<?= SITE_TEMPLATE_PATH ?><?= Option::get('sp.tools',
                'tq_module_param_obshchie_nastroyki_logo') ?>" class="mobile-modal-head__logo"></a>
        <a href="tel:<?= Option::get('sp.tools', 'tq_module_param_obshchie_nastroyki_phone_call') ?>"
           class="mobile-modal-head__tel">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/phone-icon.png"><?= Option::get('sp.tools',
                'tq_module_param_obshchie_nastroyki_phone') ?>
        </a>
        <span class="mobile-modal-head__exit" id="exit">&#10006;</span>
    </header>

    <? $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "menu",
        array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(0 => "",),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "N",
            'CLASS_MENU' => 'mobile-modal-nav',
            'CLASS_ITEM' => 'mobile-modal-nav__item',
        )
    ); ?>
    <? $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "social",
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "COMPONENT_TEMPLATE" => "director_info",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(0 => "", 1 => "",),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "16",
            "IBLOCK_TYPE" => "content",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "N",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "20",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(0 => "LINK", 1 => "SVG",),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "SORT",
            "SORT_BY2" => "ID",
            "SORT_ORDER1" => "ASC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N"
        )
    ); ?>
</div>
