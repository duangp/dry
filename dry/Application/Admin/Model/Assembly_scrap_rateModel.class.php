<?php
namespace Admin\Model;
use Think\Model;
class assembly_scrap_rateModel extends Model{
	protected $tablePrefix = ''; 
	protected $tableName = 'assembly_scrap_rate';
	
    protected $_validate = array(
     array('asr_year','require','年份不能为空'), // 在新增的时候验证name字段是否唯一=
     array('asr_mouth','require','月份不能为空'), // 在新增的时候验证name字段是否唯一=
     array('target','require','target不能为空'), // 在新增的时候验证name字段是否唯一=
     array('actual','require','actual不能为空'), // 在新增的时候验证name字段是否唯一=
    );
	

  
}
