<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?if(!empty($arResult)):?>
    <a href="<?=$arResult['URL']?>" class="base-grid-aside-themes wow fadeInUp" >
        <div class="base-grid-aside-themes__title">Популярные темы:</div>
        <div class="base-grid-aside-themes__subtitle">Ещё больше наших материалов по этим темы</div>
        <?if(!empty($arResult['IMG'])):?>
            <img src="<?=$arResult['IMG']?>" class="base-grid-aside-themes__image">
        <?endif;?>
        <div class="base-grid-aside-themes__text"><?=$arResult['NAME']?>
        </div>
    </a>
<?endif;?>