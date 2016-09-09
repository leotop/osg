<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
	<!-- ***************** END CONTENT  ********************-->


	<!-- ***************** FOOTER  ********************-->
		</div>
	</td>
	<td style="min-width: 15px;border-collapse: collapse;border-spacing: 0;padding: 0;"></td>
</tr>
<tr>
	<td style="min-width: 15px;border-collapse: collapse;border-spacing: 0;padding: 0;"></td>
	<td align="center" valign="middle" style="border-collapse: collapse;border-spacing: 0;padding: 44px 0 50px;vertical-align: middle;max-width: 693px;"><?
		if (\Bitrix\Main\Loader::includeModule('intranet'))
		{
			?><a href="<?=CIntranetUtils::getB24Link('pub'); ?>" target="_blank" style="color: #71a5b6;text-decoration: none;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;font-size: 12px;display: inline-block;vertical-align: middle;"><?
			?><span><?=GetMessage('MAIL_USER_CHARGED')?></span>
			&nbsp;
			<img height="19" width="101" src="/bitrix/templates/mail_user/images/<?=GetMessage('MAIL_USER_BITRIX24_IMAGEFILE')?>" alt="<?=GetMessage('MAIL_USER_BITRIX24_IMAGEFILE_ALT')?>" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;border: none;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;font-size: 17px;color: #71a5b6;font-weight: bold;vertical-align: middle;"><?
			?></a><?
		}
		?>
	</td>
	<td style="min-width: 15px;border-collapse: collapse;border-spacing: 0;padding: 0;"></td>
</tr>
</table>
<? if (\Bitrix\Main\Loader::includeModule('mail')) : ?>
<?=\Bitrix\Mail\Message::getQuoteEndMarker(true); ?>
<? endif; ?>
<!-- Google Analytics Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83734106-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- End Google Analytics Code --> 
</body>
</html>
<!-- ***************** END FOOTER  ********************-->