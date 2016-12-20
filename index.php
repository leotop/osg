<?
     require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("keywords", "Битрикс 24, настройка, интеграция, 1С, внедрение, техподдержка, новый, заказ, интернет-магазин, OSG, Москва, цена, стоимость, bitrix24");
    $APPLICATION->SetPageProperty("description", "Битрикс 24 настройка, поддержка, внедрение от компании «OSG» в Москве. Профессиональная разработка и техподдержка bitrix24");
    $APPLICATION->SetTitle("OSG – Битрикс24 внедрение и интеграция с 1С и интернет-магазинами. Настройка crm Битрикс24 цена в Москве");
?> 
<div class="index_wrapper1"> 
    <div class="content_block1"> 
        <div class="orange_line"><span>заказать</span></div>

        <div class="content_block1_left"> 
            <div class="content_block_title">на основе Битрикс24 вы можете</div>

            <div class="services_list"> 

                <div class="service_div"> <a href="/services/crm/" > <span class="service_list_number">01</span><span class="service_list_title black">внедрить CRM</span> 
                    <div><img src="/verstka/images/osg_2016_1.png"  /> </div>
                <span class="service_bgd"></span> </a> </div>

                <div class="service_div"> <a href="/services/bp/" > <span class="service_list_number">02</span><span class="service_list_title">настроить бизнес-процессы</span> 
                    <div><img src="/verstka/images/osg_2016_2.png"  /> </div>
                <span class="service_bgd"></span> </a> </div>

                <div class="service_div s_margins"> <a href="/services/projects/" > <span class="service_list_number">03</span><span class="service_list_title">настроить работу с задачами и проектами</span> 
                    <div><img src="/verstka/images/osg_2016_3.png"  /> </div>
                <span class="service_bgd"></span> </a> </div>

                <div class="service_div margintop2"> <a href="/services/phone/" > <span class="service_list_number">04</span><span class="service_list_title black">настроить телефонию</span> 
                    <div><img src="/verstka/images/osg_2016_4.png"  /> </div>
                <span class="service_bgd"></span> </a> </div>  

                <div class="service_div s_margins"> <a href="/services/integration-1c/" > <span class="service_list_number">05</span><span class="service_list_title black">интегрировать Битрикс24 с 1с и интернет-магазином</span> 
                    <div><img src="/verstka/images/osg_2016_5.png"  /> </div>
                <span class="service_bgd"></span> </a> </div>

                <div class="service_div margintop2"> <a href="/services/worktime/" > <span class="service_list_number">06</span><span class="service_list_title">настроить рабочее время и отчеты</span> 
                    <div><img src="/verstka/images/osg_2016_6.png"  /> </div>
                <span class="service_bgd"></span> </a> </div>

                <div class="service_div s_margins"> <a href="/services/docs/" > <span class="service_list_number">07</span><span class="service_list_title">настроить совместную работу с документами</span> 
                    <div><img src="/verstka/images/osg_2016_7.png"  /> </div>
                <span class="service_bgd"></span> </a> </div>

                <div class="service_div margintop2"> <a href="/services/scope/" > <span class="service_list_number">08</span><span class="service_list_title black">и многое другое</span> 
                    <div><img src="/verstka/images/osg_2016_8.png"  /> </div>
                <span class="service_bgd"></span> </a> </div>

            </div>
        </div>

        <div class="content_block1_right"> 
            <div class="news_block"> 
                <div class="content_block1_right_top"> 
                    <div class="content_block_title">новости компании</div>

                    <div class="content_block1_defis"><img src="/verstka/images/defis2.png"  /></div>

                    <div><a href="/news/" >Все новости</a></div>
                </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news", 
                    "news", 
                    array(
                        "IBLOCK_TYPE" => "news",
                        "IBLOCK_ID" => "1",
                        "NEWS_COUNT" => "20",
                        "USE_SEARCH" => "N",
                        "USE_RSS" => "N",
                        "USE_RATING" => "N",
                        "USE_CATEGORIES" => "N",
                        "USE_REVIEW" => "N",
                        "USE_FILTER" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "CHECK_DATES" => "Y",
                        "SEF_MODE" => "Y",
                        "SEF_FOLDER" => "/",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "CACHE_TYPE" => "N",
                        "CACHE_TIME" => "36000000",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "SET_TITLE" => "N",
                        "SET_STATUS_404" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "USE_PERMISSIONS" => "N",
                        "PREVIEW_TRUNCATE_LEN" => "55",
                        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "LIST_FIELD_CODE" => array(
                            0 => "DETAIL_TEXT",
                            1 => "DETAIL_PICTURE",
                            2 => "",
                        ),
                        "LIST_PROPERTY_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "DISPLAY_NAME" => "Y",
                        "META_KEYWORDS" => "-",
                        "META_DESCRIPTION" => "-",
                        "BROWSER_TITLE" => "-",
                        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "DETAIL_FIELD_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "DETAIL_PROPERTY_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "DETAIL_DISPLAY_TOP_PAGER" => "N",
                        "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
                        "DETAIL_PAGER_TITLE" => "Страница",
                        "DETAIL_PAGER_TEMPLATE" => "",
                        "DETAIL_PAGER_SHOW_ALL" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "USE_SHARE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "ADD_ELEMENT_CHAIN" => "N",
                        "COMPONENT_TEMPLATE" => "news",
                        "SET_LAST_MODIFIED" => "N",
                        "DETAIL_SET_CANONICAL_URL" => "N",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => "",
                        "SEF_URL_TEMPLATES" => array(
                            "news" => "",
                            "section" => "",
                            "detail" => "news/#ELEMENT_CODE#/",
                        )
                    ),
                    false
                );?> </div>

            <div class="news_block"> 
                <div class="content_block1_right_top"> 
                    <div class="content_block_title">пресс-релизы</div>

                    <div class="content_block1_defis"><img src="/verstka/images/defis2.png"  /></div>

                    <div><a href="/release/" > Все пресс-релизы</a></div>
                </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news", 
                    "news", 
                    array(
                        "IBLOCK_TYPE" => "release",
                        "IBLOCK_ID" => "6",
                        "NEWS_COUNT" => "20",
                        "USE_SEARCH" => "N",
                        "USE_RSS" => "N",
                        "USE_RATING" => "N",
                        "USE_CATEGORIES" => "N",
                        "USE_REVIEW" => "N",
                        "USE_FILTER" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "CHECK_DATES" => "Y",
                        "SEF_MODE" => "Y",
                        "SEF_FOLDER" => "/",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "CACHE_TYPE" => "N",
                        "CACHE_TIME" => "36000000",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "SET_TITLE" => "N",
                        "SET_STATUS_404" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "USE_PERMISSIONS" => "N",
                        "PREVIEW_TRUNCATE_LEN" => "55",
                        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "LIST_FIELD_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "LIST_PROPERTY_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "DISPLAY_NAME" => "Y",
                        "META_KEYWORDS" => "-",
                        "META_DESCRIPTION" => "-",
                        "BROWSER_TITLE" => "-",
                        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "DETAIL_FIELD_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "DETAIL_PROPERTY_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "DETAIL_DISPLAY_TOP_PAGER" => "N",
                        "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
                        "DETAIL_PAGER_TITLE" => "Страница",
                        "DETAIL_PAGER_TEMPLATE" => "",
                        "DETAIL_PAGER_SHOW_ALL" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "PAGER_TITLE" => "Пресс-релизы",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "USE_SHARE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "ADD_ELEMENT_CHAIN" => "N",
                        "SEF_URL_TEMPLATES" => array(
                            "news" => "",
                            "section" => "",
                            "detail" => "release/#ELEMENT_CODE#/",
                        )
                    ),
                    false
                );?> </div>
        </div>

        <div class="content_block1_grey"></div>

        <div class="content_block1_shadow"></div>
    </div>
</div>

<div class="services_list2"> 
    <div class="services_list2_title"><mark>что</mark> мы делаем?</div>

    <div class="service_div_wrapper2"> 
        <div class="service_div2"> <a href="/services/boxbitrix24/" > 
            <div><img class="service_div2_img" src="/verstka/images/osg_2016_01.png"  /> </div>
        <span class="service_bgd2"> <span class="service_list_title2">внедряем <mark>коробочные версии Битрикс24</mark></span><img class="service_list_arrow2" src="/verstka/images/arrow.png"  /> </span> </a> </div>

        <div class="service_div2"> <a href="/services/cloudbitrix24/" > 
            <div><img class="service_div2_img" src="/verstka/images/osg_2016_02.png"  /> </div>
        <span class="service_bgd2"> <span class="service_list_title2">внедряем <mark>облачные версии Битрикс24</mark></span><img class="service_list_arrow2" src="/verstka/images/arrow.png"  /> </span> </a> </div>

        <div class="service_div2"> <a href="/services/integration-1c/" > 
            <div><img class="service_div2_img" src="/verstka/images/s21.png"  /> </div>
        <span class="service_bgd2"> <span class="service_list_title2">Интегрируем <mark>битрикс24 с 1С и интернет-магазинами</mark></span><img class="service_list_arrow2" src="/verstka/images/arrow.png"  /> </span> </a> </div>

        <div class="service_div2"> <a href="/tech-support/" > 
            <div><img class="service_div2_img" src="/verstka/images/s23.png"  /> </div>
        <span class="service_bgd2"> <span class="service_list_title2">поддерживаем <mark>и развиваем корпоративные порталы и CRM системы.</mark></span><img class="service_list_arrow2" src="/verstka/images/arrow.png"  /> </span> </a> </div>
    </div>

    <div class="s2_border"></div>
</div> 
<?global $portfolioFilter;
$portfolioFilter = array("!PROPERTY_INDEX_IMAGE" => false);
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list", 
    "index.portfolio.slider", 
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "/portfolio/#ELEMENT_CODE#/",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "CODE",
            1 => "",
        ),
        "FILTER_NAME" => "portfolioFilter",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "Portfolio",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "PUSH_TITLE_2",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "COMPONENT_TEMPLATE" => "index.portfolio.slider"
    ),
    false
);?>

<div class="content_block3"> 
    <div class="orange_line2"><span>почему мы?</span></div>
</div>

<div class="index_wrapper3"> 
    <div class="index_wrapper3_content"> 
        <div class="index_wrapper3_div"> 
            <div class="defis3"></div>

            <div class="index_wrapper3_div_desc">
                <div>Золотой партнер Битрикс</div>

                <div>По внедрению продуктов Битрикс24</div>
            </div>
        </div>

        <div class="index_wrapper3_div"> 
            <div class="defis3"></div>

            <div class="index_wrapper3_div_desc">
                <div>Компания OSG является</div>

                <div>1С: Франчайзи</div>
            </div>
        </div>

        <div class="index_wrapper3_div"> 
            <div class="defis3"></div>

            <div class="index_wrapper3_div_desc">
                <div>Более 300 внедренных решений интегрированных с 1С.</div>

                <div>Это больше всех</div>
            </div>
        </div>
        <img src="/verstka/images/img3.png"  /> 
        <div class="index_wrapper3_bottom"> самое выгодное <mark>сотрудничество для вас</mark> </div>
        <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/cooperation.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
    </div>
 </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>