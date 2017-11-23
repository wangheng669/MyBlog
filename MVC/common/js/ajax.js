$(document).ready(function(){
	$('.loginmain').on('click','.register_button',function(e){//发送邮件注册
		e.preventDefault();
		$.post('admin/verification.php',{username:$('.username').val(),userpassword:$('.userpassword').val(),email:$('.email').val(),act:'reg',verify:$('.verify').val()},function(msg){
			$('.loginmain').find('span').html(msg);
		},'json');
	})
	$('#search').submit(function(e){//搜索表单提交
		e.preventDefault();
		window.location.href='index.php?controller=index&method='+'articlesearch&key='+$('.search').val();
	})
	$('.right_article').on('click','.user_article',function(event){/*文章内容点击*/
		window.location.href='index.php?controller=index&method='+'articleshow&id='+$(this).find('i').html();
	})
	$('.message').click(function (){//显示留言板
		window.location.href='index.php?controller=index&method=articlemessage';
	});
});



