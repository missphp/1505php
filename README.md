# 1505php
格式化输出数组
//通过配置composer.json文件
    /*{
        "require":{
            "php1505/p":"dev-master"
         }
    }*/
   //更新composer
   //引入类库
       require_once './vendor/autoload.php';
       $data=['name'=>'lisi','sex'=>'man'];
      //操作
    //(new \p\P())->dd($data);
    (new \php1505\P())->d($data);
     echo 'hello world';
