<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Интеграция интернет-магазина с 1С: Предприятие");
$APPLICATION->SetTitle("Интеграция интернет-магазина с 1С: Предприятие");
?>
<p class="MsoNormal" style="margin-bottom: 11.25pt; background-color: white;"><b><span style="font-size: 12pt; font-family: Tahoma, sans-serif; color: rgb(205, 47, 0);">Интеграция интернет-магазина с 1С: Предприятие<o:p></o:p></span></b></p>
 
<p class="MsoNormal" style="margin-bottom: 0.0001pt; background-color: white;"><span style="font-size: 8.5pt; font-family: Tahoma, sans-serif; color: rgb(64, 64, 64);">Функциональность систем управления интернет-магазином ориентирована на организацию эффективного бизнес-процесса. Соответственно, возможности данных систем должны включать в себя прием и обработку заказов, управление информацией о товарах, управление структурой интернет-ресурса и другие необходимые сервисы.</span></p>

<p class="MsoNormal" style="margin-bottom: 0.0001pt; background-color: white;"><span style="font-size: 8.5pt; font-family: Tahoma, sans-serif; color: rgb(64, 64, 64);"> <o:p></o:p></span></p>
 
<p class="MsoNormal" style="margin-bottom: 0.0001pt; background-color: white;"><span style="font-size: 8.5pt; font-family: Tahoma, sans-serif; color: rgb(64, 64, 64);">Компании стремятся <b>интегрировать</b> свои решения с лучшими программными продуктами, входящими в состав единой информационной системы предприятия. Наиболее популярным программным продуктом является учетная система <b>1С: Предприятие</b>. В некоторых случаях, в системе управления интернет-магазина предусмотрена возможность вызова некоторых функций 1С. Но в большинстве интегрированных решений реализованы возможности всего лишь обмена данными о клиентах и товарах, выписка счетов, получение информации об остатках товаров и денежных средств. Это значительно затрудняет синхронизацию баз данных интернет-магазина и учетной системы. Дело в том, что этот обмен данными проходит по следующей схеме:<o:p></o:p></span></p>
 
<ul style="margin-top: 0cm;" type="disc"> 
  <li class="MsoNormal" style="color: rgb(64, 64, 64); margin-bottom: 0.0001pt; background-color: white;"><span style="font-size: 8.5pt; font-family: Tahoma, sans-serif;">из справочника номенклатуры 1С данные формируются в отдельный файл в XML или другом формате,<o:p></o:p></span></li>
 
  <li class="MsoNormal" style="color: rgb(64, 64, 64); margin-bottom: 0.0001pt; background-color: white;"><span style="font-size: 8.5pt; font-family: Tahoma, sans-serif;">затем этот файл загружается в систему управления интернет-магазином (зачастую, при передаче данных из 1С в систему управления интернет-магазина используются дополнительные программы типа MS Excell и др),<o:p></o:p></span></li>
 
  <li class="MsoNormal" style="color: rgb(64, 64, 64); margin-bottom: 0.0001pt; background-color: white;"><span style="font-size: 8.5pt; font-family: Tahoma, sans-serif;">из системы-управления данные посылаются в базу интернет-магазина.<o:p></o:p></span></li>
 </ul>
 
<p class="MsoNormal" style="margin-bottom: 0.0001pt; background-color: white;"><span style="font-size: 8.5pt; font-family: Tahoma, sans-serif; color: rgb(64, 64, 64);">Обратно по той же схеме. А пока данные выгружались из одной программы и загружались в другую, или товар может быть продан другим менеджером, или цена поменяется, или случится другая коллизия.<o:p></o:p></span></p>
 
<p class="MsoNormal" style="margin-bottom: 0.0001pt; background-color: white;"><span style="font-size: 8.5pt; font-family: Tahoma, sans-serif; color: rgb(64, 64, 64);">А сколько действий совершает администратор интернет-магазина? Посмотрим:<o:p></o:p></span></p>
 
<ul style="margin-top: 0cm;" type="disc"> 
  <li class="MsoNormal" style="color: rgb(64, 64, 64); margin-bottom: 0.0001pt; background-color: white;"><span style="font-size: 8.5pt; font-family: Tahoma, sans-serif;">работа с товарной базой в 1С,<o:p></o:p></span></li>
 
  <li class="MsoNormal" style="color: rgb(64, 64, 64); margin-bottom: 0.0001pt; background-color: white;"><span style="font-size: 8.5pt; font-family: Tahoma, sans-serif;">экспорт данных из 1С (в промежуточную программу),<o:p></o:p></span></li>
 
  <li class="MsoNormal" style="color: rgb(64, 64, 64); margin-bottom: 0.0001pt; background-color: white;"><span style="font-size: 8.5pt; font-family: Tahoma, sans-serif;">импорт данных в систему управления интернет-магазином,<o:p></o:p></span></li>
 
  <li class="MsoNormal" style="color: rgb(64, 64, 64); margin-bottom: 0.0001pt; background-color: white;"><span style="font-size: 8.5pt; font-family: Tahoma, sans-serif;">работа с базой в самой системе управления интернет-магазином,<o:p></o:p></span></li>
 
  <li class="MsoNormal" style="color: rgb(64, 64, 64); margin-bottom: 0.0001pt; background-color: white;"><span style="font-size: 8.5pt; font-family: Tahoma, sans-serif;">экспорт данных из системы управления на сервер, где находится интернет-магазин.<o:p></o:p></span></li>
 </ul>
 
<p class="MsoNormal" style="margin-bottom: 0.0001pt; background-color: white;"><span style="font-size: 8.5pt; font-family: Tahoma, sans-serif; color: rgb(64, 64, 64);">И это только обновление данных в интернет-магазине! Разве удобно? К слову, такие схемы используются в отделах, которые напрямую общаются с клиентами: ведут продажи различных товаров и услуг, отвечают на клиентские запросы, занимаются маркетингом, анализируют деятельность компании и ситуацию на рынке.<o:p></o:p></span></p>
 
<p class="MsoNormal" style="margin-bottom: 0.0001pt; background-color: white;"><span style="font-size: 8.5pt; font-family: Tahoma, sans-serif; color: rgb(64, 64, 64);">Для ускорения процесса, можно обойтись и без информационных технологий, разработав комплексную методику работы с клиентами. Но, когда на каждого менеджера приходятся десятки клиентов, обойтись без программного обеспечения крайне трудно или вовсе невозможно - именно поэтому возникает потребность в использовании программных продуктов, более эффективных, чем вышеописанные системы управления интернет-магазином.<o:p></o:p></span></p>
 
<p class="MsoNormal" style="margin-bottom: 0.0001pt; background-color: white;"><span style="font-size: 8.5pt; font-family: Tahoma, sans-serif; color: rgb(64, 64, 64);">Процесс взаимодействия учетной системы предприятия с интернет-магазином необходимо усовершенствовать, то есть максимально автоматизировать и ускорить. На данный момент, нашими специалистами придуман единственно верное решение этого вопроса &mdash;<a href="http://www.osg.ru/ncd-1-18-51/about.htm" target="_blank"><b><span style="color: rgb(205, 47, 0);">управление интернет-магазином из 1С: Предприятие</span></b></a>.<o:p></o:p></span></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>