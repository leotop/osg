<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("��������");
?> 
<p>���������� � ����� ������������ � �������� ���������������� ������������ �� �������� ��������� �������������� ������� �� ���� ����������� ��� ��������� ������� �������24, ��������� CRM, � ��� �� �� ����� ������ ��������.5</p>
 
<p>�� ������ ���������� � ��� �� ��������, �� ����������� ����� ��� ������������ � ������� � ����� �����. ����� ���� ������ ��� � �������� �� ��� ���� �������. </p>
 
<h2>�������</h2>
<p>(495) 215-20-29</p> 
<h2>Email</h2>
<p><a href="mailto:bitrix24@osg.ru" >bitrix24@osg.ru</a></p>
 
<h2>���� � ������</h2>
<p>�. ������, ��. 2-� ���������, �.7/19, ����.6</p>
 
<p><?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view", 
	".default", 
	array(
		"KEY" => "ABQIAAAAOSNukcWVjXaGbDo6npRDcxS1yLxjXbTnpHav15fICwCqFS-qhhSby0EyD6rK_qL4vuBSKpeCz5cOjw",
		"INIT_MAP_TYPE" => "ROADMAP",
		"MAP_DATA" => "a:4:{s:10:\"google_lat\";d:55.7383;s:10:\"google_lon\";d:37.5946;s:12:\"google_scale\";i:13;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:4:\"TEXT\";s:0:\"\";s:3:\"LON\";d:37.48973697423935;s:3:\"LAT\";d:55.73766365555607;}}}",
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