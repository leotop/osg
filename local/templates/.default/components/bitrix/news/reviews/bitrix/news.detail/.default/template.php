<?//arshow($arResult)?> <?
    /*проверка массива на наличие тегов для вывода на сайт*/
    $str_DESCRIPTION_VN_PAGES = $arResult["PROPERTIES"]["DESCRIPTION_VN_PAGES"]["VALUE"]["TEXT"]; 
    $str_DESCRIPTION_VN_PAGES_2 = $arResult["PROPERTIES"]["DESCRIPTION_VN_PAGES_2"]["VALUE"]["TEXT"];
    $str_DESCRIPTION_VN_PAGES_3 = $arResult["PROPERTIES"]["DESCRIPTION_VN_PAGES_3"]["VALUE"]["TEXT"];
    $str_DESCRIPTION_VN_PAGES_4 = $arResult["PROPERTIES"]["DESCRIPTION_VN_PAGES_4"]["VALUE"]["TEXT"];
    $str_DESCRIPTION_VN_PAGES_5 = $arResult["PROPERTIES"]["DESCRIPTION_VN_PAGES_5"]["VALUE"]["TEXT"];
    $str_RENDERED_TEMPLATES = $arResult["PROPERTIES"]["RENDERED_TEMPLATES"]["VALUE"]["TEXT"];
    $str_DESCRIPTION_OF_DESIGN = $arResult["PROPERTIES"]["DESCRIPTION_OF_DESIGN"]["VALUE"]["TEXT"];
    $str_DESCRIPTION_OF_DESIGN_2 = $arResult["PROPERTIES"]["DESCRIPTION_OF_DESIGN_2"]["VALUE"]["TEXT"];
    $str_DESCRIPTION_FOR = $arResult["PROPERTIES"]["DESCRIPTION_FOR"]["VALUE"]["TEXT"];
    $str_DESCRIPTION_FOR_12 = $arResult["PROPERTIES"]["DESCRIPTION_FOR_12"]["VALUE"]["TEXT"];
    $str_DESCRIPTION_FOR_13 = $arResult["PROPERTIES"]["DESCRIPTION_FOR_13"]["VALUE"]["TEXT"];
    $str_DESCRIPTION_FOR_2 = $arResult["PROPERTIES"]["DESCRIPTION_FOR_2"]["VALUE"]["TEXT"]; 
    $str_DESCRIPTION_FOR_22 = $arResult["PROPERTIES"]["DESCRIPTION_FOR_22"]["VALUE"]["TEXT"]; 
    $str_DESCRIPTION_FOR_23 = $arResult["PROPERTIES"]["DESCRIPTION_FOR_23"]["VALUE"]["TEXT"]; 
    $str_DESCRIPTION_FOR_3 = $arResult["PROPERTIES"]["DESCRIPTION_FOR_3"]["VALUE"]["TEXT"]; 
    $str_DESCRIPTION_FOR_32 = $arResult["PROPERTIES"]["DESCRIPTION_FOR_32"]["VALUE"]["TEXT"]; 
    $str_DESCRIPTION_FOR_33 = $arResult["PROPERTIES"]["DESCRIPTION_FOR_33"]["VALUE"]["TEXT"]; 
    $str_DESCRIPTION_FOR_4 = $arResult["PROPERTIES"]["DESCRIPTION_FOR_4"]["VALUE"]["TEXT"]; 
    $str_DESCRIPTION_FOR_42 = $arResult["PROPERTIES"]["DESCRIPTION_FOR_42"]["VALUE"]["TEXT"]; 
    $str_DESCRIPTION_FOR_43 = $arResult["PROPERTIES"]["DESCRIPTION_FOR_43"]["VALUE"]["TEXT"]; 
    $str_DESCRIPTION_FOR_5 = $arResult["PROPERTIES"]["DESCRIPTION_FOR_5"]["VALUE"]["TEXT"];  
    $str_DESCRIPTION_FOR_52 = $arResult["PROPERTIES"]["DESCRIPTION_FOR_52"]["VALUE"]["TEXT"];  
    $str_DESCRIPTION_FOR_53 = $arResult["PROPERTIES"]["DESCRIPTION_FOR_53"]["VALUE"]["TEXT"];  
    $str_DESCRIPTION_ONE = $arResult["PROPERTIES"]["DESCRIPTION_ONE"]["VALUE"]["TEXT"];
    $str_DESCRIPTION_TWO = $arResult["PROPERTIES"]["DESCRIPTION_TWO"]["VALUE"]["TEXT"];
    $str_DESCRIPTION_TREE = $arResult["PROPERTIES"]["DESCRIPTION_TREE"]["VALUE"]["TEXT"];
    $str_DESCRIPTION_FOUR = $arResult["PROPERTIES"]["DESCRIPTION_FOUR"]["VALUE"]["TEXT"];
    $str_DESCRIPTION_FIVE = $arResult["PROPERTIES"]["DESCRIPTION_FIVE"]["VALUE"]["TEXT"];
    $str_SYSTEM_DESCRIPTION = $arResult["PROPERTIES"]["SYSTEM_DESCRIPTION"]["VALUE"]["TEXT"];
    $search = array ("'<script[^>]*?>.*?</script>'si",  // Вырезает javaScript
        "'<[\/\!]*?[^<>]*?>'si",           // Вырезает HTML-теги
        "'([\r\n])[\s]+'",                 // Вырезает пробельные символы
        "'&(quot|#34);'i",                 // Заменяет HTML-сущности
        "'&(amp|#38);'i",
        "'&(lt|#60);'i",
        "'&(gt|#62);'i",
        "'&(nbsp|#160);'i",
        "'&(iexcl|#161);'i",
        "'&(cent|#162);'i",
        "'&(pound|#163);'i",
        "'&(copy|#169);'i",
        "'&#(\d+);'e");                    // интерпретировать как php-код

    $replace = array ("",
        "",
        "\\1",
        "\"",
        "&",
        "<",
        ">",
        " ",
        chr(161),
        chr(162),
        chr(163),
        chr(169),
        "chr(\\1)");

    $DESCRIPTION_VN_PAGES = preg_replace($search, $replace, $str_DESCRIPTION_VN_PAGES);
    $DESCRIPTION_VN_PAGES_2 = preg_replace($search, $replace, $str_DESCRIPTION_VN_PAGES_2);
    $DESCRIPTION_VN_PAGES_3 = preg_replace($search, $replace, $str_DESCRIPTION_VN_PAGES_3);
    $DESCRIPTION_VN_PAGES_4 = preg_replace($search, $replace, $str_DESCRIPTION_VN_PAGES_4);
    $DESCRIPTION_VN_PAGES_5 = preg_replace($search, $replace, $str_DESCRIPTION_VN_PAGES_5);
    $RENDERED_TEMPLATES = preg_replace($search, $replace, $str_RENDERED_TEMPLATES);
    $DESCRIPTION_OF_DESIGN = preg_replace($search, $replace, $str_DESCRIPTION_OF_DESIGN);
    $DESCRIPTION_OF_DESIGN_2 = preg_replace($search, $replace, $str_DESCRIPTION_OF_DESIGN_2);
    $SYSTEM_DESCRIPTION = preg_replace($search, $replace, $str_SYSTEM_DESCRIPTION);
    $DESCRIPTION_FOR = preg_replace($search, $replace, $str_DESCRIPTION_FOR);
    $DESCRIPTION_FOR_12 = preg_replace($search, $replace, $str_DESCRIPTION_FOR_12);
    $DESCRIPTION_FOR_13 = preg_replace($search, $replace, $str_DESCRIPTION_FOR_13);
    $DESCRIPTION_FOR_2 = preg_replace($search, $replace, $str_DESCRIPTION_FOR_2);
    $DESCRIPTION_FOR_22 = preg_replace($search, $replace, $str_DESCRIPTION_FOR_22);
    $DESCRIPTION_FOR_23 = preg_replace($search, $replace, $str_DESCRIPTION_FOR_23);
    $DESCRIPTION_FOR_3 = preg_replace($search, $replace, $str_DESCRIPTION_FOR_3);
    $DESCRIPTION_FOR_32 = preg_replace($search, $replace, $str_DESCRIPTION_FOR_32);
    $DESCRIPTION_FOR_33 = preg_replace($search, $replace, $str_DESCRIPTION_FOR_33);
    $DESCRIPTION_FOR_4 = preg_replace($search, $replace, $str_DESCRIPTION_FOR_4);
    $DESCRIPTION_FOR_42 = preg_replace($search, $replace, $str_DESCRIPTION_FOR_42);
    $DESCRIPTION_FOR_43 = preg_replace($search, $replace, $str_DESCRIPTION_FOR_43);
    $DESCRIPTION_FOR_5 = preg_replace($search, $replace, $str_DESCRIPTION_FOR_5);
    $DESCRIPTION_FOR_52 = preg_replace($search, $replace, $str_DESCRIPTION_FOR_52);
    $DESCRIPTION_FOR_53 = preg_replace($search, $replace, $str_DESCRIPTION_FOR_53);
    $DESCRIPTION_ONE = preg_replace($search, $replace, $str_DESCRIPTION_ONE);
    $DESCRIPTION_TWO = preg_replace($search, $replace, $str_DESCRIPTION_TWO);
    $DESCRIPTION_TREE = preg_replace($search, $replace, $str_DESCRIPTION_TREE);
    $DESCRIPTION_FOUR = preg_replace($search, $replace, $str_DESCRIPTION_FOUR);
    $DESCRIPTION_FIVE = preg_replace($search, $replace, $str_DESCRIPTION_FIVE);
    /*проверка массива на наличие тегов для вывода на сайт*/
?>
<div class="anons_text"><?=$arResult["PREVIEW_TEXT"]?></div>
<div class="news-detail">
    <section> 
        <div class="info_project"> 
            <div class="strip_contact"></div>
            <? if ($arResult["PROPERTIES"]["P_LINK"]["VALUE"]){?> <span class="info_project_type">Адрес сайта 
                    <br />
                <a href="<?=$arResult["PROPERTIES"]["P_LINK"]["VALUE"]?>" ><?=$arResult["PROPERTIES"]["P_LINK"]["VALUE"]?></a> </span> 
                <?}?>
            <? if ($arResult["PROPERTIES"]["TYPE_PROGECT"]["VALUE"]){?> <span class="info_project_type">Тип проекта </span> 
                <b><?=$arResult["PROPERTIES"]["TYPE_PROGECT"]["VALUE"]?></b> 
                <?}?>  
            <? if ($arResult["PROPERTIES"]["BUDGET"]["VALUE"]){?> <span class="info_project_type">Бюджет проекта </span> 
                <b>от <?=$arResult["PROPERTIES"]["BUDGET"]["VALUE"]?> рублей</b> 
                <?}?>
            <? if ($arResult["PROPERTIES"]["RELEASE_DATA"]["VALUE"]){?><span class="info_project_type">Дата выпуска </span>
                <b><?=$arResult["PROPERTIES"]["RELEASE_DATA"]["VALUE"]?></b> <hr> 
                <?}?>
        </div>
        <? if ($arResult["PROPERTIES"]["PICTURE_SITE"]["VALUE"]){?>
            <img class="pet_img1" src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_SITE"]["VALUE"])?>"  /> 
            <? } ?>
        <? if ($arResult["PROPERTIES"]["RENDERED_TEMPLATES"]["VALUE"]){?>
            <div class="txt_pet_1"><?=$RENDERED_TEMPLATES?> 
                <hr>

            </div>
            <? } ?>
        <div class="txt_pet_2">
            <span><?=$arResult["DETAIL_TEXT"]?></span>
        </div>
    </section>
    <? if ($arResult["PROPERTIES"]["PUSH_TITLE_1"]["VALUE"]){?>
        <section>
            <div class="obr_diz"> 
                <div class="in_title_pet"><?=$arResult["PROPERTIES"]["PUSH_TITLE_1"]["VALUE"]?> </div>
            </div>
            <div id="razdel_brouzer_left" class="text_main">
                <div class="text_wrap_1">
                    <span><?=$DESCRIPTION_OF_DESIGN?></span>
                </div>
                <div class="list_wrap_left_1">
                    <div class="image_small_left_1"> <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_ONE"]["VALUE"])?>"  /> </div>
                    <div class="wrap_text_right">
                        <h2><?=$arResult["PROPERTIES"]["NAME_ONE"]["VALUE"]?></h2>
                        <span><?=$DESCRIPTION_ONE?></span>
                    </div>
                </div>
                <div class="list_wrap_left_1">
                    <div class="image_small_left_2"> <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_TWO"]["VALUE"])?>"  /> </div>
                    <div class="wrap_text_left">
                        <h2><?=$arResult["PROPERTIES"]["NAME_TWO"]["VALUE"]?></h2>
                        <span><?=$DESCRIPTION_TWO?></span>
                    </div>
                </div>
                <?if ($arResult["PROPERTIES"]["NAME_TREE"]["VALUE"]&$arResult["PROPERTIES"]["PICTURE_TREE"]["VALUE"]&$DESCRIPTION_TREE){?>
                    <div class="list_wrap_left_1">
                        <div class="image_small_left_3"> <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_TREE"]["VALUE"])?>"  /> </div>
                        <div class="wrap_text_right">
                            <h2><?=$arResult["PROPERTIES"]["NAME_TREE"]["VALUE"]?> </h2>
                            <span><?=$DESCRIPTION_TREE?></span>
                        </div>
                    </div>
                    <?}if($arResult["PROPERTIES"]["NAME_FOUR"]["VALUE"]&$DESCRIPTION_FOUR&$arResult["PROPERTIES"]["PICTURE_FOUR"]["VALUE"]){?> 
                    <div class="list_wrap_left_1">
                        <div class="image_small_left_2"> <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FOUR"]["VALUE"])?>"  /> </div>
                        <div class="wrap_text_left">
                            <h2><?=$arResult["PROPERTIES"]["NAME_FOUR"]["VALUE"]?></h2>
                            <span><?=$DESCRIPTION_FOUR?></span>
                        </div>
                    </div>
                    <?}if ($arResult["PROPERTIES"]["NAME_FIVE"]["VALUE"]&DESCRIPTION_FIVE&$arResult["PROPERTIES"]["PICTURE_FIVE"]["VALUE"]){?>
                    <div class="list_wrap_left_1">
                        <div class="image_small_left_3"> <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FIVE"]["VALUE"])?>"  /> </div>
                        <div class="wrap_text_right">
                            <h2><?=$arResult["PROPERTIES"]["NAME_FIVE"]["VALUE"]?> </h2>
                            <span><?=$DESCRIPTION_FIVE?></span>
                        </div>
                    </div>
                    <?}?>
                <span><?=$DESCRIPTION_OF_DESIGN_2?></span>
            </div>
            <div id="wrap_ramka_right" class='foto_main'>
                <div class="ramka_panel_brouzers"></div>
                <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_PAGES"]["VALUE"])?>">
            </div>   
        </section>
        <? }  ?>
    <? /* if ($arResult["PROPERTIES"]["NAME_VN_PAGES"]["VALUE"]){?>
        <section>
        <div id="ramka_brouzer_left">
        <div class="ramka_panel_brouzers"></div>
        <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_VN_BIG"]["VALUE"])?>">
        </div>
        <div id="razdel_brouzer_right">
        <div class="header_goods hg_left"><?=$arResult["PROPERTIES"]["NAME_VN_PAGES"]["VALUE"]?></div>

        <span><?=$DESCRIPTION_VN_PAGES?></span>
        <div class="list_wrap_left_1">
        <div class="image_small_left_4"><img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FOR"]["VALUE"])?>"  /></div>
        <div class="wrap_text_left">
        <h2><?=$arResult["PROPERTIES"]["NAME_FOR"]["VALUE"]?></h2>
        <span><?=$DESCRIPTION_FOR?></span>
        </div>
        </div>
        </div>
        </section>
    <? } */ ?>


    <?  if ($arResult["PROPERTIES"]["OUTPUT_SECTION_1"]["VALUE"]){?>
        <section>
        <div class="razdell">
        <div id="ramka_brouzer_left" class="left_ramka">
            <div class="ramka_panel_brouzers"></div>
            <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_VN_BIG"]["VALUE"])?>">
        </div>
        <div id="razdel_brouzer_right" class="right_razdel">
            <div class="header_goods hg_left"><?=$arResult["PROPERTIES"]["NAME_VN_PAGES"]["VALUE"]?></div>

            <span><?=$DESCRIPTION_VN_PAGES?></span>

             <?if($arResult["PROPERTIES"]["PICTURE_FOR"]["VALUE"] or $arResult["PROPERTIES"]["NAME_FOR"]["VALUE"] or $DESCRIPTION_FOR){?>
            <div class="list_wrap_left_1">
                <div class="image_small_left_4"><img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FOR"]["VALUE"])?>"  /></div>
            
                <div class="wrap_text_left">
                    <h2><?=$arResult["PROPERTIES"]["NAME_FOR"]["VALUE"]?></h2>
                    <span><?=$DESCRIPTION_FOR?></span>
                </div>
            </div>
             <?}?>
             
            <?if($arResult["PROPERTIES"]["NAME_FOR_12"]["VALUE"]&$DESCRIPTION_FOR_12&$arResult["PROPERTIES"]["PICTURE_FOR_12"]["VALUE"]){?>
                <div class="list_wrap_left_1">      
                    <div class="wrap_text_left">
                        <h2><?=$arResult["PROPERTIES"]["NAME_FOR_12"]["VALUE"]?></h2>
                        <span><?=$DESCRIPTION_FOR_12?></span>
                    </div>
                    <div class="image_small_left_4"><img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FOR_12"]["VALUE"])?>"  /></div>
                </div>
                <?}?>
            <?if($arResult["PROPERTIES"]["NAME_FOR_13"]["VALUE"]&$DESCRIPTION_FOR_13&$arResult["PROPERTIES"]["PICTURE_FOR_13"]["VALUE"]){?>
                <div class="list_wrap_left_1">
                    <div class="image_small_left_4"><img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FOR_13"]["VALUE"])?>"  /></div>
                    <div class="wrap_text_left">
                        <h2><?=$arResult["PROPERTIES"]["NAME_FOR_13"]["VALUE"]?></h2>
                        <span><?=$DESCRIPTION_FOR_13?></span>
                    </div>
                </div> 
                <?}?>

         <div class="chert"><img src="/i/chert.png"></div>
        </div>
    </div>
    </section>
    <? }  ?>
<?  if ($arResult["PROPERTIES"]["OUTPUT_SECTION_2"]["VALUE"]){?>
    <section>
    <div class="razdell">
        <div class="obr_diz"> 
            <div class="in_title_pet mod_in_title"><?=$arResult["PROPERTIES"]["NAME_VN_PAGES_2"]["VALUE"]?> </div>
        </div>
        <div id="razdel_brouzer_left" class="right_razdel">
            <div class="text_wrap_1">
                <span><?=$DESCRIPTION_VN_PAGES_2?></span>
            </div>

            <?if($arResult["PROPERTIES"]["PICTURE_FOR_2"]["VALUE"] or $arResult["PROPERTIES"]["NAME_FOR_2"]["VALUE"] or $DESCRIPTION_FOR_2){?>
            <div class="list_wrap_left_1">
                <div class="image_small_left_1"> <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FOR_2"]["VALUE"])?>"  /> </div>
                <div class="wrap_text_right">
                    <h2><?=$arResult["PROPERTIES"]["NAME_FOR_2"]["VALUE"]?></h2>
                    <span><?=$DESCRIPTION_FOR_2?></span>
                </div>
            </div>
            <?}?>
            <?if($arResult["PROPERTIES"]["NAME_FOR_22"]["VALUE"]&$DESCRIPTION_FOR_22&$arResult["PROPERTIES"]["PICTURE_FOR_22"]["VALUE"]){?>
                <div class="list_wrap_left_1">
                    <div class="image_small_left_2"> <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FOR_22"]["VALUE"])?>"  /> </div>
                    <div class="wrap_text_left">
                        <h2><?=$arResult["PROPERTIES"]["NAME_FOR_22"]["VALUE"]?></h2>
                        <span><?=$DESCRIPTION_FOR_22?></span>
                    </div>
                </div>
                <?}?>
            <?if($arResult["PROPERTIES"]["NAME_FOR_23"]["VALUE"]&$DESCRIPTION_FOR_23&$arResult["PROPERTIES"]["PICTURE_FOR_23"]["VALUE"]){?>
                <div class="list_wrap_left_1">
                    <div class="image_small_left_3"> <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FOR_23"]["VALUE"])?>"  /> </div>
                    <div class="wrap_text_right">
                        <h2><?=$arResult["PROPERTIES"]["NAME_FOR_23"]["VALUE"]?> </h2>
                        <span><?=$DESCRIPTION_FOR_23?></span>
                    </div>
                </div> 
                <?}?>

        <div class="chert"><img src="/i/chert.png"></div>
        </div>
        <div id="wrap_ramka_right" class="left_ramka">
            <div class="ramka_panel_brouzers"></div>
            <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_VN_BIG_2"]["VALUE"])?>">
        </div>

    </div>
    </section>
    <? }  ?>
<?  if ($arResult["PROPERTIES"]["OUTPUT_SECTION_3"]["VALUE"]){?>
    <section>
    <div class="razdell">
        <div id="ramka_brouzer_left" class="left_ramka">
            <div class="ramka_panel_brouzers"></div>
            <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_VN_BIG_3"]["VALUE"])?>">
        </div>
        <div id="razdel_brouzer_right" class="right_razdel">
            <div class="header_goods hg_left"><?=$arResult["PROPERTIES"]["NAME_VN_PAGES_3"]["VALUE"]?></div>

            <span><?=$DESCRIPTION_VN_PAGES_3?></span>


            <div class="list_wrap_left_1">
                <div class="image_small_left_4"><img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FOR_3"]["VALUE"])?>"  /></div>
                <div class="wrap_text_left">
                    <h2><?=$arResult["PROPERTIES"]["NAME_FOR_3"]["VALUE"]?></h2>
                    <span><?=$DESCRIPTION_FOR_3?></span>
                </div>
            </div>
            <?if($arResult["PROPERTIES"]["NAME_FOR_32"]["VALUE"]&$DESCRIPTION_FOR_32&$arResult["PROPERTIES"]["PICTURE_FOR_32"]["VALUE"]){?>     
                <div class="list_wrap_left_1">     
                    <div class="wrap_text_left">
                        <h2><?=$arResult["PROPERTIES"]["NAME_FOR_32"]["VALUE"]?></h2>
                        <span><?=$DESCRIPTION_FOR_32?></span>
                    </div>
                    <div class="image_small_left_4"><img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FOR_32"]["VALUE"])?>"  /></div>
                </div>
                <?}?>
            <?if($arResult["PROPERTIES"]["NAME_FOR_33"]["VALUE"]&$DESCRIPTION_FOR_33&$arResult["PROPERTIES"]["PICTURE_FOR_33"]["VALUE"]){?>
                <div class="list_wrap_left_1">
                    <div class="image_small_left_4"><img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FOR_33"]["VALUE"])?>"  /></div>
                    <div class="wrap_text_left">
                        <h2><?=$arResult["PROPERTIES"]["NAME_FOR_33"]["VALUE"]?></h2>
                        <span><?=$DESCRIPTION_FOR_33?></span>
                    </div>
                </div>
                <?}?>
                <div class="chert"><img src="/i/chert.png"></div>
        </div>
    </div>
    </section>
    <? }  ?>
<?  if ($arResult["PROPERTIES"]["OUTPUT_SECTION_4"]["VALUE"]){?>
    <section>
    <div class="razdell">

        <div class="obr_diz"> 
            <div class="in_title_pet mod_in_title"><?=$arResult["PROPERTIES"]["NAME_VN_PAGES_4"]["VALUE"]?> </div>
        </div>
        <div id="razdel_brouzer_left" class="right_razdel">
            <div class="text_wrap_1">
                <span><?=$DESCRIPTION_VN_PAGES_4?></span>
            </div>
            <div class="list_wrap_left_1">
                <div class="image_small_left_1"> <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FOR_4"]["VALUE"])?>"  /> </div>
                <div class="wrap_text_right">
                    <h2><?=$arResult["PROPERTIES"]["NAME_FOR_4"]["VALUE"]?></h2>
                    <span><?=$DESCRIPTION_FOR_4?></span>
                </div>
            </div>
            <?if($arResult["PROPERTIES"]["NAME_FOR_42"]["VALUE"]&$DESCRIPTION_FOR_42&$arResult["PROPERTIES"]["PICTURE_FOR_42"]["VALUE"]){?>
                <div class="list_wrap_left_1">
                    <div class="image_small_left_2"> <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FOR_42"]["VALUE"])?>"  /> </div>
                    <div class="wrap_text_left">
                        <h2><?=$arResult["PROPERTIES"]["NAME_FOR_42"]["VALUE"]?></h2>
                        <span><?=$DESCRIPTION_FOR_42?></span>
                    </div>
                </div>
                <?}?>
            <?if($arResult["PROPERTIES"]["NAME_FOR_43"]["VALUE"]&$DESCRIPTION_FOR_43&$arResult["PROPERTIES"]["PICTURE_FOR_43"]["VALUE"]){?>
                <div class="list_wrap_left_1">
                    <div class="image_small_left_3"> <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FOR_43"]["VALUE"])?>"  /> </div>
                    <div class="wrap_text_right">
                        <h2><?=$arResult["PROPERTIES"]["NAME_FOR_43"]["VALUE"]?> </h2>
                        <span><?=$DESCRIPTION_FOR_43?></span>
                    </div>
                </div> 
                <?}?>
            <span><?=$DESCRIPTION_OF_DESIGN_4?></span>
            <div class="chert"><img src="/i/chert.png"></div>
        </div>
        <div id="wrap_ramka_right" class="left_ramka">
            <div class="ramka_panel_brouzers"></div>
            <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_VN_BIG_4"]["VALUE"])?>">
        </div>

     </div>
    </section>
    <? }  ?>
<?  if ($arResult["PROPERTIES"]["OUTPUT_SECTION_5"]["VALUE"]){?>
    <section>
    <div class="razdell">
        <div id="ramka_brouzer_left" class="left_ramka">
            <div class="ramka_panel_brouzers"></div>
            <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_VN_BIG_5"]["VALUE"])?>">
        </div>
        <div id="razdel_brouzer_right" class="right_razdel">
            <div class="header_goods hg_left"><?=$arResult["PROPERTIES"]["NAME_VN_PAGES_5"]["VALUE"]?></div>

            <span><?=$DESCRIPTION_VN_PAGES_5?></span>
            <div class="list_wrap_left_1">
                <div class="image_small_left_4"><img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FOR_5"]["VALUE"])?>"  /></div>
                <div class="wrap_text_left">
                    <h2><?=$arResult["PROPERTIES"]["NAME_FOR_5"]["VALUE"]?></h2>
                    <span><?=$DESCRIPTION_FOR_5?></span>
                </div>
            </div> 
            <?if($arResult["PROPERTIES"]["NAME_FOR_52"]["VALUE"]&$DESCRIPTION_FOR_52&$arResult["PROPERTIES"]["PICTURE_FOR_52"]["VALUE"]){?>
                <div class="list_wrap_left_1">

                    <div class="wrap_text_left">
                        <h2><?=$arResult["PROPERTIES"]["NAME_FOR_52"]["VALUE"]?></h2>
                        <span><?=$DESCRIPTION_FOR_52?></span>
                    </div>
                    <div class="image_small_left_4"><img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FOR_52"]["VALUE"])?>"  /></div>
                </div>
                <?}?>
            <?if($arResult["PROPERTIES"]["NAME_FOR_53"]["VALUE"]&$DESCRIPTION_FOR_53&$arResult["PROPERTIES"]["PICTURE_FOR_53"]["VALUE"]){?>
                <div class="list_wrap_left_1">
                    <div class="image_small_left_4"><img src="<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_FOR_53"]["VALUE"])?>"  /></div>
                    <div class="wrap_text_left">
                        <h2><?=$arResult["PROPERTIES"]["NAME_FOR_53"]["VALUE"]?></h2>
                        <span><?=$DESCRIPTION_FOR_53?></span>
                    </div>
                </div>
                <?}?>
            <div class="chert"><img src="/i/chert.png"></div>
        </div>
        </div>    
    </section>
    <? }  ?>



<?  if ($arResult["PROPERTIES"]["PUSH_TITLE_2"]["VALUE"]){?>
    <section>
        <div class="header_goods <?if($arResult["PROPERTIES"]["POSITION"]["VALUE"] == "Y"){?>hg_left<?}else{?>hg_right<?}?>"><span><?=$arResult["PROPERTIES"]["PUSH_TITLE_2"]["VALUE"]?></span></div>
        <div id="banner_foot">
        <?if($arResult["PROPERTIES"]["BANNER_ONE"]["VALUE"] and !$arResult["PROPERTIES"]["BANNER_TWO"]["VALUE"]){?>
           <style type="">
                #banner_foot .image_foot_1{
                   box-shadow: none;
                   left:auto;  
                }
                #banner_foot{
                   min-height: 450px;     
                }
           </style>
        <?}?>
            <?if($arResult["PROPERTIES"]["BANNER_ONE"]["VALUE"]){?><img class="image_foot_1" src="<?=CFile::GetPath($arResult["PROPERTIES"]["BANNER_ONE"]["VALUE"])?>"><?}?>
            <?if($arResult["PROPERTIES"]["BANNER_TWO"]["VALUE"]){?><img class="image_foot_2" src="<?=CFile::GetPath($arResult["PROPERTIES"]["BANNER_TWO"]["VALUE"])?>"><?}?>
            <?if($arResult["PROPERTIES"]["BANNER_TREE"]["VALUE"]){?><img class="image_foot_3" src="<?=CFile::GetPath($arResult["PROPERTIES"]["BANNER_TREE"]["VALUE"])?>"><?}?>
            <?if($arResult["PROPERTIES"]["BANNER_FOR"]["VALUE"]){?><img class="image_foot_4" src="<?=CFile::GetPath($arResult["PROPERTIES"]["BANNER_FOR"]["VALUE"])?>"><?}?>
            <?if($arResult["PROPERTIES"]["BANNER_FIVE"]["VALUE"]){?><img class="image_foot_5" src="<?=CFile::GetPath($arResult["PROPERTIES"]["BANNER_FIVE"]["VALUE"])?>"><?}?>
        </div>
        
    </section>          


    <? } else {  ?>
    <section class='tabul'></section>

    <?  } ?>
<? if ($arResult["PROPERTIES"]["PRODUCT_DEVELOPMENT"]["VALUE"]){?>
    <section>
    <hr class="clear_hr">
        <div class="bitrix_foot"> 
            <h2>1С Битрикс </h2>
            <span>Сайт работает на <a href="<?=$arResult["PROPERTIES"]["P_LINK_TWO"]["VALUE"];?>"><?=$arResult["PROPERTIES"]["PRODUCT_DEVELOPMENT"]["VALUE"] ?></a></span>
        </div>
        <div class="text_wrap_bottom">        
            <span><?=$SYSTEM_DESCRIPTION?></span>
            <hr>
        </div>
    </section>
    <? }?>

<?$APPLICATION->IncludeComponent(
    "bitrix:iblock.element.add.form",
    "zakaz_razrabotku",
    Array(
        "SEF_MODE" => "N",
        "IBLOCK_TYPE" => "Portfolio",
        "IBLOCK_ID" => "5",
        "PROPERTY_CODES" => array(0=>"48",1=>"46",2=>"45",3=>"47",),
        "PROPERTY_CODES_REQUIRED" => array(0=>"48",1=>"46",2=>"45",3=>"47",),
        "GROUPS" => array("2"),
        "STATUS_NEW" => "N",
        "STATUS" => "ANY",
        "LIST_URL" => "",
        "ELEMENT_ASSOC" => "CREATED_BY",
        "MAX_USER_ENTRIES" => "100000",
        "MAX_LEVELS" => "100000",
        "LEVEL_LAST" => "Y",
        "USE_CAPTCHA" => "N",
        "USER_MESSAGE_EDIT" => "Сообщение успешно отправлено",
        "USER_MESSAGE_ADD" => "",
        "DEFAULT_INPUT_SIZE" => "30",
        "RESIZE_IMAGES" => "N",
        "MAX_FILE_SIZE" => "0",
        "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
        "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
        "CUSTOM_TITLE_NAME" => "",
        "CUSTOM_TITLE_TAGS" => "",
        "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
        "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
        "CUSTOM_TITLE_IBLOCK_SECTION" => "",
        "CUSTOM_TITLE_PREVIEW_TEXT" => "",
        "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
        "CUSTOM_TITLE_DETAIL_TEXT" => "",
        "CUSTOM_TITLE_DETAIL_PICTURE" => ""
    )
    );?>   

</div>
<script>
$(document).ready(function(){
    var foto_height = $('.foto_main').height();
    var text_height = $('.text_main').height();   
    if (foto_height>text_height){
        $('.text_main').css('padding-bottom',foto_height-text_height-106+'px');
        $('.text_main').css('border-bottom','3px solid #e6e6e6');
    }
    
})                                                                                                               
$(document).ready(function(){
    $('.razdell').each(function(){
        var height_ram = $(this).children('.left_ramka').height();
        var height_raz = $(this).children('.right_razdel').height();
        if (height_raz < height_ram){
            $(this).children('.right_razdel').children('.chert').css('display','block');
         //   $(this).children('.right_razdel').children('.chert').css('padding-top','50px');
            if($(this).children('.right_razdel').css('float')=='right'){
                $(this).children('.right_razdel').children('.chert').css('float','right');
                $(this).children('.right_razdel').children('.chert').children('img').css('padding-top',height_ram-height_raz-120+'px');       
            }else{
                $(this).children('.right_razdel').children('.chert').css('float','left');
                $(this).children('.right_razdel').children('.chert').children('img').css('padding-top',height_ram-height_raz-155+'px');    
            }
            
        }
           
    });
});
$(document).ready(function(){
     $('.razdell').each(function(){
         var  height_wrap = $(this).find('.left_ramka').outerHeight();
         var  height_wrap_2 = $(this).find('.right_razdel').outerHeight();
         ar = (height_wrap - height_wrap_2);
        if(10 < ar){
             $(this).find('.chert').show();
        }else{
             $(this).find('.chert').hide(); 
        }
        console.log(height_wrap, height_wrap_2, ar);
     });   
});       
</script>