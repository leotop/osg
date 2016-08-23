<div class="site_titles">
    <div class="logo"><a href="/"><img src="/verstka/images/logo.png" /></a></div>
    <div class="site_titles_wrapper">
        <div class="defis"><img src="/verstka/images/defis.png" /></div>
        <div class="header_descr">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include", 
            ".default", 
            array(
                "COMPONENT_TEMPLATE" => ".default",
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/include/top_message.php",
                "EDIT_TEMPLATE" => ""
                ),
            false
        );?>
        </div>
    </div>

    <div class="site_titles_right">
        <div class="top_phone">
		<?
			$altasib_city = getAltasibCity();
			$phone_include_file = $altasib_city == "Тула" ? "tula_phone.php" : "phone.php";
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
        </div>
        <div class="top_mail">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include", 
            ".default", 
            array(
                "COMPONENT_TEMPLATE" => ".default",
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/include/mail.php",
                "EDIT_TEMPLATE" => ""
                ),
            false
        );?>
        </div> 
    </div>
</div>