<?php
defined('IN_ADMIN') or exit('No permission resources.');
$show_dialog = 1;
include $this->admin_tpl('header', 'admin');

echo "这里是新增模块的后台列表list管理页面 ";


?>
<div class="pad-lr-10">
<table width="100%" cellspacing="0" class="search-form">
    <tbody>
	
		<tr>
		<td><div class="explain-col"> 
		<?php echo L('all_linktype')?>: &nbsp;&nbsp; <a href="?m=link&c=link"><?php echo L('all')?></a> &nbsp;&nbsp;
		<a href="?m=link&c=link&typeid=0">默认分类</a>&nbsp;
		<?php
	if(is_array($type_arr)){
	foreach($type_arr as $typeid => $type){
		?><a href="?m=link&c=link&typeid=<?php echo $typeid;?>"><?php echo $type;?></a>&nbsp;
		<?php }}?>
		</div>
		</td>
		</tr>
    </tbody>
</table>
<form name="myform" id="myform" action="?m=link&c=link&a=listorder" method="post" >
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th width="35" align="center"><input type="checkbox" value="" id="check_box" onclick="selectall('linkid[]');"></th>
			<th width="18%" align="center">姓名</th>
			<th width="15%" align="center">年龄</th>
			<th width='13%' align="center">性别</th>
			<th width="10%" align="center">工作</th>
			<th width="15%" align="center">操作</th>
		</tr>
	</thead>
<tbody>
<?php
if(is_array($infos)){
	foreach($infos as $info){
		?>
	<tr>
		<td align="center" width="35"><input type="checkbox" name="linkid[]" value="<?php echo $info['id']?>"></td>
		<td align="center" width="35"><?php echo $info['name']?></td>
		<td align="center" width="35"><?php echo $info['age']?></td>
		<td align="center" width="35"><?php echo $info['sex']?></td>
		<td align="center" width="35"><?php echo $info['job']?></td>
		<td align="center" width="12%">
			<a href="?m=cyb&c=cyb&a=update&linkid=<?php echo $info['id']?>"><?php echo L('edit')?>
			</a> |  
			<a
			href='?m=cyb&c=cyb&a=delete1&linkid=<?php echo $info['id']?>'
			onClick="return confirm('<?php echo L('confirm', array('message' => new_addslashes(new_html_special_chars($info['name']))))?>')"><?php echo L('delete')?></a> 
		</td>
	</tr>
	<?php
	}
}
?>
</tbody>
</table>
</div>
<div class="btn"> 
<input name="dosubmit" type="submit" class="button"
	value="<?php echo L('listorder')?>">&nbsp;&nbsp;<input type="submit" class="button" name="dosubmit" onClick="document.myform.action='?m=link&c=link&a=delete'" value="<?php echo L('delete')?>"/></div>
<div id="pages"><?php echo $pages?></div>
</form>
</div>
<script type="text/javascript">

function edit(id, name) {
	window.top.art.dialog({id:'edit'}).close();
	window.top.art.dialog({title:'<?php echo L('edit')?> '+name+' ',id:'edit',iframe:'?m=link&c=link&a=edit&linkid='+id,width:'700',height:'450'}, function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}
function checkuid() {
	var ids='';
	$("input[name='linkid[]']:checked").each(function(i, n){
		ids += $(n).val() + ',';
	});
	if(ids=='') {
		window.top.art.dialog({content:"<?php echo L('before_select_operations')?>",lock:true,width:'200',height:'50',time:1.5},function(){});
		return false;
	} else {
		myform.submit();
	}
}
//向下移动
function listorder_up(id) {
	$.get('?m=link&c=link&a=listorder_up&linkid='+id,null,function (msg) { 
	if (msg==1) { 
	//$("div [id=\'option"+id+"\']").remove(); 
		alert('<?php echo L('move_success')?>');
	} else {
	alert(msg); 
	} 
	}); 
} 
</script>
</body>
</html>
