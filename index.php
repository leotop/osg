<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "osg");
$APPLICATION->SetPageProperty("description", "OSG - ��������, ����������� � ������������ ��������-��������� � ������");
$APPLICATION->SetTitle("OSG - ��������, ����������� ��������-���������");
?> 
<div class="index_wrapper1"> 
    <div class="content_block1"> 
        <div class="orange_line"><span>��������</span></div>

        <div class="content_block1_left"> 
            <div class="content_block_title">�� ������ �������24 �� ������</div>

            <div class="services_list"> 

                <div class="service_div"> <a href="/services/search-opt/" > <span class="service_list_number">01</span><span class="service_list_title black">��������� CRM</span> 
                    <div><img src="/verstka/images/osg_2016_1.png"  /> </div>
                <span class="service_bgd"></span> </a> </div>

                <div class="service_div"> <a href="/services/support-and-hosting/" > <span class="service_list_number">02</span><span class="service_list_title">��������� ������-���������</span> 
                    <div><img src="/verstka/images/osg_2016_2.png"  /> </div>
                <span class="service_bgd"></span> </a> </div>

                <div class="service_div s_margins"> <a href="/services/integration-1c/" > <span class="service_list_number">03</span><span class="service_list_title">��������� ������ � ������� � ���������</span> 
                    <div><img src="/verstka/images/osg_2016_3.png"  /> </div>
                <span class="service_bgd"></span> </a> </div>

                <div class="service_div margintop2"> <a href="/services/shop-info/" > <span class="service_list_number">04</span><span class="service_list_title black">��������� ���������</span> 
                    <div><img src="/verstka/images/osg_2016_4.png"  /> </div>
                <span class="service_bgd"></span> </a> </div>  

                <div class="service_div s_margins"> <a href="/services/create-dizain/" > <span class="service_list_number">05</span><span class="service_list_title black">���������� � 1� � ��������-���������</span> 
                    <div><img src="/verstka/images/osg_2016_5.png"  /> </div>
                <span class="service_bgd"></span> </a> </div>

                <div class="service_div margintop2"> <a href="/services/create-proj/" > <span class="service_list_number">06</span><span class="service_list_title">��������� �������� ������� � �������</span> 
                    <div><img src="/verstka/images/osg_2016_6.png"  /> </div>
                <span class="service_bgd"></span> </a> </div>
                                                              
                <div class="service_div s_margins"> <a href="/services/create-dizain/" > <span class="service_list_number">07</span><span class="service_list_title">��������� ���������� ������ � �����������</span> 
                    <div><img src="/verstka/images/osg_2016_7.png"  /> </div>
                <span class="service_bgd"></span> </a> </div>

                <div class="service_div margintop2"> <a href="/services/create-proj/" > <span class="service_list_number">08</span><span class="service_list_title black">� ������ ������</span> 
                    <div><img src="/verstka/images/osg_2016_8.png"  /> </div>
                <span class="service_bgd"></span> </a> </div>

            </div>
        </div>

        <div class="content_block1_right"> 
            <div class="news_block"> 
                <div class="content_block1_right_top"> 
                    <div class="content_block_title">������� ��������</div>

                    <div class="content_block1_defis"><img src="/verstka/images/defis2.png"  /></div>

                    <div><a href="/news/" >��� �������</a></div>
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
		"DETAIL_PAGER_TITLE" => "��������",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "�������",
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
                    <div class="content_block_title">�����-������</div>

                    <div class="content_block1_defis"><img src="/verstka/images/defis2.png"  /></div>

                    <div><a href="/release/" > ��� �����-������</a></div>
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
		"DETAIL_PAGER_TITLE" => "��������",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "�����-������",
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
    <div class="services_list2_title"><mark>���</mark> �� ������?</div>

    <div class="service_div_wrapper2"> 
        <div class="service_div2"> <a href="/services/create-proj/" > 
            <div><img class="service_div2_img" src="/verstka/images/osg_2016_01.png"  /> </div>
        <span class="service_bgd2"> <span class="service_list_title2">��������� <mark>���������� ������ �������24</mark></span><img class="service_list_arrow2" src="/verstka/images/arrow.png"  /> </span> </a> </div>

        <div class="service_div2"> <a href="/services/search-opt/" > 
            <div><img class="service_div2_img" src="/verstka/images/osg_2016_02.png"  /> </div>
        <span class="service_bgd2"> <span class="service_list_title2">��������� <mark>�������� ������ �������24</mark></span><img class="service_list_arrow2" src="/verstka/images/arrow.png"  /> </span> </a> </div>

        <div class="service_div2"> <a href="/services/1c/" > 
            <div><img class="service_div2_img" src="/verstka/images/s21.png"  /> </div>
        <span class="service_bgd2"> <span class="service_list_title2">�������� 1� <mark>��������� � �������������</mark></span><img class="service_list_arrow2" src="/verstka/images/arrow.png"  /> </span> </a> </div>

        <div class="service_div2"> <a href="/services/support/" > 
            <div><img class="service_div2_img" src="/verstka/images/s23.png"  /> </div>
        <span class="service_bgd2"> <span class="service_list_title2">��������� <mark>� �������� �������</mark></span><img class="service_list_arrow2" src="/verstka/images/arrow.png"  /> </span> </a> </div>
    </div>

    <div class="s2_border"></div>
</div>
<? 
    CModule::IncludeModule("iblock");
    $arFilter = array ("IBLOCK_ID" => "5", ">PROPERTY_INDEX_IMAGE" => "0");
    $arSelectFields = Array("ID","IBLOCK_ID","PROPERTY_INDEX_IMAGE","PREVIEW_TEXT","NAME","PROPERTY_P_LINK");
    $res = CIBlockElement::GetList( Array("SORT"=>"ASC"),$arFilter,false,array("nTopCount"=>6),$arSelectFields);
    $i = 0;
?> 
<div class="index_wrapper2"> 
    <div class="content_block2"> 
        <div class="brands"> 
            <div class="brands_content"> <?while(($ob = $res->Fetch()))
                {
                    $arr[$i] = $ob; 
                    $i++;
                    $FILE = CFile::GetPath($ob["PROPERTY_INDEX_IMAGE_VALUE"]);
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
  <div class="shop shop_left"> <img class="arrow_img" src="/verstka/images/arrow_shops.png"  /> 
    <div class="shop_content"> 
       <? while ($k < $i) 
            {
                ?><div id="i<?=$k+1?>" class="shop_text<? if ($k > 0){?> invisible<?}?>"> 
        <div class="shop_title"><mark><?=$arr[$k]["NAME"]?></mark></div>
       
        <div class="shop_desc"><?=$arr[$k]["PREVIEW_TEXT"]?></div>
       </div>
       <a id="k<?=$k+1?>" class="shop_button<? if ($k > 0){?> invisible<?}?>" href="<?=$arr[$k]{"PROPERTY_P_LINK_VALUE"}?>" >�������� ����</a> 
       <? 
       $k++;
            }
       ?>
       </div>
   </div>
 
  <div class="shop shop_right"> 
    <div class="shop_content"> 
      <div class="shop_title shop_title_grey">���������� OSG ������� ����������</div>
     
      <div class="shop_bold">����� <mark>350 ��������.</mark></div>
     <a class="shop_button" href="#" >��� �������</a> </div>
   </div>
 
  <div class="shops_bgd"></div>
 </div>
 
<div class="content_block3"> 
  <div class="orange_line2"><span>������ ��?</span></div>
 </div>
 
<div class="index_wrapper3"> 
  <div class="index_wrapper3_content"> 
    <div class="index_wrapper3_div"> 
      <div class="defis3"></div>
     
      <div class="index_wrapper3_div_desc">
        <div>����� 300 ���������� ������� ��������������� � 1�.</div>
       
        <div>��� ������ ����.</div>
       </div>
     </div>
   
    <div class="index_wrapper3_div"> 
      <div class="defis3"></div>
     
      <div class="index_wrapper3_div_desc">
        <div>�������� OSG ��������</div>
       
        <div>1�: ���������</div>
       </div>
     </div>
   
    <div class="index_wrapper3_div"> 
      <div class="defis3"></div>
     
      <div class="index_wrapper3_div_desc">
        <div>����������� �������, ��������������� � 1�</div>
       
        <div>������� ��������</div>
       </div>
     </div>
   <img src="/verstka/images/img3.png"  /> 
    <div class="index_wrapper3_bottom"> ����� �������� <mark>�������������� ��� ���</mark> </div>
   </div>
 </div>
 
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>