<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="footer_div">
    <div class="footer_div_title">услуги</div>
        <div class="footer_list">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
    <div><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>

<?endforeach?>
    </div>
</div>

<?endif?>