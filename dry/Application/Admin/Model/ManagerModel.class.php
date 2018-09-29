<?php
namespace Admin\Model;
use Think\Model;
class ManagerModel extends Model{
	protected $tablePrefix = 'admin_'; 
	protected $tableName = 'users'; 
	
	//查询address表中所有数据  
    public function sel_all(){  
        $arr = $this->Table('admin_users')->select();  
		// print_r($arr);
        return $this->list_level($arr,$pid=0,$level=0);  
    }  
    //递归遍历数据  
    public function list_level($arr,$pid=0,$level=0){  
        //定义一个静态数组  
        static $data = array();
        foreach($arr as $k => $v){  
            if($v['parent_id'] == $pid){  
                $v['level'] = $level;  
                $data[] = $v;  
                $this->list_level($arr,$v['user_id'],$level+1);  
            }  
        }  
		
        return $data;  
    }
}
