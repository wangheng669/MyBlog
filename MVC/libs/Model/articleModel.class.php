<?php 
    class articleModel{
        public $table='article';
        public function count($table){//返回文章的数量
            $sql="SELECT count(*) FROM {$table}";//
            return DB::count($sql);//返回文章数量
        }
        public function articleinfo($str){//获取文章的单条信息
            if(empty($str)){
                return array();
            }
            $sql="SELECT * FROM {$this->table} WHERE {$str}";
            return DB::findOne($sql);
        }
        public function articlelist($table='article',$where=null){//获取文章列表
            if(empty($where)){
                $sql="SELECT * FROM {$table} ORDER BY id DESC ";
            }else{
                $sql="SELECT * FROM {$table} WHERE {$where} ORDER BY id DESC ";
            }
            return DB::findAll($sql);
        }
        public function articlesubmit($data){//判断用户进行插入或更新操作
            extract($data);
            if(empty($title)||empty($content)){//判断是否传入id和标题
                return 0;//表示没有输入标题和内容
            }
            $title=addslashes($title);
            $content=addslashes($content);
            $author=addslashes($author);
            $description=addslashes($description);
            $data=array('title'=>$title,'author'=>$author,'description'=>$description,'content'=>$content,'dateline'=>time());
            if(!empty($_POST['id'])){//判断是否存在id,存在即修改
                DB::update('article',$data,"id=".$_POST['id']);
                return 2;//返回修改成功
            }else{//否则则插入
                DB::insert('article',$data);
                return 1;//返回插入成功
            }
        }
        public function articledel($table,$id){//留言和文章删除共用
            $res=DB::del($table,"id={$id}");
                return $res;
        }
        public function get_article_list(){//获取前台文章列表
            $data=$this->articlelist();
            foreach ($data as $key=>$values){
                $data[$key]['dateline']=date("Y-m-d H:i:s",$data[$key]['dateline']);//将时间转义
            }
            return $data;
        }
        public function get_article_show($id){//返回前台文章单条内容
            $data=$this->articleinfo("id={$id}");
            $data['dateline']=date("Y-m-d H:i:s",$data['dateline']);//将时间转义
            return $data;
        }
        public function get_article_search($key){//返回前台文章单条内容
            $data=$this->articlelist('article',"CONCAT(`title`,`author`,`description`) LIKE '%{$key}%'");
            return $data;
        }
        public function get_article_message(){//返回前台评论列表
            $data=$this->articlelist('comments','');
            return $data;
        }
        public function insert_comments($username,$content){//将获取到的内容和昵称插入到数据库
            $date=time();//获取当前时间
            return DB::insert('comments',array('username'=>$username,'content'=>$content,'face'=>$date));
        }
    }
?>