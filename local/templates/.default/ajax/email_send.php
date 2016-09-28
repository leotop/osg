<?require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");?>
<?
    //передаваемые данные
    $name = iconv('UTF-8','CP1251',$_POST["NAME"]);
    $phone = $_POST["PHONE"];
    $company = iconv('UTF-8','CP1251',$_POST["COMPANY"]) ;
    $email = $_POST["EMAIL"];
    $text = iconv('UTF-8','CP1251',$_POST["TEXT"]); 
    //$iblock_id = 21;

                        
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
    
    createCRMLead($crm_data);
    
    //в зависимости от инфоблока выбираем нужный тип почтового события

    $event_type = "FORM_SUBMIT";
        
    //добавляем поля для письма
    $PROP["NAME"] = $name;   
    $PROP["TEXT"] = $text;    
    $arrSITE =  's1';
    CEvent::Send($event_type, $arrSITE, $PROP,'N');

?>