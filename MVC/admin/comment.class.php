<?php 
class regexTool{
	private $validate=array(
		'require'=>'/.+/',//不为空
		'email'=>'/^\w+(\.\w+)?@\w+\.\w+$/',//邮箱
		'url'=>'/(https:\/\/|http:\/\/)?(www\.)?\w+\.[A-Za-z]+(\.[A-Za-z]+)/',//网站
		'currency'=>'/^\d+(\.\d+)?$/',//货币
		'number'=>'/\d+$/',//数字
		'zip'=>'/^\w+(\.zip)$/',//压缩文件
		'integer'=>'/^[-\+]?\d+$/',//整数
		'double'=>'/^[-\+]?\d+\.\d{2}$/',//两位小数
		'english'=>'/^[A-Za-z]+$/',//英文
		'qq'=>'/^\d{5,11}$/',//QQ号码
		'mobile'=>'/^1(3|4|5|7|8)\d{9}$/',//手机
		'engnum'=>'/(^\w\d){5,10}/'//数字加英文
	);//定义一些常用规则
	//定义返回结果类型 为真返回数组,为假返回布尔值
	private $returnMatchResult=false;
	//保存修正模式
	private $fixMode=null;
	//保存返回数组
	private $matches=array();
	//保存返回布尔
	private $isMatch=false;
	//定义构造函数用于声明开始时返回结果的类型以及修正模式
	public function __construct($returnMatchResult=false,$fixMode=null){
		$this->returnMatchResult=$returnMatchResult;//将用户传输入的值赋给类中变量
		$this->fixMode=$fixMode;//将用户传输入的值赋给类中变量
		//var_dump($this->fixMode);//测试方法是否存在问题
	}
	//定义正则表达式检测方法
	private function regex($pattern,$subject){
		if(array_key_exists(strtolower($pattern),$this->validate)){//检查用户传入参数是否在内置规则中存在
			$pattern = $this->validate[$pattern].$this->fixMode;//为真则将用户的规则加入修正模式重新赋值
			if($this->returnMatchResult==true){//如果返回类型为真则返回数组
				preg_match_all($pattern,$subject,$this->matches);
			}else{//否则返回1
				$this->isMatch=preg_match($pattern,$subject)===1;
			}
		}
		return $this->getRegexResult();//返回结果经函数判断返回数组或1
	}
	//返回类型判断
	private function getRegexResult() {
		if($this->returnMatchResult) {
			return $this->matches;
		} else {
			return $this->isMatch;
		}
	}
	//用于切换返回类型
	public function toggleReturnType($bool = null) {
		if(!empty($bool)) {
			$this->returnMatchResult = !$this->returnMatchResult;
		} else {
			$this->returnMatchResult = is_bool($bool) ? $bool : (bool)$bool;
		}
	}
	//设置修正模式
	public function setFixMode($fixMode){
		$this->fixMode=$fixMode;
	}
	//正则接口
	public function setregex($pattern,$str){
		return $this->regex($pattern,$str); 
	}
}

?>
