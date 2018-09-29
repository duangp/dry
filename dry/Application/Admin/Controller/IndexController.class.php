<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$session = session('username');
		if(!empty($session)){
			$company = M('user')->find();
			// print_r($company);exit;
			$this->assign('company',$company);			
			$this->display();
		}else{
			$this->redirect('Login/index');
		}
        
    }
	
	public function destroy(){
		session('[destroy]'); // 销毁session
		$this->success('成功退出！','index');
	}
}