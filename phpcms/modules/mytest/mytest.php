<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
class Mytest extends admin{
    function __construct() {
        parent::__construct();
        $this->db = pc_base::load_model('mytest_model');
    }

    function init(){

//        设置当前页面：
        $page = isset($_GET['page']) && intval($_GET['page']) ? intval($_GET['page']) : 1;
//        获取到数据
        $infos = $this->db->listinfo('','id desc',$page,30);
//      获得
        $pages = $this->db->pages;
        $big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=mytest&c=mytest&a=add\', title:\''.L('link_add').'\', width:\'700\', height:\'450\'}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', L('link_add'));
//        加载后台模板
        include $this->admin_tpl("mytest_list");
    }

    function add(){

        if(!empty($_POST['mytest']['title']) && !empty($_POST['mytest']['introduce'])) {
//            获取系统时间
            $_POST['mytest']['inputtime'] = SYS_TIME;
            echo "<pre>";
                print_r($_POST);
            echo "</pre>";
        }else{
            $show_validator = $show_scroll = $show_header = true;
            pc_base::load_sys_class('form', '', 0);
//        $siteid = $this->get_siteid();
//        $types = $this->db->get_types($siteid);

            include $this->admin_tpl("mytest_add");
        }

    }


}