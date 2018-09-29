<?php
namespace Home\Model;
use Think\Model;
class MemberModel extends Model{
	protected $tablePrefix = ''; 
	protected $tableName = 'Member'; 
	
	//查询address表中所有数据  
    public function sel_all($pid,$id){  
        $arr = M('Member')->select();  
        return $this->list_level($arr,$pid,$level=0,$id);  
    }  
    //递归遍历数据  
    public function list_level($arr,$pid,$level=0,$id){  
        //定义一个静态数组  
        static $data = array(); 
		// print_r($pid);
		// print_r(',');		
        foreach($arr as $k => $v){ 
			if($v['parent_id'] == $pid and $v['member_id'] != $id and $v['member_id'] != $v['parent_id']){				
				$member = M('Member')->where("'member_id = ".$v['member_id']."'")->find();
				// print_r($member);exit;
                $v['member_phone'] = $member['member_phone'];  
                $v['level'] = $level;  
                $data[] = $v;  
                $this->list_level($arr,$v['member_id'],$level+1,$id);  
            }  
        }  
        return $data;  
    } 
}
