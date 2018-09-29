<?php
namespace Admin\Model;
use Think\Model;
class PlateModel extends Model{
	protected $tablePrefix = ''; 
	protected $tableName = 'plate'; 
	
    protected $_validate = array(
     array('plate_name','require','板块名称不能为空'), // 在新增的时候验证name字段是否唯一=
    );
	
    //查询address表中所有数据  
    public function sel_all(){  
        $arr = $this->Table('plate')->select();  
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
                $this->list_level($arr,$v['plate_id'],$level+1);  
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
              $child[] = $this->find_level($list,$l['plate_id'],$level+1);
			  
              if(is_array($child)){  
                  $arr = array_merge($arr,$child);  
              }  
          }  
      }  
      return $arr;  
	} 
  
	public function get_categories_tree($cat_id = 0)
	{
		if ($cat_id > 0)
		{
			$parent_id = $this->Table('plate')->field('parent_id')->limit(1)->select();
			// $sql = 'SELECT parent_id FROM ' . $GLOBALS['ecs']->table('category') . " WHERE cat_id = '$cat_id'";
			// $parent_id = $GLOBALS['db']->getOne($sql);
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
		$one = $this->Table('plate')->count("parent_id = ".$parent_id);
		// $sql = 'SELECT count(*) FROM ' . $GLOBALS['ecs']->table('category') . " WHERE parent_id = '$parent_id'";
		if ($one || $parent_id == 0)
		{
			// print_r($one);exit;
			/* 获取当前分类及其子分类 */
			// $sql = 'SELECT cat_id,cat_name ,parent_id ,is_show ,sort_order, cate_img ' .
					// 'FROM ' . $GLOBALS['ecs']->table('category') .
					// "WHERE parent_id = '$parent_id' AND is_show = 1 ORDER BY sort_order ASC, cat_id ASC";

			// $res = $GLOBALS['db']->getAll($sql);
			$res = $this->Table('plate')->where("parent_id = ".$parent_id)->field('plate_id,plate_name,parent_id,sort_order')->select();
			// print_r($res);exit;
			foreach ($res AS $row)
			{
				
					$cat_arr[$row['plate_id']]['id']   = $row['plate_id'];
					$cat_arr[$row['plate_id']]['name'] = $row['plate_name'];
					$cat_arr[$row['plate_id']]['sort_order'] = $row['sort_order'];
					// $cat_arr[$row['plate_id']]['url']  = build_uri('category', array('cid' => $row['plate_id']), $row['plate_name']);
					// print_r($cat_arr);
					if (isset($row['plate_id']) != NULL)
					{
						$cat_arr[$row['plate_id']]['child'] = $this->get_child_tree($row['plate_id']);
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
		$one = $this->Table('plate')->count("parent_id = ".$tree_id);
		// $sql = 'SELECT count(*) FROM ' . $GLOBALS['ecs']->table('category') . " WHERE parent_id = '$tree_id' AND is_show = 1 ";
		if ($one || $tree_id == 0)
		{
			$res = $this->Table('plate')->where("parent_id = ".$tree_id)->field('plate_id,plate_name,parent_id,sort_order')->select();
			
			// $child_sql = 'SELECT cat_id, cat_name, parent_id, is_show, sort_order, cate_img ' .
					// 'FROM ' . $GLOBALS['ecs']->table('category') .
					// "WHERE parent_id = '$tree_id' AND is_show = 1 ORDER BY sort_order ASC, cat_id ASC";
			// $res = $GLOBALS['db']->getAll($child_sql);
			foreach ($res AS $row)
			{
				
				   $three_arr[$row['plate_id']]['id']   = $row['plate_id'];
				   $three_arr[$row['plate_id']]['name'] = $row['plate_name'];
				   $three_arr[$row['plate_id']]['sort_order'] = $row['sort_order'];
				   // $three_arr[$row['plate_id']]['url']  = build_uri('category', array('cid' => $row['plate_id']), $row['plate_name']);

				   if (isset($row['plate_id']) != NULL)
				   {
					   $three_arr[$row['plate_id']]['child'] = $this->get_child_tree($row['plate_id']);

				   }
			}
		}
		return $three_arr;
	}
  
}
