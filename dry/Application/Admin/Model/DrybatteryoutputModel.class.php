<?php
namespace Admin\Model;
use Think\Model;
class DrybatteryoutputModel extends Model{
	protected $tablePrefix = ''; 
	protected $tableName = 'dry_battery_output';
	
    protected $_validate = array(
     array('dbo_year','require','年份不能为空'), // 在新增的时候验证name字段是否唯一=
     array('dbo_mouth','require','月份不能为空'), // 在新增的时候验证name字段是否唯一=
     array('DUF','require','DUF不能为空'), // 在新增的时候验证name字段是否唯一=
    );
	

  
}
