<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />

        <link rel="icon" href="/osg_fav.png" type="image/png">
        <link rel="shortcut icon" href="/osg_fav.png" type="image/png">
        
        <link rel="stylesheet" type="text/css" href="/verstka/css/styles2.css"/>
        <script src="/verstka/js/jquery.min.js" type="text/javascript"></script>
        <? $APPLICATION->AddHeadScript('/verstka/js/inner_pages_right_menu_fix.js') ?>
        <script type='text/javascript' src='/verstka/js/script2.js'></script>

        <script>
            $(window).load(function()  {
                bgd_height();
                paddings(); 
            });
        </script>
    
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle();?></title>
    </head>
    
    <body>
    <?$APPLICATION->ShowPanel()?>
        <div class="site_wrapper">
        <div class="wrapper">
            <header>     
                <?$APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
                "ROOT_MENU_TYPE" => "main",    // ��� ���� ��� ������� ������
                "MENU_CACHE_TYPE" => "N",    // ��� �����������
                "MENU_CACHE_TIME" => "3600",    // ����� ����������� (���.)
                "MENU_CACHE_USE_GROUPS" => "Y",    // ��������� ����� �������
                "MENU_CACHE_GET_VARS" => "",    // �������� ���������� �������
                "MAX_LEVEL" => "1",    // ������� ����������� ����
                "CHILD_MENU_TYPE" => "left",    // ��� ���� ��� ��������� �������
                "USE_EXT" => "N",    // ���������� ����� � ������� ���� .���_����.menu_ext.php
                "DELAY" => "N",    // ����������� ���������� ������� ����
                "ALLOW_MULTI_SELECT" => "N",    // ��������� ��������� �������� ������� ������������
                ), false);?>

                <div class="header_bgd_inner">
                    <div class="header_bgd_wrapper">

                        <?include($_SERVER['DOCUMENT_ROOT'].'/local/templates/.default/include/top_field.php') ?>

                    </div>
                </div>

            </header>

            
            <!--Content1-->
            <div class="index_wrapper1">
                <div class="index_wrapper1_content">
            
            
                <div class="content_inner1">
                  <div class="inner1_left">  
                    <div class="nav_div">
                        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb_new", array(
	"START_FROM" => "0",
	"PATH" => "",
	"SITE_ID" => "s1"
	),
	false
);?>
                    </div>
                    
                     <div class="in_title1"><span><?$APPLICATION->ShowTitle();?></span></div>
           
           <div class="quote">
           <?$APPLICATION->IncludeComponent(
           "bitrix:main.include",
           "",
           Array(
           "AREA_FILE_SHOW" => "page",
           "AREA_FILE_SUFFIX" => "inc",
           "EDIT_TEMPLATE" => ""
           ));?>
           </div>
                      
           <div class="in_title2"><span>Online System Group</span></div>
           
           </div>
           
           
           <?
                CModule::IncludeModule("iblock");
                 $arFilter = array ("IBLOCK_ID" => "10");
                 $arSelectFields = Array("ID","IBLOCK_ID","NAME","CODE");
                 $res = CIBlockElement::GetList( Array("SORT"=>"DESC"),$arFilter,false,array(),$arSelectFields);
            ?>                              
                <div class="inner1_right">
                    <ul class="inner1_ul">
                    <?while($ob = $res->Fetch()){?>
                        <li <?if ($_SERVER['REQUEST_URI'] == "/solutions/".$ob["CODE"]."/"){?>class= "selected"<?}?>><a href="/solutions/<?=$ob["CODE"]?>/"><?=$ob["NAME"]?></a></li>

                    <?}?>

                    </ul>
                </div>
            
           </div>
           </div>
</div>
<div class="inner_wrapper">