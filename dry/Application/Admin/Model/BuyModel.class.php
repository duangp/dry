<?php
namespace Admin\Model;
use Think\Model;
class BuyModel extends Model{
	protected $tablePrefix = ''; 
	protected $tableName = 'buy'; 
	
	//查询address表中所有数据  
    public function sel_all($pid,$id){  
        $arr = $this->Table('buy')->where("is_pay = 1")->select();  
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
				$member = $this->Table('member')->where('member_id = '.$v['member_id'])->find();
				// print_r($member);exit;
                $v['member_phone'] = $member['member_phone'];  
                $v['level'] = $level;  
                $data[] = $v;  
                $this->list_level($arr,$v['member_id'],$level+1,$id);  
            }  
        }  
        return $data;  
    } 
	
	 /**
	 * @Author:      HTL
	 * @Email:       Huangyuan413026@163.com
	 * @DateTime:    2016-04-22 11:25:02
	 * @Description: 获取当前分类下所有父类ID
	 * @id：子类ID
	 */
	public function get_parent_id($cid){
		global $db;
		$pids = '';
		// print_r($cid);exit;
		$buy = M("buy")->where("member_id = ".$cid." and parent_id != 0")->field("parent_id")->find();
		// print_r($parent_id);exit;
		$parent_id = $buy['parent_id'];
		// $parent_id = $db -> getOne("select parent_id from buy where member_id = '".$cid."'");
		if( $parent_id != ''){			
			$npids = $this->get_parent_id( $parent_id );
			$pids .= $parent_id;
			if(isset($npids))
				$pids .= ','.$npids;
		}
		return $pids;
	}
	
	public function set_all($pid,$id){
		$arr = $this->Table('buy')->where("is_pay = 1 and parent_id != 0")->select();  
        return $this->next_level($arr,$pid,$level=0,$id,$member_id);
	}
	
	//递归遍历数据  
    public function next_level($arr,$pid,$level=0,$id,$member_id){  
        //定义一个静态数组  
        static $data = array(); 
		// print_r($pid);
		// print_r(',');
		// print_r($id);	
		// exit;		
		// print_r($arr);exit;
        foreach($arr as $k => $v){ 
			 // print_r($v);
			 if($v['member_id'] == $pid and $v['parent_id'] != $id and $v['parent_id'] != $member_id){				
				$member = $this->Table('member')->where('member_id = '.$v['member_id'])->find();
				// print_r($member);exit;
                $v['member_phone'] = $member['member_phone'];  
                $v['level'] = $level;  
                $data[] = $v;  
				print_r($v);exit;
                $this->next_level($arr,$v['parent_id'],$level+1,$id,$v['member_id']);  
            }  
			
        }  
        return $data;  
    } 
	
}
