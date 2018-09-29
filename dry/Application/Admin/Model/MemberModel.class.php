<?php
namespace Admin\Model;
use Think\Model;
class MemberModel extends Model{
	protected $tablePrefix = ''; 
	protected $tableName = 'member'; 
	
    protected $_validate = array(
    );
	
    //查询address表中所有数据  
    public function sel_all($pid){  
        $arr = $this->Table('member')->select(); 
        return $this->list_level($arr,$pid,$level=0);  
    }  
    //递归遍历数据  
    public function list_level($arr,$pid,$level=0){  
        //定义一个静态数组  
        static $data = array();  
        foreach($arr as $k => $v){  
            if($v['parent_id'] == $pid){  
                $v['level'] = $level;  
                $data[] = $v;  
                $this->list_level($arr,$v['member_id'],$level+1);  
            }  
        }  
        return $data;  
    } 
    public function find_level($list,$parent_id=0,$level=1){  
      foreach($list as $l){  
          if($l['parent_id']==$parent_id){  
              $l['level']=$level;  
              $arr[]=$l;  
			  // print_r($l);
              $child[] = $this->find_level($list,$l['member_id'],$level+1);
			  
              if(is_array($child)){  
                  $arr = array_merge($arr,$child);  
              }  
          }  
      }  
      return $arr;  
	} 
  
	public function get_categories_tree($cat_id = 0)
	{
		// print_r($cat_id);exit;
		if ($cat_id > 0)
		{
			$parent_id = $this->Table('member')->field('parent_id')->limit(1)->find();
			// $sql = 'SELECT parent_id FROM ' . $GLOBALS['ecs']->table('category') . " WHERE cat_id = '$cat_id'";
			// $parent_id = $parent_id['parent_id'];
			$parent_id = $cat_id;
		}
		else
		{
			$parent_id = 0;
		}
		// print_r($parent_id);exit;
		/*
		 判断当前分类中全是是否是底级分类，
		 如果是取出底级分类上级分类，
		 如果不是取当前分类及其下的子分类
		*/
		$one = $this->Table('member')->count("parent_id = ".$parent_id);
		// $sql = 'SELECT count(*) FROM ' . $GLOBALS['ecs']->table('category') . " WHERE parent_id = '$parent_id'";
		if ($one || $parent_id == 0)
		{
			// print_r($one);exit;
			// print_r($parent_id);exit;
			/* 获取当前分类及其子分类 */
			// $sql = 'SELECT cat_id,cat_name ,parent_id ,is_show ,sort_order, cate_img ' .
					// 'FROM ' . $GLOBALS['ecs']->table('category') .
					// "WHERE parent_id = '$parent_id' AND is_show = 1 ORDER BY sort_order ASC, cat_id ASC";

			// $res = $GLOBALS['db']->getAll($sql);
			$res = $this->Table('member')->where("parent_id = ".$parent_id)->field('member_id,member_phone,parent_id,is_open,member_name')->select();
			// print_r($res);exit;
			foreach ($res AS $row)
			{				
					$cat_arr[$row['member_id']]['id']   = $row['member_id'];
					$cat_arr[$row['member_id']]['member_phone'] = $row['member_phone'];
					$cat_arr[$row['member_id']]['is_open'] = $row['is_open'];
					$cat_arr[$row['member_id']]['member_name'] = $row['member_name'];
					// $cat_arr[$row['plate_id']]['url']  = build_uri('category', array('cid' => $row['plate_id']), $row['plate_name']);
					// print_r($cat_arr);exit;
					// print_r($row);exit;
					if (isset($row['member_id']) != NULL)
					{
						$cat_arr[$row['member_id']]['child'] = $this->get_child_tree($row['member_id']);
					}
				
			}
		}
		// print_r($cat_arr);exit;
		if(isset($cat_arr))
		{
			return $cat_arr;
		}
	}
	
	public function get_child_tree($tree_id = 0)
	{
		$three_arr = array();
		$one = $this->Table('member')->count("parent_id = ".$tree_id);
		// $sql = 'SELECT count(*) FROM ' . $GLOBALS['ecs']->table('category') . " WHERE parent_id = '$tree_id' AND is_show = 1 ";
		if ($one || $tree_id == 0)
		{
			$res = $this->Table('member')->where("parent_id = ".$tree_id)->field('member_id,member_phone,parent_id,is_open,member_name')->select();
			
			// $child_sql = 'SELECT cat_id, cat_name, parent_id, is_show, sort_order, cate_img ' .
					// 'FROM ' . $GLOBALS['ecs']->table('category') .
					// "WHERE parent_id = '$tree_id' AND is_show = 1 ORDER BY sort_order ASC, cat_id ASC";
			// $res = $GLOBALS['db']->getAll($child_sql);
			foreach ($res AS $row)
			{				
				   $three_arr[$row['member_id']]['id']   = $row['member_id'];
				   $three_arr[$row['member_id']]['member_phone'] = $row['member_phone'];
				   $three_arr[$row['member_id']]['is_open'] = $row['is_open'];
				   $three_arr[$row['member_id']]['member_name'] = $row['member_name'];
				   // $three_arr[$row['plate_id']]['url']  = build_uri('category', array('cid' => $row['plate_id']), $row['plate_name']);

				   if (isset($row['member_id']) != NULL)
				   {
					   $three_arr[$row['member_id']]['child'] = $this->get_child_tree($row['member_id']);

				   }
			}
		}
		return $three_arr;
	}
	
	//查询address表中所有数据  
    // public function select_all(){  
        // $arr = $this->Table('member')->select(); 
		// print_r($arr);exit;
        // return $this->getChildren($arr,$deep=0);  
    // }  
	
	public function getChildren($parent,$deep=0) {
		// print_r($parent);exit;
		foreach($parent as $row) {
			$data[] = array("id"=>$row['id'],"name"=>$row['member_name'],"phone"=>$row['member_phone'],"is_open"=>$row['is_open'],'deep'=>$deep);
			if ($row['child']) {
				$data = array_merge($data, $this->getChildren($row['child'], $deep+1));
			}
		}
		return $data;
	}
	
	public function procHtml($tree)
	{
		$html = '';
		foreach($tree as $t)
		{
		  if(empty($t['child']))
		  {
		   $html .= "<li>".$t['member_name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".
					"<div style='float:right;margin-right:20px;'><a href='level/id/{$t['id']}'>查看</a>  | <a href='form/id/{$t['id']}'>编辑</a></div></li>";
		  }
		  else
		  {		   	   
		   $html .= "<li><div class='close_menu'><span></span>".$t['member_name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".
					"<div style='float:right;margin-right:20px;'><a href='level/id/{$t['id']}'>查看</a> | <a href='form/id/{$t['id']}'>编辑</a></div></div>";
		   $html .= $this->procHtml($t['child']);
		   $html .= "";
		   $html = $html."</li>";
		  }
		}
		return $html ? '<ul>'.$html.'</ul>' : $html ;
	}
		// echo procHtml($tree);
  
}
