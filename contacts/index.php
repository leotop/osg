<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("��������");
?> 
<p>���������� � ����� ������������ � �������� ���������������� ������������ �� �������� ��������� �������������� ������� �� ���� ����������� ��� ��������� ������� �������24, ��������� CRM, � ��� �� �� ����� ������ ��������.5</p>
 
<p>�� ������ ���������� � ��� �� ��������, �� ����������� ����� ��� ������������ � ������� � ����� �����. ����� ���� ������ ��� � �������� �� ��� ���� �������. </p>
 
<h2>��������</h2>
 
<ul> 	 
  <li>�������: 		 
    <ul> 			 
      <li><b>(495) 215-20-29</b></li>
     		</ul>
   	</li>
 	 
 </ul>
 
<h2>Email</h2>
 
<ul> 
  <li><a href="mailto:info@osg.ru" >info@osg.ru</a></li>

 </ul>
 
<h2>���� � ������</h2>
 
<p><?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view",
	".default",
	Array(
		"KEY" => "ABQIAAAAOSNukcWVjXaGbDo6npRDcxS1yLxjXbTnpHav15fICwCqFS-qhhSby0EyD6rK_qL4vuBSKpeCz5cOjw",
		"INIT_MAP_TYPE" => "NORMAL",
		"MAP_DATA" => "a:3:{s:10:\"google_lat\";s:7:\"55.7383\";s:10:\"google_lon\";s:7:\"37.5946\";s:12:\"google_scale\";i:13;}",
		"MAP_WIDTH" => "600",
		"MAP_HEIGHT" => "500",
		"CONTROLS" => array(0=>"LARGE_MAP_CONTROL",1=>"MINIMAP",2=>"HTYPECONTROL",3=>"SCALELINE",),
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",),
		"MAP_ID" => ""
	)
);?></p>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>