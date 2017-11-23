<?php 
	session_start();//通过session_start开启SESSION用于保存验证码
	//phpinfo();//检测是否开启GD库
	$image=imagecreatetruecolor(100,52);//创建画布
	$bgcolor=imagecolorallocate($image,255,255,255);//添加颜色
	imagefill($image, 0,0,$bgcolor);//把颜色覆盖到画布上
	$string='abcdefghigklmnopqrstuvwxyz0123456789';//定义随机字符串
	$str='';
	for($i=0;$i<4;$i++){
	    $fontfile='font/msyh.ttc';
	    $color=imagecolorallocate($image,mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
	    $x=($i*100/4)+mt_rand(5,10);
	    $y=mt_rand(25,35);
	    $size=20;
	    $angle=mt_rand(0,15);
	    $text=substr($string,mt_rand(0,strlen($string)-1),1);
	    $str.=$text;
	    imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);
	}//生成四个随机数字
	$_SESSION['str']=$str;
	for($i=0;$i<200;$i++){
	    $x=mt_rand(1,99);
	    $y=mt_rand(1,49);
	    $color=imagecolorallocate($image,mt_rand(120,255),mt_rand(120,255),mt_rand(120,255));
	    imagesetpixel($image, $x, $y, $color);
	}
	//生成200个随机点
	for($i=0;$i<4;$i++){
	    $color=imagecolorallocate($image,mt_rand(120,255),mt_rand(120,255),mt_rand(120,255));
	    imageline($image, 0, mt_rand(0,50), 100, mt_rand(0,50), $color);
	}
	//生成5条随机线
	imagepng($image);//生成图像
	header("content-type:image/png");//声明颜色的信息
	imagedestroy($image)//销毁图像
?>