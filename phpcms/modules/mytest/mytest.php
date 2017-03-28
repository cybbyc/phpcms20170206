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
        $infos = $this->db->listinfo('','id desc',$page,15);
//      获得
        $pages = $this->db->pages;
        $big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=mytest&c=mytest&a=add\', title:\''.L('link_add').'\', width:\'700\', height:\'450\'}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', L('link_add'));
//        加载后台模板
        include $this->admin_tpl("mytest_list");
    }

    function add(){
        if(isset($_POST['dosubmit'])){
//            获得系统时间
            $_POST['mytest']['inputtime'] = SYS_TIME;
//            插入数据
            if($this->db->insert($_POST['mytest'])){
                showmessage('新闻添加成功！','?m=mytest&c=mytest&a=init','','add');
            }else{
                showmessage('新闻添加失败！',HTTP_REFERER);
            }
        }else{
            $show_validator = $show_scroll = $show_header = true;
            pc_base::load_sys_class('form', '', 0);
            include $this->admin_tpl("mytest_add");
        }
    }

    function update(){
        if(isset($_POST['dosubmit'])){
            $id = intval($_GET['id']);
//            获得系统时间
            $_POST['mytest']['updatetime'] = SYS_TIME;
//            插入数据
            if($this->db->update($_POST['mytest'],array('id'=>$id))){
                showmessage('新闻修改成功！','?m=mytest&c=mytest&a=init','','update');
            }else{
                showmessage('新闻修改失败！',HTTP_REFERER);
            }
        }else{
            $show_validator = $show_scroll = $show_header = true;
            pc_base::load_sys_class('form', '', 0);
            //解出链接内容
            $info = $this->db->get_one(array('id'=>$_GET['id']));
            extract($info);
            include $this->admin_tpl('mytest_update');
        }

    }

    function del(){
      if(isset($_GET['id']) || !empty($_POST['id'])){
            if(is_array($_POST['id'])){
                foreach($_POST['id'] as $id_arr) {
                    //批量删除新闻
                    $this->db->delete(array('id' => $id_arr));
                }
                showmessage('删除成功','?m=mytest&c=mytest&a=init');
            }else{
                $id = intval($_GET['id']);
                if($id < 1) return false;
                //删除新闻
                $result = $this->db->delete(array('id'=>$id));
                if($result){
                    showmessage('删除成功','?m=mytest&c=mytest&a=init');
                }else {
                    showmessage('删除失败','?m=mytest&c=mytest&a=init');
                }
            }
        }else{
          echo "数据错误";
          die;
      }
    }


}