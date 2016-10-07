<?require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");?>
<?
    //передаваемые данные
    $name = iconv('UTF-8','CP1251',$_POST["NAME"]);
    $phone = $_POST["PHONE"];
    $company = iconv('UTF-8','CP1251',$_POST["COMPANY"]) ;
    $email = $_POST["EMAIL"];
    $text = iconv('UTF-8','CP1251',$_POST["TEXT"]); 

                        
    $el = new CIBlockElement;

    $PROP = array();
    $PROP["COMPANY"] = $company;  
    $PROP["PHONE"] = $phone;        
    $PROP["EMAIL"] = $email;         

    $arLoadProductArray = Array(
        "IBLOCK_SECTION_ID" => false,        
        "IBLOCK_ID"      => FEEDBACK_BLOCK_ID,
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => $name,
        "ACTIVE"         => "Y",          
        "DETAIL_TEXT"    => $text,
    );
    
    $crm_data = array();
    $crm_data = array(
                "TITLE"         => iconv('CP1251', 'UTF-8', "Заявка с сайта OSG"),
                "NAME"          => $_POST["NAME"],
                "COMPANY_TITLE" => $_POST["COMPANY"],
                "EMAIL_WORK"    => $email,
                "PHONE_WORK"    => $phone,
                "COMMENTS"      => $_POST["TEXT"],
                "SOURCE_ID"     => "WEB"
            );

    
    if ($el->Add($arLoadProductArray) ) {
        echo "OK";
    } else {
        echo "ERROR";    
    }    
    
    //createCRMLead($crm_data);
    
    // отправляем писмо о заказе консультации
    $theme = "Заявка с сайта OSG";
    $mail_text ='<b>Имя:</b>'.iconv('CP1251', 'UTF-8', $name).'<br>
    <b>Название компания:</b>'.iconv('CP1251', 'UTF-8', $company).'<br>
    <b>Телефон для связи:</b> '.$phone.'<br>
    <b>Email:</b> '.$email.'<br>
    <b>Текст:</b> '.iconv('CP1251', 'UTF-8', $text).'<br>'; 

    $to1 = 'bitrix24@osg.ru';  
    $to2 = 'me@webgk.ru';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
    $headers .= "From: consultation@osg.ru\r\n"; 
    mail($to1,$theme,$mail_text, $headers);
    mail($to2,$theme,$mail_text, "From: consultation@osg.ru\r\n"."Content-type: text/html; Charset=utf-8 \r\n");
    
    //в зависимости от инфоблока выбираем нужный тип почтового события

    $event_type = "FORM_SUBMIT";
        
    //добавляем поля для письма
    $PROP["NAME"] = $name;   
    $PROP["TEXT"] = $text;    
    $arrSITE =  's1';
    CEvent::Send($event_type, $arrSITE, $PROP,'N');
?>