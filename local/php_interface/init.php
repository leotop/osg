<?
    CModule::IncludeModule("iblock");
    CModule::IncludeModule("sale");
    CModule::IncludeModule("catalog");
    /*Version 0.3 2011-04-25*/
    AddEventHandler("iblock", "OnAfterIBlockElementUpdate", "DoIBlockAfterSave");
    AddEventHandler("iblock", "OnAfterIBlockElementAdd", "DoIBlockAfterSave");
    AddEventHandler("catalog", "OnPriceAdd", "DoIBlockAfterSave");
    AddEventHandler("catalog", "OnPriceUpdate", "DoIBlockAfterSave");
	file_exists(dirname(__FILE__) . "/constants.php") ? require_once(dirname(__FILE__) . "/constants.php") : "";
    file_exists($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/.config.php") ? require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/.config.php") : "";
	
    function DoIBlockAfterSave($arg1, $arg2 = false)
    {
        $ELEMENT_ID = false;
        $IBLOCK_ID = false;
        $OFFERS_IBLOCK_ID = false;
        $OFFERS_PROPERTY_ID = false;
        if (CModule::IncludeModule('currency'))
            $strDefaultCurrency = CCurrency::GetBaseCurrency();

        //Check for catalog event
        if(is_array($arg2) && $arg2["PRODUCT_ID"] > 0)
        {
            //Get iblock element
            $rsPriceElement = CIBlockElement::GetList(
                array(),
                array(
                    "ID" => $arg2["PRODUCT_ID"],
                ),
                false,
                false,
                array("ID", "IBLOCK_ID")
            );
            if($arPriceElement = $rsPriceElement->Fetch())
            {
                $arCatalog = CCatalog::GetByID($arPriceElement["IBLOCK_ID"]);
                if(is_array($arCatalog))
                {
                    //Check if it is offers iblock
                    if($arCatalog["OFFERS"] == "Y")
                    {
                        //Find product element
                        $rsElement = CIBlockElement::GetProperty(
                            $arPriceElement["IBLOCK_ID"],
                            $arPriceElement["ID"],
                            "sort",
                            "asc",
                            array("ID" => $arCatalog["SKU_PROPERTY_ID"])
                        );
                        $arElement = $rsElement->Fetch();
                        if($arElement && $arElement["VALUE"] > 0)
                        {
                            $ELEMENT_ID = $arElement["VALUE"];
                            $IBLOCK_ID = $arCatalog["PRODUCT_IBLOCK_ID"];
                            $OFFERS_IBLOCK_ID = $arCatalog["IBLOCK_ID"];
                            $OFFERS_PROPERTY_ID = $arCatalog["SKU_PROPERTY_ID"];
                        }
                    }
                    //or iblock which has offers
                    elseif($arCatalog["OFFERS_IBLOCK_ID"] > 0)
                    {
                        $ELEMENT_ID = $arPriceElement["ID"];
                        $IBLOCK_ID = $arPriceElement["IBLOCK_ID"];
                        $OFFERS_IBLOCK_ID = $arCatalog["OFFERS_IBLOCK_ID"];
                        $OFFERS_PROPERTY_ID = $arCatalog["OFFERS_PROPERTY_ID"];
                    }
                    //or it's regular catalog
                    else
                    {
                        $ELEMENT_ID = $arPriceElement["ID"];
                        $IBLOCK_ID = $arPriceElement["IBLOCK_ID"];
                        $OFFERS_IBLOCK_ID = false;
                        $OFFERS_PROPERTY_ID = false;
                    }
                }
            }
        }
        //Check for iblock event
        elseif(is_array($arg1) && $arg1["ID"] > 0 && $arg1["IBLOCK_ID"] > 0)
        {
            //Check if iblock has offers
            $arOffers = CIBlockPriceTools::GetOffersIBlock($arg1["IBLOCK_ID"]);
            if(is_array($arOffers))
            {
                $ELEMENT_ID = $arg1["ID"];
                $IBLOCK_ID = $arg1["IBLOCK_ID"];
                $OFFERS_IBLOCK_ID = $arOffers["OFFERS_IBLOCK_ID"];
                $OFFERS_PROPERTY_ID = $arOffers["OFFERS_PROPERTY_ID"];
            }
        }

        if($ELEMENT_ID)
        {
            static $arPropCache = array();
            if(!array_key_exists($IBLOCK_ID, $arPropCache))
            {
                //Check for MINIMAL_PRICE property
                $rsProperty = CIBlockProperty::GetByID("MINIMUM_PRICE", $IBLOCK_ID);
                $arProperty = $rsProperty->Fetch();
                if($arProperty)
                    $arPropCache[$IBLOCK_ID] = $arProperty["ID"];
                else
                    $arPropCache[$IBLOCK_ID] = false;
            }

            if($arPropCache[$IBLOCK_ID])
            {
                //Compose elements filter
                if($OFFERS_IBLOCK_ID)
                {
                    $rsOffers = CIBlockElement::GetList(
                        array(),
                        array(
                            "IBLOCK_ID" => $OFFERS_IBLOCK_ID,
                            "PROPERTY_".$OFFERS_PROPERTY_ID => $ELEMENT_ID,
                        ),
                        false,
                        false,
                        array("ID")
                    );
                    while($arOffer = $rsOffers->Fetch())
                        $arProductID[] = $arOffer["ID"];

                    if (!is_array($arProductID))
                        $arProductID = array($ELEMENT_ID);
                }
                else
                    $arProductID = array($ELEMENT_ID);

                $minPrice = false;
                $maxPrice = false;
                //Get prices
                $rsPrices = CPrice::GetList(
                    array(),
                    array(
                        "PRODUCT_ID" => $arProductID,
                    )
                );
                while($arPrice = $rsPrices->Fetch())
                {
                    if (CModule::IncludeModule('currency') && $strDefaultCurrency != $arPrice['CURRENCY'])
                        $arPrice["PRICE"] = CCurrencyRates::ConvertCurrency($arPrice["PRICE"], $arPrice["CURRENCY"], $strDefaultCurrency);

                    $PRICE = $arPrice["PRICE"];

                    if($minPrice === false || $minPrice > $PRICE)
                        $minPrice = $PRICE;

                    if($maxPrice === false || $maxPrice < $PRICE)
                        $maxPrice = $PRICE;
                }

                //Save found minimal price into property
                if($minPrice !== false)
                {
                    CIBlockElement::SetPropertyValuesEx(
                        $ELEMENT_ID,
                        $IBLOCK_ID,
                        array(
                            "MINIMUM_PRICE" => $minPrice,
                            "MAXIMUM_PRICE" => $maxPrice,
                        )
                    );
                }
            }
        }
    }

    function arshow($array){
        global $USER;
            if ($USER->IsAdmin()){
                echo "<pre>";
                print_r($array);
                echo "</pre>";
            }
    }

	//����� �������� �� ������� (��������� furniture.catalog.index)
    function sections($section) {
        switch(intval($section)) {
            case '1':$name='/block1/'; break;
            case '2':$name='/block2/'; break;
            case '3':$name='/block3/'; break;
            case '4':$name='/block4/'; break;
            case '5':$name='/block5/'; break;
            case '6':$name='/block6/'; break;
            default:$res=$section;
        }
        return $name;
    }
	
	/**
	 * �������� �������� ������, ������������� ������� Altasib
	 * ��� ������ ��������� https://marketplace.1c-bitrix.ru/solutions/altasib.geoip/
	 * 
	 * @return string $city
	 **/
	 
	function getAltasibCity() {
		$city = "������";
		if (CModule::IncludeModule("altasib.geoip")) {
			$altasib_data = ALX_GeoIP::GetAddr();
			if (!empty($altasib_data) && is_array($altasib_data) && $altasib_data['city']) {
				$city = $altasib_data['city'];
			}
		}
		return $city;
	}
    
    /**
     * ������� ��� � CRM
     * 
     * @param array $arFields
     * @return void
     **/
    function createCRMLead($arFields) {
        $postdata = http_build_query(
            array_merge(array(
                'LOGIN'             => CRM_LOGIN,
                'PASSWORD'          => CRM_PASSWORD,
                'UF_CRM_1369307880' => CRM_SOURCE_PROJECT,
                'ASSIGNED_BY_ID'    => CRM_ASSIGNED
            ), $arFields)
        );
        
        $opts = array('http' =>
            array(
              'method'  => 'POST',
              'header'  => 'Content-type: application/x-www-form-urlencoded',
              'content' => $postdata
            )
        );
        
        $context = stream_context_create($opts);
        $result = file_get_contents('http://corp.webgk.net/crm/configs/import/lead.php', false, $context);
    }    
?>