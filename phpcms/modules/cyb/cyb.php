<?php

defined('IN_PHPCMS') or exit('No permission resources.');//
 
//	加载admin模块中的admin类
pc_base::load_app_class('admin', 'admin', 0);

class Cyb extends admin{
	function init(){
		
		// 模拟数据
		$infos = array(
			0 =>array("id" =>0,"name"=>"cyb","age"=>25,"sex"=>"男","job"=>"讲师"),
			1 =>array("id" =>1,"name"=>"cyb","age"=>25,"sex"=>"男","job"=>"讲师"),
			2 =>array("id" =>2,"name"=>"cyb","age"=>25,"sex"=>"男","job"=>"讲师"),
			3 =>array("id" =>3,"name"=>"cyb","age"=>25,"sex"=>"男","job"=>"讲师"),
			4 =>array("id" =>4,"name"=>"cyb","age"=>25,"sex"=>"男","job"=>"讲师"),
			5 =>array("id" =>5,"name"=>"cyb","age"=>25,"sex"=>"男","job"=>"讲师"),
		);
		
		
		
		
		// 调用后台模板
		include $this->admin_tpl('list');
		
	}
	function add(){
	
		include $this->admin_tpl("add");
	
	 }
	 function update(){
		 
		 include $this->admin_tpl("update");
	 }
	 function delete1(){
		 
		 include $this->admin_tpl("delete1");
	 }
	 
}