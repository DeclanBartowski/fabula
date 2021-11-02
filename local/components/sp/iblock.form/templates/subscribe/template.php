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

<form action="" class="wow fadeInUp subscribeForm" data-signed='<?=$this->getComponent()->getSignedParameters()?>'>
    <input type="email" name="EMAIL" class="base-grid-aside__input page--input" placeholder="E-Mail" required>
    <button class="page--button base-grid-aside-button" type="submit">
        <span>Подписаться</span>
    </button>
    <div class="base-grid-aside__agreement">Нажимая кнопку «Подписаться» вы даёте согласие на обработку персональных данных</div>
</form>