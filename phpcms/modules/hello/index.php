<?php

//	如果直接访问该文件，会报错，可以防止用户直接访问该文件
	defined('IN_PHPCMS') or exit('No permission resources.'); 
	class Index{
		function init(){
			echo "111111111111";
		}
		function de(){
			echo "2222222222222222";
		}
	}