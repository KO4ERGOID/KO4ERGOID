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
$this->setFrameMode(true); ?>

<!DOCTYPE html>
<html lang="ru">
<head><title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/favicon.604825ed.ico" type="image/x-icon">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div id="barba-wrapper">
<div class="article-list">
<?php if (!empty($arResult['ITEMS'])): ?>
            <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                
                    <?php if (!empty($arItem['PREVIEW_PICTURE']['SRC']) && !empty($arItem['NAME']) && !empty($arItem['PREVIEW_TEXT'])): ?>
                        <a class="article-item article-list__item" href="#" data-anim="anim-3">
                        <div class="article-item__background"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt=""/></div>
                        <div class="article-item__wrapper">
                        <div class="article-item__title"><?=$arItem['NAME']?></div>
                        <div class="article-item__content"><?=$arItem['PREVIEW_TEXT']?></div>
                        </div> </a>
                        
                    <?php endif; ?>
                       


            <?php endforeach; ?>
        
            <?php endif; ?>
</div>
</div>
</body>
</html>



