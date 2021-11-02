<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;

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

<form action="" class="presentation-block-form" data-signed='<?=$this->getComponent()->getSignedParameters()?>'>
    <span class="presentation-block-form__title"><?=$arParams["FORM_NAME"]?></span>
    <span class="presentation-block-form__subtitle"><?=$arParams["DESC_NAME"]?></span>
    <input name="NAME" type="text" placeholder="<?=Loc::getMessage('NAME')?>" class="page--input presentation-block-form__input" required>
    <input name="PHONE" type="tel" placeholder="<?=Loc::getMessage('PHONE')?>" class="page--input presentation-block-form__input" required>
    <input name="EMAIL" type="email" placeholder="<?=Loc::getMessage('EMAIL')?>" class="page--input presentation-block-form__input" required>
    <button type="submit" class="page--button presentation-block-form-submit">
        <span><?=Loc::getMessage('SEND')?></span>
    </button>
    <a href="<?=$arParams['FILE']?>" class="openFile" target="_blank"></a>
</form>
