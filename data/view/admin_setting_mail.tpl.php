<? if(!defined('IN_TIPASK')) exit('Access Denied'); include template(header,admin); ?>
<script src="js/jquery.js" type="text/javascript"></script>
<div style="width:100%; height:15px;color:#000;margin:0px 0px 10px;">
  <div style="float:left;"><a href="index.php?admin_main/stat<?=$setting['seo_suffix']?>" target="main"><b>���������ҳ</b></a>&nbsp;&raquo;&nbsp;�ʼ�����</div>
</div><? if(isset($message)) { $type=isset($type)?$type:'correctmsg';  ?><table cellspacing="1" cellpadding="4" width="100%" align="center" class="tableborder">
<tr>
<td class="<?=$type?>"><?=$message?></td>
</tr>
</table><? } ?><form action="index.php?admin_setting/mail<?=$setting['seo_suffix']?>" method="post">
<table cellspacing="1" cellpadding="4" width="100%" align="center" class="tableborder">
<tr class="header">
<td colspan="2">��������</td>
</tr>
<tr>
<td class="altbg1" width="45%"><b>�ʼ���Դ��ַ:</b><br><span class="smalltxt">�������ʼ���ָ���ʼ���Դʱ��Ĭ��ʹ�ô˵�ַ��Ϊ�ʼ���Դ</span></td>
<td class="altbg2"><input type="text" value="<?=$setting['maildefault']?>" name="maildefault" /></td>
</tr>
<tr>
<td class="altbg1" width="45%"><b>�ʼ����ͷ�ʽ:</b><br><span class="smalltxt">ͨ�� PHP ������ sendmail ����(�Ƽ��˷�ʽ)</span></td>
<td class="altbg2">
<input class="radio" onclick="javascript:$('#hidden1').css('display','none');$('#hidden2').css('display','none');" type="radio"  <? if(1==$setting['mailsend'] ) { ?>checked<? } ?> value="1" name="mailsend"> 
ͨ�� PHP ������ sendmail ����(�Ƽ��˷�ʽ)<br />
<input class="radio" onclick="javascript:$('#hidden1').css('display','');javascript:$('#hidden2').css('display','');" type="radio" <? if(2==$setting['mailsend'] ) { ?>checked<? } ?> value="2"   name="mailsend"> 
ͨ�� SOCKET ���� SMTP ����������(֧�� ESMTP ��֤)<br />
<input class="radio" onclick="javascript:$('#hidden1').css('display','');$('#hidden2').css('display','none');" type="radio" <? if(3==$setting['mailsend'] ) { ?>checked<? } ?> value="3"  name="mailsend"> 
ͨ�� PHP ���� SMTP ���� Email(�� Windows ��������Ч, ��֧�� ESMTP ��֤)
</td>
</tr>
<tbody id="hidden1" <? if(1==$setting['mailsend'] ) { ?> style="DISPLAY: none" <? } ?> >
<tr>
<td class="altbg1" width="45%"><b>SMTP ������:</b><br><span class="smalltxt">���� SMTP �������ĵ�ַ</span></td>
<td class="altbg2"><input type="text" value="<?=$setting['mailserver']?>" name="mailserver" /></td>
</tr>
<tr>
<td class="altbg1" width="45%"><b>SMTP �˿�:</b><br><span class="smalltxt">���� SMTP �������Ķ˿ڣ�Ĭ��Ϊ 25</span></td>
<td class="altbg2"><input value="<?=$setting['mailport']?>" name="mailport"></td>
</tr>
</tbody>

<tbody id="hidden2" <? if(1==$setting['mailsend'] || 3==$setting['mailsend'] ) { ?> style="DISPLAY: none" <? } ?> >
<tr>
<td class="altbg1" width="45%"><b>SMTP ������Ҫ��������֤:</b><br><span class="smalltxt">��� SMTP ������Ҫ��������֤�ſ��Է��ţ���ѡ���ǡ�</span></td>
<td class="altbg2">
<input class="radio" type="radio" <? if(1==$setting['mailauth'] ) { ?>checked<? } ?>  value="1" name="mailauth">��&nbsp;&nbsp;
<input class="radio" type="radio" <? if(0==$setting['mailauth'] ) { ?>checked<? } ?>  value="0" name="mailauth">��
    </td>
</tr>
<tr>
<td class="altbg1" width="45%"><b>�������ʼ���ַ:</b><br><span class="smalltxt">�����Ҫ��֤, ����Ϊ�����������ʼ���ַ���ʼ���ַ�����Ҫ�����û�������ʽΪ��username&lt;user@domain.com&gt;��</span></td>
<td class="altbg2"><input type="text" value="<?=$setting['mailfrom']?>" name="mailfrom" /></td>
</tr>
<tr>
<td class="altbg1" width="45%"><b>SMTP ������֤�û���:</b><br><span class="smalltxt">SMTP��������֤�û���</span></td>
<td class="altbg2"><input type="text" value="<?=$setting['mailauth_username']?>" name="mailauth_username"></td>
</tr>
<tr>
<td class="altbg1" width="45%"><b>SMTP ������֤����:</b><br><span class="smalltxt">SMTP��������֤����</span></td>
<td class="altbg2"><input type="text" value="<?=$setting['mailauth_password']?>" name="mailauth_password" /></td>
</tr>
</tbody>
<tr>
<td class="altbg1" width="45%"><b>�ʼ�ͷ�ķָ���:</b><br><span class="smalltxt">��������ʼ������������õ����˲���</span></td>
<td class="altbg2">					
<input class="radio" type="radio" <? if(1==$setting['maildelimiter'] ) { ?>checked<? } ?> value="1" name="maildelimiter"> 
ʹ�� CRLF ��Ϊ�ָ���<br>					
<input class="radio" type="radio" <? if(0==$setting['maildelimiter'] ) { ?>checked<? } ?>  value="0" name="maildelimiter"> 
ʹ�� LF ��Ϊ�ָ���<br>					
<input class="radio" type="radio" <? if(2==$setting['maildelimiter'] ) { ?>checked<? } ?> value="2" name="maildelimiter"> 
ʹ�� CR ��Ϊ�ָ���
</td>
</tr>
<tr>
<td class="altbg1" width="45%"><b>�ռ��˵�ַ�а����û���:</b><br><span class="smalltxt">ѡ���ǡ������ռ��˵��ʼ���ַ�а�����̳�û���</span></td>
<td class="altbg2">
<label><input class="radio" type="radio" <? if(1==$setting['mailusername'] ) { ?>checked<? } ?>  value="1" name="mailusername">��</label>&nbsp;&nbsp;&nbsp;
<label><input class="radio" type="radio" <? if(0==$setting['mailusername'] ) { ?>checked<? } ?>  value="0" name="mailusername">��</label>
</td>
</tr>
<tr>
<td class="altbg1" width="45%"><b>�����ʼ������е�ȫ��������ʾ:</b><br><span class="smalltxt">ѡ���ǡ��������ʼ����͹����е����д���</span></td>
<td class="altbg2">
<label><input class="radio" type="radio" <? if(1==$setting['mailsilent'] ) { ?>checked<? } ?> value="1" name="mailsilent">��</label>&nbsp;&nbsp;&nbsp;
<label><input class="radio" type="radio" <? if(0==$setting['mailsilent'] ) { ?>checked<? } ?> value="0" name="mailsilent">��</label>
</td>
</tr>



</table>
<br />
<center><input type="submit" class="button" name="submit" value="�� ��"></center><br>
</form>
<br />
<? include template(footer,admin); ?>