<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�������� ����� � �����������");
?> ����� �� ������ ��������� ������ ��� ����������� ������������ ��������� �������� ��� &quot;������ ������ �����&quot;. 
<br />
 
<br />
 ���� ������ ������� ��������� ��������� ���������. 
<br />
 � ���� ����������� �������� ��� ��������� ��������. 
<br />
 ��� ����������� ����������� ��� �������, ��� �� �� �������� ��������� ���� ������ �� ����������� ����� ��������. 
<br />
 
<br />
 ������ ����������� ��������� ���������. 
<br />
 
<br />
 
<div class="left_div"> <center> <form method="post" action="feedback.html" name="order"> 
<script language="javascript">w_send();</script>
 <input type="hidden" name="rej" value="send" /> <input type="hidden" name="number" /> 
<script>

addzakaznumber();

</script>
 <input type="hidden" name="project" value="" /> 
      <p><font class="red">*</font>���:</p>
     <input name="fio" value="" style="width: 300px; text-align: center;" /> 
      <p>��� E-mail:</p>
     <input name="email" value="" style="width: 300px; text-align: center;" /> 
      <p><font class="red">*</font>���������� ������� � �������: +7 (495) 215 2029:</p>
     <input name="tel" value="" style="width: 300px; text-align: center;" /> 
      <p>�������� ��������:</p>
     <input name="org" value="" style="width: 300px; text-align: center;" /> 
      <p>����� ������ / �����������:</p>
     <textarea style="width: 300px;" name="msg" rows="4" cols="30" class="form"></textarea>� 
      <br />
     <input type="submit" class="form_submit" value="���������� / ������������" /> </form> </center> </div>
 
<br />
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>