<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Страница жалоб и предложений");
?> Здесь Вы можете отправить жалобу или предложение Генеральному директору компании ООО &quot;Онлайн Систем Групп&quot;. 
<br />
 
<br />
 Ваша жалоба получит наивысший приоритет обработки. 
<br />
 С Вами обязательно свяжутся для выяснения проблемы. 
<br />
 Эту возможность используйте при условии, что Вы не получили ожидаемой Вами помощи от сотрудников нашей компании. 
<br />
 
<br />
 Данная возможность абсолютна бесплатна. 
<br />
 
<br />
 
<div class="left_div"> <center> <form method="post" action="feedback.html" name="order"> 
<script language="javascript">w_send();</script>
 <input type="hidden" name="rej" value="send" /> <input type="hidden" name="number" /> 
<script>

addzakaznumber();

</script>
 <input type="hidden" name="project" value="" /> 
      <p><font class="red">*</font>ФИО:</p>
     <input name="fio" value="" style="width: 300px; text-align: center;" /> 
      <p>Ваш E-mail:</p>
     <input name="email" value="" style="width: 300px; text-align: center;" /> 
      <p><font class="red">*</font>Контактный телефон в формате: +7 (495) 215 2029:</p>
     <input name="tel" value="" style="width: 300px; text-align: center;" /> 
      <p>Название компании:</p>
     <input name="org" value="" style="width: 300px; text-align: center;" /> 
      <p>Текст жалобы / предложения:</p>
     <textarea style="width: 300px;" name="msg" rows="4" cols="30" class="form"></textarea>  
      <br />
     <input type="submit" class="form_submit" value="Предложить / пожаловаться" /> </form> </center> </div>
 
<br />
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>