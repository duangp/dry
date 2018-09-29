<?php
namespace Admin\Model;
use Think\Model;
class Plate_yieldModel extends Model{
	protected $tablePrefix = ''; 
	protected $tableName = 'plate_yield';
	
    protected $_validate = array(
     array('py_year','require','年份不能为空'), // 在新增的时候验证name字段是否唯一=
     array('py_mouth','require','月份不能为空'), // 在新增的时候验证name字段是否唯一=
     array('pos_plates','require','pos_plates不能为空'), // 在新增的时候验证name字段是否唯一=
     array('neg_plates','require','neg_plates不能为空'), // 在新增的时候验证name字段是否唯一=
    );
	

  
}
