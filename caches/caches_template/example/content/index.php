<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!--包含模板-->
        <?php include template("content","header"); ?>



<?php
    echo "phpcms模板支持原生态PHP写法，但不推荐使用，尽量不用";
?>



<h1>这是cyb_example模板首页</h1>
<br>
内容阿斯顿法国秦淮区内容阿斯顿法国秦淮区<br>
内容阿斯顿法国秦淮区<br>
内容阿斯顿法国秦淮区内容阿斯顿法国秦淮区内容阿斯顿法国秦淮区<br>

        <!--常量-->
<?php echo CSS_PATH;?><br>
<?php echo JS_PATH;?><br>
<?php echo IMG_PATH;?><br>

<!--变量-->
<?php echo $cyb;?><br>
<!--php 语句写法，相当于<?php....?>-->
<?php print_r($SEO)?>
<?php print_r($SEO["site_title"])?><br>
<?php $num = 10?>
<?php echo $num;?><br>
<?php echo "hahhahahahahah"?>
<!--{}可以直接调用几乎所有php函数，但尽量少用，可以使用phpcms自带的函数库-->
<?php echo strtoupper("hello,i am cyb");?>
        <!--phpcms 有自带的函数库-->


        <!--判断语句if-->
        <?php if($num < 5) { ?>
            正确<br>
        {else if $num >20}
            错误<br>
        <?php } else { ?>
            hahah
        <?php } ?>
        <br>
        <?php print_r($cyb_arr)?>
        <!--循环语句loop-->
        <?php $n=1; if(is_array($cyb_arr)) foreach($cyb_arr AS $k => $v) { ?>
            <?php echo $k;?>==========>><?php echo $v;?><br>
        <?php $n++;}unset($n); ?>

<!--pc标签，phpcms自带标签
    {pc:模块名 action="参数值" 参数名="参数值" 参数名="参数值" 参数名="参数值"}

    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

    要改变pc标签指向，可以到后台管理 --》风格--》页面--》可视化--》pc修改


-->
        <!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=34f41a2f71fbaddd09c776baa0d17b3c&action=category&catid=0\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','limit'=>'20',));}?>
            <pre>
                <?php print_r($data)?>
            </pre>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->

        <!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=05840f9eb4a3ecfa401fc40cd96e2d3b&action=lists&catid=11&order=updatetime+DESC&num=6&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'11','order'=>'updatetime DESC',)).'05840f9eb4a3ecfa401fc40cd96e2d3b');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'11','order'=>'updatetime DESC','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <pre>
                <?php print_r($data)?>
            </pre>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
       <!-- <div>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=05840f9eb4a3ecfa401fc40cd96e2d3b&action=lists&catid=11&order=updatetime+DESC&num=6&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'11','order'=>'updatetime DESC',)).'05840f9eb4a3ecfa401fc40cd96e2d3b');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'11','order'=>'updatetime DESC','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <ul>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fe1889de16bc7de13c5265789a932c5b&action=lists\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('limit'=>'20',));}?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>-->

<!--
    get标签：其他模块没法使用pc标签获取时，可以使用get标签获取数据，可以直接写sql代码

-->

<div>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=68483bb475d60b3aeb0eb638d2c5431c&sql=select+id%2Ctitle%2Curl+from+v9_news&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'select id,title,url from v9_news',)).'68483bb475d60b3aeb0eb638d2c5431c');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select id,title,url from v9_news LIMIT 10");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <!--<ul>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
            <?php $n++;}unset($n); ?>
        </ul>-->
        <?php echo print_r($data);?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>


<!--
    碎片：不成形的、零散的区块度可以当成一个碎片，设置成碎片，就可以在不成整个模块的情况下在后台修改碎片中的内容
    三步走：
        1.模板中添加碎片标签：
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=49e22415b07e573bc947d98b3a4ec4bf&pos=%E7%A2%8E%E7%89%87%E5%90%8D%E7%A7%B0\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'碎片名称',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        2. 到后台管理 --》风格--》页面--》可视化--》添加碎片

        3.到后台管理 --》内容管理 --》碎片管理设置碎片

-->
<div>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=98e911fb3ab44f68f53a6dd29c566b33&pos=logo\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'logo',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<div>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=5d0c3aa8c1d65e94fcb09fd83251ab4a&pos=header\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'header',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<div>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=2dd64172cf5f13c11853e2dfc09218ce&pos=footer\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'footer',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>


<!--包含模板-->
<?php include template("content","footer"); ?>




