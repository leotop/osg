<div class="footer_wrapper">
            <div class="footer_content_wrapper">

                <div class="footer_content">
                    <div class="footer_div">
                        <div class="footer_div_title">готовые решения</div>
                        <div class="footer_list">
                            <div><a href="http://www.osg.ru/solutions/1c-bitrix-ypravlenie-saytom/">1С-Битрикс: Управление сайтом</a></div>
                            <div><a href="http://www.osg.ru/solutions/internet-magazin-fodex-plus/">Интернет-магазин FODEX +</a></div>
                            <div><a href="http://www.osg.ru/solutions/osg-deti-mags-ru/">OSG Deti.mags.ru</a></div>
                            <div><a href="http://www.osg.ru/solutions/osg-internet-magazin-enterprise-dlya-1c/">OSG Интернет-магазин Enterprise для 1С</a></div>
                  <!--          <div><a href="#">Движок интернет-магазина</a></div> -->
                            <div><a href="http://www.osg.ru/solutions/osg-internet-magazin-start/">OSG Интернет-магазин Start</a></div>
                        </div>
                    </div>

                    <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "menu_services_footer",
                    Array(
                    "ROOT_MENU_TYPE" => "right_services",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N"
                    ));?>

                    <div class="footer_div footer_div_last">
                        <div class="footer_div_title">свяжитесь с нами</div>
                        <div class="footer_list">
                            <div class="footer_phone">(495) <mark>215-20-29</mark></div>
                            <div><a class="email_link">info@osg.ru</div>
                        </div>

                        <div class="footer_input"><input type="text" value="Поиск по сайту" onfocus="this.value=''; this.style.color='#fff';" />
                            <input type="submit" value=" " />
                        </div>
                    </div>
                </div>

                <div class="footer_grey">

                </div>
                <div class="footer_black"></div>


            </div>

            <footer>
                <div>© "OSG | Online System Group" <mark>Создание и разработка интернет магазина</mark></div>

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
                <div></div>

            </footer>

        </div>

</div>
</div>

</body>
</html>