<?php
namespace Home\Model;
use Think\Model;
class GoodsModel extends Model{
	protected $tablePrefix = ''; 
	protected $tableName = 'goods'; 
	
	public function get_between($input, $start, $end) {
		$substr = substr($input, strlen($start)+strpos($input, $start),(strlen($input) - strpos($input, $end))*(-1));
		return $substr;
	}
}
