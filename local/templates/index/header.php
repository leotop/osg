<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
        

        <link rel="icon" href="/osg_fav.png" type="image/png">
        <link rel="shortcut icon" href="/osg_fav.png" type="image/png">
                
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
        
        <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle();?></title>  
    </head>

    <body>
  <?$APPLICATION->ShowPanel()?>
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

                <div class="header_bgd">
                    <div class="header_bgd_wrapper">

                    <?include($_SERVER['DOCUMENT_ROOT'].'/local/templates/.default/include/top_field.php')?>

                        <div class="header_slide">

                            <div class="header_slide_img"><img src="/verstka/images/slide1.png" /></div>
                        </div>
                        <div class="slide_text">
                            <div class="slide_text_content">
                                <div class="slide_top_text_content">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include", 
                                    ".default", 
                                    array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => "/include/slide_text_top.php",
                                        "EDIT_TEMPLATE" => ""
                                        ),
                                    false
                                );?>
                                </div>
                                <div class="slide_main_text_content">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include", 
                                    ".default", 
                                    array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => "/include/slide_text_main.php",
                                        "EDIT_TEMPLATE" => ""
                                        ),
                                    false
                                );?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </header>
