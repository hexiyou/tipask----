<? if(!defined('IN_TIPASK')) exit('Access Denied'); include template(header,admin); ?>
<script src="js/admin.js" type="text/javascript"></script>
<div style="width:100%; height:15px;color:#000;margin:0px 0px 10px;">
  <div style="float:left;"><a href="index.php?admin_main/stat<?=$setting['seo_suffix']?>" target="main"><b>���������ҳ</b></a>&nbsp;&raquo;&nbsp;�������</div>
</div><? if(isset($message)) { $type=isset($type)?$type:'correctmsg';  ?><table cellspacing="1" cellpadding="4" width="100%" align="center" class="tableborder">
<tr>
<td class="<?=$type?>"><?=$message?></td>
</tr>
</table><? } ?><form onsubmit="return confirm('�ò������ɻָ�����ȷ��Ҫɾ����Щ������');"  action="index.php?admin_note/remove<?=$setting['seo_suffix']?>"  method=post>
<table cellspacing="1" cellpadding="4" width="100%" align="center" >
<tr class="header"><td colspan="5">�����б�&nbsp;&nbsp;&nbsp;<input type="button" style="cursor:pointer" onclick="document.location.href='index.php?admin_note/add<?=$setting['seo_suffix']?>'" value="���ӹ���" /></td></tr>
<tr class="header" align="center">
<td width="10%"><input class="checkbox" id="chkall" onclick="checkall('delete[]')" type="checkbox" name="chkall"><label for="chkall">ɾ��</label></td>
<td  width="25%">�������</td>
<td  width="30%">������</td>
<td  width="15%">����ʱ��</td>
<td  width="10%">�༭</td>
</tr>
<? if(is_array($notelist)) { foreach($notelist as $note) { ?>
<tr align="center" class="smalltxt">
<td class="altbg2"><input class="checkbox" type="checkbox" value="<?=$note['id']?>" name="delete[]"></td>
<td  class="altbg2"><strong><?=$note['title']?></strong></td>
<td  class="altbg2"><?=$note['author']?></td>
<td class="altbg2"><?=$note['time']?></td>
<td class="altbg2"><a href="index.php?admin_note/edit/<?=$note['id']?><?=$setting['seo_suffix']?>">�༭</a></td>
</tr>
<? } } ?>
<tr><td colspan="5" class="altbg1"><input type="submit" class="button" value="�ύ" /></td></td>
</table>
</form>
<? include template(footer,admin); ?>