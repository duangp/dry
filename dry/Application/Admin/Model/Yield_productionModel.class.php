<?php
namespace Admin\Model;
use Think\Model;
class Yield_productionModel extends Model{
	protected $tablePrefix = ''; 
	protected $tableName = 'yield_production';
	
    protected $_validate = array(
     array('yp_year','require','年份不能为空'), // 在新增的时候验证name字段是否唯一=
     array('yp_mouth','require','月份不能为空'), // 在新增的时候验证name字段是否唯一=
     array('fna','require','fna不能为空'), // 在新增的时候验证name字段是否唯一=
     array('shp','require','shp不能为空'), // 在新增的时候验证name字段是否唯一=
    );
	

  
}
