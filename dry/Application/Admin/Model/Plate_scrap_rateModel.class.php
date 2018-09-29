<?php
namespace Admin\Model;
use Think\Model;
class plate_scrap_rateModel extends Model{
	protected $tablePrefix = ''; 
	protected $tableName = 'plate_scrap_rate';
	
    protected $_validate = array(
     array('psr_year','require','年份不能为空'), // 在新增的时候验证name字段是否唯一=
     array('psr_mouth','require','月份不能为空'), // 在新增的时候验证name字段是否唯一=
     array('target','require','target不能为空'), // 在新增的时候验证name字段是否唯一=
     array('pos_plates','require','pos_plates不能为空'), // 在新增的时候验证name字段是否唯一=
     array('neg_plates','require','neg_plates不能为空'), // 在新增的时候验证name字段是否唯一=
    );
	

  
}
