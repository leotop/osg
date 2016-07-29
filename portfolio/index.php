<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Портфолио");
?> 
<div class="content_portf2"> <?/*
           <div class="portf_div">
           <div class="portf_div_inner"><a id="bxid_134803" href="" ><img id="bxid_929819" class="portf_prev_img" src="/verstka/images/portf1.png"  /></a></div>
           <div class="portf_div_inner">
           <div class="portf_preview">
           <div><a id="bxid_407925" href="" >юридическая компания защита</a></div>
           <a id="bxid_712222" class="portf_preview_link" href="" target="_blank" >www.femida.ru</a>
           <div class="portf_preview_text">
           Это гарантирует качество работы и позволяет значительно ускорить процесс разработки интернет-ресурса любой сложности, а также снизить затраты на внедрение
           комплексных бизнес-решений.<br />
           В эффективности наших решений уже убедилось множество известных российских компаний. 
           </div>
           <a id="bxid_425090" class="portf_detail_link" href="" >смотреть кейс</a>
           </div>
           </div>
           </div>
           
           <div class="portf_div">
           <div class="portf_div_inner">
           <div class="portf_preview">
           <div><a id="bxid_376553" href="" >товары для животных петонлайн</a></div>
           <a id="bxid_153671" class="portf_preview_link" href="" target="_blank" >www.petonline.ru</a>
           <div class="portf_preview_text">
           Это гарантирует качество работы и позволяет значительно ускорить процесс разработки интернет-ресурса любой сложности, а также снизить затраты на внедрение
           комплексных бизнес-решений.<br />
           В эффективности наших решений уже убедилось множество известных российских компаний. 
           </div>
           <a id="bxid_521383" class="portf_detail_link" href="" >смотреть кейс</a>
           </div>
           </div>
           <div class="portf_div_inner"><a id="bxid_479737" href="" ><img id="bxid_490233" class="portf_prev_img" src="/verstka/images/portf2.png"  /></a></div>
           </div>
           
           <div class="portf_div">
           <div class="portf_div_inner"><a id="bxid_789431" href="" ><img id="bxid_906476" class="portf_prev_img" src="/verstka/images/portf3.png"  /></a></div>
           <div class="portf_div_inner">
           <div class="portf_preview">
           <div><a id="bxid_531636" target="_blank" href="" >новая версия osg</a></div>
           <a id="bxid_532591" class="portf_preview_link" href="" >www.osg.ru</a>
           <div class="portf_preview_text">
           Это гарантирует качество работы и позволяет значительно ускорить процесс разработки интернет-ресурса любой сложности, а также снизить затраты на внедрение
           комплексных бизнес-решений.<br />
           В эффективности наших решений уже убедилось множество известных российских компаний. 
           </div>
           <a id="bxid_518854" class="portf_detail_link" href="" >смотреть кейс</a>
           </div>
           </div>
           </div>
           
           <div class="portf_div">
           <div class="portf_div_inner">
           <div class="portf_preview">
           <div><a id="bxid_914749" href="" >лендинг концерта "я верю"</a></div>
           <a id="bxid_794723" class="portf_preview_link" target="_blank" href="" >www.ibelieven.ru</a>
           <div class="portf_preview_text">
           Это гарантирует качество работы и позволяет значительно ускорить процесс разработки интернет-ресурса любой сложности, а также снизить затраты на внедрение
           комплексных бизнес-решений.<br />
           В эффективности наших решений уже убедилось множество известных российских компаний. 
           </div>
           <a id="bxid_841440" class="portf_detail_link" href="" >смотреть кейс</a>
           </div>
           </div>
           <div class="portf_div_inner"><a id="bxid_213505" href="" ><img id="bxid_673994" class="portf_prev_img" src="/verstka/images/portf4.png"  /></a></div>
           </div>
           
           <div class="portf_div">
           <div class="portf_div_inner"><a id="bxid_654100" href="" ><img id="bxid_121642" class="portf_prev_img" src="/verstka/images/portf5.png"  /></a></div>
           <div class="portf_div_inner">
           <div class="portf_preview">
           <div><a id="bxid_454885" href="" >иприм-энергия</a></div>
           <a id="bxid_662034" class="portf_preview_link" target="_blank" href="http://iprim-energy.ru/" >iprim-energy.ru</a>
           <div class="portf_preview_text">
           Это гарантирует качество работы и позволяет значительно ускорить процесс разработки интернет-ресурса любой сложности, а также снизить затраты на внедрение
           комплексных бизнес-решений.<br />
           В эффективности наших решений уже убедилось множество известных российских компаний. 
           </div>
           <a id="bxid_581600" class="portf_detail_link" href="" >смотреть кейс</a>
           </div>
           </div>
           </div>
    */?> <?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"portfolio", 
	array(
		"IBLOCK_TYPE" => "Portfolio",
		"IBLOCK_ID" => "5",
		"NEWS_COUNT" => "10",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_REVIEW" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER2" => "ASC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/portfolio/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"USE_PERMISSIONS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "250",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "LINK",
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
			0 => "P_LINK",
			1 => "BUDGET",
			2 => "RELEASE_DATA",
			3 => "POSITION",
			4 => "RENDERED_TEMPLATES",
			5 => "NAME_VN_PAGES",
			6 => "NAME_ONE",
			7 => "NAME_TWO",
			8 => "NAME_TREE",
			9 => "NAME_FOR",
			10 => "DESCRIPTION_VN_PAGES",
			11 => "DESCRIPTION_OF_DESIGN",
			12 => "DESCRIPTION_OF_DESIGN_2",
			13 => "DESCRIPTION_ONE",
			14 => "DESCRIPTION_TWO",
			15 => "DESCRIPTION_TREE",
			16 => "DESCRIPTION_FOR",
			17 => "PRODUCT_DEVELOPMENT",
			18 => "LINK",
			19 => "P_LINK_TWO",
			20 => "TYPE_PROGECT",
			21 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "Y",
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
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>
<div class="bottom_bgd"></div>
 </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>