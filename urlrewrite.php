<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#",
		"RULE" => "alias=\$1",
		"ID" => "bitrix:im.router",
		"PATH" => "/desktop_app/router.php",
	),
	array(
		"CONDITION" => "#^/company/news-and-announcements/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/company/news-and-announcements/index.php",
	),
	array(
		"CONDITION" => "#^/company/our-publications/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/company/our-publications/index.php",
	),
	array(
		"CONDITION" => "#^/bitrix/services/ymarket/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/bitrix/services/ymarket/index.php",
	),
	array(
		"CONDITION" => "#^/company/press-about-us/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/company/press-about-us/index.php",
	),
	array(
		"CONDITION" => "#^/company/press-release/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/company/press-release/index.php",
	),
	array(
		"CONDITION" => "#^/online/(/?)([^/]*)#",
		"RULE" => "",
		"ID" => "bitrix:im.router",
		"PATH" => "/desktop_app/router.php",
	),
	array(
		"CONDITION" => "#^/company/reviews/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/company/reviews/index.php",
	),
	array(
		"CONDITION" => "#^/solutions/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/solutions/index.php",
	),
	array(
		"CONDITION" => "#^/portfolio/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/portfolio/index.php",
	),
	array(
		"CONDITION" => "#^/portfolio/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/reviews/index.php",
	),
	array(
		"CONDITION" => "#^/products/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/products/index.php",
	),
	array(
		"CONDITION" => "#^/release/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/release/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
	array(
		"CONDITION" => "#^/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/index.php",
	),
);

?>