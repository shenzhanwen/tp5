<?php
namespace app\admin\controller;

	class Index
	{
	    //后台首页
	    public function index()
	    {
	        //view()表示访问当前模块下的view目录
	        //返回view层中选中的页面，不写.html后缀
	        return view("视图层中的HTML页面");
	    }
	}
?>
