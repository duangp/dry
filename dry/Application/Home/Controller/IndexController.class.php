<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		// print_r($_GET);exit;
		// $Images = D("Images"); // 实例化User对象
		$this->redirect('Goods/index');
		// $this->display();
	}
}