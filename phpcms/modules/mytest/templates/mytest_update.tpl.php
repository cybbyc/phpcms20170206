<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header','admin');
?>
<script type="text/javascript">
    <!--
    $(function(){
        $.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){window.top.art.dialog({content:msg,lock:true,width:'200',height:'50'}, function(){this.close();$(obj).focus();})}});
        $("#title").formValidator({onshow:"请输入标题",onfocus:"请输入规范的标题"}).inputValidator({min:5,onerror:"标题字符个数不能小于5个"}).inputValidator({max:15,onerror:"标题字符个数不能大于15个"});
        $("#des").formValidator({onshow:"请输入内容概要",onfocus:"请输入内容概要"}).inputValidator({min:10,onerror:"概要不能小于5个字符"}).inputValidator({max:30,onerror:"概要不能多于45个字符"})
    })
    //-->
</script>

<div class="pad_10">
    <form action="?m=mytest&c=mytest&a=update&id=<?php echo $id;?>" method="post" name="myform" id="myform">
        <table cellpadding="2" cellspacing="1" class="table_form" width="100%">

            <tr>
                <th width="100">新闻标题：</th>
                <td><input type="text" name="mytest[title]" id="title"
                           size="30" class="input-text" value="<?php echo $title;?>"></td>
            </tr>

            <tr>
                <th width="100">新闻概要：</th>
                <td><input type="text" name="mytest[des]" id="des"
                           size="30" class="input-text" value="<?php echo $des;?>"></td>
            </tr>

            <tr>
                <th width="100">新闻内容：</th>
                <td><textarea name='mytest[content]' id="content"><?php echo $content;?></textarea><?php echo form::editor('content','full','mytest')?></td>
            </tr>


            <tr>
                <th></th>
                <td><input type="hidden" name="forward" value="?m=mytest&c=mytest&a=update"> <input
                        type="submit" name="dosubmit" id="dosubmit" class="dialog"
                        value="修改"></td>
            </tr>

        </table>
    </form>
</div>
</body>
</html> 