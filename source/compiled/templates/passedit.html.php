<?php
$GLOBALS['jieqiTset']['jieqi_blocks_module'] = 'system';
echo '
<link href="/css/nt.css" rel="stylesheet" type="text/css" />
<!--���Ĳ���-->
	<div class="homecon">
		<div class="homedh">
			<div class="hometit1">
				<ul>
					<li class="homesy"><a href="/userdetail.php" class="size14">�û�����</a></li>
					<li class="homesy2"><a target="_blank" href="/modules/article/applywriter.php"
						class="size14">��������</a></li>
				</ul>
			</div>
			<div class="cl">
			</div>
			<div>
			</div>
		</div>
		<div class="homedown">
			<!--��Ա���-->
			<div class="homeDL">
	<div class="photo">
		<div class="photo_pic">
			<div>
				<a href="touxiang.aspx">
					<img style="width: 80px; height: 80px; border: 1px solid #ccc;" id="imagesrc" src="'.jieqi_geturl('system','avatar',$this->_tpl_vars['uid'],'l',$this->_tpl_vars['avatar']).'" /></a>
			</div>
			<div class="photo_name">'.$this->_tpl_vars['uname'].'
			</div>
		</div>
	</div>
	<div class="homeleft_dh">
		<ul>
			<li class="myaccount"><a href="/userdetail.php" title="�˻�">�˻�</a></li>
			<li class="myaccount" style="background-position: 0px -705px;"><a href="/setavatar.php"
				title="ͷ��">ͷ��</a></li>
			<li class="mybookcase"><a href="/modules/article/bookcase.php" title="���">���</a></li>
			<li class="mymsg"><a href="/message.php?box=inbox" title="��Ϣ">��Ϣ</a></li>
			<li class="myfootmark"><a href="/ptopics.php?uid=self" title="���">���</a></li>
			<li class="myhelp"><a target="_blank" href="/modules/forum/" title="����">����</a></li>
			<li class="zuxiao"><a href="/logout.php" title="ע��">ע��</a></li>
		</ul>
	</div>
</div>

			<!--��Ա��߽���-->
			<div class="homeDR">
            <div class="homezhdh">
					<ul>
						<li><a href="/userdetail.php">��������</a></li><li><a href="/passedit.php">�޸�����</a></li><li><a href="/useredit.php">�޸�����</a></li>
					</ul>
				</div>
				<div class="homeDRcon">
					<div class="myinformation">
<script language="javascript" type="text/javascript">
<!--
function frmpassedit_validate(){
  if (document.frmpassedit.oldpass.value == ""){
    alert( "������ԭ���룡" );
	document.frmpassedit.oldpass.focus();
	return false;
  }
  if(document.frmpassedit.newpass.value == ""){
    alert( "�����������룡" );
	document.frmpassedit.newpass.focus();
	return false;
  }
  if (document.frmpassedit.repass.value != document.frmpassedit.newpass.value){
    alert( "�������������벻ͬ�����������룡" );
	document.frmpassedit.repass.focus();
	return false;
  }
}
//-->
</script>
<form name="frmpassedit" id="frmpassedit" action="'.$this->_tpl_vars['url_passedit'].'" method="post" onsubmit="return frmpassedit_validate();">
<table width="580" class="grid" cellspacing="1" align="center">
<caption>�û������޸�</caption>
<tr valign="middle" align="left">
  <td class="odd" width="25%">�û���</td>
  <td class="even">admin</td>
</tr>
<tr valign="middle" align="left">
  <td class="odd" width="25%">ԭ����</td>
  <td class="even"><input type="password" class="text" name="oldpass" id="oldpass" size="25" maxlength="20" value="" /></td>
</tr>
<tr valign="middle" align="left">
  <td class="odd" width="25%">������</td>
  <td class="even"><input type="password" class="text" name="newpass" id="newpass" size="25" maxlength="20" value="" /></td>
</tr>
<tr valign="middle" align="left">
  <td class="odd" width="25%">�ظ�������</td>
  <td class="even"><input type="password" class="text" name="repass" id="repass" size="25" maxlength="20" value="" /></td>
</tr>
<tr valign="middle" align="left">
  <td class="odd" width="25%">&nbsp;<input type="hidden" name="action" id="action" value="update" /></td>
  <td class="even"><input type="submit" class="button" name="submit"  id="submit" value="�� ��" /></td>
</tr>
</table>
</form>
					</div>
				</div>
			</div>
			<div class="cl">
			</div>
		</div>
	</div>
';
?>