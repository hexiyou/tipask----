<? if(!defined('IN_TIPASK')) exit('Access Denied'); include template('header'); ?>
<!--head����--><? $adlist = $this->fromcache("adlist"); ?><script src="<?=SITE_URL?>js/ueditor/editor_config.js" type="text/javascript"></script>
<script src="<?=SITE_URL?>js/ueditor/editor_all.js" type="text/javascript"></script>
<script src="<?=SITE_URL?>js/ueditor/third-party/SyntaxHighlighter/shCore.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?=SITE_URL?>js/ueditor/themes/default/ueditor.css"/>
<link rel="stylesheet" href="<?=SITE_URL?>js/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css"/>
<div class="wrap1 ask-sub"> <span class="subleft margintop10 color06b"> <a href="<?=SITE_URL?>"><?=$setting['site_name']?></a> &gt;<a href="<?=SITE_URL?>c-all/all/4.html.html">��������</a>
      
<? if(is_array($navlist)) { foreach($navlist as $nav) { ?>
  &gt; <a href="<?=SITE_URL?>c-<?=$nav['id']?>/all/4.html.html"><?=$nav['name']?></a>
  
<? } } ?>
  &gt; <?=$question['title']?>
</span></div>
<div class="wrap1 ask-tie">
  <div class="tie-left">
    <div class="tboxs tbstyle110">
      <div class="tbtop">
        <dl>
          <dt>���������</dt>
          <dd>��������������У�<font color="#ff6600"><?=$endtime?></font>��</dd>
        </dl>
        <ul>
          <li><a href="http://bft.zoosnet.net/LR/Chatpre.aspx?id=BFT68464573" title="�鿴�ü�������">�ü�������</a></li>
          <li><a style="cursor: pointer;" class="margin10 blue2" href="<?=SITE_URL?>question/addfavorite/<?=$question['id']?>/<?=$question['cid']?>.html">����ղ�</a></li>
        </ul>
      </div>
<div class="tblef"> <span class="touxiang"> <span class="xinxibox" onmouseover="this.className='xinxibox showxx'" onmouseout="this.className='xinxibox'"> <a href="<?=SITE_URL?>u-<?=$question['authorid']?>.html" class="yisheng" ><img src="<?=$question['author_avartar']?>" alt=""  /></a> <span class="xinxi">
        <dl>
          <dd class="imgbox"><a href="<?=SITE_URL?>u-<?=$question['authorid']?>.html" class="yisheng" ><img src="<?=$question['author_avartar']?>" alt="" /></a></dd>
          <dd class="name color06b"><a href="<?=SITE_URL?>u-<?=$question['authorid']?>.html" ><?=$question['author']?></a></dd>
          <dd class="jj">58�԰��ʴ�</dd>
          <dd class="jj">�԰�����</dd>
          <dd class="js color666">�ѻش�� <a href="<?=SITE_URL?>u-<?=$question['authorid']?>.html">101971</a> λ���⣬ <a href="<?=SITE_URL?>u-<?=$question['authorid']?>.html">6878</a> ���ش𱻻�����Ϊ���ɴ�</dd>
          <dd class="tw"><a href="http://bft.zoosnet.net/LR/Chatpre.aspx?id=BFT68464573" class="a1" title="���ҽ������" target="_blank">���ҽ������</a><a href="<?=SITE_URL?>u-<?=$question['authorid']?>.html" class="a2" title="�鿴��ҽ��������ҳ">�鿴��ҽ��������ҳ</a></dd>
        </dl>
        <span class="point2"></span> </span> </span> <span class="point"></span> </span> <span class="username color06b"><a href="<?=SITE_URL?>u-<?=$question['authorid']?>.html"><?=$question['author']?></a></span> </div>
      <div class="wtright">
                    <div class="wtt">
                        <h1 class="wttit"><?=$question['title']?></h1>
                        <? if(!empty($taglist)) { ?>                        <div class="wtcont">
                            
<? if(is_array($taglist)) { foreach($taglist as $tag) { ?>
                            <a href="<?=SITE_URL?>index/tagquestion/<?=$tag['tid']?>/<?=$tag['tname']?>.html" class="qtags"><?=$tag['tname']?></a>
                            
<? } } ?>
                        </div>
                        <div class="clr"></div> 
                        <? } ?>                        <div class="xs">
                            <span class="xsj"><img src="http://www.120center.com/css/default/TB2.gif" />���ͷ�:<?=$question['price']?>&nbsp; </span> &nbsp;&nbsp;
                            <span class="twsj">
                                <img src="http://www.120center.com/css/default/lefttime.gif"> �������������<?=$endtime?> &nbsp;&nbsp; 
                                �������:<span id="views"><?=$question['views']?></span> &nbsp;&nbsp;
                                <a href="javascript:inform('<?=$question['author']?>',1);">�ٱ�</a>
                            </span><? if($question['issell']==1) { ?><span style="color:#F00">����<?=$question['sellednum']?>����</span><? } ?></div>
                    </div>
                    <div class="qfgx"></div>
                    <div class="wtcont" id="mydescription" oncontextmenu="window.event.returnValue=false" oncopy="return false;" oncut="return false;">
                        <?=$question['description']?>
                    </div>
                    <div class="clr"></div> 
                    <? if($supplylist) { ?>                    <div class="blank10"></div>
                    <div class="wtcont">
                        
<? if(is_array($supplylist)) { foreach($supplylist as $supply) { ?>
                        <p class="qs_supply">���ⲹ��:<?=$supply['format_time']?></p>
                        <div class="qs_supply_cont"><?=$supply['content']?></div>
                        
<? } } ?>
                    </div>
                    <? } ?>                    <? if((0!=$question['authorid'] && ($question['authorid']==$user['uid'])) ||  1==$user['groupid']) { ?>                    <div  class="wlhdb">
                        <? if(0!=$question['authorid'] && ($question['authorid']==$user['uid'])) { ?>                        <h1>�������⣺</h1>
                        <p> ����ѻ������Ļش��뼰ʱ���ɣ���л�ش��ߡ�����û������Ļش𣬿��Գ������²�����</p>
                        <span class="questioncontrol"><input type="button"  value="���ⲹ��" name="supply_question" onclick="showsupply();"  class="button1" title="��������ϸ�ڣ��Եõ���׼ȷ�Ĵ�"/></span>
                        <span class="questioncontrol"><input type="button"  value="�������" name="add_score" onclick="showaddscore();"  class="button1" title="������ͣ����������Ĺ�ע��"/></span>
                        <span class="questioncontrol"><input type="button"  value="�ر�����" name="supply_question" onclick="javascript:if(confirm('ȷ���رո�����?�ò������ɻָ���')){document.closeForm.submit();return false;}"  class="button1" title="������𰸵Ļش𣬿���ֱ�ӽ������ʣ��ر�����"/></span>
                        <form name="closeForm" action="<?=SITE_URL?>question/close.html" method="post">
                            <input type="hidden" value="<?=$question['id']?>" name="qid">
                        </form>
                        <div id="mysupplydiv"  style="display: none;">
                            <h5>���ⲹ��</h5>��������ϸ�ڣ��Եõ���׼ȷ�Ĵ�
                            <form name="supplyForm" action="<?=SITE_URL?>question/supply/<?=$question['id']?>.html" method="post">
                                <script type="text/plain" id="mysupply" name="content"></script>
                                <script type="text/javascript">
                                    var mysupply = new baidu.editor.ui.Editor(editor_options);
                                    mysupply.render("mysupply"); 
                                </script>
                                <span class="innerrightspan"><input type="button" class="button4"  value="�ύ" onclick="check_mysupply();" /></span>
                            </form>                            
                        </div>
                        <div id="addscorediv"  style="display: none;">
                            <h5>�������</h5>�������ڣ�׷������һ�Σ����ӳ��������Ч��3��,����һ�����͵ĲƸ�ֵ����20��ʱ�������⽫��ͬ������������⣬����������������б�����ʾΪ���¡�
                            <form name="addscoreForm"  action="<?=SITE_URL?>question/addscore/<?=$question['id']?>.html" method="post" >
                                ׷������:&nbsp;<select name="score" id="addscore">
                                    <option value="5" selected="selected">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>&nbsp;��
                                <span class="innerrightspan"><input type="button" class="button4"  value="�ύ" onclick="check_addscore()();" /></span>
                            </form>                            
                        </div>
                        <? } ?>                        <? if(1==$user['groupid']) { ?>                        <h1>����������:</h1>                        
                        <span class="questioncontrol"><input type="button" class="button1"  onclick="managequest(5);return false;" value="�޸ı�ǩ" /></span>
                        <span class="questioncontrol"><input type="button" class="button1"  onclick="managequest(2);return false;"  value="�༭����"></span>
                        <span class="questioncontrol"><input type="button" class="button1" onclick="managequest(3);return false;" value="�ƶ�����"></span>
                        <span class="questioncontrol"><input type="button" class="button1" onclick="managequest(4);return false;" value="�ر�����"></span>
                        <span class="questioncontrol"><input type="button" class="button1"  onclick="managequest(6);return false;" value="ɾ������"></span>

                        <div id="edittitlediv"  style="display: none;">
                            <h5>�޸��������</h5>
                            <form name="renameForm"  action="<?=SITE_URL?>question/edittitle.html" method="post" >
                                <input type="hidden" value="<?=$question['id']?>" name="qid"/>
                                <input type="text" name="title" value="<?=$question['title']?>" class="input2"  />
                                <span class="innerrightspan"><input type="submit" class="button4"  value="�ύ" /></span>
                            </form>
                        </div>
                        <div id="editcontentdiv"  style="display:none;">
                            <h5>�޸���������</h5>
                            <form name="editquescontForm"  action="<?=SITE_URL?>question/editcont.html" method="post" >
                                <input type="hidden"  value="<?=$question['id']?>" name="qid"/>
                                <script type="text/plain" id="myeditcontent" name="content"><?=$question['description']?></script>
                                <script type="text/javascript">
                                    var myeditcontent = new baidu.editor.ui.Editor(editor_options);
                                    myeditcontent.render("myeditcontent"); 
                                </script>
                                <span class="innerrightspan"><input type="submit" class="button4"  value="�ύ" /></span>
                            </form>
                        </div>
                        <div id="editcategorydiv"  style="display: none;">
                            <h5>�޸��������</h5>
                            <form name="editcategoryForm" action="<?=SITE_URL?>question/movecategory.html" method="post" >
                                <input type="hidden" name="qid" value="<?=$question['id']?>" />
                                �ƶ�����<select name="category"  style="width:240px" ><?=$catetree?></select>
                                <span class="innerrightspan"><input type="submit" class="button4"  value="�ύ" /></span>
                            </form>  
                        </div>
                        <? } ?>                        <div class="clr"></div> 
                    </div>
                    <? } ?>                    <? if((isset($adlist['question_view']['inner1']) && trim($adlist['question_view']['inner1']))) { ?>                    <div  class="wtcont"><?=$adlist['question_view']['inner1']?></div>
                    <? } ?>                </div>
    </div>
    <div class="huida margintop10" style="display:none"> <span class="hdleft"></span> <span class="hdright"> </span> </div>
    <!--��ҽ�����ʼ--> 
    
<? if(is_array($answerlist)) { foreach($answerlist as $index => $answer) { ?>
 
    <? $index++ ?>    <div class="tboxs tbstyle<?=$index?>" id="asr<?=$answer['authorid']?>">
      <div class="tbtop">
        <dl>
          <dt>����ҽ���ش�</dt>
        </dl>
      </div>
      <div class="tblef"> <span class="touxiang"> <span class="xinxibox" onmouseover="this.className='xinxibox showxx'" onmouseout="this.className='xinxibox'"> <a href="<?=SITE_URL?>u-<?=$answer['authorid']?>.html" class="yisheng" ><img src="<?=$answer['author_avartar']?>" alt=""  /></a> <span class="xinxi">
        <dl>
          <dd class="imgbox"><a href="<?=SITE_URL?>u-<?=$answer['authorid']?>.html" class="yisheng" ><img src="<?=$answer['author_avartar']?>" alt="" /></a></dd>
          <dd class="name color06b"><a href="<?=SITE_URL?>u-<?=$answer['authorid']?>.html" ><?=$answer['author']?></a></dd>
          <dd class="jj">58�԰��ʴ�</dd>
          <dd class="jj">�԰�����</dd>
          <dd class="js color666">�ѻش�� <a href="<?=SITE_URL?>u-<?=$answer['authorid']?>.html">101971</a> λ���⣬ <a href="<?=SITE_URL?>u-<?=$answer['authorid']?>.html">6878</a> ���ش𱻻�����Ϊ���ɴ�</dd>
          <dd class="tw"><a href="http://bft.zoosnet.net/LR/Chatpre.aspx?id=BFT68464573" class="a1" title="���ҽ������" target="_blank">���ҽ������</a><a href="<?=SITE_URL?>u-<?=$answer['authorid']?>.html" class="a2" title="�鿴��ҽ��������ҳ">�鿴��ҽ��������ҳ</a></dd>
        </dl>
        <span class="point2"></span> </span> </span> <span class="point"></span> </span> <span class="username color06b"> <a href="<?=SITE_URL?>u-<?=$answer['authorid']?>.html" title="<?=$answer['author']?>"><?=$answer['author']?></a> </span> <span class="ziliao">58�԰��ʴ�</span> <span class="ziliao color666">�ѻش�:<a href="<?=SITE_URL?>u-<?=$answer['authorid']?>.html">101971</a>��</span> <span class="tiwen"><a href="<?=SITE_URL?>u-<?=$answer['authorid']?>.html" title="���ҽ������"></a></span> </div>
      <div class="tbrig"> <span class="tousu color999"> ����ʱ�䣺<b><?=$question['format_time']?></b> <a class="margin10 blue2"  href="javascript:inform('<?=$answer['author']?>',2);">Ͷ��</a></span> <span id="mc<?=$index?>"><?=$answer['content']?></span>
                        <div class="wtcont" id="mc<?=$index?>"><?=$answer['content']?></div>
                        <div class="blank10"></div>
                        
<? if(is_array($answer['tags'])) { foreach($answer['tags'] as $tagindex => $tag) { ?>
                        
                        <? if(($tagindex%2) == 0) { ?>                        <? if($tagindex!=0) { ?>                        <div class="ask_gai"></div>
                        <? } ?>                        <div class="ask_zhuiwen">
                            <span style="color:#5EBB0B;float:left;margin-right:5px;">׷��:</span><?=$tag?>
                        </div>                        
                        <? } else { ?>                        
                        <div class="ask_gai"></div>                        
                        <div class="ask_zhuiwen">
                            <span style="color:#999999;float:left;margin-right:5px;">�ش�:</span><?=$tag?>
                        </div>

                        <? } ?>                        
<? } } ?>
                        <div class="clr"></div>
                        <? if($answer['commentlist']) { ?>                        <div id="pinglun">
                            <fieldset>
                                <legend><a title="�鿴�ش����ּ�¼" href="<?=SITE_URL?>question/ajaxanswercomment/<?=$answer['id']?>.html" >�ûش����ּ�¼</a></legend>
                                <ul>
                                    
<? if(is_array($answer['commentlist'])) { foreach($answer['commentlist'] as $comment) { ?>
                                    <li><em>����&nbsp;<? if($comment['credit']>0) { ?>+<?=$comment['credit']?><? } else { ?><?=$comment['credit']?><? } ?></em><em>
<? echo cutstr($comment['content'],40,'');; ?>
</em><cite><a target="_blank" href="<?=SITE_URL?>u-<?=$comment['authorid']?>.html">
<? echo cutstr($comment['author'],10,'');; ?>
</a></cite><?=$comment['time']?></li>
                                    
<? } } ?>
                                </ul>
                            </fieldset>                            
                        </div>
                        <? } ?>                        <!--����������߲��Ҳ��������û�������ʾ������Ϊ�𰸡���ť-->
                        <? if(0!=$question['authorid'] && ($question['authorid']==$user['uid']) ) { ?>                        <div class="wtcont">
                            <input type="button"  value="����Ϊ��Ѵ�" name="adoptanswer" onclick="adoptanswer(<?=$answer['id']?>);" class="button2" />&nbsp;
                            <? if(!$answer['tags'] || (count($answer['tags'])%2) == 0) { ?>                            <input type="button"  value="����׷��" name="adoptanswer" onclick="tagquestion(<?=$answer['id']?>);"  class="button1" />
                            <? } ?>                        </div>
                        <div class="clr"></div> 
                        <? } ?>                        <!--����ǻش����Լ�������ʾ���޸Ĵ𰸡���ť-->
                        <? if($answer['status'] && ($answer['authorid']==$user['uid']) ) { ?>                        <input type="button"  value="�޸Ĵ�" name="button"  class="button1"  onclick="javascript:document.location='<?=SITE_URL?>question/editanswer/<?=$answer['id']?>.html'"/>&nbsp;
                        <? if($answer['tags']!='' && (count($answer['tags'])%2) != 0) { ?>                        <input type="button"  value="�����ش�" name="submit"  onclick="taganswer(<?=$answer['id']?>);" class="button1"/>
                        <? } ?>                        <div class="clr"></div> 
                        <? } ?>                        <div class="clr"></div> 
                        <? if(1==$user['groupid']) { ?>                        <div  class="wlhdb">
                            <h1>�����ûش�:</h1>
                            <input type="button"  value="����Ϊ��Ѵ�" name="adoptanswer" onclick="adoptanswer(<?=$answer['id']?>);" class="button2" />&nbsp;
                            <span class="questioncontrol"><input type="button"  value="�༭����" class="button1" onclick="javascript:document.location='<?=SITE_URL?>question/editanswer/<?=$answer['id']?>.html'" /></span>
                            <span class="questioncontrol"><input type="button" onclick="delanswer(<?=$answer['id']?>,<?=$question['id']?>);" value="ɾ���ش�" class="button1"></span>
                            <div class="clr"></div>
                        </div>
                        <? } ?>                          <p class="zjlhdbimg">
                                <img width="35px" height="36px"  style="cursor:pointer" alt="֧��" onclick="add_comment(1,<?=$answer['id']?>,<?=$answer['authorid']?>);" src="<?=SITE_URL?>css/default/agree.gif">&nbsp;
                                <img width="35px" height="36px"  style="cursor:pointer" alt="����" onclick="add_comment(0,<?=$answer['id']?>,<?=$answer['authorid']?>);" src="<?=SITE_URL?>css/default/aganist.gif">&nbsp;
                            </p>
                            ֧��(<span id="pjhao" class="zhichi"><?=$answer['support']?></span>)
                            ����(<span id="pjhao" class="fandui"><?=$answer['against']?></span>)
                        </div>
                    </div>
<? } } ?>
    <div class="chongxin margintop10" style="display:none;"> <span class="cx"><a href="/?question/add.html" title="���������������" target="_blank"></a></span> <span class="bz color06b">���˽����ʲ��裿��鿴<a href="<?=SITE_URL?>index/help.html#�������" target="_blank" title="����鿴���ʰ���">���ʰ���</a></span> </div>
    <div class="huida margintop10" id="as"> <span class="hdleft" > <span class="cuowu"><span>�ظ����ݲ�������20�����֣�</span></span> <span class="hdbt"><span><a name="��Ҳ˵һ��">��Ҳ˵һ��</a></span>(�����������ӿ����ظ��ύ�𰸣��������Ļظ������������ǳ����õ�ָ����</span> </span>
      <div class="clear"></div>
      <div class="ask_content">
        <form name="answerForm" action="<?=SITE_URL?>question/answer.html" method="post">
          <input type="hidden" value="<?=$question['ask_area']?>" name="ask_area"/>
          <input type="hidden" value="<?=$question['id']?>" name="qid" />
          <input type="hidden" value="<?=$question['title']?>" name="title" />
          <script type="text/plain" id="mycontent" name="content" style="width:720px;margin-left: 4px;"></script>
          <script type="text/javascript">
            var answercontent = new baidu.editor.ui.Editor(editor_options); 
            answercontent.render("mycontent");
        </script>
          <? if($setting['code_ask']) { ?>          <p class="zjplbr">
            <input name="code" size="12"  tabindex="3" class="input4" type="text" />
            <img  id="verifycode"   src="<?=SITE_URL?>user/code.html" align="absmiddle" /> <a href="javascript:updatecode();">�����壬��һ��</a> </p>
          <? } ?>          <p class="zjplbr">
            <input type="button" align="absmiddle" class="subanswer"  name="mybutton" onclick="mylogin();" />
          </p>
        </form>
      </div>
   </div>
    <div class="ulbox">
      <div class="ultop color06b"><span class="zui">��������Ƽ�</span></div>
      <ul class="ul1 color06b">
        
<? if(is_array($solvelist)) { foreach($solvelist as $solve) { ?>
 
        <? if($question['id'] != $solve['id']) { ?>        <li><span class="tit"><a href="<?=SITE_URL?>q-<?=$solve['id']?>.html" title="<?=$solve['title']?>" target="_blank"><?=$solve['title']?></a></span><span class="otr"><?=$solve['answers']?>���ش�</span></li>
        <? } ?> 
        
<? } } ?>
      </ul>
    </div>
    <span class="clearer"></span> </div>
  <div class="tie-right"> <span class="spboxs color06b"> <strong>�Ƽ�ҽ��</strong> <span class="cons"> 
    <? $expertlist=$this->fromcache('expertlist'); ?> 
    
<? if(is_array($expertlist)) { foreach($expertlist as $expert) { ?>
 
    <span class="banzhu">
    <p class="p1"> <span class="imgbox"><a href="<?=SITE_URL?>u-<?=$expert['uid']?>.html"><img src="<?=$expert['avatar']?>" /></a></span> <span class="name"><a href="<?=SITE_URL?>u-<?=$expert['uid']?>.html" title=""><?=$expert['username']?></a></span> <span class="jj">�ó���<?=$expert['categoryname']?></span> <span class="tiwen"><a href="http://bft.zoosnet.net/LR/Chatpre.aspx?id=BFT68464573" title="���ҽ������" target="_blank"></a></span> <span class="clearer"></span> </p>
    <p class="p2">�ѻش���������<b><a href="<?=SITE_URL?>u-<?=$expert['uid']?>.html"><?=$expert['credit1']?></a></b> ��</p>
    </span> 
    
<? } } ?>
 
    </span> </span> <span class="looks2"> <strong>�����Ƽ�</strong> <span class="imgbox imgbox1"> 

���λ
    </span> </span> <span class="gpboxs"> <strong>���Ż���</strong> <span class="cons">
    <ul class="ul4 uls">
      <? $recommendlist=$this->fromcache('recommendlist'); ?> 
      
<? if(is_array($recommendlist)) { foreach($recommendlist as $index => $recommend) { ?>
      <li><a href="<?=SITE_URL?>q-<?=$recommend['qid']?>.html"  title="<?=$recommend['title']?>" target="_blank"><? echo cutstr($recommend['title'],30); ?></a></li>
      
<? } } ?>
    </ul>
    </span> </span> </div>
</div> </div>
<link rel="stylesheet" href="<?=SITE_URL?>css/common/imgpopup/imgpopup.css"/>
<script src="<?=SITE_URL?>js/imgpopup.js" type="text/javascript"></script>

<script type="text/javascript">
    //�ش�����
    function mylogin(){
        answercontent.sync();
        var content=answercontent.getContentTxt();
        if(bytes(content)<=5){
            alert('�ش����ݲ�������5���֣�');
            return;
        }
        if(0==<?=$user['uid']?>){
            $.dialog({
                id:'loginDiv',
                position:'center',
                align:'left',

                width:300,
                height:100,
                title:'�ύ�ش�',
                okText:'��¼���ύ',

                fnOk:function(){
                    var username=$('#myusername').val();
                    var password=$('#mypassword').val();
                    $.ajax({
                        type: "post",
                        url: "<?=SITE_URL?>user/ajaxlogin.html",
                        data: "username="+username+"&password="+password,
                        success: function(msg){
                            if(1==msg){
                                $.dialog.close('loginDiv');document.answerForm.submit();
                            }else{
                                alert('�û������������');
                            }
                        }
                    });
                },
                content:'<p /><table cellspacing="0" cellpadding="0" width="80%" border="0" valign="top" align="center"><tr><td class="f14" valign="top" nowrap align="left" width="40%" height="35">�û��� :&nbsp;&nbsp; </td><td valign="top" width="60%" height="35"><input maxlength="20" id="myusername" class="input3" name="username"> </td></tr><tr><td class="f14" valign="top" nowrap align="left" height="35"> ��&nbsp&nbsp�� :&nbsp;&nbsp; </td><td valign="top" height="35"><input id="mypassword" type="password" class="input3" maxlength="32" name="password"></td></tr></table>'
            });
        }else{
            document.answerForm.submit();
        }
    }

    //׷������
    function addscore(){
        $.dialog({
            id:'addscoreDiv',
            position:'center',
            align:'left',

            width:300,
            height:100,
            title:'׷������',
            fnOk:function(){document.addscoreForm.submit();$.dialog.close('addscoreDiv')},
            fnCancel:function(){$.dialog.close('addscoreDiv')},
            content:'&nbsp;&nbsp;&nbsp;&nbsp;�������ڣ�׷������һ�Σ����ӳ��������Ч��3�졣<br />&nbsp;&nbsp;&nbsp;&nbsp;����һ�����͵ĲƸ�ֵ����20��ʱ�������⽫��ͬ������������⣬����������������б�����ʾΪ���¡� <div class="b4 bcg mb12"><form name="addscoreForm"  action="<?=SITE_URL?>question/addscore/<?=$question['id']?>.html" method="post" >׷������<select name="score"><option value="5" selected="selected">5</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="30">30</option><option value="40">40</option><option value="50">50</option></select>��</form></div>'
        });
    }

    //���ⲹ��
    function showsupply(){
        var displaytype = $("#mysupplydiv").css("display");
        if(displaytype == 'none'){
            $("#mysupplydiv").css("display","");
            $("#addscorediv").css("display","none");
        }else{
            $("#mysupplydiv").css("display","none"); 
        }
    }
    //���ⲹ����
    function check_mysupply(){
        mysupply.sync();
        var content = mysupply.getContentTxt();
        if($.trim(content) == ''){
            alert('���ⲹ�䲻��ֻΪͼƬ��������htmlԪ�أ���������������');
            return false;
        }
        $("form[name='supplyForm']").submit();
        
    }
    //�������
    function showaddscore(){
        var displaytype = $("#addscorediv").css("display");
        if(displaytype == 'none'){
            $("#addscorediv").css("display","");
            $("#mysupplydiv").css("display","none"); 
        }else{
            $("#addscorediv").css("display","none");   
        }
    }
    //������ͼ��
    function check_addscore(){
        $("form[name='addscoreForm']").submit();        
    }

    //�������
    function managequest(num){
        switch(num){
            case 3://�ƶ�����
                var displaytype = $("#editcategorydiv").css("display");
                if(displaytype == 'none'){
                    $("#editcategorydiv").css("display",""); 
                    $("#edittagdiv").css("display","none");                    
                }else{
                    $("#editcategorydiv").css("display","none");   
                }              
                break;
            case 4://�ر�����

                if(!confirm('ȷ���رո�����?')==false){
                    document.location.href="<?=SITE_URL?>question/close/<?=$question['id']?>.html";
                }
                break;
            case 5://�޸ı�ǩ
                var displaytype = $("#edittagdiv").css("display");
                if(displaytype == 'none'){
                    $("#editcategorydiv").css("display","none"); 
                    $("#edittagdiv").css("display","");                    
                }else{
                    $("#edittagdiv").css("display","none");   
                }                    
                break;
            case 6://ɾ������


                if(!confirm('ȷ��ɾ�����⣿�ò������ɷ��أ�')==false){



                    document.location.href="<?=SITE_URL?>question/delete/<?=$question['id']?>.html";
                }
                break;
            default:
                alert("�Ƿ�������");
                break;
        }
    }

    //�����ش�
    function adoptanswer(aid){


        $.dialog({
            id:'editanswerDiv',
            position:'center',
            align:'left',
            width:400,
            height:110,
            title:'���ɸ���',
            fnOk:function(){document.editanswerForm.submit();$.dialog.close('editanswerDiv')},
            fnCancel:function(){$.dialog.close('editanswerDiv')},
            content:'�Ըûش�ĸ��ԣ� <div><form name="editanswerForm"  action="<?=SITE_URL?>question/adopt.html" method="post" ><textarea id="mc" name="content" style="width: 99%; padding-top: 1px; font-size: 14px;" rows="4" cols="50" maxlength="100">лл���Ľ��</textarea><input type="hidden"  value="<?=$question['id']?>" name="qid"/><input type="hidden" id="ma" value="'+aid+'" name="aid"/></form></div>'
        });
    }
    //׷��ģ��--׷��
    function tagquestion(aid){
        $.dialog({
            id:'tag_ask',
            position:'center',
            align:'left',
            width:400,
            height:110,
            title:'����׷��',
            fnOk:function(){
                if($.trim($("#mc").val()) == ""){
                    alert("׷�����ݲ���Ϊ��");
                    return false;
                }
                document.tagAskForm.submit();
                $.dialog.close('tag_ask')
            },
            fnCancel:function(){$.dialog.close('tag_ask')},
            content:'׷�����ݣ� <div><form name="tagAskForm"  action="<?=SITE_URL?>question/tagask.html" method="post" ><textarea id="mc" name="tag_ask" style="width: 99%; padding-top: 1px; font-size: 14px;" rows="4" cols="300" ></textarea><input type="hidden"  value="<?=$question['id']?>" name="qid"/><input type="hidden" id="ma" value="'+aid+'" name="aid"/></form></div>'
        });
    }
    //׷��ģ��--�ش�
    function taganswer(aid){
        $.dialog({
            id:'tag_answer',
            position:'center',
            align:'left',
            width:400,
            height:110,
            title:'����׷��',
            fnOk:function(){
                if($.trim($("#mc").val()) == ""){
                    alert($("#mc").val());
                    return false;
                }
                document.tagAskForm.submit();
                $.dialog.close('tag_answer')
            },
            fnCancel:function(){$.dialog.close('tag_answer')},
            content:'�����ش�����ݣ� <div><form name="tagAskForm"  action="<?=SITE_URL?>question/tagask.html" method="post" ><textarea id="mc" name="tag_answer" style="width: 99%; padding-top: 1px; font-size: 14px;" rows="4" cols="50" maxlength="100" ></textarea><input type="hidden"  value="<?=$question['id']?>" name="qid"/><input type="hidden" id="ma" value="'+aid+'" name="aid"/></form></div>'
        });
    }

    //ɾ���ش�
    function delanswer(aid,qid){
        if(confirm("ȷ��ɾ���ûش�?")){
            document.location.href='<?=SITE_URL?>question/deleteanswer/'+aid+'/'+qid+'.html';
        }
    }
    //��˻ش�
    function verifyanswer(aid,qid){
        document.location.href='<?=SITE_URL?>question/verifyanswer/'+aid+'/'+qid+'.html';
    }
    
    function inform(name,type){
        var content = name+'�Ļش�';
        if(type==1){
            content = name+'������';
        }
        $.dialog({
            id:'informDiv',
            position:'center',
            align:'left',

            width:500,
            title:'�ٱ�',
            fnOk:function(){document.informform.submit();$.dialog.close('informDiv')},
            fnCancel:function(){$.dialog.close('informDiv')},
            content:'<form name="informform" action="<?=SITE_URL?>inform/add.html" method="POST"> <div><p><strong>�ٱ����ݣ�</strong>'+content+'</p><p><strong>�ٱ�ԭ��</strong>(�ɶ�ѡ)</p><p><input type="checkbox" name="informkind[]" value="0" />���з���������</p><p><input type="checkbox" name="informkind[]" value="1" />������������������</p><p><input type="checkbox" name="informkind[]" value="2" />���й�����ʵ�����</p><p><input type="checkbox" name="informkind[]" value="3" />�漰Υ�����������</p><p><input type="checkbox" name="informkind[]" value="4" />����Υ���������µ�����</p><p><input type="checkbox" name="informkind[]" value="5" />��ɫ�顢�������ֲ�������</p><input type="checkbox" name="informkind[]" value="5" />���ж������Ĺ�ˮ������</p></div><input type="hidden"  value="<?=$question['id']?>" name="qid"/><input type="hidden"  value="'+content+'" name="content"/><input type="hidden"  value="<?=$question['title']?>" name="title"/></from>'
        });
    }
    
    function add_comment(type,aid,uid){
        if(0==<?=$user['uid']?>){
            alert("��½֮����ܽ��иò�����");
            return false;
        }else if(<?=$user['uid']?> == uid){
            alert("���ܸ��Լ��ش�����!");
            return false;
        }
        var optionsstr = '<?=$support?>';
        if(type == 0)
            optionsstr = '<?=$against?>';
        
        $.dialog({
            id:'add_commentdiv',
            position:'center',
            align:'left',
            width:200,
            height:110,
            title:'�ش�����',
            fnOk:function(){
                if("" == $.trim($("#shortcomment").val())){
                    alert("�������ݲ���Ϊ��!");
                    return false;
                }
                document.addcommentForm.submit();
                $.dialog.close('add_commentdiv')
            },
            fnCancel:function(){$.dialog.close('add_commentdiv')},
            content:'<p /><form name="addcommentForm" id="addcommentForm" action="<?=SITE_URL?>question/answercomment.html" method="POST"><input type="hidden" name="qid" value="'+<?=$question['id']?>+'" /><input type="hidden" name="aid" value="'+aid+'" /><input type="hidden" name="touid" value="'+uid+'" /><table cellspacing="0" cellpadding="0" width="80%" border="0" valign="top" align="center"><tr><td class="f14" valign="top" nowrap align="left" width="40%" height="35">����ֵ :&nbsp;&nbsp; </td><td valign="top" width="60%" height="35">'+optionsstr+'</td></tr><tr><td class="f14" valign="top" nowrap align="left" height="35"> ��&nbsp&nbsp�� :&nbsp;&nbsp; </td><td valign="top" height="35"><textarea id="shortcomment" name="content" cols="30"  rows="3" maxlength="30"></textarea></td></tr></table></form>'
        });    
    }
    
    
    function showuserinfo(uid){
        $("#userinfo-"+uid).load("<?=SITE_URL?>?user/ajaxuserinfo/"+uid+".html");
    }
    function closeuserinfo(uid){
        $("#userinfo-"+uid).html("");
    }
    $(document).ready(function () {        
        SyntaxHighlighter.highlight();//���������ʾ
        $("legend a").fancybox({'titlePosition':'inside'});
        /*ajax imgpopup*/
        $(".wtcont p img").each(function(i){//��ȡ���⡢�ش��е�����ͼƬ��ַ
            var img = $(this);
            $.ajax({
                type: "POST",
                url: "<?=SITE_URL?>question/ajaxchkimg.html",
                async: true,
                data: "imgsrc="+img.attr("src"),
                success: function(status){
                    if('1' == status){
                        img.wrap("<a href='"+img.attr("src")+"' title='"+img.attr("title")+"' ></a>");
                        img.parent().fancybox({
                            'overlayShow'	: false,
                            'transitionIn'	: 'elastic',
                            'transitionOut'	: 'elastic',
                            'titlePosition'	: 'inside'
                        });
                    }
                }
            });
        });
    });
</script>
<? include template('footers'); ?>
</body></html>