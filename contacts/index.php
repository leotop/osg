<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("��������");
?> 
<p>���������� � ����� ������������ � �������� ���������������� ������������ �� �������� ��������� �������������� ������� �� ���� ����������� ��� ��������� ������� �������24, ��������� CRM, � ��� �� �� ����� ������ ��������.5</p>
 
<p>�� ������ ���������� � ��� �� ��������, �� ����������� ����� ��� ������������ � ������� � ����� �����. ����� ���� ������ ��� � �������� �� ��� ���� �������. </p>
 
<?
	$altasib_city = getAltasibCity();
	$phone_include_file = $altasib_city == "����" ? "tula_contacts_phone.php" : "contacts_phone.php";
	$address_include_file = $altasib_city == "����" ? "tula_contacts_address.php" : "contacts_address.php";
	$city_name = $altasib_city == "����" ? "����" : "������";
	$coordinates = $altasib_city == "����" ? TULA_COORDINATES : MOSCOW_COORDINATES;
?>
<?/*?>
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
<?*/?>
 

<h2>Email</h2>
<p><a href="mailto:bitrix24@osg.ru" >bitrix24@osg.ru</a></p>
 
<h2>���� � ������<?/*= $city_name */?></h2>
<p>
	<?$APPLICATION->IncludeComponent(
        "bitrix:main.include", 
        ".default", 
        array(
            "COMPONENT_TEMPLATE" => ".default",
            "AREA_FILE_SHOW" => "file",
            "PATH" => "/include/contacts_address.php"/* . $address_include_file*/,
            "EDIT_TEMPLATE" => ""
            ),
        false
    );?>
</p>
<h2>�������</h2> 
<p>      
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include", 
        ".default", 
        array(
            "COMPONENT_TEMPLATE" => ".default",
            "AREA_FILE_SHOW" => "file",
            "PATH" => "/include/contacts_phone.php",
            "EDIT_TEMPLATE" => ""
            ),
        false
    );?>
</p>
<h2>���� � ����<?/*= $city_name */?></h2>
<p>
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include", 
        ".default", 
        array(
            "COMPONENT_TEMPLATE" => ".default",
            "AREA_FILE_SHOW" => "file",
            "PATH" => "/include/tula_contacts_address.php"/* . $address_include_file*/,
            "EDIT_TEMPLATE" => ""
            ),
        false
    );?>
</p>
<h2>�������</h2> 
<p>      
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include", 
        ".default", 
        array(
            "COMPONENT_TEMPLATE" => ".default",
            "AREA_FILE_SHOW" => "file",
            "PATH" => "/include/tula_contacts_phone.php",
            "EDIT_TEMPLATE" => ""
            ),
        false
    );?>
</p> 
<p><?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view", 
	".default", 
	array(
		"KEY" => "ABQIAAAAOSNukcWVjXaGbDo6npRDcxS1yLxjXbTnpHav15fICwCqFS-qhhSby0EyD6rK_qL4vuBSKpeCz5cOjw",
		"INIT_MAP_TYPE" => "NORMAL",
		"MAP_DATA" => $coordinates,
		"MAP_WIDTH" => "600",
		"MAP_HEIGHT" => "500",
		"CONTROLS" => array(
			0 => "SCALELINE",
		),
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		),
		"MAP_ID" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"API_KEY" => ""
	),
	false
);?></p>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>