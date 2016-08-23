<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?> 
<p>Обратитесь к нашим специалистам и получите профессиональную консультацию по вопросам внедрения корпоративного портала на базе коробочного или облачного решения Битрикс24, внедрения CRM, а так же по любым другим вопросам.5</p>
 
<p>Вы можете обратиться к нам по телефону, по электронной почте или договориться о встрече в нашем офисе. Будем рады помочь вам и ответить на все ваши вопросы. </p>
 
<h2>Телефоны</h2>
 
<ul> 	 
	<li>Телефон: 		 
	    <ul> 			 
	      <li>
	      	<b>
	      		<?
					$altasib_city = getAltasibCity();
					$phone_include_file = $altasib_city == "Тула" ? "tula_phone.php" : "phone.php";
					$city_name = $altasib_city == "Тула" ? "Туле" : "Москве";
					$coordinates = $altasib_city == "Тула" ? TULA_COORDINATES : MOSCOW_COORDINATES;
				?>
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
	      	</b>
	      </li>
	    </ul>
	</li>
</ul>
 
<h2>Email</h2>
 
<ul> 
  <li><a href="mailto:info@osg.ru" >info@osg.ru</a></li>

 </ul>
 
<h2>Офис в <?= $city_name ?></h2>
 
<p><?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view",
	".default",
	Array(
		"KEY" => "ABQIAAAAOSNukcWVjXaGbDo6npRDcxS1yLxjXbTnpHav15fICwCqFS-qhhSby0EyD6rK_qL4vuBSKpeCz5cOjw",
		"INIT_MAP_TYPE" => "NORMAL",
		"MAP_DATA" => $coordinates,
		"MAP_WIDTH" => "600",
		"MAP_HEIGHT" => "500",
		"CONTROLS" => array(0=>"LARGE_MAP_CONTROL",1=>"MINIMAP",2=>"HTYPECONTROL",3=>"SCALELINE",),
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",),
		"MAP_ID" => ""
	)
);?></p>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>