<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?if(!empty($arResult['PREVIEW_PICTURE'])):?>
<a href="<?=$arResult['CODE']?>" class="base-grid-aside-banner wow fadeInUp">
    <img src="<?=CFile::GetPath($arResult['PREVIEW_PICTURE'])?>" class="base-grid-aside-banner__image">
</a>
<?endif;?>