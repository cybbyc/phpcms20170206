<?php

defined('IN_PHPCMS') or exit('No permission resources.');//
 
//	加载admin模块中的admin类
//pc_base::load_app_class('admin', 'admin', 0);

class Cyb{
	function init(){
		echo "@@@@@@@@@@@@@@@@@@";
	}
	function add(){
		echo "$$$$$$$$$$$$$$$$$$$";
		
		// 调用本模块中的类
		$demo1 = pc_base::load_app_class("myCyb");
		$demo1->a();
		
		// 调用其他模块中的类
		pc_base::load_app_class("Cyb1","link",0);
		$demo2 = new Cyb1();
		$demo2->b();
		
		// 调用模型类
		$demo3 = pc_base::load_model("cybmodel");
		$demo3->c();
		
		
		
		
	}
}