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
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
<section class="news-area">
    <div class="news-active">
<?php foreach ($arResult['ITEMS'] as $arItem): ?>
	<div class="single-news">

	<?php if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
		<div class="new text-center">
			<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="Тут должна быть картинка">
			<?php endif; ?>
           
               
                <h3><?= isset($arItem['NAME']) ? $arItem['NAME']: ''; ?></h3>
				<?php if(!empty($arItem['DETAIL_TEXT']) && !empty($arItem['PROPERTIES']['YEAR']['VALUE'])): ?>
					<?=$arItem['PROPERTIES']['YEAR']['NAME']?>
					<?=$arItem['PROPERTIES']['YEAR']['VALUE']?> <br>
				<?php endif; ?>

			
<a class="my-button" href="<?= $arItem['LINK']; ?>">Подробнее</a>

            </div>
        </div>
<?php endforeach; ?>   
	</div>
</section>
<?php endif; ?>
