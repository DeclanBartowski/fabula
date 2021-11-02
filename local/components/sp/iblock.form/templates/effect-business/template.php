<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

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
<section class="container-block effect-business">
    <div class="effect-business-fon">
        <img src="<?= SITE_TEMPLATE_PATH ?>/img/highlights_7231.png">
        <img src="<?= SITE_TEMPLATE_PATH ?>/img/__7228.png">
        <img src="<?= SITE_TEMPLATE_PATH ?>/img/__7228.png">
    </div>
    <div class="effect-business__title wow fadeInUp">
        <span><?= $arParams['PARAMS_NAME'] ?></span> <?= $arParams['PARAMS_SUB_TITLE'] ?>
    </div>
    <form action="" class="effect-business-form wow fadeInUp"
          data-signed='<?= $this->getComponent()->getSignedParameters() ?>'>
        <div class="effect-business-form__title"><?= $arParams['FORM_NAME'] ?>
        </div>
        <div class="effect-business-form__subtitle"><?= $arParams['DESC_NAME'] ?></div>
        <div class="effect-business-form-grid">
            <input type="tel" class="effect-business-form-grid__input page--input" name=PHONE
                   placeholder="<?= Loc::getMessage('PHONE') ?>" required>
            <input type="email" class="effect-business-form-grid__input page--input" name="EMAIL"
                   placeholder="<?= Loc::getMessage('EMAIL') ?>" required>
            <button type="submit" class="page--button effect-business-form-grid-button">
                <span><?= Loc::getMessage('SEND_REGALEMENT') ?></span>
            </button>
        </div>
        <div class="effect-business-form__perdan">
            <?= Loc::getMessage('PERSONAL_TITLE') ?> <span><?= Loc::getMessage('PERSONAL_BOLD') ?></span></div>
        <a href="<?= $arParams['FILE'] ?>" class="openFile" target="_blank"></a>
    </form>
</section>


