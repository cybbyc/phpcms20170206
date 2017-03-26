<?php

//	如果直接访问该文件，会报错，可以防止用户直接访问该文件
	defined('IN_PHPCMS') or exit('No permission resources.'); 
	class Index{
		function init(){
			
			include template("cyb","index");
		}
		function show(){
			
			include template("cyb","show");
			
		}
		
		function cyb(){
			
			// 前端加载模板 template
			include template("cyb","cyb");
		}
		
		
		
	}