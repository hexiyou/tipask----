<? if(!defined('IN_TIPASK')) exit('Access Denied'); include template('header'); ?>
<div class="box">
    <div class="box_left_nav font_gray" style="font-size: 12px;">�� <a href="<?=SITE_URL?>"><?=$setting['site_name']?></a> &gt; <a>�ҵĻ���</a> </div>
    <!--���� begin-->
    <div class="ps_content">
        <!--��� begin -->
        <div class="ps_contentl">
            <!--�û���Ϣ-->
            <!--��� begin -->
            <!-- ������Ϣ ��ʼ-->
            <div class="ps_box1">
                <div class="person_name"><?=$user['username']?> </div>
                <div class="user_info">
                    <div class="person_pic"><img id="headPic" src="<?=$user['avatar']?>" alt="<?=$user['username']?>" title="<?=$user['username']?>"></div>
                    <div class="user_subinfo">
                        <span><?=$user['grouptitle']?></span>
                    </div>
                </div>
                <div class="user_info">
                    <? if(2==$user['grouptype']) { ?>                    <div>
                        <? $credit1percent=round(($user['credit1']/$user['creditshigher'])*100); ?>                        <? $credit1percentleft = 100-$credit1percent-1 ?>                        ��������<img src="css/default/jindutiao_yellow.gif" alt="" style="vertical-align: middle;" width="<?=$credit1percent?>" height="7"><img src="css/default/jindutiao_white-02.gif" alt="" style="vertical-align: middle;" width="<?=$credit1percentleft?>" height="7"><img src="css/default/jindutiao_end.gif" alt="" style="vertical-align: middle;" width="1" height="7"><span class="font_gray">(<?=$user['credit1']?>/<?=$user['creditshigher']?>)</span>
                    </div>
                    <? } ?>                </div>
            </div>
            <!-- ������Ϣ ����-->
            <div class="nav_bar">
                <dl>
                    <dd class="nav_link" id="myscore"><a href="<?=SITE_URL?>?user/score.html">�ҵĻ���</a></dd>
                    <dd class="nav_link" id="myask"><a href="<?=SITE_URL?>?user/profile.html">��������</a></dd>
                    <dd  class="nav_link" id="myask"><a href="<?=SITE_URL?>?user/ask.html">�ҵ�����</a></dd>
                    <dd class="hover" id="myanswer"><a href="<?=SITE_URL?>?user/answer.html">�ҵĻش�</a></dd>
                    <dd class="nav_link" id="myanswer"><a href="<?=SITE_URL?>?user/favorite.html">�ҵ��ղ�</a></dd>
                    <dd class="nav_link" id="mymsg"><a href="<?=SITE_URL?>?message/new.html">�ҵ���Ϣ</a></dd>
                </dl>
            </div>
            <!--��� end -->
            <!--�������-->
            <div id="newMessage" class="user_info" ></div>
            <!--�������--></div>
        <!--��� end -->

        <!--�ұ� begin -->
        <!-- ���� �ش�-->
        <div class="ps_contentr">
            <div class="column">
                <div class="column_title2">
                    <ul>
                        <li class="tab_hover"><a>ȫ���Ļش�</a></li>
                    </ul>
                </div>
            </div>
            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <tbody>
                    <tr>
                        <td class="zxy_title" align="left" valign="middle" width="400" height="38">���⣨��<?=$answersize?>����</td>
                        <td class="zxy_title" align="center" valign="middle" width="80" height="38">�����ɴ�</td>
                        <td class="zxy_title" align="center" valign="middle" width="140" height="38">�ش�ʱ��</td>
                    </tr>
                    <tr>
                        <td height="37" align="center" valign="middle" colspan="5">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tbody>
                                    
<? if(is_array($answerlist)) { foreach($answerlist as $answer) { ?>
                                    <tr>
                                        <td height="38" align="left" width="400" valign="middle" class="zxy_biaoge_txt">
                                            <div class="tiw_blue_kuai">
                                                <span class="tiw_blue"><a title="<?=$answer['title']?>" target="_blank" href="<?=SITE_URL?>q-<?=$answer['qid']?>.html"><?=$answer['title']?></a></span>
                                            </div>
                                        </td>
                                        <td class="zxy_biaoge_txt f14 black" align="center" valign="middle" width="80" height="34"><? if($answer['adopttime']) { ?><font color="red">��</font><? } else { ?><font color="green">��</font><? } ?>&nbsp;</td>
                                        <td class="zxy_biaoge_txt f14 black" align="center" valign="middle" width="130" height="34"><?=$answer['time']?></td>
                                    </tr>
                                    
<? } } ?>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr class="font_gray">
                        <td height="20" align="right" valign="middle" colspan="5" class="f12"><div id="ask_page" style="padding: 5px 0pt;"><span id="pg_right"><?=$departstr?></span></div></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--���� end-->
        <div class="clear">
        </div>
    </div>
</div>
<? include template('footer'); ?>