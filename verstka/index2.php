<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Главная
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />

        <link rel="stylesheet" type="text/css" href="/verstka/css/styles2.css"/>
        <script src="/verstka/js/jquery.min.js" type="text/javascript"></script>
        <script type='text/javascript' src='/verstka/js/script2.js'></script>

        <script>
            brands_width13=0; 
            
            function move_check(num) {    
                //var cur_num=Math.abs(parseInt($('.brands_content').css("left")))/parseInt($('.brands_content > div').css("width"))*1+1;
               $('.brands_content img').find('img').removeClass('orange_img');
                
                var curIndex=num;
              
                var point=parseInt($('.brand').length/3);  
                if (curIndex<=point) {
                    var left=parseInt($('.brands_content').css("left"))-brands_width13;
                    $('.brands_content').css("left", left+'px');
                $('.brand').eq(num+point-1).find('img').addClass('orange_img');
                }
                else if (curIndex>point*2) {
var left=parseInt($('.brands_content').css("left"))*1+brands_width13;
 $('.brand').eq(num-point-1).find('img').addClass('orange_img');
                    $('.brands_content').css("left", left+'px');  
                } 
            } 


            
    $(function() {
    
           
                    /* $('.brand').click(function() {
                    // var newLeft=0;
                    var num=$(this).index()*1+1;  //порядковый номер брэнда

                    var point=parseInt($('.brands_content > div').length/3);    //длина одного набора брэндов из трех
                    if (num<=point) {var direction="+";} else {var direction="-";}    // направление движение слайдера

                    var move=0;

                    //разница между текущим и нач. позицией в px
                    var razn=(Math.abs(parseInt($('.brands_content').css("left")))-(parseInt($('.brands_content > div').css("width"))*point))/parseInt($('.brands_content > div').css("width"));


                    move=num-point-1-razn;

                    console.log('порядковый номер брэнда '+num);
                    console.log('длина одного набора брэндов из трех '+point);
                    console.log(move);

                    var moveWidth=move*parseInt($('.brands_content > div').css("width"));  //смещение ленты в px 
                    //alert(moveWidth);

                    //alert(moveWidth);

                    // var currentLeft=parseInt($('.brands_content > div').css("left")); 
                    var currentLeft=parseInt($('.brands_content').css("left"));       

                    var newLeft=moveWidth+'px'; 

                    //  console.log(moveWidth);
                    //  console.log(currentLeft);
                    //  console.log(newLeft);


                    if (direction=='-') {


                    $('.brands_content').animate({left:"-=" + newLeft});
                    } //кол-во на кот надо сдвинуть
                    else {

                    $('.brands_content').animate({left:"+=" + newLeft});  

                    }

                    // alert(num); 


                    //alert($(this).offset().left); 
                    }); */ 
            });
            
            
            $(window).load(function()  {
                paddings_index();
                bgd_height();
                brands_tabs();
               
                
                 //дублируем начальные элементы 2 раза, чтобы каждый элемент был в 3 экземплярах 
    $('.brands_content').html($('.brands_content').html() + $('.brands_content').html() + $('.brands_content').html());
    
     var  brandss_width=parseInt($('body').css("width"));
   
   
    //$('.brand')
  
  var brands_count=$('.brand').length;
  //alert(brands_count);
    
   var brands_width=0;               //ширина блока с брэндами
    
   $('.brand').each(function() {
       //alert(parseInt($(this).css("width")));
         
       brands_width+=parseInt($(this).css("width"))*1+parseInt($(this).css("margin-right"));  
    }); 
    brands_width=brands_width-90;
    
    
    var i=1;
    $('.brand').each(function() {                    //ширина 1\3 блока с брэндами
        if (i<=brands_count/3) {
         brands_width13+=parseInt($(this).css("width"))*1+parseInt($(this).css("margin-right"));
        }
    i++;
    });
    //brands_width+=($('.brands_content > div').length-1)*90;
    
   
    $('.brands_content').css('width', brands_width+'px');
    
    var b_width=parseInt($('.brands_content').css("width"));
    //alert(count);
    
    
   // alert(brands_width);
   // alert(b_width);
    
    $('.brands_content').css('left', '-'+brands_width13+'px');    

                    if ($('.footer_input input:text').val()!='Поиск по сайту') {$('.footer_input input:text').css('color', '#fff');}
                    //alert($('.shop:first').offset().left);


                    $('.brand').click(function() {
                        
                        
             $(this).find('img').addClass('orange_img');
             $('.brands_content img').not($(this).find('img')).removeClass('orange_img');
                        
              
             //$(this).attr('src',this_src);          
                        
                        
                        
                            // alert(parseInt($(this).css("width")));

                            var br_left=Math.abs(parseInt($('.brands_content').css('left')));     //текущее смещение брэндов    
                            var brands_width=0;
                             $('.brand').each(function() {
                         //alert($(this).eq) ;               
                          
                          //находим порядковый номер текущего брэнда                     
                            brands_width+=parseInt($(this).css("width"))*1+parseInt($(this).css("margin-right"));
                            if (brands_width==br_left) {cur_num=$(this).index()*1+2;} 
                             });
                            
                           
                            //порядковый номер нового брэнда
                            var num=parseInt($(this).index()*1+1);  //порядковый номер брэнда

                            
                            
                            
                            
                            //alert(num);
                            
                            /*
                            this_src=$('.brand').eq(num-1).find('img').attr('src');
                            // меняем картинки на красные при наведении
              arr_src=this_src.split('/');
              old_name_spl=arr_src[2].split('.');
              //alert(old_name_spl[0]);
              this_src.replace(old_name_spl[0], old_name_spl[0]+'_red');
              $(this).find('img').attr('src', arr_src[0]+'/'+arr_src[1]+'/'+old_name_spl[0]+'_red.png');
                                                                                                          */
                            
                            
                            
                            
                            
                            
                           // console.log(cur_num);
                           // console.log(num);
                                
                          //  alert(cur_num);
                          //  alert(num);
                            
                            if (cur_num<num) {
                                //разница в шт. брэндов 
                                var razn=num-cur_num;

                                
                                
                                
                                var raznPx=razn*90;
                             //   console.log(raznPx);
                                $('.brand').each(function() {
                                        var curIndex=$(this).index()*1+1;
                                        
                                        
                                        // console.log

                                        if (curIndex>=cur_num && curIndex<num) {
                                            raznPx+=parseInt($(this).css("width"));  
                                            //console.log(raznPx);
                                        }
                                });
                                
                              

                                $('.brands_content').animate({left:"-=" + raznPx}, move_check(num));  
                            }

                            else {
                                var razn=cur_num-num;

                                var  raznPx=razn*90;
                                $('.brand').each(function() {
                                        var curIndex=$(this).index()*1+1;
                                       
                                        // console.log

                                        if (curIndex<cur_num && curIndex>=num) {
                                            raznPx+=parseInt($(this).css("width"));  
                                        }
                                });

                                $('.brands_content').animate({left:"+=" + raznPx}, move_check(num));  
                            }
                    });    
            });
        </script>
    </head>

    <body>

        <div class="wrapper">
            <header>
                <div class="top_menu">
                    <div>
                        <ul>
                            <li><a href="#">компания</a></li>
                            <li><a href="#">решения</a></li>
                            <li><a href="#">услуги</a></li>
                            <li><a href="#">портфолио</a></li>
                            <li><a href="#">партнерам</a></li>
                            <li><a href="#">техподдержка</a></li>
                            <li><a href="#">вакансии</a></li>
                            <li><a href="#">контакты</a></li>
                        </ul>

                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="header_bgd">
                    <div class="header_bgd_wrapper">

                        <div class="site_titles">
                            <div class="logo"><a href="/"><img src="/verstka/images/logo.png" /></a></div>
                            <div class="site_titles_wrapper">
                                <div class="defis"><img src="/verstka/images/defis.png" /></div>
                                <div class="header_descr">Профессиональные решения для разработки и создания интернет магазинов и сайтов. <mark>Готовые интернет магазины.</mark></div>
                            </div>

                            <div class="site_titles_right">
                                <div><mark>(495)</mark> 215-20-29</div>
                                <div>info@osg.ru</div> 
                            </div>
                        </div>

                        <div class="header_slide">

                            <div class="header_slide_img"><img src="/verstka/images/slide1.png" /></div>
                        </div>
                        <div class="slide_text">
                            <div class="slide_text_content">
                                <div>компания online system group <mark>представляет</mark></div>
                                <div>Готовые решения и комплексные услуги <mark>по разработке сайтов и созданию интернет магазинов с управлением из "1С:Предприятие".</mark><br /><br />

                                    Для создания интернет магазина мы используем решения компании <mark>1С-Bitrix</mark>, а так же применяем собственные уникальные технологии <mark>OSG WebShop™</mark> и <mark>Fodex+™</mark>, позволяющие максимально эффективно использовать всемирную сеть 
                                    Internet для развития Вашего бизнеса.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </header>

            <div class="index_wrapper1">
                <div class="content_block1">
                    <div class="orange_line"><span>заказать</span></div>
                    <div class="content_block1_left">
                        <div class="content_block_title">при создании интернет магазина вы можете</div>



                        <div class="services_list">
                            <div class="service_div">
                                <a href="">
                                    <span class="service_list_number">01</span><span class="service_list_title black">продвижение интернет магазина и поисковую оптимизацию</span>
                                    <div><img src="/verstka/images/osg_final_011.png" />
                                    </div><span class="service_bgd"></span>
                                </a>
                            </div>

                            <div class="service_div">
                                <a href="">
                                    <span class="service_list_number">02</span><span class="service_list_title">техническую поддержку и хостинг</span>
                                    <div><img src="/verstka/images/s1.png" />
                                    </div><span class="service_bgd"></span>
                                </a>
                            </div>

                            <div class="service_div s_margins">
                                <a href="">
                                    <span class="service_list_number">03</span><span class="service_list_title">аренду интернет магазина</span>
                                    <div><img src="/verstka/images/s3.png" />
                                    </div><span class="service_bgd"></span>
                                </a>
                            </div>

                            <div class="service_div margintop2">
                                <a href="">
                                    <span class="service_list_number">04</span><span class="service_list_title black">информационное наполнение интернет-магазина</span>
                                    <div><img src="/verstka/images/s4.png" />
                                    </div><span class="service_bgd"></span>
                                </a>
                            </div>

                            <div class="service_div s_margins">
                                <a href="">
                                    <span class="service_list_number">05</span><span class="service_list_title black">разработку дизайна сайта</span>
                                    <div><img src="/verstka/images/s5.png" />
                                    </div><span class="service_bgd"></span>
                                </a>
                            </div>

                            <div class="service_div margintop2">
                                <a href="">
                                    <span class="service_list_number">06</span><span class="service_list_title">разработку полного интернет-проекта</span>
                                    <div><img src="/verstka/images/s6.png" />
                                    </div><span class="service_bgd"></span>
                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="content_block1_right">

                        <div class="news_block">
                            <div class="content_block1_right_top">
                                <div class="content_block_title">новости компании</div>
                                <div class="content_block1_defis"><img src="/verstka/images/defis2.png" /></div>
                                <div><a href="">Архив новостей</a></div>
                            </div>

                            <div class="news_list">
                                <div class="news_list_div">
                                    <div class="news_list_title"><a href="#">Интернет магазин на Битрикс</a></div>
                                    <div class="news_list_announce">Широкий выбор решений для вашего магазина</div>
                                    <div>03/11</div>
                                </div>

                                <div class="news_list_div">
                                    <div class="news_list_title"><a href="#">Акция от компании "Онлайн Систем Груп"</a></div>
                                    <div class="news_list_announce">Интернет-магазины от 27900 рублей. Готовые решения для вашего бизнеса!</div>
                                    <div>01/11</div>
                                </div>

                                <div class="right_border_div"></div>
                            </div>
                        </div>


                        <div class="news_block">
                            <div class="content_block1_right_top">
                                <div class="content_block_title">пресс-релизы</div>
                                <div class="content_block1_defis"><img src="/verstka/images/defis2.png" /></div>
                                <div><a href="">Архив пресс-релизов</a></div>
                            </div>

                            <div class="news_list">
                                <div class="news_list_div">
                                    <div class="news_list_title"><a href="#">Интернет магазин на Битрикс</a></div>
                                    <div class="news_list_announce">Широкий выбор решений для вашего магазина</div>
                                    <div>03/11</div>
                                </div>

                                <div class="news_list_div">
                                    <div class="news_list_title"><a href="#">Акция от компании "Онлайн Систем Груп"</a></div>
                                    <div class="news_list_announce">Интернет-магазины от 27900 рублей. Готовые решения для вашего бизнеса!</div>
                                    <div>01/11</div>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="content_block1_grey"></div> 
                    <div class="content_block1_shadow"></div> 
                </div>


            </div>



            <div class="services_list2">
                <div class="services_list2_title"><mark>что</mark> мы делаем?</div>
                <div class="service_div_wrapper2">
                    <div class="service_div2">
                        <a href="">
                            <div><img class="service_div2_img" src="/verstka/images/s211.png" />
                            </div><span class="service_bgd2">
                                <span class="service_list_title2">создание <mark>интернет магазинов</mark></span><img class="service_list_arrow2" src="/verstka/images/arrow.png" />
                            </span>
                        </a>
                    </div>


                    <div class="service_div2">
                        <a href="">
                            <div><img class="service_div2_img" src="/verstka/images/s21.png" />
                            </div><span class="service_bgd2">
                                <span class="service_list_title2">создание <mark>интернет магазинов</mark></span><img class="service_list_arrow2" src="/verstka/images/arrow.png" />
                            </span>
                        </a>
                    </div>


                    <div class="service_div2">
                        <a href="">
                            <div><img class="service_div2_img" src="/verstka/images/s22.png" />
                            </div><span class="service_bgd2">
                                <span class="service_list_title2">создание <mark>интернет магазинов</mark></span><img class="service_list_arrow2" src="/verstka/images/arrow.png" />
                            </span>
                        </a>
                    </div>


                    <div class="service_div2">
                        <a href="">
                            <div><img class="service_div2_img" src="/verstka/images/s23.png" />
                            </div><span class="service_bgd2">
                                <span class="service_list_title2">создание <mark>интернет магазинов</mark></span><img class="service_list_arrow2" src="/verstka/images/arrow.png" />
                            </span>
                        </a>
                    </div>


                </div>


                <div class="s2_border"></div>

            </div>


            <div class="index_wrapper2">

                <div class="content_block2">
                    <div class="brands">

                        <div class="brands_content">

                            <div class="brand" id="b6">
                                <a href="javascript:void(0)">
                                    <div class="brand_inner">
                                        <img src="/verstka/images/osg05.png" />
                                    </div>
                                </a>
                            </div>

                            <div class="brand" id="b5">
                                <a href="javascript:void(0)">
                                    <div class="brand_inner">
                                        <img src="/verstka/images/osg04.png" />
                                    </div>
                                </a>
                            </div>

                            <div class="brand" id="b4">
                                <a href="javascript:void(0)">
                                    <div class="brand_inner">
                                        <img src="/verstka/images/osg03.png" />
                                    </div>
                                </a>
                            </div>

                            <div class="brand" id="b3">
                                <a href="javascript:void(0)">
                                    <div class="brand_inner">
                                        <img src="/verstka/images/b3.png" />
                                    </div>
                                </a>
                            </div>

                            <div class="brand" id="b2">
                                <a href="javascript:void(0)">
                                    <div class="brand_inner">
                                        <img src="/verstka/images/osg02.png" />
                                    </div>
                                </a>
                            </div>

                            <div class="brand" id="b1">
                                <a href="javascript:void(0)">
                                    <div class="brand_inner">
                                        <img src="/verstka/images/osg01.png" />
                                    </div>
                                </a>
                            </div>


                        </div> 
                    </div>   

                    <div class="banners_fff"></div>
                </div>

            </div>

            <div class="shops_list">
                <div class="shop shop_left">
                    <img class="arrow_img" src="/verstka/images/arrow_shops.png" />
                    <div class="shop_content">
                        <div class="shop_text" id="i6">
                        <div class="shop_title"><mark>F </mark>- магазин</div>
                        <div class="shop_desc">F</div>
                        </div>
                        
                        <div class="shop_text invisible" id="i5">
                        <div class="shop_title"><mark>аутсортинг </mark>- магазин</div>
                        <div class="shop_desc">аутсортинг</div>
                        </div>
                        
                        <div class="shop_text invisible" id="i4">
                        <div class="shop_title"><mark>пет-онлайн </mark>- магазин</div>
                        <div class="shop_desc">пет-онлайн</div>
                        </div>
                                      
                        
                        <div class="shop_text invisible" id="i3">
                        <div class="shop_title"><mark>miele </mark>- магазин техники</div>
                        <div class="shop_desc">Miele является единственной торговой маркой бытовой техники премиум класса, а также промышленного прачечного, моечного и дезинфекционного оборудования, представленной на пяти континентах земного шара.</div>
                        </div>
                        
                        <div class="shop_text invisible" id="i2">
                        <div class="shop_title"><mark>Regon </mark>- магазин</div>
                        <div class="shop_desc">Regon</div>
                        </div>
                        
                        <div class="shop_text invisible" id="i1">
                        <div class="shop_title"><mark>За рулем </mark>- журнал</div>
                        <div class="shop_desc">За рулем</div>
                        </div>
                        <a class="shop_button" href="#">Смотреть кейс</a>
                    </div>
                </div> 
                
                
                <div class="shop shop_right">
                    <div class="shop_content">
                        <div class="shop_title shop_title_grey">Технологии OSG успешно используют</div>
                        <div class="shop_bold">более <mark>350 компаний.</mark></div>
                        <a class="shop_button" href="#">Все проекты</a>
                    </div>
                </div>

                <div class="shops_bgd"></div> 
            
            </div>


            <div class="content_block3">
                <div class="orange_line2"><span>почему мы?</span></div>
            </div>


            <div class="index_wrapper3">
                <div class="index_wrapper3_content">
                    <div class="index_wrapper3_div">
                        <div class="defis3"></div>
                        <div class="index_wrapper3_div_desc"><div>Более 300 внедренных решений интегрированных с 1С.</div>
                            <div>Это больше всех.</div>
                        </div>
                    </div>

                    <div class="index_wrapper3_div">
                        <div class="defis3"></div>
                        <div class="index_wrapper3_div_desc"><div>Компания OSG является</div>
                            <div>1С: Франчайзи</div>
                        </div>
                    </div>

                    <div class="index_wrapper3_div">
                        <div class="defis3"></div>
                        <div class="index_wrapper3_div_desc"><div>Собственные решения, интегрированные с 1С</div>
                            <div>Успешно внедрены</div>
                        </div>
                    </div>

                    <img src="/verstka/images/img3.png" />

                    <div class="index_wrapper3_bottom">
                        самое выгодное <mark>сотрудничество для вас</mark>
                    </div>

                </div>
            </div>


        </div>



        <div class="footer_wrapper">
            <div class="footer_content_wrapper">

                <div class="footer_content">
                    <div class="footer_div">
                        <div class="footer_div_title">готовые решения</div>
                        <div class="footer_list">
                            <div><a href="#">1С-Битрикс: Управление сайтом</a></div>
                            <div><a href="#">Интернет-магазин FODEX +</a></div>
                            <div><a href="#">OSG Deti.mags.ru</a></div>
                            <div><a href="#">OSG Интернет-магазин Enterprise для 1С</a></div>
                            <div><a href="#">Движок интернет-магазина</a></div>
                            <div><a href="#">OSG Интернет-магазин Start</a></div>
                        </div>
                    </div>

                    <div class="footer_div">
                        <div class="footer_div_title">услуги</div>
                        <div class="footer_list">
                            <div><a href="#">Увеличение конверсии интернет-магазинов</a></div>
                            <div><a href="#">Создание интернет-магазинов</a></div>
                            <div><a href="#">Продвижение интернет-магазинов</a></div>
                            <div><a href="#">Поддержка интернет-магазинов</a></div>
                            <div><a href="#">Аренда интернет-магазинов</a></div>
                            <div><a href="#">Интеграция интернет-магазинов с 1С</a></div>
                        </div>
                    </div>

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
                <div></div>
            </footer>

        </div>


    </body>
</html>