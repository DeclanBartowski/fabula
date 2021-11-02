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

<section class="container-block subscription">
    <div class="subscription-block">
        <form action="" class="subscription-block-form wow fadeInUp subscribeForm" data-signed='<?=$this->getComponent()->getSignedParameters()?>'>
            <input type="email" class="subscription-block-form__input page--input" placeholder="E-Mail" name="EMAIL" required>
            <button type="submit" class="page--button subscription-block-form__button">
                <span>Подписаться на статьи</span>
            </button>
        </form>
        <div class="subscription-block__agreement wow fadeInUp">Нажимая кнопку «Подписаться» вы даёте согласие на обработку
            персональных данных</div>
    </div>
</section>
