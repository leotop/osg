$(document).ready(function () {
    $("input[name='PHONE']").mask('+7(999)999-99-99');
    //�������� ������� ����
    $(".forma").submit(function(){
        
        var form = $(this);
        
        var reEmailCheck=/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.[a-z]{2,4}$/i;
        //��������� ����������� ����
        var br;


        $(this).find("input.req, textarea.req").each(function(){
            var el = $(this), val = el.val();

            if (val.indexOf("���������") !== -1) {
                val = "";
            }
            var validEmail = ($(this).attr("name")=="EMAIL") ? reEmailCheck.test(val) : true;



            if ((val.length > 0)&& validEmail) {}
            else {

                $(this).parent().removeClass("good");
                $(this).removeClass("good");
                $(this).parent().addClass("nogood");
                $(this).addClass("nogood");
                if (!validEmail)
                    $(this).val("��������� ��������� e-mail");
                if (val.length == 0)
                $(this).val("���������  "+ (el.attr("placeholder") || "����"));

                br = "yes";
            }

        });

        if (br == "yes") {

            return false;
        }

        //���� ���������� �������� �� ���������, �� ��������� ����, ������� ���������� ������ �� �����
        else {

            $.post("/local/templates/.default/ajax/email_send.php", {  
                NAME: form.find("input[name='NAME']").val(),
                COMPANY: form.find("input[name='COMPANY']").val(),
                PHONE: form.find("input[name='PHONE']").val(),
                EMAIL: form.find("input[name='EMAIL']").val(),
                TEXT: form.find("textarea[name='TEXT']").val(),
                }, function(data){
                    data = data.trim();
                    if (data == "OK") {                        
                            $("#js_project_form_header").text("���� ������ �������!");
                            $("#form").hide();
                            $("#js_project_form_header").css({"text-align": "center", "margin-top": "250px"});
                            setTimeout(function(){
                                $(".close").click();
                            }, 3000)
                            form.find("input[type=text], textarea").val("");     
                    } else {
                        alert("��������� ������! ��������� ������������ ��������� ������ � ���������� �����."); 
                    }   
            });                                             
        }

        return false;
        // $(this).parent().siblings("popup_close").click();

    });
    $("input.req, textarea.req").focus(function(){
        var el = $(this), val = el.val();
        if (val.indexOf("���������") !== -1) {
            el.val("");
        }
        el.parent().removeClass("nogood");
        el.removeClass("nogood");
    });
    $(".close").click(function(){
        popup_close($(this));
    });
});


//���������, ��������� ����������� ��������, ����� ������� ������ ����� ���������

function show_popup(){
    $("#p1").fadeIn(500);
    $(".wrapper").addClass("blur");
    $(".site_wrapper").addClass("blur");
    return false;
}
//�������� ������������ ����
function popup_close(e) {
    //

    $(e).parent(".popup").fadeOut(250);
    //������� ���� ���� ����
    $("form input[type='text']").val("");
    $("textarea").val("");
    $("form input[type='text']").removeClass("nogood");
    $("form input[type='text']").parent().removeClass("nogood");
    $(".wrapper").removeClass("blur");    
    $(".site_wrapper").removeClass("blur");
}