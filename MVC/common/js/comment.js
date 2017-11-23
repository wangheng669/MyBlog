
		$(document).ready(function(){
	//此标志用于标志是否提交，防止多次提交
	var flag=false;
	//监测是否提交
	$('.right_article').on('submit','#addCommentForm',function(e){
		//阻止表单的自动提交
 		e.preventDefault();
		if(flag) return false;
		flag = true;
		$('#submit').html('发布...');
		//通过Ajax发送数据
		$.post('../article/doAction.php',{username:$('#username').val(),content:$('#usercontent').val()},function(msg){
			flag = false;
			$('#submit').html('发布');
			if(!msg.status){
				$('.error').html('输入不合法');
				$('.error').css('color','red');
				$('.error').css('display','inline-block');
			}else{
				$('#usercontent').val('');
				$('#username').val('');
				$('.error').html('发布成功');
				$('.error').css('color','green');
				$('.error').css('display','inline-block');
				$(msg.html).insertAfter('#usermessage');
			}
		},'json');
	})
});
