<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);?>
<form action="<?=$arResult["FORM_ACTION"]?>" class="wow fadeInUp">
    <input type="text"  name="q" class="base-grid-article__search page--input" value="<?=$_GET['q']?>" placeholder="Поиск по материалам">
    <input type="hidden" name="s" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>">
</form>

