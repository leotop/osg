<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Использование программы WebShop Manager для управления интернет-магазином Start");
?> 
<h2> Использование программы WebShop Manager для управления интернет-магазином Start </h2>
 <blockquote> 
  <li> Использование WebShop Manager с сетевой базой данных. </li>
 
  <br />
 
  <li> Использование WebShop Manager для ведения базы двух магазинов </li>
 
  <br />
 
  <li>Oшибка при передаче данных Webshop. </li>
 
  <br />
 
  <li>Какие данные вводить для авторизации при запуске WebShop Manager </li>
 
  <br />
 
  <li>Требования к системе для установки программы WebShop Manager. </li>
 
  <br />
 
  <li>Oшибка авторизации при передаче данных Webshop Manager. </li>
 </blockquote> <hr style="width:100%"><b> Можно ли использовать WebShop Manager с сетевой базой данных? То есть управлять магазином с нескольких рабочих мест? </b> 
<br />
 
<br />
 (<span style="color: red;">Тех. Поддержка</span>) 
<br />
 
<br />
 Можно. Руководство по настройке WebShop Manager для работы с сетевой базой данных доступно на нашем сайте. 
<br />
 
<br />
 <a href="http://www.osg.ru/downloads/WebShop_netdb.rar" ><span style="color: red;">Скачать руководство</span></a> 
<br />
 
<br />
 <hr style="width:100%"> <b>Можно ли использовать WebShop Manager для управления базами двух разных интернет-магазинов на одном компьютере? Ели да то как? </b> 
<br />
 
<br />
 (<span style="color: red;">Тех. Поддержка</span>) 
<br />
 
<br />
 Да, можно. Магазины меняются путем замены локальной базы shop.mdb. База находится в установочной директории WebShop Manager (по умолчанию C:\Program Files\WebShop). 
<br />
 
<br />
 <hr style="width:100%"> <b>При попытке обновить данные интернет-магазина выдается &quot;Oшибка при передаче данных&quot; В чем может быть причина? </b> 
<br />
 
<br />
 (<span style="color: red;">Тех. Поддержка</span>) 
<br />
 
<br />
 <blockquote> 
  <li> По умолчанию данные передаются по порту 99, необходимо проверить не закрыт ли он брандмауэром.</li>
 Проверить доступность порта 99 можно при помощи утилиты Port Check 
  <br />
 
  <br />
 <a href="http://www.osg.ru/downloads/PortChk.rar" ><span style="color: red;">Скачать Port Check </span></a> 
  <br />
 
  <br />
 
  <li>Ошибка могла возникнуть из-за рассинхронизации локальной базы данных и базы данных на сервере. Зайдите в меню &quot;Сервис&quot; и выберите пунк &quot;Обновить заново все таблицы&quot;, затем подтвердите обновление. Теперь обновите магазин </li>
 </blockquote> <hr style="width:100%"><b> При запуске WebShop Manager требуется авторизация. Какие данные необходимо вводить? </b> 
<br />
 
<br />
 (<span style="color: red;">Тех. Поддержка</span>) 
<br />
 
<br />
 Данные по умолчанию для доступа к локальной базе данных: 
<br />
 
<br />
 Имя: admin 
<br />
 
<br />
 Пароль: admin 
<br />
 
<br />
 Изменить данные, либо добавить еще одного пользователя можно через справочник &quot;Менеджеры&quot;. 
<br />
 
<br />
 <hr style="width:100%"><b> Каковы системные требования программы WebShop Manager? </b> 
<br />
 
<br />
 (<span style="color: red;">Тех. Поддержка</span>) 
<br />
 
<br />
 Программа &laquo;Менеджер Интернет-Магазина&raquo; может быть установлена на компьютер Pentium 100, оперативная память 32 Мб. 
<br />
 
<br />
 Минимальная конфигурация компьютера &ndash; Pentium II с тактовой частотой 400 Мгц, оперативная память 64 Мб. Используемые операционные системы: Windows 95/98/ME, Windows XP, Windows NT 4.0, Windows 2000, Windows 2003. 
<br />
 
<br />
 Для установки программы необходимо иметь на жестком диске 5 Мб свободного места. Кроме того, необходимо предусмотреть место для размещения базы данных. Размер базы данных (далее по тексту БД) можно оценить, зная, что БД, содержащая до 500 наименований товара (включая файлы, содержащие рисунки, объемом до 6 Кб каждый) требует около 2 Мб дискового пространства. 
<br />
 
<br />
 <span style="color: red;">Также в системе должен быть установлен компонент Microsoft Data Access Component (MDAC) версии 2.8 и выше.<a href="http://www.microsoft.com/downloads/details.aspx?displaylang=ru&FamilyID=78cac895-efc2-4f8e-a9e0-3a1afbd5922e" ><span style="color: red;"> www.microsoft.com</span></a>
  <br />

  <br />
<a href="http://www.microsoft.com/downloads/details.aspx?displaylang=ru&FamilyID=78cac895-efc2-4f8e-a9e0-3a1afbd5922e" > </a> 
  <p></p>
 </span> <hr style="width:100%"> <b>При попытке обновить данные магазина выдается &quot;ошибка аторизации&quot; </b> 
<br />
 
<br />
 (<span style="color: red;">Тех. Поддержка</span>) 
<br />
 
<br />
 Проверьте корректность ввода учетных данных и настроек соединения. Меню &quot;Сервис&quot;, &quot;Параметры&quot;.<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>