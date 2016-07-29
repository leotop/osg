<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вопросы по шаблонам сайта");
?> 
<h2>Вопросы по шаблонам сайта</h2>
 <blockquote> 
  <li>Как установить на сайте пересчет по наличному/безналичному курсу?</li>
 
  <br />
 
  <li>Как изменить контактную информацию на сайте?</li>
 
  <br />
 
  <li>Как настроить шаблон для отображения цен в одной валюте?</li>
 
  <br />
 
  <li>Как подключить платежные системы?</li>
 </blockquote> <hr style="width:100%"> <b>Сегодня заметили такую странную вещь. В корзине при пересчёте в рубли, сумма в долларах переводится по какому-то странному курсу. Разъясните, пожалуйста. </b> 
<br />
 
<br />
 (<span style="color: red;">Тех. Поддержка </span>) 
<br />
 
<br />
 У вас пересчет велся по безналичному курсу. Если нужно, чтобы считалось по наличному то для этого в файл ini.osg, доступному по FTP, добавляется параметр SetDollarRateValueCash=1. 
<br />
 
<br />
 <hr style="width:100%"> <b> Как изменить телефон, e-mail, название магазина, которые выводятся на сайте?</b> 
<br />
 
<br />
 (<span style="color: red;">Тех. Поддержка </span>) 
<br />
 
<br />
 Эти данные можно редактировать в &quot;Административной системе управления сайтом&quot; (/adm). Раздел &quot;Общие настройки&quot;. 
<br />
 
<br />
 Так же можно воспользоваться программой управления интернет-магазином. 
<br />
 
<br />
 В WebShop Manager - меню &quot;Сервис&quot;-&quot;Параметры&quot;, вкладка &quot;Магазин&quot; 
<br />
 
<br />
 В 1С меню &quot;Интернет-магазин&quot; - &quot;Настройка&quot;, вкладка &quot;Информация&quot; 
<br />
 
<br />
 <hr style="width:100%"><b> Как сделать так, чтобы цены в интернет-магазине отображались только в рублях или только в долларах? </b> 
<br />
 
<br />
 (<span style="color: red;">Тех. Поддержка </span>) 
<br />
 
<br />
 Необходимо отредактировать файл шаблона &quot;valute_template.inc&quot;, доступный по FTP. 
<br />
 
<br />
 Для отображения в рублях параметры: 
<br />
 
<br />
 &lt;!--#SET_VALUTE_RUR#--&gt; 
<br />
 
<br />
 &lt;!--#SET_VAR(SearchPricesRUR=1)#--&gt; 
<br />
 
<br />
 В долларах: 
<br />
 
<br />
 &lt;!--#SET_VALUTE_USD#--&gt; 
<br />
 
<br />
 &lt;!--#SET_VAR(SearchPricesRUR=0)#--&gt; 
<br />
 
<br />
 <hr style="width:100%"> <b>Как подключить возможность оплаты через платежные системы Assist, WebMoney, Яndex.Деньги? </b> 
<br />
 
<br />
 (<span style="color: red;">Тех. Поддержка </span>) 
<br />
 
<br />
 <span style="color: red;">Подключение платежных систем к интернет-магазину описано<a href="http://www.osg.ru/downloads/ePayment_Systems_Attach.rar"> <span style="color: red;">руководстве по подключению платежных систем.</span></a> </span><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>