<?php
defined('IN_ADMIN') or exit('No permission resources.');
$show_dialog = 1;
include $this->admin_tpl('header', 'admin');
?>

<div class="pad-lr-10">
    <form name="myform" id="myform" action="?m=link&c=link&a=listorder" method="post" >
        <div class="table-list">
            <table width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th width="35" align="center"><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
                    <th width="35" align="center">id</th>
                    <th width="12%" align="center">标题</th>
                    <th width="20%" align="center">描述</th>
                    <th width="10%" align="center">发表人</th>
                    <th width='11%' align="center">发表时间</th>
                    <th width="11%" align="center">更新时间</th>
                    <th width="12%" align="center">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if(is_array($infos)){
                    foreach($infos as $info){
                        ?>
                        <tr>
                            <td align="center" width="35"><input type="checkbox" name="id[]" value="<?php echo $info['id']?>"></td>
                            <td align="center" width="35"><?php echo $info['id']?></td>
                            <td align="center" width="12%"><?php echo $info['title']?></td>
                            <td align="center" width="20%"><?php echo $info['des']?></td>
                            <td align="center" width="10%"><?php echo $info['username']?></td>
                            <td align="center" width="11%"><?php echo $info['inputtime']?></td>
                            <td align="center" width="11%"><?php echo $info['updatetime']?></td>
                            <td align="center" width="12%">
                                <a href="###" onclick="edit(<?php echo $info['id']?>, '<?php echo new_addslashes(new_html_special_chars($info['title']))?>')" title="<?php echo L('edit')?>"><?php echo L('edit')?></a>
                                |
                                <a href='?m=mytest&c=mytest&a=del&id=<?php echo $info['id']?>' onClick="return confirm('<?php echo L('confirm', array('message' =>new_addslashes(new_html_special_chars($info['title']))))?>')"><?php echo L('delete')?></a>
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
                   value="<?php echo L('listorder')?>">&nbsp;&nbsp;
            <input type="submit" class="button" name="dosubmit" onClick="document.myform.action='?m=mytest&c=mytest&a=del'" value="删除已选"/></div>
        <div id="pages"><?php echo $pages?></div>
    </form>
</div>

<script type="text/javascript">
    function edit(id, name) {
        window.top.art.dialog({id:'update'}).close();
        window.top.art.dialog({title:'update '+name+' ',id:'update',iframe:'?m=mytest&c=mytest&a=update&id='+id,width:'700',height:'450'}, function(){var d = window.top.art.dialog({id:'update'}).data.iframe;var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'update'}).close()});
    }
    function checkuid() {
        var ids='';
        $("input[name='mytest[]']:checked").each(function(i, n){
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
