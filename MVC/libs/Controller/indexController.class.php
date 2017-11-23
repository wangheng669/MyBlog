<?php 
	class indexController{
		function index(){//显示主页
			$articleobj=M('article');
			$data=$articleobj->get_article_list();
			View::assign(array('data'=>$data));
			View::display('index/index.html');
		}
		function articleshow(){//文章内容显示
			$articleobj=M('article');
			$data=$articleobj->get_article_show($_GET['id']);
			View::assign(array('data'=>$data));
			View::display('index/show.html');
		}
		function articlesearch(){//文章内容显示
			$articleobj=M('article');
			$data=$articleobj->get_article_search($_GET['key']);
			View::assign(array('data'=>$data));
			View::display('index/index.html');
		}
		function articlemessage(){//评论内容显示
			$articleobj=M('article');
			$data=$articleobj->get_article_message();
			View::assign(array('data'=>$data));
			View::display('index/message.html');
		}
		function postcomments(){//发布评论显示
			$username=$_POST['username'];
			$content=$_POST['content'];
			$articleobj=M('article');
			$result=$articleobj->insert_comments($username,$content);//执行插入操作
			if($result){
				$data=$articleobj->get_article_message();
				View::assign(array('data'=>$data));
				View::display('index/message.html');
			}
		}
	}
?>