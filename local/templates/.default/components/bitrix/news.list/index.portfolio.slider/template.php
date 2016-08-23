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

<?                                                        
    $i = 0;
?> 
<div class="index_wrapper2">

    <div class="content_block2"> 
        <div class="brands"> 
            <div class="brands_content"> 
                <?foreach($arResult["ITEMS"] as $arItem) {
                    $i++;
                    $FILE = CFile::GetPath($arItem['PROPERTIES']['INDEX_IMAGE']['VALUE']);
                    echo '<div id="b'.$i.'" class="brand"> <a id="bxid_518568" href="javascript:void(0)" > 
                    <div class="brand_inner"> <img id="bxid_416714" src="'.$FILE.'"  /> </div>
                    </a> </div>';
            }?> </div>
        </div>

        <div class="banners_fff"></div>
    </div>
</div>
<?
    $k = 0;
?>

<div class="shops_list"> 
    <div class="shop shop_left">
        <img class="arrow_img" src="/verstka/images/arrow_shops.png"  /> 
        <div class="shop_content"> 
            <? while ($k < $i) 
                {?>                
                <div id="i<?=$k+1?>" class="shop_text<? if ($k > 0){?> invisible<?}?>"> 
                    <div class="shop_title"><mark><?=$arResult["ITEMS"][$k]["NAME"]?></mark></div>
                    <div class="shop_desc"><?=$arResult["ITEMS"][$k]["PREVIEW_TEXT"]?></div>
                </div>
                <? 
                    $k++;
                }
            ?>
        </div>
    </div>

    <div class="shop shop_right"> 
        <div class="shop_content"> 
            <div class="shop_title shop_title_grey">        
                <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include", 
                        ".default", 
                        array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/include/portfolio_slider_top.php",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    );?>
            </div>
            <div class="shop_bold">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include", 
                    ".default", 
                    array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/portfolio_slider_main.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                );?></div>
        <a class="shop_button" href="https://www.bitrix24.ru/create.php?p=54236" >Попробовать</a> </div>
    </div>

    <div class="shops_bgd"></div>
</div> 
