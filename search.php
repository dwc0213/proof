<script language='javascript'>

//�˻��ϱ�
function set_search(){
	form = document.form1;
	form.type.value='';
	form.record_start.value = '';
	form.action = '<?=$PHP_SELF?>';
	form.submit();
}

//�ʱ�ȭ
function set_reset(){

	if(confirm("�ʱ�ȭ �Ͻðڽ��ϱ�?")) {
	form = document.form1;
	
	form.f_puse.selectedIndex = 0;
	form.f_name.selectedIndex = 0;
	
	/*form.f_name.value = '';*/
	
	form.record_start.value = '';
	form.target = '';
	form.action = '<?=$PHP_SELF?>';
	form.submit();
	}
}

function is_Key(){
	if(event.keyCode==13)	set_search();
}

</script>

<!-- �˻� ���̺� -->
<table cellpadding='0' cellspacing='0' border='0' width='100%' class='gTable2'>
	<tr>
		<th width="17%">����</th>
		<td>
			<select name='f_name'>
				<option value=''>::�������::</option>
			<?
				for($i=0; $i<count($arr_member); $i++){
			?>
				<option value='<?=$arr_member[$i]?>' <?if($f_name==$arr_member[$i]) echo 'selected';?>><?=$arr_member[$i]?></option>
			<?
				}
			?>
			</select>
		</td>
		<th width="17%">���뵵</th>
		<td width="33%">
			<select name='f_puse'>
				<option value=''>::���뵵::</option>
				<option value='�������' <?if($f_puse=='�������'){echo 'selected';}?>>�������</option>
				<option value='������' <?if($f_puse=='������'){echo 'selected';}?>>������</option>
				<option value='��Ÿ' <?if($f_puse=='��Ÿ'){echo 'selected';}?>>��Ÿ</option>
				<!-- <option value='�������'<? echo $f_puse =='�������' ? 'selected':''?>>�������</option>
				<option value='������'<? echo $f_puse =='������' ? 'selected':''?>>������</option>
				<option value='��Ÿ'<? echo $f_puse =='��Ÿ' ? 'selected':''?>>��Ÿ</option> -->
			</select>
		</td>
	</tr>
</table>

<table cellpadding='0' cellspacing='0' border='0' width='100%'>
	<tr>
		<td height='50' align='center'><a href="javascript:set_search();" class="small cbtn black">�˻�</a>&nbsp;<a href="javascript:set_reset();"class="small cbtn black">�ʱ�ȭ</a></td>
	</tr>
</table>