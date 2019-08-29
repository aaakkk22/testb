<?php
namespace app\index\controller;
class Index 
{   
        use \traits\controller\Jump;
        public function index()
    {       
           config::set('site_name','djskah');
           dump(\think\Config::get('site_name'));
//         config::set('site_name','jdjsajd');
//         dump(\think\Config::get('site_name'));
        
        
//         $conf='app_debug';
//         $is =\think\config::has($conf);
//         if($is)
//         {
//         dump(\think\Config::get($conf));
// //         dump(Config('app_debug'));
        
//         }else{
//             return $conf.'错误';
//         }
 return 'dsdsa';
           
    }
    public function demo($name){
        
        if($name=='php')
        {
            $this->success('欢迎光临','http://www.php.cn');
        }
    }
   
}
