brands_width13=0;              //ширина 1\3 блока с брэндами

function brands_tabs() {       //переключение описаний брэндов
    $('.brand').live('click',function() {
        var this_id=$(this).attr('id').slice(1);

        $('.shop_text').each(function() {
            //alert($(this).attr("id"));
            // alert(this_id);
            if ($(this).attr("id").slice(1)==this_id) {
                //alert(1);
                $(this).removeClass('invisible');
                $('.shop_text').not($(this)).addClass('invisible');
            }  
        });
        $('.shop_button').each(function() {
            //alert($(this).attr("id"));
            //alert(this_id);
            if ($(this).attr("id").slice(1)==this_id) {
                // alert(1);
                $(this).removeClass('invisible');
                $('.shop_button').not($(this)).addClass('invisible');
            }  
        });
    });
}

function bgd_height() {
    var screen_width=parseInt($('body').css("width"));
    var s2=screen_width/2;
    var s2_1=(screen_width)/2 + 135;
    //alert(980*1+s2);
    //alert(parseInt($('body').css("width")/2)+'px');
    //$('.brands').css('width', parseInt(980*1+s2)+'px');
    $('footer > div').eq(1).css('width', s2-490+'px');
    //$('footer > div:first').css('width', s2_1+'px');
}



//расчет отступов текста в длинных полосках (для главной страницы)
function paddings_index() {
    in_title2_width=parseInt($('.in_title2 span').css("width"));
    $('.in_title2').css('right', 980-in_title2_width-5+'px');

    in_title1_width=parseInt($('.in_title1 span').css("width"));
    $('.in_title1 span').css('right', 750-in_title1_width*1+2+'px');

    orage_width=parseInt($('.orange_line span').css("width"));
    $('.orange_line').css('right', 980-orage_width-12+'px');

    orage2_width=parseInt($('.orange_line2 span').css("width"));
    $('.orange_line2').css('left', 980-orage2_width-12+'px');
}


//расчет отступов текста в длинных полосках (для внутр. страниц)
function paddings() {
    in_title2_inner_width=parseInt($('.in_title2 span').css("width"));
    $('.in_title2').css('right', 980-in_title2_inner_width-5+'px');

    in_title1_inner_width=parseInt($('.in_title1 span').css("width"));
    $('.in_title1 span').css('right', 750-in_title1_inner_width*1+2+'px');

    orage_inner_width=parseInt($('.inner_orange span').css("width"));
    $('.inner_orange').css('right', 980-orage_inner_width-12+'px');
} 




