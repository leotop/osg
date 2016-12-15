<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<script>
$(function(){
    var ncurCount = 2;
    var ntopCount = <?=$arResult["NAV_RESULT"]->NavPageCount?>;
    processing = false;
    $(window).scroll(function() {
        if(($(window).scrollTop() > ($(document).height() - $(window).height() - 775)) && processing == false && ncurCount<=ntopCount) {
           // ajax call get data from server and append to the div
           processing = true;
           $("#tempData").load("?PAGEN_1=" + ncurCount + " .portf_div", function(){
                var html = $("#tempData").html();
                $(html).insertBefore($(".bottom_bgd"));
                $("#tempData").html("");
                processing = false;
                ncurCount++;
           });        
        }
    });
})
</script>
<? 
$i=1;
foreach($arResult["ITEMS"] as $arItem):
//arshow($arItem);
if ($arItem['PREVIEW_PICTURE']['ID']) {
$f_path=CFile::GetPath($arItem['PREVIEW_PICTURE']['ID']);
}
else {$f_path='';}
if ($arItem['PROPERTIES']['LINK']['VALUE']) {
    $exp=explode('://', $arItem['PROPERTIES']['LINK']['VALUE']);
    $link=$exp[1];
}
if ($i%2==0) {?> 
<div class="portf_div">
    <div class="portf_div_inner">
        <div class="portf_preview">
            <div class="portfolio_title"><?=$arItem['NAME']?></div>
            <a class="portf_preview_link" href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>" target="_blank"><?=$link?></a>
            <div class="portf_preview_text">
                <?=$arItem['PREVIEW_TEXT']?>
            </div>
        </div>
    </div>
    <div class="portf_div_inner"><div class="portf_div_inner2"><iframe width="490" height="275" src="<?=$arItem['PROPERTIES']['YOUTUBE_URL']['VALUE']?>" frameborder="0" allowfullscreen></iframe><div class="triangle1"></div></div></div>
</div>
<?} else { 
?>
<div class="portf_div">
    <div class="portf_div_inner">
        <div class="portf_div_inner2"><iframe width="490" height="275" src="<?=$arItem['PROPERTIES']['YOUTUBE_URL']['VALUE']?>" frameborder="0" allowfullscreen></iframe>
            <div class="triangle">
            </div>
        </div>
    </div>
    <div class="portf_div_inner">
        <div class="portf_preview">
            <div class="portfolio_title"><?=$arItem['NAME']?></div>
            <a class="portf_preview_link" href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>" target="_blank"><?=$link?></a>
            <div class="portf_preview_text">
                <?=$arItem['PREVIEW_TEXT']?>
            </div>
        </div>
    </div>
</div>
<?}?>
<?$i++; endforeach;?>         
<div id="tempData" style="display:none">
</div>