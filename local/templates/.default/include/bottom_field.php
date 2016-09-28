 <div class="footer_wrapper">
    <div class="footer_consultation_background">
    <div class="footer_consultation">
        <div class="footer_consultation_text1"><?=GetMessage("FOOTER_TEXT1")?></div>
        <div class="footer_consultation_text2"><?=GetMessage("FOOTER_TEXT2")?></div>
        <div class="footer_consultation_button" onclick="show_popup()">
            <?=GetMessage("ORDER_CONSULTATION")?>
        </div>        
    </div>
    </div>
    <div class="footer_content_wrapper">
        <div class="footer_content">
            <div class="footer_div">                    
            <?$APPLICATION->IncludeComponent("bitrix:menu", "menu_solutions_footer", Array(
    "ROOT_MENU_TYPE" => "bottom_solutions",    // ��� ���� ��� ������� ������
        "MENU_CACHE_TYPE" => "N",    // ��� �����������
        "MENU_CACHE_TIME" => "3600",    // ����� ����������� (���.)
        "MENU_CACHE_USE_GROUPS" => "Y",    // ��������� ����� �������
        "MENU_CACHE_GET_VARS" => "",    // �������� ���������� �������
        "MAX_LEVEL" => "1",    // ������� ����������� ����
        "CHILD_MENU_TYPE" => "left",    // ��� ���� ��� ��������� �������
        "USE_EXT" => "N",    // ���������� ����� � ������� ���� .���_����.menu_ext.php
        "DELAY" => "N",    // ����������� ���������� ������� ����
        "ALLOW_MULTI_SELECT" => "N",    // ��������� ��������� �������� ������� ������������
        "COMPONENT_TEMPLATE" => "menu_services_footer"
    ),
    false
);?>
            </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu", 
                    "menu_services_footer", 
                    array(
                        "ROOT_MENU_TYPE" => "bottom_services",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MAX_LEVEL" => "1",
                        "CHILD_MENU_TYPE" => "left",
                        "USE_EXT" => "N",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N",
                        "COMPONENT_TEMPLATE" => "menu_services_footer"
                    ),
                    false
                );?>

                <div class="footer_div footer_div_last">
                    <div class="footer_div_title">��������� � ����</div>
                    <div class="footer_list">
                        <div class="footer_phone">
                            <?
                                $altasib_city = getAltasibCity();
                                $phone_include_file = $altasib_city == "����" ? "tula_phone.php" : "phone.php";
                            ?>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include", 
                                ".default", 
                                array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/" . $phone_include_file,
                                    "EDIT_TEMPLATE" => ""
                                    ),
                                false
                            );?>
                        </div>
                        <div class="footer_email">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include", 
                                ".default", 
                                array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/mail.php",
                                    "EDIT_TEMPLATE" => ""
                                    ),
                                false
                            );?>
                        </div>
                    </div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:search.form", 
                        "search", 
                        array(
                            "COMPONENT_TEMPLATE" => "search",
                            "PAGE" => "#SITE_DIR#search/index.php",
                            "USE_SUGGEST" => "N"
                        ),
                        false
                    );?>
                </div>
            </div>

            <div class="footer_grey">
            <div class="after_footer_grey"><a href="http://www.webgk.ru/">�������� �����</a> - WebGK</div>
            </div>
            <div class="footer_black"></div>


        </div>

        <footer>
            <div class="bottom_line_div">� "OSG | Online System Group" <mark>���������������� ��������� CRM-������ � ������������� �������� �� ���� �������24</mark></div>

            <!-- Yandex.Metrika counter --> 
            <script type="text/javascript"> 
                (function (d, w, c) { 
                    (w[c] = w[c] || []).push(function() { 
                        try { 
                            w.yaCounter8362138 = new Ya.Metrika({ 
                                id:8362138, 
                                clickmap:true, 
                                trackLinks:true, 
                                accurateTrackBounce:true, 
                                webvisor:true 
                            }); 
                        } catch(e) { } 
                    }); 

                    var n = d.getElementsByTagName("script")[0], 
                    s = d.createElement("script"), 
                    f = function () { n.parentNode.insertBefore(s, n); }; 
                    s.type = "text/javascript"; 
                    s.async = true; 
                    s.src = "https://mc.yandex.ru/metrika/watch.js"; 

                    if (w.opera == "[object Opera]") { 
                        d.addEventListener("DOMContentLoaded", f, false); 
                    } else { f(); } 
                })(document, window, "yandex_metrika_callbacks"); 
            </script> 

            <!-- /Yandex.Metrika counter --> 
        </footer>

    </div>

</div>
<div class="forma popup" id="p1">
    <div class="close"></div>
    <div class="h1" id="js_project_form_header">
        <?=GetMessage("ORDER_FORM")?>
    </div>    
    <form method="post" id="form">
        <label><input autocomplete="off" type="text" class="input req right" name="NAME" placeholder="<?=GetMessage("YOUR_NAME")?>" value=""/></label>
        <label><input autocomplete="off" type="text" class="input req" name="COMPANY" placeholder="<?=GetMessage("COMPANY")?>" value=""/></label>
        <label><input autocomplete="off" type="text" class="input req right" name="EMAIL" placeholder="<?=GetMessage("EMAIL")?>" value=""/></label>
        <label><input autocomplete="off" type="text" class="input req" name="PHONE" placeholder="<?=GetMessage("PHONE")?>" value=""/></label>
        <label><textarea class="textarea req" name="TEXT" placeholder="<?=GetMessage("TEXT")?>"></textarea></label>       
        <div class="h2">
            <?=GetMessage("ORDER_TEXT")?>                        
        </div>
        <button type="submit" class="button"><?=GetMessage("SEND_FORM")?></button>  
        <button type="reset" class="button2"><?=GetMessage("CLEAR")?></button> 
    </form>
</div>