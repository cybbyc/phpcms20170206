<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header','admin');
?>
<script type="text/javascript">
    <!--
    $(function(){
        $.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){window.top.art.dialog({content:msg,lock:true,width:'200',height:'50'}, function(){this.close();$(obj).focus();})}});
        $("#link_name").formValidator({onshow:"请输入标题",onfocus:"请输入标题"}).inputValidator({min:1,onerror:"请输入标题"});
        $("#introduce").formValidator({onshow:"请输入内容",onfocus:"请输入内容"}).inputValidator({min:1,onerror:"请输入内容"})

    })
    //-->
</script>

<div class="pad_10">
    <form action="?m=mytest&c=mytest&a=add" method="post" name="myform" id="myform">
        <table cellpadding="2" cellspacing="1" class="table_form" width="100%">

            <tr>
                <th width="20%"></th>
                <td></td>
            </tr>

            <tr>

            </tr>

            <tr>
                <th width="100">标题：</th>
                <td><input type="text" name="mytest[title]" id="link_name"
                           size="30" class="input-text"></td>
            </tr>

            <tr>
                <th width="100">描述：</th>
                <td><input type="text" name="mytest[des]" id="link_url"
                           size="30" class="input-text"></td>
            </tr>

            <tr>
                <th>内容：</th>
                <td><textarea name="mytest[introduce]" id="introduce" cols="50"
                              rows="6"></textarea></td>
            </tr>


            <tr>
                <th></th>
                <td>
                    <input type="hidden" name="forward" value="?m=mytest&c=mytest&a=add">
                    <input type="submit" name="dosubmit" id="dosubmit" class="dialog" value="提交"></td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="提交">
                </td>
            </tr>

        </table>
    </form>
</div>
</body>
</html> 