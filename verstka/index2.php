<!DOCTYPE HTML>
<html>
    <head>
        <title>
            �������
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
                    var num=$(this).index()*1+1;  //���������� ����� ������

                    var point=parseInt($('.brands_content > div').length/3);    //����� ������ ������ ������� �� ����
                    if (num<=point) {var direction="+";} else {var direction="-";}    // ����������� �������� ��������

                    var move=0;

                    //������� ����� ������� � ���. �������� � px
                    var razn=(Math.abs(parseInt($('.brands_content').css("left")))-(parseInt($('.brands_content > div').css("width"))*point))/parseInt($('.brands_content > div').css("width"));


                    move=num-point-1-razn;

                    console.log('���������� ����� ������ '+num);
                    console.log('����� ������ ������ ������� �� ���� '+point);
                    console.log(move);

                    var moveWidth=move*parseInt($('.brands_content > div').css("width"));  //�������� ����� � px 
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
                    } //���-�� �� ��� ���� ��������
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
               
                
                 //��������� ��������� �������� 2 ����, ����� ������ ������� ��� � 3 ����������� 
    $('.brands_content').html($('.brands_content').html() + $('.brands_content').html() + $('.brands_content').html());
    
     var  brandss_width=parseInt($('body').css("width"));
   
   
    //$('.brand')
  
  var brands_count=$('.brand').length;
  //alert(brands_count);
    
   var brands_width=0;               //������ ����� � ��������
    
   $('.brand').each(function() {
       //alert(parseInt($(this).css("width")));
         
       brands_width+=parseInt($(this).css("width"))*1+parseInt($(this).css("margin-right"));  
    }); 
    brands_width=brands_width-90;
    
    
    var i=1;
    $('.brand').each(function() {                    //������ 1\3 ����� � ��������
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

                    if ($('.footer_input input:text').val()!='����� �� �����') {$('.footer_input input:text').css('color', '#fff');}
                    //alert($('.shop:first').offset().left);


                    $('.brand').click(function() {
                        
                        
             $(this).find('img').addClass('orange_img');
             $('.brands_content img').not($(this).find('img')).removeClass('orange_img');
                        
              
             //$(this).attr('src',this_src);          
                        
                        
                        
                            // alert(parseInt($(this).css("width")));

                            var br_left=Math.abs(parseInt($('.brands_content').css('left')));     //������� �������� �������    
                            var brands_width=0;
                             $('.brand').each(function() {
                         //alert($(this).eq) ;               
                          
                          //������� ���������� ����� �������� ������                     
                            brands_width+=parseInt($(this).css("width"))*1+parseInt($(this).css("margin-right"));
                            if (brands_width==br_left) {cur_num=$(this).index()*1+2;} 
                             });
                            
                           
                            //���������� ����� ������ ������
                            var num=parseInt($(this).index()*1+1);  //���������� ����� ������

                            
                            
                            
                            
                            //alert(num);
                            
                            /*
                            this_src=$('.brand').eq(num-1).find('img').attr('src');
                            // ������ �������� �� ������� ��� ���������
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
                                //������� � ��. ������� 
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
                            <li><a href="#">��������</a></li>
                            <li><a href="#">�������</a></li>
                            <li><a href="#">������</a></li>
                            <li><a href="#">���������</a></li>
                            <li><a href="#">���������</a></li>
                            <li><a href="#">������������</a></li>
                            <li><a href="#">��������</a></li>
                            <li><a href="#">��������</a></li>
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
                                <div class="header_descr">���������������� ������� ��� ���������� � �������� �������� ��������� � ������. <mark>������� �������� ��������.</mark></div>
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
                                <div>�������� online system group <mark>������������</mark></div>
                                <div>������� ������� � ����������� ������ <mark>�� ���������� ������ � �������� �������� ��������� � ����������� �� "1�:�����������".</mark><br /><br />

                                    ��� �������� �������� �������� �� ���������� ������� �������� <mark>1�-Bitrix</mark>, � ��� �� ��������� ����������� ���������� ���������� <mark>OSG WebShop�</mark> � <mark>Fodex+�</mark>, ����������� ����������� ���������� ������������ ��������� ���� 
                                    Internet ��� �������� ������ �������.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </header>

            <div class="index_wrapper1">
                <div class="content_block1">
                    <div class="orange_line"><span>��������</span></div>
                    <div class="content_block1_left">
                        <div class="content_block_title">��� �������� �������� �������� �� ������</div>



                        <div class="services_list">
                            <div class="service_div">
                                <a href="">
                                    <span class="service_list_number">01</span><span class="service_list_title black">����������� �������� �������� � ��������� �����������</span>
                                    <div><img src="/verstka/images/osg_final_011.png" />
                                    </div><span class="service_bgd"></span>
                                </a>
                            </div>

                            <div class="service_div">
                                <a href="">
                                    <span class="service_list_number">02</span><span class="service_list_title">����������� ��������� � �������</span>
                                    <div><img src="/verstka/images/s1.png" />
                                    </div><span class="service_bgd"></span>
                                </a>
                            </div>

                            <div class="service_div s_margins">
                                <a href="">
                                    <span class="service_list_number">03</span><span class="service_list_title">������ �������� ��������</span>
                                    <div><img src="/verstka/images/s3.png" />
                                    </div><span class="service_bgd"></span>
                                </a>
                            </div>

                            <div class="service_div margintop2">
                                <a href="">
                                    <span class="service_list_number">04</span><span class="service_list_title black">�������������� ���������� ��������-��������</span>
                                    <div><img src="/verstka/images/s4.png" />
                                    </div><span class="service_bgd"></span>
                                </a>
                            </div>

                            <div class="service_div s_margins">
                                <a href="">
                                    <span class="service_list_number">05</span><span class="service_list_title black">���������� ������� �����</span>
                                    <div><img src="/verstka/images/s5.png" />
                                    </div><span class="service_bgd"></span>
                                </a>
                            </div>

                            <div class="service_div margintop2">
                                <a href="">
                                    <span class="service_list_number">06</span><span class="service_list_title">���������� ������� ��������-�������</span>
                                    <div><img src="/verstka/images/s6.png" />
                                    </div><span class="service_bgd"></span>
                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="content_block1_right">

                        <div class="news_block">
                            <div class="content_block1_right_top">
                                <div class="content_block_title">������� ��������</div>
                                <div class="content_block1_defis"><img src="/verstka/images/defis2.png" /></div>
                                <div><a href="">����� ��������</a></div>
                            </div>

                            <div class="news_list">
                                <div class="news_list_div">
                                    <div class="news_list_title"><a href="#">�������� ������� �� �������</a></div>
                                    <div class="news_list_announce">������� ����� ������� ��� ������ ��������</div>
                                    <div>03/11</div>
                                </div>

                                <div class="news_list_div">
                                    <div class="news_list_title"><a href="#">����� �� �������� "������ ������ ����"</a></div>
                                    <div class="news_list_announce">��������-�������� �� 27900 ������. ������� ������� ��� ������ �������!</div>
                                    <div>01/11</div>
                                </div>

                                <div class="right_border_div"></div>
                            </div>
                        </div>


                        <div class="news_block">
                            <div class="content_block1_right_top">
                                <div class="content_block_title">�����-������</div>
                                <div class="content_block1_defis"><img src="/verstka/images/defis2.png" /></div>
                                <div><a href="">����� �����-�������</a></div>
                            </div>

                            <div class="news_list">
                                <div class="news_list_div">
                                    <div class="news_list_title"><a href="#">�������� ������� �� �������</a></div>
                                    <div class="news_list_announce">������� ����� ������� ��� ������ ��������</div>
                                    <div>03/11</div>
                                </div>

                                <div class="news_list_div">
                                    <div class="news_list_title"><a href="#">����� �� �������� "������ ������ ����"</a></div>
                                    <div class="news_list_announce">��������-�������� �� 27900 ������. ������� ������� ��� ������ �������!</div>
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
                <div class="services_list2_title"><mark>���</mark> �� ������?</div>
                <div class="service_div_wrapper2">
                    <div class="service_div2">
                        <a href="">
                            <div><img class="service_div2_img" src="/verstka/images/s211.png" />
                            </div><span class="service_bgd2">
                                <span class="service_list_title2">�������� <mark>�������� ���������</mark></span><img class="service_list_arrow2" src="/verstka/images/arrow.png" />
                            </span>
                        </a>
                    </div>


                    <div class="service_div2">
                        <a href="">
                            <div><img class="service_div2_img" src="/verstka/images/s21.png" />
                            </div><span class="service_bgd2">
                                <span class="service_list_title2">�������� <mark>�������� ���������</mark></span><img class="service_list_arrow2" src="/verstka/images/arrow.png" />
                            </span>
                        </a>
                    </div>


                    <div class="service_div2">
                        <a href="">
                            <div><img class="service_div2_img" src="/verstka/images/s22.png" />
                            </div><span class="service_bgd2">
                                <span class="service_list_title2">�������� <mark>�������� ���������</mark></span><img class="service_list_arrow2" src="/verstka/images/arrow.png" />
                            </span>
                        </a>
                    </div>


                    <div class="service_div2">
                        <a href="">
                            <div><img class="service_div2_img" src="/verstka/images/s23.png" />
                            </div><span class="service_bgd2">
                                <span class="service_list_title2">�������� <mark>�������� ���������</mark></span><img class="service_list_arrow2" src="/verstka/images/arrow.png" />
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
                        <div class="shop_title"><mark>F </mark>- �������</div>
                        <div class="shop_desc">F</div>
                        </div>
                        
                        <div class="shop_text invisible" id="i5">
                        <div class="shop_title"><mark>���������� </mark>- �������</div>
                        <div class="shop_desc">����������</div>
                        </div>
                        
                        <div class="shop_text invisible" id="i4">
                        <div class="shop_title"><mark>���-������ </mark>- �������</div>
                        <div class="shop_desc">���-������</div>
                        </div>
                                      
                        
                        <div class="shop_text invisible" id="i3">
                        <div class="shop_title"><mark>miele </mark>- ������� �������</div>
                        <div class="shop_desc">Miele �������� ������������ �������� ������ ������� ������� ������� ������, � ����� ������������� ����������, �������� � ���������������� ������������, �������������� �� ���� ����������� ������� ����.</div>
                        </div>
                        
                        <div class="shop_text invisible" id="i2">
                        <div class="shop_title"><mark>Regon </mark>- �������</div>
                        <div class="shop_desc">Regon</div>
                        </div>
                        
                        <div class="shop_text invisible" id="i1">
                        <div class="shop_title"><mark>�� ����� </mark>- ������</div>
                        <div class="shop_desc">�� �����</div>
                        </div>
                        <a class="shop_button" href="#">�������� ����</a>
                    </div>
                </div> 
                
                
                <div class="shop shop_right">
                    <div class="shop_content">
                        <div class="shop_title shop_title_grey">���������� OSG ������� ����������</div>
                        <div class="shop_bold">����� <mark>350 ��������.</mark></div>
                        <a class="shop_button" href="#">��� �������</a>
                    </div>
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
                        <div class="index_wrapper3_div_desc"><div>����� 300 ���������� ������� ��������������� � 1�.</div>
                            <div>��� ������ ����.</div>
                        </div>
                    </div>

                    <div class="index_wrapper3_div">
                        <div class="defis3"></div>
                        <div class="index_wrapper3_div_desc"><div>�������� OSG ��������</div>
                            <div>1�: ���������</div>
                        </div>
                    </div>

                    <div class="index_wrapper3_div">
                        <div class="defis3"></div>
                        <div class="index_wrapper3_div_desc"><div>����������� �������, ��������������� � 1�</div>
                            <div>������� ��������</div>
                        </div>
                    </div>

                    <img src="/verstka/images/img3.png" />

                    <div class="index_wrapper3_bottom">
                        ����� �������� <mark>�������������� ��� ���</mark>
                    </div>

                </div>
            </div>


        </div>



        <div class="footer_wrapper">
            <div class="footer_content_wrapper">

                <div class="footer_content">
                    <div class="footer_div">
                        <div class="footer_div_title">������� �������</div>
                        <div class="footer_list">
                            <div><a href="#">1�-�������: ���������� ������</a></div>
                            <div><a href="#">��������-������� FODEX +</a></div>
                            <div><a href="#">OSG Deti.mags.ru</a></div>
                            <div><a href="#">OSG ��������-������� Enterprise ��� 1�</a></div>
                            <div><a href="#">������ ��������-��������</a></div>
                            <div><a href="#">OSG ��������-������� Start</a></div>
                        </div>
                    </div>

                    <div class="footer_div">
                        <div class="footer_div_title">������</div>
                        <div class="footer_list">
                            <div><a href="#">���������� ��������� ��������-���������</a></div>
                            <div><a href="#">�������� ��������-���������</a></div>
                            <div><a href="#">����������� ��������-���������</a></div>
                            <div><a href="#">��������� ��������-���������</a></div>
                            <div><a href="#">������ ��������-���������</a></div>
                            <div><a href="#">���������� ��������-��������� � 1�</a></div>
                        </div>
                    </div>

                    <div class="footer_div footer_div_last">
                        <div class="footer_div_title">��������� � ����</div>
                        <div class="footer_list">
                            <div class="footer_phone">(495) <mark>215-20-29</mark></div>
                            <div><a class="email_link">info@osg.ru</div>
                        </div>

                        <div class="footer_input"><input type="text" value="����� �� �����" onfocus="this.value=''; this.style.color='#fff';" />
                            <input type="submit" value=" " />
                        </div>
                    </div>
                </div>

                <div class="footer_grey">

                </div>
                <div class="footer_black"></div>


            </div>

            <footer>
                <div>� "OSG | Online System Group" <mark>�������� � ���������� �������� ��������</mark></div>
                <div></div>
            </footer>

        </div>


    </body>
</html>